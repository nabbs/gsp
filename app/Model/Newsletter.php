<?php

App::uses('AppModel', 'Model');

class Newsletter extends AppModel
{
    public $virtualFields = array(
        'created'  => 'DATE_FORMAT(Newsletter.date,"%d/%m/%Y")',
        //        'count' => 'SELECT COUNT(DISTINCT id) FROM properties'
        //        'distance' => '(3959 * acos(cos(radians(37)) * cos(radians(latitude)) * cos(radians(longitude) - radians(-122)) + sin(radians(37)) * sin(radians(latitude)))'
    );
}