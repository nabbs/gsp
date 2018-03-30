<section class="intro-carousel wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid padding-fix">
        <div id="intro-carousel-inner" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="col-md-8 col-md-offset-2 banner_search">
                    <div class="col-md-12">
                        <div class="text-center mb-10 mt-25">
                            <h1 class="search_heading">FIND YOUR <span>DREAM HOME</span> </h1>
                        </div>
                    </div>
                    <? echo $this->Form->create('Filter', array('url' => '/search', 'class' => 'col-md-10 col-md-offset-1')); ?>
                    <div class="form-box pl-15 pr-15">
                        <label for="search_location">Location or postcode</label>
                        <!--                        <div class="select">-->
<!--                        <input name="data[Filter][county]" class="amount" type="text" id="search_location"/>-->
                        <? echo $this->Form->input('county', array('label' => false, 'type' => 'text', 'div' => false, 'class' => 'amount', 'escape' => 'false')); ?>

                        <!--                        </div>-->
                    </div>
                    <div class="form-box mb-40 pl-15 pr-15">
                        <label for="search_min_price">Min price</label>
                        <div class="select">
                            <select name="data[Filter][min_price]" id="search_min_price">
                                <option value="0">No min</option>
                                <option value="10000" data-condensed="10k">£10,000</option>
                                <option value="20000" data-condensed="20k">£20,000</option>
                                <option value="30000" data-condensed="30k">£30,000</option>
                                <option value="40000" data-condensed="40k">£40,000</option>
                                <option value="50000" data-condensed="50k">£50,000</option>
                                <option value="60000" data-condensed="60k">£60,000</option>
                                <option value="70000" data-condensed="70k">£70,000</option>
                                <option value="80000" data-condensed="80k">£80,000</option>
                                <option value="90000" data-condensed="90k">£90,000</option>
                                <option value="100000" data-condensed="100k">£100,000</option>
                                <option value="110000" data-condensed="110k">£110,000</option>
                                <option value="120000" data-condensed="120k">£120,000</option>
                                <option value="125000" data-condensed="125k">£125,000</option>
                                <option value="130000" data-condensed="130k">£130,000</option>
                                <option value="140000" data-condensed="140k">£140,000</option>
                                <option value="150000" data-condensed="150k">£150,000</option>
                                <option value="160000" data-condensed="160k">£160,000</option>
                                <option value="170000" data-condensed="170k">£170,000</option>
                                <option value="180000" data-condensed="180k">£180,000</option>
                                <option value="190000" data-condensed="190k">£190,000</option>
                                <option value="200000" data-condensed="200k">£200,000</option>
                                <option value="210000" data-condensed="210k">£210,000</option>
                                <option value="220000" data-condensed="220k">£220,000</option>
                                <option value="230000" data-condensed="230k">£230,000</option>
                                <option value="240000" data-condensed="240k">£240,000</option>
                                <option value="250000" data-condensed="250k">£250,000</option>
                                <option value="275000" data-condensed="275k">£275,000</option>
                                <option value="300000" data-condensed="300k">£300,000</option>
                                <option value="325000" data-condensed="325k">£325,000</option>
                                <option value="350000" data-condensed="350k">£350,000</option>
                                <option value="375000" data-condensed="375k">£375,000</option>
                                <option value="400000" data-condensed="400k">£400,000</option>
                                <option value="425000" data-condensed="425k">£425,000</option>
                                <option value="450000" data-condensed="450k">£450,000</option>
                                <option value="475000" data-condensed="475k">£475,000</option>
                                <option value="500000" data-condensed="500k">£500,000</option>
                                <option value="550000" data-condensed="550k">£550,000</option>
                                <option value="600000" data-condensed="600k">£600,000</option>
                                <option value="650000" data-condensed="650k">£650,000</option>
                                <option value="700000" data-condensed="700k">£700,000</option>
                                <option value="750000" data-condensed="750k">£750,000</option>
                                <option value="800000" data-condensed="800k">£800,000</option>
                                <option value="850000" data-condensed="850k">£850,000</option>
                                <option value="900000" data-condensed="900k">£900,000</option>
                                <option value="950000" data-condensed="950k">£950,000</option>
                                <option value="1000000" data-condensed="1m">£1,000,000</option>
                                <option value="1100000" data-condensed="1.1m">£1,100,000</option>
                                <option value="1200000" data-condensed="1.2m">£1,200,000</option>
                                <option value="1300000" data-condensed="1.3m">£1,300,000</option>
                                <option value="1400000" data-condensed="1.4m">£1,400,000</option>
                                <option value="1500000" data-condensed="1.5m">£1,500,000</option>
                                <option value="1600000" data-condensed="1.6m">£1,600,000</option>
                                <option value="1700000" data-condensed="1.7m">£1,700,000</option>
                                <option value="1800000" data-condensed="1.8m">£1,800,000</option>
                                <option value="1900000" data-condensed="1.9m">£1,900,000</option>
                                <option value="2000000" data-condensed="2m">£2,000,000</option>
                                <option value="2100000" data-condensed="2.1m">£2,100,000</option>
                                <option value="2200000" data-condensed="2.2m">£2,200,000</option>
                                <option value="2300000" data-condensed="2.3m">£2,300,000</option>
                                <option value="2400000" data-condensed="2.4m">£2,400,000</option>
                                <option value="2500000" data-condensed="2.5m">£2,500,000</option>
                                <option value="2750000" data-condensed="2.75m">£2,750,000</option>
                                <option value="3000000" data-condensed="3m">£3,000,000</option>
                                <option value="3250000" data-condensed="3.25m">£3,250,000</option>
                                <option value="3500000" data-condensed="3.5m">£3,500,000</option>
                                <option value="3750000" data-condensed="3.75m">£3,750,000</option>
                                <option value="4000000" data-condensed="4m">£4,000,000</option>
                                <option value="4250000" data-condensed="4.25m">£4,250,000</option>
                                <option value="4500000" data-condensed="4.5m">£4,500,000</option>
                                <option value="4750000" data-condensed="4.75m">£4,750,000</option>
                                <option value="5000000" data-condensed="5m">£5,000,000</option>
                                <option value="5500000" data-condensed="5.5m">£5,500,000</option>
                                <option value="6000000" data-condensed="6m">£6,000,000</option>
                                <option value="6500000" data-condensed="6.5m">£6,500,000</option>
                                <option value="7000000" data-condensed="7m">£7,000,000</option>
                                <option value="7500000" data-condensed="7.5m">£7,500,000</option>
                                <option value="8000000" data-condensed="8m">£8,000,000</option>
                                <option value="8500000" data-condensed="8.5m">£8,500,000</option>
                                <option value="9000000" data-condensed="9m">£9,000,000</option>
                                <option value="9500000" data-condensed="9.5m">£9,500,000</option>
                                <option value="10000000" data-condensed="10m">£10,000,000</option>
                                <option value="12500000" data-condensed="12.5m">£12,500,000</option>
                                <option value="15000000" data-condensed="15m">£15,000,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-box mb-40 pl-15 pr-15">
                        <label for="search_max_price">Max price</label>
                        <div class="select">
                            <select name="data[Filter][max_price]" id="search_max_price">
                                <option value="0">No max</option>
                                <option value="10000" data-condensed="10k">£10,000</option>
                                <option value="20000" data-condensed="20k">£20,000</option>
                                <option value="30000" data-condensed="30k">£30,000</option>
                                <option value="40000" data-condensed="40k">£40,000</option>
                                <option value="50000" data-condensed="50k">£50,000</option>
                                <option value="60000" data-condensed="60k">£60,000</option>
                                <option value="70000" data-condensed="70k">£70,000</option>
                                <option value="80000" data-condensed="80k">£80,000</option>
                                <option value="90000" data-condensed="90k">£90,000</option>
                                <option value="100000" data-condensed="100k">£100,000</option>
                                <option value="110000" data-condensed="110k">£110,000</option>
                                <option value="120000" data-condensed="120k">£120,000</option>
                                <option value="125000" data-condensed="125k">£125,000</option>
                                <option value="130000" data-condensed="130k">£130,000</option>
                                <option value="140000" data-condensed="140k">£140,000</option>
                                <option value="150000" data-condensed="150k">£150,000</option>
                                <option value="160000" data-condensed="160k">£160,000</option>
                                <option value="170000" data-condensed="170k">£170,000</option>
                                <option value="180000" data-condensed="180k">£180,000</option>
                                <option value="190000" data-condensed="190k">£190,000</option>
                                <option value="200000" data-condensed="200k">£200,000</option>
                                <option value="210000" data-condensed="210k">£210,000</option>
                                <option value="220000" data-condensed="220k">£220,000</option>
                                <option value="230000" data-condensed="230k">£230,000</option>
                                <option value="240000" data-condensed="240k">£240,000</option>
                                <option value="250000" data-condensed="250k">£250,000</option>
                                <option value="275000" data-condensed="275k">£275,000</option>
                                <option value="300000" data-condensed="300k">£300,000</option>
                                <option value="325000" data-condensed="325k">£325,000</option>
                                <option value="350000" data-condensed="350k">£350,000</option>
                                <option value="375000" data-condensed="375k">£375,000</option>
                                <option value="400000" data-condensed="400k">£400,000</option>
                                <option value="425000" data-condensed="425k">£425,000</option>
                                <option value="450000" data-condensed="450k">£450,000</option>
                                <option value="475000" data-condensed="475k">£475,000</option>
                                <option value="500000" data-condensed="500k">£500,000</option>
                                <option value="550000" data-condensed="550k">£550,000</option>
                                <option value="600000" data-condensed="600k">£600,000</option>
                                <option value="650000" data-condensed="650k">£650,000</option>
                                <option value="700000" data-condensed="700k">£700,000</option>
                                <option value="750000" data-condensed="750k">£750,000</option>
                                <option value="800000" data-condensed="800k">£800,000</option>
                                <option value="850000" data-condensed="850k">£850,000</option>
                                <option value="900000" data-condensed="900k">£900,000</option>
                                <option value="950000" data-condensed="950k">£950,000</option>
                                <option value="1000000" data-condensed="1m">£1,000,000</option>
                                <option value="1100000" data-condensed="1.1m">£1,100,000</option>
                                <option value="1200000" data-condensed="1.2m">£1,200,000</option>
                                <option value="1300000" data-condensed="1.3m">£1,300,000</option>
                                <option value="1400000" data-condensed="1.4m">£1,400,000</option>
                                <option value="1500000" data-condensed="1.5m">£1,500,000</option>
                                <option value="1600000" data-condensed="1.6m">£1,600,000</option>
                                <option value="1700000" data-condensed="1.7m">£1,700,000</option>
                                <option value="1800000" data-condensed="1.8m">£1,800,000</option>
                                <option value="1900000" data-condensed="1.9m">£1,900,000</option>
                                <option value="2000000" data-condensed="2m">£2,000,000</option>
                                <option value="2100000" data-condensed="2.1m">£2,100,000</option>
                                <option value="2200000" data-condensed="2.2m">£2,200,000</option>
                                <option value="2300000" data-condensed="2.3m">£2,300,000</option>
                                <option value="2400000" data-condensed="2.4m">£2,400,000</option>
                                <option value="2500000" data-condensed="2.5m">£2,500,000</option>
                                <option value="2750000" data-condensed="2.75m">£2,750,000</option>
                                <option value="3000000" data-condensed="3m">£3,000,000</option>
                                <option value="3250000" data-condensed="3.25m">£3,250,000</option>
                                <option value="3500000" data-condensed="3.5m">£3,500,000</option>
                                <option value="3750000" data-condensed="3.75m">£3,750,000</option>
                                <option value="4000000" data-condensed="4m">£4,000,000</option>
                                <option value="4250000" data-condensed="4.25m">£4,250,000</option>
                                <option value="4500000" data-condensed="4.5m">£4,500,000</option>
                                <option value="4750000" data-condensed="4.75m">£4,750,000</option>
                                <option value="5000000" data-condensed="5m">£5,000,000</option>
                                <option value="5500000" data-condensed="5.5m">£5,500,000</option>
                                <option value="6000000" data-condensed="6m">£6,000,000</option>
                                <option value="6500000" data-condensed="6.5m">£6,500,000</option>
                                <option value="7000000" data-condensed="7m">£7,000,000</option>
                                <option value="7500000" data-condensed="7.5m">£7,500,000</option>
                                <option value="8000000" data-condensed="8m">£8,000,000</option>
                                <option value="8500000" data-condensed="8.5m">£8,500,000</option>
                                <option value="9000000" data-condensed="9m">£9,000,000</option>
                                <option value="9500000" data-condensed="9.5m">£9,500,000</option>
                                <option value="10000000" data-condensed="10m">£10,000,000</option>
                                <option value="12500000" data-condensed="12.5m">£12,500,000</option>
                                <option value="15000000" data-condensed="15m">£15,000,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-box mb-40 pl-15 pr-15">
                        <label for="search_type">Property type</label>
                        <div class="select">
                            <? echo $this->Form->input('property_type', array('label' => false, 'type' => 'select', 'div' => 'false', 'class' => 'form-control', 'escape' => 'false', 'options' => array('sale' => 'For sale', 'rent' => 'To rent'), 'empty' => 'All')); ?>
                        </div>
                    </div>
                    <div class="form-box mb-40 pl-15 pr-15">
                        <label for="search_min_area">Bedrooms</label>
                        <div class="select">
                            <select name="data[Filter][bedrooms]">
                                <option value="0">No min</option>
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                                <option value="6">6+</option>
                                <option value="7">7+</option>
                                <option value="8">8+</option>
                                <option value="9">9+</option>
                                <option value="10">10+</option>
                            </select>
                        </div>
                    </div>
                    <? echo $this->Form->hidden('order'); ?>
                    <? echo $this->Form->hidden('limit'); ?>
                    <? echo $this->Form->hidden('view'); ?>

                    <div class="form-box mb-40 pl-15 pr-15 text-center">
                        <? echo $this->Form->button('<i class="fa fa-search"></i>&nbsp;<span>GO SEARCH PROPERTY</span>', array('class' => 'button search_price lemon search_button', 'title' => 'Начать поиск', 'type' => 'submit', 'escape' => false)); ?>
                    </div>

                    </form>
                    <p class="zoopla_home_link">
                        <a href="https://www.zoopla.co.uk/" target="_blank">
                            <img alt="Property information powered by Zoopla" height="54" src="https://www.zoopla.co.uk/static/images/mashery/powered-by-zoopla.png" style="border: 0pt none;" title="Property information powered by Zoopla" width="111">
                        </a>
                    </p>
                </div>
                <div class="item">
                    <img src="/app/webroot/img/slide01.jpg" alt="First slide">
                </div>
                <div class="item active">
                    <img src="/app/webroot/img/slide02.jpg" alt="Second slide">
                </div>
                <div class="item">
                    <img src="/app/webroot/img/slide05.jpg" alt="Third slide">

                </div>
                <div class="item">
                    <img src="/app/webroot/img/slide04.jpg" alt="Fourth slide">
                </div>
                <div class="item">
                    <img src="/app/webroot/img/slide03.jpg" alt="Fifth slide">
                </div>
            </div>
