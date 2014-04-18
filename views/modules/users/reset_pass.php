<h2 class="page-title underline vmargin50" id="page_title"><span><?php echo lang('user_reset_password_title');?></span></h2>

<?php if(!empty($error_string)):?>
<!-- Woops... -->
<div class="alert alert-error">
	<?php echo $error_string;?>
</div>
<?php endif;?>
<div class="row-fluid">
    <div class="span4 offset4">
        <?php if(!empty($success_string)): ?>
                <div class="alert alert-success">
                        <?php echo $success_string; ?>
                </div>
        <?php else: ?>

                <?php echo form_open('users/reset_pass', array('id'=>'reset-pass')); ?>

                <h4 class="reset-instructions"><?php echo lang('user_reset_instructions'); ?></h4>

                <ul>
                        <li>
                                <label for="email"><?php echo lang('user_email') ?></label>
                                <input type="text" name="email" maxlength="100" value="<?php echo set_value('email'); ?>" />
                        </li>
                        <li>
                                <label for="user_name"><?php echo lang('user_username') ?></label>
                                <input type="text" name="user_name" maxlength="40" value="<?php echo set_value('user_name'); ?>" />
                        </li>
                        <li>
                                <?php echo form_submit('btnSubmit', lang('user_reset_pass_btn')) ?>
                        </li>
                </ul>
                <?php echo form_close(); ?>

        <?php endif; ?>
    </div>
</div>