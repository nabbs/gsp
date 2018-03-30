<div class="find-area pt-72 pb-72 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-55">
                    <h2 class="uppercase">FIND YOUR DREAM HOME </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <? echo $this->Form->create('Filter', array('url' => '/search', 'class' => 'col-md-10 col-md-offset-1')); ?>
                <div class="form-box pl-15 pr-15">
                    <label for="search_location">Location or postcode</label>
                    <? echo $this->Form->input('county', array('label' => false, 'type' => 'text', 'div' => false, 'class' => 'amount', 'escape' => 'false', 'required' => 'required')); ?>
                </div>
                <div class="form-box mb-40 pl-15 pr-15">
                    <label for="search_min_price">Min price</label>
                    <div class="select">
                        <? echo $this->Form->input('min_price', array(
                            'label'  => false, 'type' => 'select', 'div' => false, 'id' => 'search_min_price',
                            'escape' => false, 'required' => 'required', 'options' => array(
                                '0'        => 'No min',
                                '10000'    => '£10,000',
                                '20000'    => '£20,000',
                                '30000'    => '£30,000',
                                '40000'    => '£40,000',
                                '50000'    => '£50,000',
                                '60000'    => '£60,000',
                                '70000'    => '£70,000',
                                '80000'    => '£80,000',
                                '90000'    => '£90,000',
                                '100000'   => '£100,000',
                                '110000'   => '£110,000',
                                '120000'   => '£120,000',
                                '130000'   => '£130,000',
                                '140000'   => '£140,000',
                                '150000'   => '£150,000',
                                '160000'   => '£160,000',
                                '170000'   => '£170,000',
                                '180000'   => '£180,000',
                                '190000'   => '£190,000',
                                '200000'   => '£200,000',
                                '210000'   => '£210,000',
                                '220000'   => '£220,000',
                                '230000'   => '£230,000',
                                '240000'   => '£240,000',
                                '250000'   => '£250,000',
                                '275000'   => '£275,000',
                                '300000'   => '£300,000',
                                '325000'   => '£325,000',
                                '350000'   => '£350,000',
                                '375000'   => '£375,000',
                                '400000'   => '£400,000',
                                '425000'   => '£425,000',
                                '450000'   => '£450,000',
                                '475000'   => '£475,000',
                                '500000'   => '£500,000',
                                '550000'   => '£550,000',
                                '600000'   => '£600,000',
                                '650000'   => '£650,000',
                                '700000'   => '£700,000',
                                '750000'   => '£750,000',
                                '800000'   => '£800,000',
                                '850000'   => '£850,000',
                                '900000'   => '£900,000',
                                '950000'   => '£950,000',
                                '1000000'  => '£1,000,000',
                                '1100000'  => '£1,100,000',
                                '1200000'  => '£1,200,000',
                                '1300000'  => '£1,300,000',
                                '1400000'  => '£1,400,000',
                                '1500000'  => '£1,500,000',
                                '1600000'  => '£1,600,000',
                                '1700000'  => '£1,700,000',
                                '1800000'  => '£1,800,000',
                                '1900000'  => '£1,900,000',
                                '2000000'  => '£2,000,000',
                                '2100000'  => '£2,100,000',
                                '2200000'  => '£2,200,000',
                                '2300000'  => '£2,300,000',
                                '2400000'  => '£2,400,000',
                                '2500000'  => '£2,500,000',
                                '2750000'  => '£2,750,000',
                                '3000000'  => '£3,000,000',
                                '3250000'  => '£3,250,000',
                                '3500000'  => '£3,500,000',
                                '3750000'  => '£3,750,000',
                                '4000000'  => '£4,000,000',
                                '4250000'  => '£4,250,000',
                                '4500000'  => '£4,500,000',
                                '4750000'  => '£4,750,000',
                                '5000000'  => '£5,000,000',
                                '5500000'  => '£5,500,000',
                                '6000000'  => '£6,000,000',
                                '6500000'  => '£6,500,000',
                                '7000000'  => '£7,000,000',
                                '7500000'  => '£7,500,000',
                                '8000000'  => '£8,000,000',
                                '8500000'  => '£8,500,000',
                                '9000000'  => '£9,000,000',
                                '9500000'  => '£9,500,000',
                                '10000000' => '£10,000,000',
                                '12500000' => '£12,500,000',
                                '15000000' => '£15,000,000',
                            )
                        )); ?>
                    </div>
                </div>
                <div class="form-box mb-40 pl-15 pr-15">
                    <label for="search_max_price">Max price</label>
                    <div class="select">
                        <? echo $this->Form->input('max_price', array(
                            'label'  => false, 'type' => 'select', 'div' => false, 'id' => 'search_max_price',
                            'escape' => false, 'required' => 'required', 'options' => array(
                                '0'        => 'No min',
                                '10000'    => '£10,000',
                                '20000'    => '£20,000',
                                '30000'    => '£30,000',
                                '40000'    => '£40,000',
                                '50000'    => '£50,000',
                                '60000'    => '£60,000',
                                '70000'    => '£70,000',
                                '80000'    => '£80,000',
                                '90000'    => '£90,000',
                                '100000'   => '£100,000',
                                '110000'   => '£110,000',
                                '120000'   => '£120,000',
                                '130000'   => '£130,000',
                                '140000'   => '£140,000',
                                '150000'   => '£150,000',
                                '160000'   => '£160,000',
                                '170000'   => '£170,000',
                                '180000'   => '£180,000',
                                '190000'   => '£190,000',
                                '200000'   => '£200,000',
                                '210000'   => '£210,000',
                                '220000'   => '£220,000',
                                '230000'   => '£230,000',
                                '240000'   => '£240,000',
                                '250000'   => '£250,000',
                                '275000'   => '£275,000',
                                '300000'   => '£300,000',
                                '325000'   => '£325,000',
                                '350000'   => '£350,000',
                                '375000'   => '£375,000',
                                '400000'   => '£400,000',
                                '425000'   => '£425,000',
                                '450000'   => '£450,000',
                                '475000'   => '£475,000',
                                '500000'   => '£500,000',
                                '550000'   => '£550,000',
                                '600000'   => '£600,000',
                                '650000'   => '£650,000',
                                '700000'   => '£700,000',
                                '750000'   => '£750,000',
                                '800000'   => '£800,000',
                                '850000'   => '£850,000',
                                '900000'   => '£900,000',
                                '950000'   => '£950,000',
                                '1000000'  => '£1,000,000',
                                '1100000'  => '£1,100,000',
                                '1200000'  => '£1,200,000',
                                '1300000'  => '£1,300,000',
                                '1400000'  => '£1,400,000',
                                '1500000'  => '£1,500,000',
                                '1600000'  => '£1,600,000',
                                '1700000'  => '£1,700,000',
                                '1800000'  => '£1,800,000',
                                '1900000'  => '£1,900,000',
                                '2000000'  => '£2,000,000',
                                '2100000'  => '£2,100,000',
                                '2200000'  => '£2,200,000',
                                '2300000'  => '£2,300,000',
                                '2400000'  => '£2,400,000',
                                '2500000'  => '£2,500,000',
                                '2750000'  => '£2,750,000',
                                '3000000'  => '£3,000,000',
                                '3250000'  => '£3,250,000',
                                '3500000'  => '£3,500,000',
                                '3750000'  => '£3,750,000',
                                '4000000'  => '£4,000,000',
                                '4250000'  => '£4,250,000',
                                '4500000'  => '£4,500,000',
                                '4750000'  => '£4,750,000',
                                '5000000'  => '£5,000,000',
                                '5500000'  => '£5,500,000',
                                '6000000'  => '£6,000,000',
                                '6500000'  => '£6,500,000',
                                '7000000'  => '£7,000,000',
                                '7500000'  => '£7,500,000',
                                '8000000'  => '£8,000,000',
                                '8500000'  => '£8,500,000',
                                '9000000'  => '£9,000,000',
                                '9500000'  => '£9,500,000',
                                '10000000' => '£10,000,000',
                                '12500000' => '£12,500,000',
                                '15000000' => '£15,000,000',
                            )
                        )); ?>

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
                        <? echo $this->Form->input('bedrooms', array(
                            'label'  => false, 'type' => 'select', 'div' => false, 'id' => 'search_bedrooms',
                            'escape' => false, 'required' => 'required', 'options' => array(
                                '0'  => 'No min',
                                '1'  => '1+',
                                '2'  => '2+',
                                '3'  => '3+',
                                '4'  => '4+',
                                '5'  => '5+',
                                '6'  => '6+',
                                '7'  => '7+',
                                '8'  => '8+',
                                '9'  => '9+',
                                '10' => '10+'
                            )
                        )); ?>
                    </div>
                </div>
                <!--                --><? // echo $this->Form->hidden('order'); ?>
                <!--                --><? // echo $this->Form->hidden('limit'); ?>
                <? echo $this->Form->hidden('view'); ?>

                <div class="form-box mb-40 pl-15 pr-15 text-center">
                    <? echo $this->Form->button('<i class="fa fa-search"></i>&nbsp;<span>GO SEARCH PROPERTY</span>', array('class' => 'button search_price lemon search_button', 'title' => 'Начать поиск', 'type' => 'submit', 'escape' => false)); ?>
                </div>

                <div id="advanced_search_params">
                    <div class="form-box mb-40 pl-15 pr-15">
                        <label for="search_added">Added</label>
                        <? echo $this->Form->input('added', array(
                            'label'   => false, 'type' => 'select', 'div' => 'select', 'id' => 'added',
                            'class'   => 'form-control', 'escape' => false, 'empty' => 'Anytime',
                            'options' => array(
                                '24_hours' => 'Last 24 hours',
                                '3_days'   => 'Last 3 days',
                                '7_days'   => 'Last 7 days',
                                '14_days'  => 'Last 14 days',
                                '30_days'  => 'Last 30 days'
                            )
                        )); ?>
                    </div>
                    <div class="form-box mb-40 pl-15 pr-15">
                        <label for="keywords">Keywords</label>
                        <div class="search-input-wrapper">
                            <? echo $this->Form->input('keywords', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'keywords', 'placeholder' => '\'garden\' or \'wood floors\'')); ?>
                            <!--                            <input name="keywords" id="keywords" placeholder="'garden' or 'wood floors'"-->
                            <!--                                   class="search-input">-->
                        </div>
                        <a href="#" class="jqModal link noselect" data-toggle="modal" data-target="#keywords_modal"
                           title="What is Keywords search?">what is this?</a>
                    </div>
                    <div class="form-box mb-50 mt-15 pl-15 pr-15">
                        <div class="md-checkbox md-checkbox-inline">
                            <? echo $this->Form->input('shared_ownership', array('type' => 'checkbox', 'checked' => false, 'id' => 'shared_ownership', 'label' => false, 'div' => false)); ?>
                            <!--                            <input id="i2" type="checkbox" checked="false">-->
                            <label for="shared_ownership" class="noselect">Shared ownership</label>
                        </div>
                    </div>
                </div>
                <div class="form-box mb-10 pl-15 pr-15">
                    <a class="advanced_search noselect" id="advanced_search">Advanced search</a>
                </div>
            </div>
        </div>
        <p class="zoopla_home_link">
            <a href="https://www.zoopla.co.uk/" target="_blank">
                <img alt="Property information powered by Zoopla" height="54"
                     src="https://www.zoopla.co.uk/static/images/mashery/powered-by-zoopla.png"
                     style="border: 0pt none;" title="Property information powered by Zoopla" width="111">
            </a>
        </p>
    </div>