<!--            <a class="left carousel-control" href="#intro-carousel-inner" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>-->
<!--            <a class="right carousel-control" href="#intro-carousel-inner" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>-->
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">About <span>Property</span></h1>
                <p class="section-desc wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu magna metus. Donec sed erat non ipsum tincidunt pharetra ipsum tincidunt pharetra
                </p>
            </div>
        </div>
    </div>
</section>
<section class="property">
    <div class="container-fluid property">
        <div class="row">
            <div class="col-md-3 col-sm-6 padding-fix">
                <div class="drawing-room wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <img src="/app/webroot/img/drawing_room.png" alt="" class="img-responsive">
                    <div class="property-bottom">
                        <p>Drawing Room</p>
                    </div>
                </div>
            </div><!-- end .col-md-3 -->
            <div class="col-md-3 col-sm-6 padding-fix">
                <div class="dining-room wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.3s; animation-name: fadeIn;">
                    <img src="/app/webroot/img/dining_room.png" alt="" class="img-responsive">
                    <div class="property-bottom">
                        <p>Dining Room</p>
                    </div>
                </div>
            </div><!-- end .col-md-3 -->
            <div class="col-md-3 col-sm-6 padding-fix">
                <div class="bed-room wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <img src="/app/webroot/img/bedroom.png" alt="" class="img-responsive">
                    <div class="property-bottom">
                        <p>Bed Room</p>
                    </div>
                </div>
            </div><!-- end .col-md-3 -->
            <div class="col-md-3 col-sm-6 padding-fix">
                <div class="kitchen-room wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <img src="/app/webroot/img/kitchen.png" alt="" class="img-responsive">
                    <div class="property-bottom">
                        <p>Kitchen</p>
                    </div>
                </div>
            </div><!-- end .col-md-3 -->
        </div>
    </div>
