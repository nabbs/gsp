<?php

/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 026 26.12.2016
 * Time: 3:13
 */
App::uses('AppModel', 'Model');

class Panel extends AppModel
{
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

    public $validate = array(
        'email' => array(
            'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message' => 'Ошибка! Пользователь с таким Email уже зарегистрирован.'
            )
        )
    );

}