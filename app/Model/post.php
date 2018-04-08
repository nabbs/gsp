<?php

App::uses('AppModel', 'Model');

class Post extends AppModel {
	var $name = 'Post';
	var $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'foreign_id',
			'conditions' => array('Comment.class'=>'Post'),
		),
	);
}