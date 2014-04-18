<h2 class="page-title underline vmargin50" id="page_title"><span><?php echo lang('user_register_header') ?></span></h2>

<div class="workflow_steps">
	<span id="active_step"><?php echo lang('user_register_step1') ?></span> &gt;
	<span><?php echo lang('user_register_step2') ?></span>
</div>

<?php if(!empty($error_string)): ?>
<div class="alert alert-error">
	<?php echo $error_string; ?>
</div>
<?php endif;?>
<div class="row-fluid">
    <div class="span4 offset4">
        <?php echo form_open('users/activate', 'id="activate-user"'); ?>
        <ul>
                <li>
                        <label for="email"><?php echo lang('user_email') ?></label>
                        <?php echo form_input('email', isset($_user['email']) ? $_user['email'] : '', 'maxlength="40"');?>
                </li>

                <li>
                        <label for="activation_code"><?php echo lang('user_activation_code') ?></label>
                        <?php echo form_input('activation_code', '', 'maxlength="40"');?>
                </li>

                <li>
                        <?php echo form_submit('btnSubmit', lang('user_activate_btn'), array('class' => 'pyro_button')) ?>
                </li>
        </ul>
        <?php echo form_close(); ?>
    </div>
</div>