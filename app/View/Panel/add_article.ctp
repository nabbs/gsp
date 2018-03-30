<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit article
        </h1>
        <ol class="breadcrumb">
            <li><a href="/panel/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/panel/blog">Blog</a></li>
            <li class="active">Edit article</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <? echo $this->Html->script('ck/ckeditor.js'); ?>
            <div class="col-md-12 personal-info">
                <div class="box box-primary">
                    <? echo $this->Form->create('Article', array('class' => 'form-horizontal omb_loginForm', 'id' => 'account_photo_form', 'type' => 'file', 'inputDefaults' => array('error' => false), 'autocomplete' => 'new-password')); ?>
                    <div class="form-group col-lg-12">
                        <label for="answer_input" class="control-label"><? echo __('Title'); ?>:</label>
                        <div class="">
                            <? echo $this->Form->input('title', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'answer_input', 'placeholder' => __(''), 'required' => 'required', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Text'); ?></label>
                        <div class="">
                            <? echo $this->CK->textarea('Article.text', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Meta Keywords'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('keywords', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_type_select', 'placeholder' => __('Meta keyword'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Meta Description'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('description', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_type_select', 'placeholder' => __('Meta description'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('SEO URL (without / )'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('url', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_type_select', 'placeholder' => __('SEO URL'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Where to display'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('type', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_type', 'type' => 'select', 'options' => array('header' => 'header', 'footer' => 'footer', 'both' => 'both'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Status'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('active', array('label' => false, 'div' => false, 'class' => 'form-control', 'required' => 'required', 'type' => 'select', 'options' => array('1' => __('Enabled'), '0' => __('Disabled ')))); ?>
                        </div>
                    </div>
                    <? echo $this->Form->button(__('<i class="fa fa-save"></i> Save'), array('title' => __('Save'), 'div' => false, 'class' => 'btn btn-primary', 'type' => 'submit','escape'=>false)); ?>

                    <? echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </section>
</div>