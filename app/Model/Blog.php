<?php

App::uses('AppModel', 'Model');

class Blog extends AppModel
{
    public $actsAs = array(
        'Upload.Upload' => array(
            'photo' => array(
                'thumbnailMethod' => 'php',
                'thumbnailSizes' => array(
                    'large' => '870x477',
                    'thumb' => '380x253',
//                    'main' => '334x183'
                ),
                'path' => '{ROOT}{DS}webroot{DS}img{DS}blog{DS}',
                'field' => array(
                    'dir' => 'photo_dir'
                )
            ),
        )
    );
}