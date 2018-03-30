<div class="col-lg-4 col-md-6 mb-40 col-sm-6">
    <div class="single-property hover-effect-two">
        <div class="property-title fix pl-18 pr-18 pt-22 pb-18 bg-violet">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 title-left pull_left">
                <h4 class="text-white mb-12">
                    <a href="/property/<? echo $property['Property']['id']; ?>">
                        <? echo $this->Text->truncate($property['Property']['displayable_address'], 55, array('ending' => ' ...', 'exact' => false, 'html' => false)); ?>
<!--                        --><?// echo $property['Property']['displayable_address']; ?>
                    </a>
                </h4>
<!--                <span><span class="mr-10"><img src="images/icons/map.png" alt=""></span>--><?// echo $property['Property']['displayable_address']; ?><!--</span>-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fix pull-left">
                <h3>£<? echo $property['Property']['price']; ?></h3>
            </div>
        </div>
        <div class="property-image">
            <a href="/property/<? echo $property['Property']['id']; ?>" class="block dark-hover">
                <img src="<? echo empty($property['Property']['image_354_255_url']) ? '/app/webroot/img/380x270.png' : $property['Property']['image_354_255_url']; ?>" alt="">
                <span class="img-button text-uppercase">More Details</span>
                <? if (!empty($property['Property']['property_type'])) { ?><span
                        class="p-tag bg-lemon uppercase">
                    <? echo $property['Property']['property_type']; ?>
                    </span>
                <? } ?>
            </a>
            <div class="hover-container pl-15 pr-15 pt-16 pb-15">
<!--                <div class="hover-item">-->
<!--                    <img class="mr-10" src="/app/webroot/img/icon-floor-o.png" alt="">-->
<!--                    <span>450 sqft</span>-->
<!--                </div>-->
                <div class="hover-item">
                    <img class="mr-10" src="/app/webroot/img/icon-bed-o.png" alt="">
                    <span><? echo $property['Property']['num_bedrooms']; ?></span>
                </div>
                <div class="hover-item">
                    <img class="mr-10" src="/app/webroot/img/icon-shower-o.png" alt="">
                    <span><? echo $property['Property']['num_bathrooms']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