</div>

<div class="well well-sm form-group form-inline search_params_block">
    <span class="search_results_count pr-60">
        <? echo $this->Paginator->counter('Showing {:start} to {:end} of {:count} entries'); ?>
    </span>
    <div class="btn-group">
        <a id="switch_list"
           class="btn btn-default btn-sm <? echo($view === 'list' ? 'switch_active disabled' : '') ?>"><i
                    class="fa fa-list-ul"></i> List</a>
        <a id="switch_grid"
           class="btn btn-default btn-sm <? echo($view === 'grid' ? 'switch_active disabled' : '') ?>"><i
                    class="fa fa-th"></i> Grid</a>
    </div>
    Items per page
    <? echo $this->Form->input('limit', array('label' => false, 'type' => 'select', 'div' => false, 'id' => 'search_limit', 'class' => 'form-control', 'escape' => false, 'options' => array('12' => '12', '24' => '24', '48' => '48', '96' => '96'), 'selected' => $limit)); ?>
    Order by
    <? echo $this->Form->input('order', array('label' => false, 'type' => 'select', 'div' => false, 'id' => 'search_order', 'class' => 'form-control', 'escape' => false, 'options' => array('price asc' => 'Lowest price', 'price desc' => 'Highest price', 'views desc' => 'Most popular', 'id desc' => 'Most recent'), 'selected' => $order_view)); ?>
    <? echo $this->Form->end(); ?>
