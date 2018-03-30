<?php

App::uses('AppModel', 'Model');

class Admin extends AppModel
{
    public $validate = array(
        'email' => array(
            'rule' => array('email', true),
            'message' => 'Пожалуйста, введите правильный E-mail',
            'on' => 'create'
        )
    );

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return parent::beforeSave($options);
    }

    public function alphaNumericDashUnderscore($check)
    {
        $value = array_values($check);
        $value = $value[0];

        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }

}