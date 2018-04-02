<div class="property-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center property_name"><? echo $property['Property']['displayable_address']; ?></h1>
<!--                <div class="text-center property-image mb-57  properties-slider owl-carousel owl-theme owl-loaded">-->
<!--                    <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">-->
<!--                        <img src="--><?// echo empty($property['Property']['image_645_430_url']) ? '/app/webroot/img/645x430.png' : $property['Property']['image_645_430_url']; ?><!--" alt="">-->
<!--                    </div>-->
<!--                </div>-->
                <div class="property-image mb-57 text-center ">
                            <div class="item"><img src="<? echo empty($property['Property']['image_645_430_url']) ? '/app/webroot/img/645x430.png' : $property['Property']['image_645_430_url']; ?>" alt=""></div>
<!--                            <div class="item"s><img src="/app/webroot/img/645x430.png" alt=""></div>-->
                </div>
                <script>
                    $(document).ready(function(){
                        $(".owl-carousel").owlCarousel({
                            loop:true,
                            // items:4,
                            dots:false,
                            animateOut: 'fadeOut',
                            animateIn: 'fadeIn',
                            nav: true,
                            autoWidth:true,
                            navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
                            responsive:{
                                0:{
                                    items:1
                                },
                                600:{
                                    items:2
                                },
                                1000:{
                                    items:3
                                }
                            }
                        });
                    });
                </script>
                <div class="property-desc mb-56">
                    <h4 class="details-title mb-22">Description</h4>
                    <p class="mb-24"><? echo $property['Property']['description']; ?></p>
                </div>
                <div class="property-details">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="details-title mb-38">Condition</h4>
                            <div class="bg-gray fix pl-35 pt-42 pr-35 pb-39 left-column mb-56">
<!--                                <div class="desc-info mb-37">-->
<!--                                    <img src="/app/webroot/img/icon-floor.png" alt="" class="pr-8">-->
<!--                                    <span>Area 450 sqft</span>-->
<!--                                </div>-->
                                <div class="desc-info mb-37">
                                    <img src="/app/webroot/img/icon-bed.png" alt="" class="pr-8">
                                    <span>Bedroom <? echo $property['Property']['num_bedrooms']; ?></span>
                                </div>
                                <div class="desc-info mb-37">
                                    <img src="/app/webroot/img/icon-shower.png" alt="" class="pr-8">
                                    <span>Bathroom <? echo $property['Property']['num_bathrooms']; ?></span>
                                </div>
                                <div class="desc-info mb-37">
                                    <img src="images/icons/g-garage.png" alt="" class="pr-8">
                                    <span>Garage 2</span>
                                </div>
                                <div class="desc-info mb-35">
                                    <img src="images/icons/kitchen.png" alt="" class="pr-8">
                                    <span>Kitchen 2</span>
                                </div>
                                <div class="desc-info mb-35">
                                    <span class="price">£<? echo $property['Property']['price']; ?></span>
                                </div>
                                <div class="desc-info">
<!--                                    <img src="images/icons/g-map.png" alt="" class="pr-8">-->
                                    <span class="location"><? echo $property['Property']['displayable_address']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="details-title mb-38">Amenities</h4>
                            <div class="bg-gray fix pl-50 pr-50 pt-44 pb-38 right-column mb-56">
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Air Conditioning</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Bedding</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Balcony</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Cable TV</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Internet</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Lift</span>
                                </div>
                                <div class="desc-info mb-26">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Pool</span>
                                </div>
                                <div class="desc-info">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Dishwasher</span>
                                </div>
                                <div class="desc-info">
                                    <i class="fa fa-check-square-o mr-9"></i>
                                    <span>Toaster</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pl-15">
                            <h4 class="details-title mb-37">Property on map</h4>
                            <div class="desc-images">
                                <div id="map"></div>
                                <script>
                                    function initMap() {
                                        var uluru = {lat: <? echo $property['Property']['latitude']; ?>, lng: <? echo $property['Property']['longitude']; ?>};
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 4,
                                            center: uluru
                                        });
                                        var marker = new google.maps.Marker({
                                            position: uluru,
                                            map: map
                                        });
                                    }
                                </script>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_yRibkmQz2b0z2Vq34-1T9cgpcwQroSw&callback=initMap"></script>
                                <style>
                                    #map {
                                        height: 400px;
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 pl-35">
                <div class="single-sidebar-widget fix mb-60 hidden-sm hidden-xs">
                    <div class="sidebar-widget-title mb-32">
                        <h5>Similar Properties</h5>
                    </div>
                    <div class="row similar_properties">
                        <? foreach ($latest as $item) { ?>
                        <div class="col-md-6 pr-9 mb-18 col-sm-3">
                            <div class="single-property hover-effect-two">
                                <div class="property-title fix pl-18 pr-18 pt-9 pb-0 bg-violet">
                                    <div class="title-left">
                                        <h4 class="text-white mb-12"><a href="/property/<? echo $item['Property']['id']; ?>">
                                                <? echo $this->Text->truncate($property['Property']['displayable_address'], 20, array('ending' => '..', 'exact' => false, 'html' => true)); ?>
                                            </a></h4>
                                    </div>
                                </div>
                                <div class="property-image">
                                    <a href="/property/<? echo $item['Property']['id']; ?>" class="block dark-hover"><img
                                                src="<? echo empty($item['Property']['image_150_113_url']) ? '/app/webroot/img/150x113.png' : $item['Property']['image_150_113_url']; ?>" alt="">
                                        <span class="img-button text-uppercase">More Details</span>
                                    </a>
                                </div>
                                <div class="property-title fix pl-18 pr-18 pt-9 pb-9 bg-violet">
                                    <h3>&pound;52,354</h3>
                                </div>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>
                <div class="single-sidebar-widget fix mb-60">
                    <div class="sidebar-widget-title mb-32">
                        <h5>Agent information</h5>
                    </div>
                    <div class="sidebar-agent">
                        <div class="row">
                            <div class="col-md-4 mb-22 col-sm-2 col-xs-4">
                                <div class="agent-hover">
                                    <a class="block border mb-11">
                                        <img src="<? echo (empty($property['Property']['agent_logo']) || $property['Property']['agent_logo'] != 1) ? '/app/webroot/img/98x104.png' : $property['Property']['agent_logo']; ?>" alt="">
                                    </a>
                                    <h5><a class="block"><? echo $property['Property']['agent_name']; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>