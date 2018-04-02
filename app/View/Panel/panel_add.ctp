<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add admin
        </h1>
        <ol class="breadcrumb">
            <li><a href="/panel/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/panel/panels">Admins</a></li>
            <li class="active">Add admin</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12 personal-info">
                <div class="box box-primary">
                    <? echo $this->Form->create('Panel', array('class' => 'form-horizontal omb_loginForm', 'id' => 'account_photo_form', 'type' => 'file', 'inputDefaults' => array('error' => false), 'autocomplete' => 'new-password')); ?>
                    <div class="form-group col-lg-12">
                        <label for="answer_input" class="control-label"><? echo __('Email'); ?>:</label>
                        <div class="">
                            <? echo $this->Form->input('email', array('label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'answer_input', 'placeholder' => __(''), 'required' => 'required', 'type' => 'text')); ?>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="control-label"><? echo __('Password'); ?></label>
                        <div class="">
                            <?php echo $this->Form->input('change_pass', array('label' => false, 'div' => false, 'id' => '_edit_password', 'class' => 'form-control', 'type' => 'password', 'value' => false, 'autocomplete' => 'new', 'placeholder' => 'Leave blank if not needed to change')); ?>                        </div>
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