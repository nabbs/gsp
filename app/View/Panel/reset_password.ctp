    <div class="omb_login text-center">
        <h3 class="omb_authTitle">Reset Password</h3>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <? echo $this->Form->create('Panel', array('class' => 'omb_loginForm')); ?>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                    <? echo $this->Form->input('email', array('label' => false, 'div' => false, 'class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'Email', 'required' => 'required')); ?>
                </div>
                <span class="help-block"></span>
                <? echo $this->Form->button(__('Reset Password'), array('title' => __('Reset Password'), 'div' => false, 'class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit')); ?>
                <? echo $this->Form->end(); ?>
            </div>
        </div>
        <h3 class="omb_authTitle"><a href="/panel/login">Login</a></h3>
    </div>