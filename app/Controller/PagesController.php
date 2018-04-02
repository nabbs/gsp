<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
App::uses('Xml', 'Utility');

class PagesController extends AppController
{
    public $components = array('RequestHandler', 'Paginator', 'Email', 'Session',
        //        'Auth' => array(
        //            'authenticate'   => array(
        //                'Form' => array(
        //                    'userModel' => 'Admin',
        //                    'fields'    => array(
        //                        'username' => 'email',
        //                        'password' => 'password',
        //                        //                    'role' => 'role'
        //                    )
        //                )
        //            ),
        //            'loginRedirect'  => array('controller' => 'admin', 'action' => 'index'),
        //            'logoutRedirect' => array('controller' => 'pages', 'action' => 'home'),
        //            'loginAction'    => array('controller' => 'admin', 'action' => 'login'))
    );
    public $helpers = array('Html', 'Session', 'Time', 'Form', 'Paginator'
        //        'GoogleCharts.GoogleCharts'
    );

    public function home()
    {
        $this->set('title_for_layout', 'GoSearchProperty - Find your dream home!');
        $this->loadModel('Property');
        $this->loadModel('Blog');

        $first_blog_ids = $this->Blog->find('list', array('limit' => 2, 'fields' => array('id', 'id'), 'order' => array('id' => 'desc')));
        $first_blog_records = $this->Blog->find('all', array('conditions' => array('id' => $first_blog_ids)));

        $second_blog_records = $this->Blog->find('all', array('conditions' => array('id !=' => $first_blog_ids), 'order' => array('id' => 'desc'), 'limit' => 2));
        $this->set('first_blog_records', $first_blog_records);
        $this->set('second_blog_records', $second_blog_records);

        $blog_records = $this->Blog->find('all', array('order' => array('id' => 'desc'), 'limit' => 3));
        $this->set('blog_records', $blog_records);

        $properties = $this->Property->find('all', array('order' => array('id' => 'desc'), 'limit' => 6));
        $this->set('properties', $properties);


        include($_SERVER['DOCUMENT_ROOT'] . '/app/Vendor/Requests/Requests.php');
        Requests::register_autoloader();
        //
        ini_set('max_execution_time', 10000000000);
        ini_set('memory_limit', 100000000000000);

        $this->loadModel('Count');
        //        $HttpSocket = new HttpSocket();
        //        $init = $HttpSocket->get('https://api.zoopla.co.uk/api/v1/property_listings.json?country=England&page_size=1&order_by=last_published_date&api_key=vh24sddv5gj6vjb434jh2fsf&');
        //        var_dump($init);
        //        $last_query = $this->Property->find('first', array(
        //            'order'  => array('last_published_date' => 'desc'),
        //            'fields' => array('last_published_date', 'last_published_date')
        //        ));

        //        $last_date = ' ';
        //        if (isset($last_query['Property']['last_published_date'])) {
        //            $last_date = $last_query['Property']['last_published_date'];
        //        }

        //        $init_body = json_decode($init->body);
        //        $listing_date = $init_body->listing['0']->last_published_date;
        ////        var_dump($init);
        //        $save_data = array();
        $k = 0;

        //        if (isset($last_date)) {
        //            if ($listing_date !== $last_date) {
        //                $items_count = $init_body->result_count;
        //                $pages = ceil($items_count / 100);
        $count = $this->Count->findById(1);
        $i = $count['Count']['page'];
        //
        //        for ($i; $i < ($i + 100); $i++) {
        //            //                $results = $HttpSocket->get('https://api.zoopla.co.uk/api/v1/property_listings.json?country=England&page_size=50&page_number=' . $i . '&order_by=last_published_date&api_key=vh24sddv5gj6vjb434jh2fsf&');
        //            //            $results = $HttpSocket->get('https://api.zoopla.co.uk/api/v1/property_listings.xml?country=England&page_size=100&page_number=' . $i . '&order_by=last_published_date&ordering=ascending&api_key=vh24sddv5gj6vjb434jh2fsf&');
        $request = Requests::get('https://api.zoopla.co.uk/api/v1/property_listings.xml?country=England&page_size=100&page_number=' . $i . '&order_by=last_published_date&ordering=ascending&api_key=vh24sddv5gj6vjb434jh2fsf&');
        //            //            var_dump($request);
        $results = Xml::toArray(Xml::build($request->body));
        var_dump($results);
        $items_count = $results['response']['result_count'];
        $pages = ceil($items_count / 100);
        if (!empty($results) && $i <= $pages) {
            $properties = $results['response']['listing'];
            foreach ($properties as $property) {
                $floor_plan = '';
                if (isset($property['floor_plan'])) {
                    $floor_plans = $property['floor_plan'];
                    if (is_array($floor_plans)) {
                        foreach ($floor_plans as $floor) {
                            $floor_plan .= $floor;
                            if ($floor !== end($floor_plans)) {
                                $floor_plan .= ',';
                            }
                        }
                    } else {
                        $floor_plan = $floor_plans;
                    }
                }
                //
                //                    //                    $price_modifier = '';
                //                    //                    if (isset($property['price_modifier'])) {
                //                    //                        $price_modifier = $property['price_modifier'];
                //                    //                    }
                //
                //                    //                                    echo $price_modifier;
                //
                $min_floor_area = '';
                if (isset($property['floor_area']['min_floor_area']['value'])) {
                    $min_floor_area = $property['floor_area']['min_floor_area']['value'];
                }

                //                                    echo $min_floor_area;

                $max_floor_area = '';
                if (isset($property['floor_area']['max_floor_area']['value'])) {
                    $max_floor_area = $property['floor_area']['max_floor_area']['value'];
                }

                //                                    echo $max_floor_area;

                $price_change = '';
                if (isset($property['price_change'])) {
                    $price_change = json_encode($property['price_change'], true);
                }

                //                                                    echo $price_change;
                //                    var_dump($property['image_645_430_url']);
                $save_data['Property'] = array(
                    'id'                   => $property['listing_id'],
                    'num_floors'           => isset($property['num_floors']) ?: '',
                    'image_645_430_url'    => isset($property['image_645_430_url']) ? $property['image_645_430_url'] : '',
                    'image_354_255_url'    => isset($property['image_354_255_url']) ? $property['image_354_255_url'] : '',
                    'image_150_113_url'    => isset($property['image_150_113_url']) ? $property['image_150_113_url'] : '',
                    'image_80_60_url'      => isset($property['image_80_60_url']) ? $property['image_80_60_url'] : '',
                    'image_50_38_url'      => isset($property['image_50_38_url']) ? $property['image_50_38_url'] : '',
                    'thumbnail_url'        => isset($property['thumbnail_url']) ? $property['thumbnail_url'] : '',
                    'listing_status'       => isset($property['listing_status']) ? $property['listing_status'] : '',
                    'num_bedrooms'         => isset($property['num_bedrooms']) ? $property['num_bedrooms'] : '',
                    'latitude'             => isset($property['latitude']) ? $property['latitude'] : '',
                    'longitude'            => isset($property['longitude']) ? $property['longitude'] : '',
                    'furnished_state'      => isset($property['furnished_state']) ? $property['furnished_state'] : '',
                    'agent_address'        => isset($property['agent_address']) ? $property['agent_address'] : '',
                    'category'             => isset($property['category']) ? $property['category'] : '',
                    'property_type'        => isset($property['property_type']) ? $property['property_type'] : '',
                    'min_floor_area'       => $min_floor_area,
                    'max_floor_area'       => $max_floor_area,
                    'description'          => isset($property['description']) ? $property['description'] : '',
                    'short_description'    => isset($property['short_description']) ? $property['short_description'] : '',
                    'post_town'            => isset($property['post_town']) ? $property['post_town'] : '',
                    'details_url'          => isset($property['details_url']) ? $property['details_url'] : '',
                    'outcode'              => isset($property['outcode']) ? $property['outcode'] : '',
                    'property_report_url'  => isset($property['property_report_url']) ? $property['property_report_url'] : '',
                    'county'               => isset($property['county']) ? $property['county'] : '',
                    'price'                => isset($property['price']) ? $property['price'] : '',
                    'image_caption'        => isset($property['image_caption']) ? $property['image_caption'] : '',
                    'status'               => isset($property['status']) ? $property['status'] : '',
                    'agent_name'           => isset($property['agent_name']) ? $property['agent_name'] : '',
                    'num_recepts'          => isset($property['num_recepts']) ? $property['num_recepts'] : '',
                    'first_published_date' => isset($property['first_published_date']) ? $property['first_published_date'] : '',
                    'displayable_address'  => isset($property['displayable_address']) ? $property['displayable_address'] : '',
                    'price_modifier'       => isset($property['price_modifier']) ? $property['price_modifier'] : '',
                    'floor_plan'           => $floor_plan,
                    'street_name'          => isset($property['street_name']) ? $property['street_name'] : '',
                    'num_bathrooms'        => isset($property['num_bathrooms']) ? $property['num_bathrooms'] : '',
                    'agent_logo'           => isset($property['agent_logo']) ? $property['agent_logo'] : '',
                    'price_change'         => $price_change,
                    'agent_phone'          => isset($property['agent_phone']) ? $property['agent_phone'] : '',
                    'image_url'            => isset($property['image_url']) ? $property['image_url'] : '',
                    'last_published_date'  => isset($property['last_published_date']) ? $property['last_published_date'] : '',

                );
                //                    $save_data[$k]['Property'] = array(
                //                    $save_data['Property'] = array(
                //                        'id'                   => $property['listing_id'] ?? '',
                //                        'num_floors'           => $property['num_floors'] ?? '',
                //                        'image_645_430_url'    => $property['image_645_430_url'] ?? '',
                //                        'image_354_255_url'    => $property['image_354_255_url'] ?? '',
                //                        'image_150_113_url'    => $property['image_150_113_url'] ?? '',
                //                        'image_80_60_url'      => $property['image_80_60_url'] ?? '',
                //                        'image_50_38_url'      => $property['image_50_38_url'] ?? '',
                //                        'thumbnail_url'        => $property['thumbnail_url'] ?? '',
                //                        'listing_status'       => $property['listing_status'] ?? '',
                //                        'num_bedrooms'         => $property['num_bedrooms'] ?? '',
                //                        'latitude'             => $property['latitude'] ?? '',
                //                        'longitude'            => $property['longitude'] ?? '',
                //                        'furnished_state'      => $property['furnished_state'] ?? '',
                //                        'agent_address'        => $property['agent_address'] ?? '',
                //                        'category'             => $property['category'] ?? '',
                //                        'property_type'        => $property['property_type'] ?? '',
                //                        'min_floor_area'       => $min_floor_area,
                //                        'max_floor_area'       => $max_floor_area,
                //                        'description'          => $property['description'] ?? '',
                //                        'short_description'    => $property['short_description'] ?? '',
                //                        'post_town'            => $property['post_town'] ?? '',
                //                        'details_url'          => $property['details_url'] ?? '',
                //                        'outcode'              => $property['outcode'] ?? '',
                //                        'property_report_url'  => $property['property_report_url'] ?? '',
                //                        'county'               => $property['county'] ?? '',
                //                        'price'                => $property['price'] ?? '',
                //                        'image_caption'        => $property['image_caption'] ?? '',
                //                        'status'               => $property['status'] ?? '',
                //                        'agent_name'           => $property['agent_name'] ?? '',
                //                        'num_recepts'          => $property['num_recepts'] ?? '',
                //                        'first_published_date' => $property['first_published_date'] ?? '',
                //                        'displayable_address'  => $property['displayable_address'] ?? '',
                //                        'price_modifier'       => $property['price_modifier'] ?? '',
                //                        'floor_plan'           => $floor_plan,
                //                        'street_name'          => $property['street_name'] ?? '',
                //                        'num_bathrooms'        => $property['num_bathrooms'] ?? '',
                //                        'agent_logo'           => $property['agent_logo'] ?? '',
                //                        'price_change'         => $price_change,
                //                        'agent_phone'          => $property['agent_phone'] ?? '',
                //                        'image_url'            => $property['image_url'] ?? '',
                //                        'last_published_date'  => $property['last_published_date'] ?? ''
                //                    );

                //                    $save_data[$k]{'Property'} = array(
                //                        'id'                   => $property->listing_id,
                //                        'num_floors'           => $property->num_floors,
                //                        'image_645_430_url'    => $property->image_645_430_url,
                //                        'image_354_255_url'    => $property->image_354_255_url,
                //                        'image_150_113_url'    => $property->image_150_113_url,
                //                        'image_80_60_url'      => $property->image_80_60_url,
                //                        'image_50_38_url'      => $property->image_50_38_url,
                //                        'thumbnail_url'        => $property->thumbnail_url,
                //                        'listing_status'       => $property->listing_status,
                //                        'num_bedrooms'         => $property->num_bedrooms,
                //                        'latitude'             => $property->latitude,
                //                        'longitude'            => $property->longitude,
                //                        'furnished_state'      => $property->furnished_state,
                //                        'agent_address'        => $property->agent_address,
                //                        'category'             => $property->category,
                //                        'property_type'        => $property->property_type,
                //                        'min_floor_area'       => $min_floor_area,
                //                        'max_floor_area'       => $max_floor_area,
                //                        'description'          => $property->description,
                //                        'short_description'    => $property->short_description,
                //                        'post_town'            => $property->post_town,
                //                        'details_url'          => $property->details_url,
                //                        'outcode'              => $property->outcode,
                //                        'property_report_url'  => $property->property_report_url,
                //                        'county'               => $property->county,
                //                        'price'                => $property->price,
                //                        'image_caption'        => $property->image_caption,
                //                        'status'               => $property->status,
                //                        'agent_name'           => $property->agent_name,
                //                        'num_recepts'          => $property->num_recepts,
                //                        'first_published_date' => $property->first_published_date,
                //                        'displayable_address'  => $property->displayable_address,
                //                        'price_modifier'       => $price_modifier,
                //                        'floor_plan'           => $floor_plan,
                //                        'street_name'          => $property->street_name,
                //                        'num_bathrooms'        => $property->num_bathrooms,
                //                        'agent_logo'           => $property->agent_logo,
                //                        'price_change'         => $price_change,
                //                        'agent_phone'          => $property->agent_phone,
                //                        'image_url'            => $property->image_url,
                //                        'last_published_date'  => $property->last_published_date
                //                    );
                //
                //                            $k++;
                $this->Property->create();
                $this->Property->save($save_data);
                //                        if ($this->Property->saveAll($save_data)) {
                //                        }
                //                        }
            }
            $this->Count->id = 1;
            $this->Count->saveField('page', ($i + 1));
        }

    }

