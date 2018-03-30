<div class="col-md-12 mb-40">
    <div class="single-property hover-effect-two fix bg-light">
        <div class="property-container mr-40">
            <div class="property-title fix pl-18 pr-18 pt-15 pb-15 bg-violet">
                <div class="title-left">
                    <h4 class="text-white mb-12"><a href="/property/<? echo $property['Property']['id']; ?>">
<!--                            --><?// echo $property['Property']['street_name']; ?>
                            <? echo $this->Text->truncate($property['Property']['displayable_address'], 40, array('ending' => ' ...', 'exact' => false, 'html' => false)); ?>
                        </a></h4>
<!--                    <span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>-->
                    <?// echo $property['Property']['displayable_address']; ?>
                    <!--</span>-->
                </div>
            </div>
            <div class="property-image">
                <a href="/property/<? echo $property['Property']['id']; ?>" class="block dark-hover">
                    <img src="<? echo empty($property['Property']['image_354_255_url']) ? '/app/webroot/img/380x270.png' : $property['Property']['image_354_255_url']; ?>" alt="">

<!--                    <img src="--><?// echo $property['Property']['image_354_255_url']; ?><!--" alt="">-->
                    <span class="img-button text-uppercase">More Details</span>
                    <? if (!empty($property['Property']['property_type'])) { ?><span
                            class="p-tag bg-lemon uppercase">
                        <? echo $property['Property']['property_type']; ?>
                        </span>
                    <? } ?>
                </a>
            </div>
        </div>
        <div class="property-content fix pr-25">
            <div class="property-title fix mt-33 mb-35">
                <h3>£<? echo $property['Property']['price']; ?></h3>
            </div>
            <p>
                <? echo $this->Text->truncate($property['Property']['short_description'], 400, array('ending' => '', 'exact' => false, 'html' => false)); ?>
<!--                --><?// echo $property['Property']['short_description']; ?>
            </p>
            <div class="pt-19 pb-16">
<!--                <div class="list-item mr-45">-->
<!--                    <img class="mr-12" src="/app/webroot/img/icon-floor.png" alt="">-->
<!--                    <span>450 sqft</span>-->
<!--                </div>-->
                <div class="list-item mr-55">
                    <img class="mr-12" src="/app/webroot/img/icon-bed.png" alt="">
                    <span><? echo $property['Property']['num_bedrooms']; ?></span>
                </div>
                <div class="list-item mr-50">
                    <img class="mr-12" src="/app/webroot/img/icon-shower.png" alt="">
                    <span><? echo $property['Property']['num_bathrooms']; ?></span>
                </div>
<!--                <div class="list-item">-->
<!--                    <img class="mr-12" src="images/icons/d-garage.png" alt="">-->
<!--                    <span>2</span>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</div>