</section>
<section class="about-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 property-pros wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                <div class="fig">
                    <i class="far fa-calendar-plus"></i>
                </div>
                <span>Year of Build</span>
                <span class="fign">2009</span>
            </div><!-- end .col-md-2 -->

            <div class="col-md-2 col-sm-4 property-pros wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.3s; animation-name: fadeIn;">
                <div class="fig">
                    <i class="fa fa-bed"></i>
                </div>
                <span>Bedrooms</span>
                <span class="fign">5</span>
            </div><!-- end .col-md-2 -->

            <div class="col-md-2 col-sm-4 property-pros wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="fig">
                    <i class="fa fa-tint"></i>
                </div>
                <span>Bathrooms</span>
                <span class="fign">2</span>
            </div><!-- end .col-md-2 -->

            <div class="col-md-2 col-sm-4 property-pros wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="fig">
                    <i class="fa fa-object-group"></i>
                </div>
                <span>Squere Feet</span>
                <span class="fign">3450</span>
            </div><!-- end .col-md-2 -->

            <div class="col-md-2 col-sm-4 property-pros wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.6s; animation-name: fadeIn;">
                <div class="fig">
                    <i class="fas fa-university"></i>
                </div>
                <span>Kitchen</span>
                <span class="fign">1</span>
            </div><!-- end .col-md-2 -->

            <div class="col-md-2 col-sm-4 property-pros wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.7s; animation-name: fadeIn;">
                <div class="fig">
                    <i class="fa fa-car"></i>
                </div>
                <span>Car Parking</span>
                <span class="fign">3</span>
            </div> <!-- end .col-md-2 -->

        </div>
    </div>
