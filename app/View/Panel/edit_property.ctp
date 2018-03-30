<div class="col-lg-8 col-lg-offset-2 personal-info">
    <h3 class="text-center">Edit property</h3>

    <? echo $this->Form->create('Property', array('class' => 'form-horizontal omb_loginForm', 'id' => 'register_form', 'type' => 'file', 'inputDefaults' => array('error' => false), 'autocomplete' => 'new-password')); ?>
    <div class="form-group col-lg-12">
        <label class="control-label">Listing Status</label>
        <div class="">
            <? echo $this->Form->input('listing_status', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'select', 'required' => 'required', 'options' => array('rent' => 'rent', 'sale' => 'sale'))); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Num floors</label>
        <div class="">
            <? echo $this->Form->input('num_floors', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Num Bedrooms</label>
        <div class="">
            <? echo $this->Form->input('num_bedrooms', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>

    <div class="form-group col-lg-12">
        <label class="control-label">Num Bathrooms</label>
        <div class="">
            <? echo $this->Form->input('num_bathrooms', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Latitude</label>
        <div class="">
            <? echo $this->Form->input('latitude', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Longitude</label>
        <div class="">
            <? echo $this->Form->input('longitude', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Furnished state</label>
        <div class="">
            <? echo $this->Form->input('furnished_state', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'select', 'required' => 'required', 'options' => array('furnished' => 'furnished', 'unfurnished' => 'unfurnished'))); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Agent address</label>
        <div class="">
            <? echo $this->Form->input('agent_address', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Category</label>
        <div class="">
            <? echo $this->Form->input('category', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Property type</label>
        <div class="">
            <? echo $this->Form->input('property_type', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Post town</label>
        <div class="">
            <? echo $this->Form->input('post_town', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Details url</label>
        <div class="">
            <? echo $this->Form->input('details_url', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Outcode</label>
        <div class="">
            <? echo $this->Form->input('outcode', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Property report url</label>
        <div class="">
            <? echo $this->Form->input('property_report_url', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">County</label>
        <div class="">
            <? echo $this->Form->input('county', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Price</label>
        <div class="">
            <? echo $this->Form->input('price', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Status</label>
        <div class="">
            <? echo $this->Form->input('status', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'select', 'required' => 'required', 'options' => array('for_sale' => 'for sale', 'sale_under_offer' => 'sale under offer', 'sold' => 'sold', 'to_rent' => 'to rent', 'rent_under_offer' => 'rent under offer', 'rented' => 'rented'))); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Agent name</label>
        <div class="">
            <? echo $this->Form->input('agent_name', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Num recepts</label>
        <div class="">
            <? echo $this->Form->input('num_recepts', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'number', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">First published date</label>
        <div class="">
            <? echo $this->Form->input('first_published_date', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Displayable address</label>
        <div class="">
            <? echo $this->Form->input('displayable_address', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Street name</label>
        <div class="">
            <? echo $this->Form->input('street_name', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Agent phone</label>
        <div class="">
            <? echo $this->Form->input('agent_phone', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text', 'required' => 'required')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Last published date</label>
        <div class="">
            <? echo $this->Form->input('last_published_date', array('label' => false, 'div' => false, 'class' => 'form-control', 'type' => 'text')); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Short description</label>
        <div class="">
            <?php echo $this->Form->input('short_description', array('label' => false, 'type' => 'textarea', 'div' => false, 'id' => 'aboutme', 'class' => 'form-control', 'cols' => 30, 'rows' => 5, 'maxlength' => 1000, 'placeholder' => __('User\'s about text'))); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label">Description</label>
        <div class="">
            <?php echo $this->Form->input('description', array('label' => false, 'type' => 'textarea', 'div' => false, 'id' => 'aboutme', 'class' => 'form-control', 'cols' => 30, 'rows' => 10, 'maxlength' => 1000, 'placeholder' => __('User\'s about text'))); ?>
        </div>
    </div>
    <div class="form-group col-lg-12">
        <label class="control-label"></label>
        <div class="">
            <? echo $this->Form->button(__('<i class="fas fa-save"></i> Save'), array('title' => __('Сохранить'), 'div' => false, 'class' => 'btn btn-primary', 'type' => 'submit', 'escape' => false)); ?>

        </div>
    </div>
    <? echo $this->Form->end(); ?>
</div>