    public function beforeRender()
    {
        $this->loadModel('Article');

        $this->set('header_articles', $this->Article->find('all', array('conditions' => array('type' => array('header', 'both')), 'order' => array('id' => 'asc'))));
        $this->set('footer_articles', $this->Article->find('all', array('conditions' => array('type' => array('footer', 'both')), 'order' => array('id' => 'asc'))));
    }

    public function search()
    {
        $this->loadModel('Property');

        if ($this->Session->check('conditions')) {
            $conditions = $this->Session->read('conditions');
        } else {
            $conditions = array();
        }

        //        if ($this->Session->check('limit')) {
        //            $limit = $this->Session->read('limit');
        //        } else {
        //            $limit = 24;
        //        }
        //
        //        if ($this->Session->check('limit')) {
        //            $limit = $this->Session->read('limit');
        //        } else {
        //            $limit = 24;
        //        }


        if ($this->Session->read('search_view') === NULL) {
            $this->Session->write('search_view', 'grid');
        }

        if ($this->Session->read('county') === NULL) {
            $this->Session->write('county', '');
        }
        //        $view = 'grid';
        //        $this->Session->write('search_view', $view);
        $limit = 24;
        $order = array('id' => 'desc');
        $order_view = 'id desc';
        $search_area = '';

        if (($this->request->is('post') || $this->request->is('put')) && isset($this->request->data['Filter'])) {

            $this->Session->delete('conditions');
            $this->Session->delete('Filter');

            $request = $this->request->data['Filter'];
            $this->Session->write('filter', $request);
            if ($request['property_type'] !== '') {
                $conditions[] = array('Property.property_type' => $request['property_type']);
            }

            if (!empty($request['view'])) {
                $this->Session->write('search_view', $request['view']);
                //                $view = $request['view'];
            }

            if (!empty($request['order'])) {
                switch ($request['order']) {
                    case 'id desc':
                        $order = array('id' => 'desc');
                        $order_view = 'id desc';
                        break;
                    case 'views desc':
                        $order = array('views' => 'desc');
                        $order_view = 'views desc';
                        break;
                    case 'price desc':
                        $order = array('price' => 'desc');
                        $order_view = 'price desc';
                        break;
                    case 'price asc':
                        $order = array('price' => 'asc');
                        $order_view = 'price asc';
                        break;
                    default:
                        $order = array('id' => 'desc');
                        $order_view = 'id desc';
                        break;
                }
                //                $order = $request['order'];
            }

            if (!empty($request['limit'])) {
                $limit = $request['limit'];
            }

            if (!empty($request['min_price'])) {
                if ($request['min_price'] > 0) {
                    $conditions[] = array('price >' => $request['min_price']);
                }
            }

            if (!empty($request['max_price'])) {
                if ($request['min_price'] > 0) {
                    $conditions[] = array('price <' => $request['max_price']);
                }
            }

            if (!empty($request['bedrooms'])) {
                if ($request['bedrooms'] > 0) {
                    $conditions[] = array('Property.num_bedrooms >=' => $request['bedrooms']);
                }
            }

            if (!empty($request['added'])) {
                switch ($request['added']) {
                    case '24_hours':
                        $date = date('Y-m-d H:i:s', strtotime('-1 days'));
                        break;
                    case '3_days':
                        $date = date('Y-m-d H:i:s', strtotime('-3 days'));
                        break;
                    case '7_days':
                        $date = date('Y-m-d H:i:s', strtotime('-7 days'));
                        break;
                    case '14_days':
                        $date = date('Y-m-d H:i:s', strtotime('-14 days'));
                        break;
                    case '30_days':
                        $date = date('Y-m-d H:i:s', strtotime('-30 days'));
                        break;
                    default:
                        $date = date('Y-m-d H:i:s', strtotime('-10000 days'));
                        break;
                }
                $conditions[] = array('Property.first_published_date >' => $date);
            }

            if (!empty($request['keywords'])) {
                $conditions[] = array('OR' => array(
                    'Property.furnished_state LIKE' => '%' . $request['keywords'] . '%',
                    'Property.status LIKE'          => '%' . $request['keywords'] . '%'
                ));
            }

            if (isset($request['shared_ownership'])) {
                if ($request['shared_ownership'] === 1) {
                    $conditions[] = array('Property.price_modifier' => 'shared_ownership');
                }
            }

            if (isset($request['county']) && $request['county'] !== '') {
                $conditions[] = array('OR' => array(
                    'county LIKE'              => '%' . $request['county'] . '%',
                    'displayable_address LIKE' => '%' . $request['county'] . '%',
                    'outcode LIKE'             => '%' . $request['county'] . '%',
                    'post_town LIKE'           => '%' . $request['county'] . '%'));
                $search_area = 'in ' . $request['county'];
            }
        }
        $this->set('title_for_layout', 'Search results ' . $search_area);

        //                if ($this->Session->check('conditions')) {
        //                    $conditions = $this->Session->read('conditions');
        //                }

        $this->Session->write('conditions', $conditions);
        //var_dump($conditions);
        $this->Paginator->settings = array(
            'limit'      => $limit,
            //                'fields'     => array(
            //                    'name', 'id', 'model', 'manufacturer', 'discount', 'price', 'active', 'measure'
            //                ),
            'order'      => $order,
            'conditions' => $conditions
        );
        if (!$this->request->data) {
            $this->request->data = $this->Session->read('filter');
        }

        try {
            $properties = $this->Paginator->paginate('Property');
        } catch (NotFoundException $e) {
            //            $this->request->params['paging']['Property']['pageCount'];
            $this->redirect(array('page' => 1));
        }

        $this->set('filter', array('Filter' => $this->Session->read('filter')));

        $this->set('properties', $properties);
        $this->set('view', $this->Session->read('search_view'));
        $this->set('limit', $limit);
        $this->set('order_view', $order_view);
        $this->set('search_area', $search_area);
    }