</section>
<section class="latest-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="property">
                    <h1 class="section-heading wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: fadeInUp;">Latest <span>Properties</span></h1>
                    <p class="section-desc wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu magna metus. Donec sed erat non ipsum tincidunt pharetra ipsum tincidunt pharetra</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="property-lists">
    <div class="container">
        <div class="row">
            <? foreach ($properties as $property) { ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="latest-pic text-center">
                    <a href="/property/<? echo $property['Property']['id']; ?>">
                    <img src="<? echo empty($property['Property']['image_645_430_url']) ? '/app/webroot/img/380x253.png' : $property['Property']['image_645_430_url']; ?>" alt="">
                    </a>
                </div><!-- end .latest-pic -->
                <div class="latest-pic-bottom">
                    <div class="pic-address">
                        <? echo $this->Text->truncate($property['Property']['displayable_address'], 30, array('ending' => '..', 'exact' => false, 'html' => true)); ?>
                        <span class="pull-right">£<? echo $property['Property']['price']; ?></span></div>
                    <div class="description-wrap">
                        <div class="pic-description">
                            <h3><a href="/property/<? echo $property['Property']['id']; ?>">Property details</a></h3>
                            <p>
                                <? echo $this->Text->truncate($property['Property']['short_description'], 90, array('ending' => '', 'exact' => false, 'html' => true)); ?>
                            </p></div><!-- end .pic-description -->
                        <div class="pic-mesure">
<!--                            <span><i class="fa fa-object-group"></i> 800 sq ft</span>-->
                            <span><i class="fa fa-bed"></i> <? echo $property['Property']['num_bedrooms']; ?> Bedrooms</span>
                            <span><i class="fa fa-retweet"></i> <? echo $property['Property']['num_bathrooms']; ?> Baths</span>
                        </div><!-- end .pic-mesure -->
                    </div><!-- end .desctription-wrapper -->
                </div> <!-- end .latest-pic-bottom -->
            </div><!-- end .col-md-4 -->
            <? } ?>
        </div><!-- end .row -->
    </div><!-- end .container -->
