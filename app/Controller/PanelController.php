<?php

/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 026 26.12.2016
 * Time: 3:11
 */
App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
App::uses('CakeEmail', 'Network/Email');
App::uses('File', 'Utility');
AuthComponent::$sessionKey = 'Auth.Panel';

class PanelController extends AppController
{
    public $uses = array('Admin', 'Panel', 'Plan', 'Payment');

    public $sum = 0;
    public $seq = 0;
    public $results = array();

    public $components = array('Email', 'Session', 'Paginator', 'RequestHandler', 'Hybridauth',
        'Auth' => array(
            'authenticate'   => array(
                'Form' => array(
                    'userModel' => 'Panel',
                    'fields'    => array(
                        'username' => 'email',
                        'password' => 'password',
                        //                    'role' => 'role'
                    )
                )
            ),
            'loginRedirect'  => array('controller' => 'panel', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'panel', 'action' => 'login'),
            'loginAction'    => array('controller' => 'panel', 'action' => 'login'))
    );

    public $helpers = array('Html', 'Form', 'Time', 'Session', 'Paginator',
        'Wysiwyg.Wysiwyg' => array('editor' => 'Ck')
        //        'Froala.Froala'
    );

    public function beforeFilter()
    {
        $this->set('title_for_layout', 'Control panel');
        parent::beforeFilter();
        $this->Auth->allow('login', 'reset_password', 'new_password', 'register');

    }

    public function isAuthorized($admin)
    {
        // Here is where we should verify the role and give access based on role
        return true;
    }

    public function login()
    {
        //if already logged-in, redirect
        if ($this->Session->check('Auth.Panel')) {
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->referer());
                //                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Wrong login or password', 'error_message'));
            }
        }
    }

    public function index()
    {
        $this->loadModel('Property');
        $this->loadModel('Newsletter');
        $this->loadModel('Admin');

        //        $properties = $this->Property->find('all', array('fields' => array('date', 'date'), 'order' => array('id' => 'desc')));
        //        $count = array_count_values($properties);
        //        var_dump($count);

        //        $this->set('users', $this->Admin->find('count', array('conditions' => array('created' => date('Y-m-d')))));
        //        $this->set('newsletters', $this->Admin->find('count', array('conditions' => array('created' => date('Y-m-d')))));

        $properties = $this->Property->query("SELECT COUNT(*) as count, DATE_FORMAT(properties.first_published_date,'%d/%m/%Y') AS date FROM properties WHERE DATE(first_published_date) >= DATE(NOW() - INTERVAL 1 MONTH) GROUP BY date ORDER BY date DESC");
        $users = $this->Admin->query("SELECT DATE_FORMAT(admins.created,'%d/%m/%Y') AS date, COUNT(*) as count FROM admins WHERE created >= DATE(NOW() - INTERVAL 1 MONTH) GROUP BY date ORDER BY date DESC");
        $newsletters = $this->Newsletter->query("SELECT COUNT(*) as count, DATE_FORMAT(newsletters.date,'%d/%m/%Y') AS created FROM newsletters WHERE DATE(date) >= DATE(NOW() - INTERVAL 1 MONTH) GROUP BY created ORDER BY date ASC");
        $this->set('properties', $properties);
        $this->set('users', $users);
        $this->set('newsletters', $newsletters);

        $this->set('count_properties', $this->Property->find('count'));
        $this->set('count_newsletters', $this->Newsletter->find('count'));
        $this->set('count_users', $this->Admin->find('count'));
        $this->set('count_views', $this->Property->query("SELECT SUM(views) AS count FROM properties"));
//        $this->monte();

        //        $a = array(7,2,3,10, 2, 4, 8, 1);
        //                $n = $a[0];
        //
        //    $sum = 0;
        //
        //    for($i = 1; $i <= $n; $i++ ) {
        //        $curr = $a[$i];
        //
        //        for ($k = 1; $k < $i; $k++){
        //
        //            if (($curr-$a[$k]) > $sum) {
        //                $sum = $curr-$a[$k];
        //                echo $curr-$a[$k];
        //            }
        //        }
        //    }
        //        if ($sum === 0) {
        //            $sum = -1;
        //        }

        //    var_dump($sum);
    }

