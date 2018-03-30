<div class="omb_login text-center">
    <h3><i class="fa fa-lock fa-4x"></i></h3>
    <h3 class="omb_authTitle">Password change</h3>
    <div class="row omb_row-sm-offset-3">
        <div class="col-xs-12 col-sm-6">
            <? echo $this->Form->create('Panel', array('class' => 'omb_loginForm')); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'id' => '_edit_password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'Enter new password', 'type' => 'password', 'value' => false)); ?>
            </div>
            <span class="help-block"></span>
            <? echo $this->Form->button(__('Reset'), array('title' => __('Reset'), 'div' => false, 'class' => 'btn btn-primary', 'type' => 'submit')); ?>
            <? echo $this->Form->end(); ?>
        </div>
    </div>
    <h3 class="omb_authTitle"><a href="/panel/login">Login</a></h3>
</div>