</section>

<div class="blog-area pt-70 pb-115 bg-light blog-page">
    <div class="container">
<!--        <h3 class="text-uppercase text-black text-center mb-30">Latest blog records</h3>-->
        <div class="row">
            <div class="col-md-12">
                <div class="blog text-center">
                    <h1 class="section-heading wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeInUp;">Our <span>Blog</span></h1>
                </div>
            </div>
            <? foreach ($blog_records as $record) { ?>
                <div class="col-md-4 mb-55 col-sm-6 fix wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="single-blog hover-effect-one fix">
                        <div class="blog-image box-hover block">
                            <a href="/blog/<? echo $record['Blog']['url']; ?>" class="block white-hover">
                                <img src="/app/webroot/img/blog/<? echo $record['Blog']['id'] .'/thumb_'.$record['Blog']['photo']; ?>" alt="">
<!--                                <span class="blog-text block bg-lemon pt-4">10 <span-->
<!--                                            class="block pt-2 ">OCT</span></span>-->
                            </a>
                        </div>
                        <div class="single-blog-text">
                            <div class="blog-post-info bg-light-green pl-20 pr-20 pt-17 pb-17">
                                <span><i class="fa fa-user mr-12"></i>Admin</span>
<!--                                <span class="pl-35"><i class="fa fa-heart mr-12"></i>15</span>-->
<!--                                <span class="pl-40"><i class="fa fa-comments mr-12"></i>10</span>-->
                            </div>
                            <h5 class="pt-22 mb-17"><a
                                        href="/blog/<? echo $record['Blog']['url']; ?>"><? echo $record['Blog']['title']; ?></a>
                            </h5>
                            <p class="mb-20">
                                <? echo $this->Text->truncate($record['Blog']['text'], 200, array('ending' => '', 'exact' => false, 'html' => true)); ?>
                            </p>
                            <a href="/blog/<? echo $record['Blog']['url']; ?>" class="button">Read More</a>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>