</div>
<div class="property-area pt-30 pb-120 property-page">
    <div class="container">
        <div class="row <? echo 'properties_' . $view; ?> col-lg-10 col-xs-121">
            <? if(!empty($properties)){ ?>
                <h1 class="text-uppercase text-black text-center mb-30 property_name">showing properties for
                    sale <? echo $search_area; ?></h1>
            <? } else { ?>
                <h1 class="text-uppercase text-black text-center mb-30 property_name">
                    sorry no results found for <? echo $search_area; ?>. Please try again</h1>
            <? } ?>


            <?php
            if (!empty($properties)) {
                foreach ($properties as $property) {
                    echo $this->Element('search_' . $view, array('property' => $property));
                }
            } ?>
            <?php if ($this->Paginator->counter(array('format' => '%count%')) > 21) { ?>
                <div class="col-md-12">
                    <div class="pagination-content text-center block">
                        <ul class="pagination fix mt-40 mb-0">
                            <? echo $this->Paginator->first(__('<i class="fa fa-backward"></i>'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                            <?php echo $this->Paginator->prev(__('<i class="fa fa-caret-left"></i>'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                            <?php echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1, 'ellipsis' => '<li><a>&hellip;</a></li>')); ?>
                            <?php echo $this->Paginator->next(__('<i class="fa fa-caret-right"></i>'), array('tag' => 'li', 'currentClass' => 'disabled', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                            <?php echo $this->Paginator->last(__('<i class="fa fa-forward"></i>'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                        </ul>
                    </div>
                </div>
            <? } ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="advert well well-sm">
                Ad block
                Ad block
                Ad block
                Ad block
                Ad block
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="keywords_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">What is Keyword search?</h4>
            </div>
            <div class="modal-body">
                Keyword search allows you to find properties that include specific words e.g. garage.
                <br/>
                You can also search for exact phrases by using quotation marks e.g. "double garage", or to exclude a
                term you can prefix it with a minus sign e.g. -studio.
            </div>
        </div>
    </div>
</div>

<script>
    $("#switch_grid").click(function () {
        $('#FilterView').val('grid');
        $('#FilterSearchForm').submit();
    });

    $("#switch_list").click(function () {
        $('#FilterView').val('list');
        $('#FilterSearchForm').submit();
    });

    $("#search_order").change(function () {
        $('#FilterOrder').val($("#search_order option:selected").val());
        $('#FilterSearchForm').submit();
    });

    $("#search_limit").change(function () {
        $('#FilterLimit').val($("#search_limit option:selected").val());
        $('#FilterSearchForm').submit();
    });
</script>


<script>
    $(document).ready(function () {
        $(".advanced_search").click(function () {
            $("#advanced_search_params").toggle();
        });
    });
</script>