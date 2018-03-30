<div class="container">
    <div class="omb_login text-center">
        <h3 class="omb_authTitle">Control panel</h3>
        <div class="row col-lg-6 col-lg-offset-3">
            <div class="col-xs-12 col-sm-12">
                <? echo $this->Form->create('Panel', array('class' => 'omb_loginForm')); ?>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope color-blue"></i></span>
                    <? echo $this->Form->input('email', array('label' => false, 'div' => false, 'class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'Email', 'required' => 'required')); ?>
                </div>
                <span class="help-block"></span>
            <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope color-blue"></i></span>
                    <? echo $this->Form->input('name', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required')); ?>
                </div>
                <span class="help-block"></span>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <? echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => __('Password'), 'required' => 'required')); ?>
                </div>
                <span class="help-block"></span>
                <? echo $this->Form->button(__('Login'), array('title' => __('Login'), 'div' => false, 'class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit')); ?>
                <? echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>