    public function property($id = null)
    {
        $this->loadModel('Property');
        if ($id === null) {
            $this->redirect($this->referer());
        }

        $property = $this->Property->findById($id);
        if (!empty($property)) {
            $this->set('property', $property);
            $this->Property->id = $id;
            $this->Property->saveField('views', ($property['Property']['views'] + 1));
        } else {
            $this->redirect(array('action' => 'home'));
        }


        $latest = $this->Property->find('all', array(
            'conditions' => array('id !=' => $id,
                                  'OR'    => array(
                                      'county LIKE'              => '%' . $property['Property']['county'] . '%',
                                      'post_town LIKE'           => '%' . $property['Property']['post_town'] . '%',
                                      'displayable_address LIKE' => '%' . $property['Property']['displayable_address'] . '%',
                                  )),
            'limit'      => 4
        ));
        $this->set('latest', $latest);
    }

    public function subscribe()
    {
        $this->loadModel('Newsletter');
        $this->response->type('json');
        $this->layout = null;
        $this->autoRender = false;

        $status = 'bad request';

        if ($this->request->is('post') && isset($this->request->data['email'])) {
            $email = $this->request->data['email'];

            $subscription = $this->Newsletter->find('first', array(
                'conditions' => array(
                    'Newsletter.email' => $email
                )
            ));

            if (empty($subscription)) {
                if ($this->Newsletter->save(array('email' => $email, 'date' => date('Y-m-d h:i')))) {
                    $status = 'ok';
                } else {
                    $status = 'delete error';
                }
            } else {
                $status = 'exist';
            }
        }

        return json_encode(array('status' => $status));
    }

