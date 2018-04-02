<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit blog record
        </h1>
        <ol class="breadcrumb">
            <li><a href="/panel/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/panel/articles">Articles</a></li>
            <li class="active">Edit blog record</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <? echo $this->Html->script('ck/ckeditor.js'); ?>
            <div class="col-md-12 personal-info">
                <div class="box box-primary">
                    <? echo $this->Form->create('Blog', array('class' => 'form-horizontal omb_loginForm', 'id' => 'account_photo_form', 'type' => 'file', 'inputDefaults' => array('error' => false), 'autocomplete' => 'new-password')); ?>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Title'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('title', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'answer_input', 'placeholder' => __(''), 'required' => 'required', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Text'); ?></label>
                        <div class="">
                            <? echo $this->CK->textarea('Blog.text', array('label' => false, 'div' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Meta keywords'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('keywords', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_keywords', 'placeholder' => __('Meta keyword'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Meta description'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('description', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_description', 'placeholder' => __('Meta description'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('SEO URL'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('url', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_url', 'placeholder' => __('SEO URL'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Record main image'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('photo', array('type'=>'file','label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'input_photo', 'placeholder' => __('Image'), 'required' => 'false')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Status'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('active', array('label' => false, 'div' => false, 'class' => 'form-control', 'required' => 'required', 'type' => 'select', 'options' => array('1' => __('Enabled'), '0' => __('Disabled')))); ?>
                        </div>
                    </div>
                  <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Date'); ?></label>
                        <div class="">
                            <? echo $this->Form->input('date', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'date', 'placeholder' => __('Date'), 'required' => 'required')); ?>
                        </div>
                    </div>
                    <? echo $this->Form->button(__('<i class="fas fa-save"></i> Save'), array('title' => __('Save'), 'div' => false, 'class' => 'btn btn-primary', 'type' => 'submit', 'escape' => false)); ?>

                    <? echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </section>
</div>