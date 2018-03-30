<?php

App::uses('AppModel', 'Model');

class Property extends AppModel
{
    public $useTable = 'properties';

    public $virtualFields = array(
        'date'  => 'DATE_FORMAT(Property.first_published_date,"%d/%m/%Y")',
//        'count' => 'SELECT COUNT(DISTINCT id) FROM properties'
        //        'distance' => '(3959 * acos(cos(radians(37)) * cos(radians(latitude)) * cos(radians(longitude) - radians(-122)) + sin(radians(37)) * sin(radians(latitude)))'
    );
}