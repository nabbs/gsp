<div class="login-box">
    <div class="login-logo">
        <a href="/panel"><b>Control Panel</b></a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <? echo $this->Form->create('Panel', array('class' => 'omb_loginForm')); ?>
        <div class="form-group has-feedback">
            <? echo $this->Form->input('email', array('label' => false, 'div' => false, 'class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'Email', 'required' => 'required')); ?>
            <i class="fa fa-envelope form-control-feedback"></i>
        </div>
        <div class="form-group has-feedback">
            <? echo $this->Form->input('password', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => __('Password'), 'required' => 'required')); ?>
            <i class="fa fa-lock form-control-feedback"></i>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <? echo $this->Form->button(__('Login'), array('title' => __('Login'), 'div' => false, 'class' => 'btn btn-primary btn-block btn-flat', 'type' => 'submit')); ?>
            </div>
        </div>
        <? echo $this->Form->end(); ?>
    </div>
</div>
