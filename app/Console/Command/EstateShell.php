<?php
/**
 * AppShell file
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppShell', 'Console/Command');
App::uses('HttpSocket', 'Network/Http');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
class EstateShell extends AppShell
{
    public $uses = array('Property');

    public function main()
    {
//        include($_SERVER['DOCUMENT_ROOT'] . '/Vendor/Requests/Requests.php');
//        Requests::register_autoloader();

        ini_set('max_execution_time', 1000000);
        //        ini_set('memory_limit', 1000000);

        $this->loadModel('Property');
        $this->loadModel('Count');
                $HttpSocket = new HttpSocket();
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

        for ($i; $i < ($i + 3); $i++) {
            //                $results = $HttpSocket->get('https://api.zoopla.co.uk/api/v1/property_listings.json?country=England&page_size=50&page_number=' . $i . '&order_by=last_published_date&api_key=vh24sddv5gj6vjb434jh2fsf&');
            $request = $HttpSocket->get('https://api.zoopla.co.uk/api/v1/property_listings.xml?country=England&page_size=100&page_number=' . $i . '&order_by=last_published_date&ordering=ascending&api_key=vh24sddv5gj6vjb434jh2fsf&');
//            $request = Requests::get('https://api.zoopla.co.uk/api/v1/property_listings.xml?country=England&page_size=100&page_number=' . $i . '&order_by=last_published_date&ordering=ascending&api_key=vh24sddv5gj6vjb434jh2fsf&');
            $results = Xml::toArray(Xml::build($request->body));
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

//                    $price_modifier = '';
//                    if (isset($property['price_modifier'])) {
//                        $price_modifier = $property['price_modifier'];
//                    }

                    //                                    echo $price_modifier;

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

                    $save_data[$k]['Property'] = array(
                        'id'                   => $property['listing_id'],
                        'num_floors'           => isset($property['num_floors']) ?: '',
                        'image_645_430_url'    => isset($property['image_645_430_url']) ?: '',
                        'image_354_255_url'    => isset($property['image_354_255_url']) ?: '',
                        'image_150_113_url'    => isset($property['image_150_113_url']) ?: '',
                        'image_80_60_url'      => isset($property['image_80_60_url']) ?: '',
                        'image_50_38_url'      => isset($property['image_50_38_url']) ?: '',
                        'thumbnail_url'        => isset($property['thumbnail_url']) ?: '',
                        'listing_status'       => isset($property['listing_status']) ?: '',
                        'num_bedrooms'         => isset($property['num_bedrooms']) ?: '',
                        'latitude'             => isset($property['latitude']) ?: '',
                        'longitude'            => isset($property['longitude']) ?: '',
                        'furnished_state'      => isset($property['furnished_state']) ?: '',
                        'agent_address'        => isset($property['agent_address']) ?: '',
                        'category'             => isset($property['category']) ?: '',
                        'property_type'        => isset($property['property_type']) ?: '',
                        'min_floor_area'       => $min_floor_area,
                        'max_floor_area'       => $max_floor_area,
                        'description'          => isset($property['description']) ?: '',
                        'short_description'    => isset($property['short_description']) ?: '',
                        'post_town'            => isset($property['post_town']) ?: '',
                        'details_url'          => isset($property['details_url']) ?: '',
                        'outcode'              => isset($property['outcode']) ?: '',
                        'property_report_url'  => isset($property['property_report_url']) ?: '',
                        'county'               => isset($property['county']) ?: '',
                        'price'                => isset($property['price']) ?: '',
                        'image_caption'        => isset($property['image_caption']) ?: '',
                        'status'               => isset($property['status']) ?: '',
                        'agent_name'           => isset($property['agent_name']) ?: '',
                        'num_recepts'          => isset($property['num_recepts']) ?: '',
                        'first_published_date' => isset($property['first_published_date']) ?: '',
                        'displayable_address'  => isset($property['displayable_address']) ?: '',
                        'price_modifier'       => isset($property['price_modifier']) ?: '',
                        'floor_plan'           => $floor_plan,
                        'street_name'          => isset($property['street_name']) ?: '',
                        'num_bathrooms'        => isset($property['num_bathrooms']) ?: '',
                        'agent_logo'           => isset($property['agent_logo']) ?: '',
                        'price_change'         => $price_change,
                        'agent_phone'          => isset($property['agent_phone']) ?: '',
                        'image_url'            => isset($property['image_url']) ?: '',
                        'last_published_date'  => isset($property['last_published_date']) ?: '',
                    );

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
                    $k++;
                    $this->Property->create();
                    //                if ($this->Property->saveAll($save_data)) {
                    //                }
                    $this->Property->saveAll($save_data);
                }
                $save_data = array();
                $properties = array();
                $request = array();
            }
        }
        $this->Count->id = 1;
        $this->Count->saveField('page', ($i + 3));
    }
}