    public function not_found()
    {

    }

    public function blog_record($url = null)
    {
        $this->set('title_for_layout', 'GoSearchProperty Blog');

        $this->loadModel('Blog');

        if ($url !== null) {
            $record = $this->Blog->findByUrl($url);
            if (!empty($record)) {
                $this->set('record', $record);
            } else {
                $this->redirect(array('controller' => 'pages', 'action' => 'blog'));
            }
        } else {
            $this->redirect(array('controller' => 'pages', 'action' => 'blog'));
        }
    }

    public function page($url = null)
    {
        $this->loadModel('Article');

        if ($url !== null) {
            $record = $this->Article->findByUrl($url);
            if (!empty($record)) {
                $this->set('record', $record);
                $this->set('title_for_layout', $record['Article']['title'] . ' - Go Search Property');
            } else {
                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
            }
        } else {
            $this->redirect(array('controller' => 'pages', 'action' => 'home'));
        }
    }

    public function blog()
    {
        $this->set('title_for_layout', 'GoSearchProperty Blog');

        $this->loadModel('Blog');

        //        $records = $this->Blog->find('all', array('order' => array('id' => 'desc')));
        $this->Blog->recursive = 0;

        $this->Paginator->settings = array(
            'limit' => 12,
            'order' => array(
                'id' => 'desc'
            )
        );
        $this->set('records', $this->Paginator->paginate('Blog'));
        //        $this->set('records', $records);
    }


}