//    public function monte()
//    {
//        if ($this->sum < 604) {
//
//            for ($i = 1; $i <= 6; $i++){
//                $this->sum += $i;
//                $this->seq .= $i;
//            if ($this->sum == 604) {
//                $results[$this->seq] = $this->sum;
//                echo $this->sum;
//                $this->sum = 0;
//            } else {
//                $this->monte();
//            }
//            }
//        } else if ($this->sum === 604) {
//            $this->results[$this->seq] = $this->sum;
//            echo $this->sum .' ';
//        }
////        }
//
//        var_dump($this->results);
//    }

    public function get_properties()
    {

    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        $this->set('title_for_layout', 'Register');
        if ($this->request->is('post')) {
            $this->Panel->create();
            if ($this->Panel->save($this->request->data)) {
                $this->Auth->login($this->data);
                $this->redirect(array('action' => 'properties'));
            }
        }
    }

    public function reset_password()
    {
        if ($this->request->is('post')) {
            $data = $this->Panel->findByEmail($this->request->data['Panel']['email']);
            if (!$data) {
                $this->Session->setFlash(__('Wrong email address'), 'error_message');
            } else {
                $key = $this->generateRandomString(15);
                $this->Panel->id = $data['Panel']['id'];
                if ($this->Panel->saveField('reset_key', $key)) {
                    $hash = Security::hash($data['Panel']['email'], 'md5', true);
                    $Email = new CakeEmail();
                    $Email->template('reset_password');
                    $Email->emailFormat('html');
                    $Email->viewVars(array('key' => $key, 'email' => $data['Panel']['email'], 'hash' => $hash));
                    $Email->from("info@gosearchproperty.co.uk");
                    $Email->to($data['Panel']['email']);
                    $Email->subject('Reset password to control panel ' . Configure::read('APPNAME'));
                    if ($Email->send()) {
                        $this->Session->setFlash(__('Email with further instructions was sent to your email'), 'success_message');
                    } else {
                        $this->Session->setFlash(__('Error. Try again later'), 'error_message');

                    }
                }
            }
            //            $this->redirect('profile');
        }
    }

    public function generateRandomString($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function new_password($email, $key)
    {
        $admin = $this->Panel->findByEmail($email);
        if ($admin['Panel']['reset_key'] == $key) {
            if ($this->request->is('post') OR $this->request->is('put')) {
                $password = $this->request->data['Panel']['password'];
                unset($this->request->data['Panel']['password']);
                $this->Panel->id = $admin['Panel']['id'];
                if ($this->Panel->saveField('password', $password)) {
                    $this->Session->setFlash(__('Password successfully changed'), 'success_message');
                    $this->redirect(array('controller' => 'admin', 'action' => 'login'));
                } else {
                    $this->Session->setFlash(__('Error. Try again later'), 'error_message');
                }
            } else {
                $this->Session->setFlash(__('Error. Password was not saved'), 'error_message');
            }
        } else {
            $this->Session->setFlash(__('Error. Click the link in email again'), 'error_message');
        }
    }

    public function articles()
    {
        $this->loadModel('Article');
        $limit = 10;

        $this->Article->recursive = 0;
        $this->Paginator->settings = array(
            'limit' => $limit,
            'order' => array('title' => 'asc'),
            //            'conditions' => array($conditions)
        );
        $this->set('articles', $this->Paginator->paginate('Article'));
        $this->set('limit', $limit);

        //        $this->set('articles', $this->Article->find('all'));
    }

    public function add_article()
    {
        $this->loadModel('Article');
        if ($this->request->is('post') OR $this->request->is('put')) {
            if ($this->Article->save($this->request->data)) {
                $this->redirect(array('action' => 'articles'));
                $this->Session->setFlash(__('Article saved!'), 'success_message');
            } else {
                $this->redirect(array('action' => 'articles'));
                $this->Session->setFlash(__('Error during saving'), 'error_message');
            }
        }

    }

    public function edit_article($id = Null)
    {
        $this->loadModel('Article');

        if (!$id) {
            $this->redirect(array('action' => 'articles'));
            $this->Session->setFlash(__('Error during saving'), 'error_message');
        }
        $article = $this->Article->findById($id);
        if (empty($article)) {
            $this->redirect(array('action' => 'articles'));
            $this->Session->setFlash(__('Id error'), 'error_message');
        }

        if ($this->request->is('post') OR $this->request->is('put')) {
            $this->Article->id = $id;

            if ($this->Article->save($this->request->data)) {
                $this->redirect(array('action' => 'articles'));
                $this->Session->setFlash(__('Article saved'), 'success_message');
            } else {
                $this->redirect(array('action' => 'articles'));
                $this->Session->setFlash(__('Error during saving'), 'error_message');
            }
        }
        if (!$this->request->data) {
            $this->request->data = $article;
        }
        $this->set('article', $article);
    }

    public function delete_article($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->loadModel('Article');

        if (!$id) {
            $this->redirect(array('action' => 'articles'));
            $this->Session->setFlash(__('Id error'), 'error_message');
        }
        $article = $this->Article->findById($id);
        if (empty($article)) {
            $this->redirect($this->referer());
            $this->Session->setFlash(__('article error'), 'error_message');
        }

        if ($this->Article->delete($id)) {
            $this->Session->setFlash(__('Article deleted'), 'success_message');
        } else {
            $this->Session->setFlash(__('Error during deletion'), 'error_message');
        }
        return $this->redirect(array('action' => 'articles'));
    }

    public function blog()
    {
        $this->loadModel('Blog');
        $limit = 10;

        $this->Blog->recursive = 0;
        $this->Paginator->settings = array(
            'limit' => $limit,
            'order' => array('id' => 'desc'),
            //            'conditions' => array($conditions)
        );
        $this->set('articles', $this->Paginator->paginate('Blog'));
        $this->set('limit', $limit);
    }

    public function add_blog()
    {
        $this->loadModel('Blog');
        if ($this->request->is('post') OR $this->request->is('put')) {
            if ($this->Blog->save($this->request->data)) {
                $this->redirect(array('action' => 'blog'));
                $this->Session->setFlash(__('Blog record saved'), 'success_message');
            } else {
                $this->redirect(array('action' => 'blog'));
                $this->Session->setFlash(__('Error during saving'), 'error_message');
            }
        }

    }

    public function edit_blog($id = Null)
    {
        $this->loadModel('Blog');

        if (!$id) {
            $this->redirect(array('action' => 'blog'));
            $this->Session->setFlash(__('Id error'), 'error_message');
        }
        $article = $this->Blog->findById($id);
        if (empty($article)) {
            $this->redirect(array('action' => 'blog'));
            $this->Session->setFlash(__('Blog record error'), 'error_message');
        }

        if ($this->request->is('post') OR $this->request->is('put')) {
            $this->Blog->id = $id;

            if ($this->Blog->save($this->request->data)) {
                $this->redirect(array('action' => 'blog'));
                $this->Session->setFlash(__('Blog record saved'), 'success_message');
            } else {
                $this->redirect(array('action' => 'blog'));
                $this->Session->setFlash(__('Error during saving'), 'error_message');
            }
        }
        if (!$this->request->data) {
            $this->request->data = $article;
        }
        $this->set('article', $article);
    }

    public function delete_blog($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->loadModel('Blog');

        if (!$id) {
            $this->redirect(array('action' => 'blog'));
            $this->Session->setFlash(__('Id error'), 'error_message');
        }
        $article = $this->Blog->findById($id);
        if (empty($article)) {
            $this->redirect($this->referer());
            $this->Session->setFlash(__('Blog record error'), 'error_message');
        }

        if ($this->Blog->delete($id)) {
            $this->Session->setFlash(__('Blog record deleted'), 'success_message');
        } else {
            $this->Session->setFlash(__('Error during blog record deletion'), 'error_message');
        }
        return $this->redirect(array('action' => 'blog'));
    }

    public function subscribe()
    {
        $this->loadModel('Newsletter');
        $limit = 10;

        $this->Newsletter->recursive = 0;
        $this->Paginator->settings = array(
            'limit' => $limit,
            'order' => array('id' => 'desc'),
            //            'conditions' => array($conditions)
        );
        $this->set('emails', $this->Paginator->paginate('Newsletter'));
        $this->set('limit', $limit);
    }

    public function save_subscribers_to_csv()
    {
        $this->autoRender = false;
        $this->layout = null;

        $this->loadModel('Newsletter');

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=emails.csv');
        header('Pragma: no-cache');
        header('Expires: 0');

        $output = fopen('php://output', 'w');

        fputcsv($output, array('Email'));

        $rows = $this->Newsletter->find('all', array('order' => array('id' => 'desc'), 'fields' => array('email')));

        foreach ($rows as $row) {
            fputcsv($output, $row['Newsletter']);
        }

        exit();
    }

    public function delete_subscribe($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->loadModel('Newsletter');

        if (!$id) {
            $this->redirect(array('action' => 'subscribe'));
            $this->Session->setFlash(__('Id error'), 'error_message');
        }
        $article = $this->Newsletter->findById($id);
        if (empty($article)) {
            $this->redirect($this->referer());
            $this->Session->setFlash(__('Email error'), 'error_message');
        }

        if ($this->Newsletter->delete($id)) {
            $this->Session->setFlash(__('Email deleted'), 'success_message');
        } else {
            $this->Session->setFlash(__('Error during email deletion'), 'error_message');
        }
        return $this->redirect(array('action' => 'subscribe'));

    }

    public function properties()
    {
        $this->loadModel('Property');
        $limit = 10;

        $conditions = array();
        if (($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])) {
            $filter_url['controller'] = $this->request->params['controller'];
            $filter_url['action'] = $this->request->params['action'];
            $filter_url['page'] = 1;
            foreach ($this->data['Filter'] as $name => $value) {
                if ($value) {
                    $filter_url[$name] = ($value);
                }
            }
            return $this->redirect($filter_url);
        } else {
            foreach ($this->params['named'] as $param_name => $value) {
                if (!in_array($param_name, array('page', 'sort', 'direction', 'limit'))) {
                    $conditions['OR'] = array(
                        array('price LIKE' => '%' . rawurldecode($value) . '%'),
                        array('id LIKE' => '%' . $value . '%'),
                        array('listing_status LIKE' => '%' . $value . '%'),
                    );
                    $this->request->data['Filter'][$param_name] = $value;
                }
            }
        }

        $conditions = array();
        if (isset($this->request->data['Filter']['price'])) {
            array_push($conditions, array(
                'price' => $this->request->data['Filter']['price'],
            ));
        }
        if (isset($this->request->data['Filter']['county'])) {
            array_push($conditions, array(
                'county LIKE' => '%' . $this->request->data['Filter']['county'] . '%',
            ));
        }
        if (isset($this->request->data['Filter']['id'])) {
            array_push($conditions, array(
                'id LIKE' => '%' . $this->request->data['Filter']['id'] . '%',
            ));
        }
        if (isset($this->request->data['Filter']['num_bedrooms'])) {
            array_push($conditions, array(
                'num_bedrooms' => $this->request->data['Filter']['num_bedrooms'],
            ));
        }
        if (isset($this->request->data['Filter']['num_bathrooms'])) {
            array_push($conditions, array(
                'num_bathrooms' => $this->request->data['Filter']['num_bathrooms'],
            ));
        }
        if (isset($this->request->data['Filter']['listing_status'])) {
            array_push($conditions, array(
                'listing_status' => $this->request->data['Filter']['listing_status'],
            ));
        }

        $this->Property->recursive = 0;
        $this->Paginator->settings = array(
            'limit'      => $limit,
            'order'      => array(
                'id' => 'desc'
            ),
            'conditions' => array($conditions)
        );
        $this->set('properties', $this->Paginator->paginate('Property'));
        $this->set('limit', $limit);
    }

    public function edit_property($id = Null)
    {
        $this->loadModel('Property');

        if (!$id) {
            $this->redirect(array('action' => 'properties'));
            //            $this->Session->setFlash(__('Id error'), 'error_message');
        }
        $property = $this->Property->findById($id);
        if (empty($property)) {
            $this->redirect(array('action' => 'properties'));
            //            $this->Session->setFlash(__('Blog record error'), 'error_message');
        }

        if ($this->request->is('post') OR $this->request->is('put')) {
            $this->Property->id = $id;

            if ($this->Property->save($this->request->data)) {
                $this->redirect(array('action' => 'properties'));
                //                $this->Session->setFlash(__('Blog record saved'), 'success_message');
            } else {
                $this->redirect(array('action' => 'properties'));
                //                $this->Session->setFlash(__('Error during saving'), 'error_message');
            }
        }
        if (!$this->request->data) {
            $this->request->data = $property;
        }
        $this->set('property', $property);
    }

    public function delete_property($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        $this->loadModel('Property');

        if (!$id) {
            $this->redirect(array('action' => 'properties'));
            //            $this->Session->setFlash(__('Id error'), 'error_message');
        }
        $article = $this->Property->findById($id);
        if (empty($article)) {
            $this->redirect($this->referer());
            //            $this->Session->setFlash(__('Blog record error'), 'error_message');
        }

        if ($this->Property->delete($id)) {
            //            $this->Session->setFlash(__('Blog record deleted'), 'success_message');
        } else {
            //            $this->Session->setFlash(__('Error during blog record deletion'), 'error_message');
        }
        return $this->redirect(array('action' => 'properties'));
    }


}