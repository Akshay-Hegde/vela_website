<h2 class="page-title underline vmargin50" id="page_title"><span><?php echo lang('user_login_header') ?></span></h2>

<?php if (validation_errors()): ?>
<div class="alert alert-error">
	<?php echo validation_errors();?>
</div>
<?php endif; ?>

<div class="row-fluid">
    <div class="span4 offset4">
        <?php echo form_open('users/login', array('id'=>'login'), array('redirect_to' => $redirect_to)); ?>
        <ul>
                <li>
                    <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
                      <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="span12" id="prependedInput" placeholder="'.lang('user_email').'"')?>
                    </div>


                </li>
                <li>
                    <div class="input-prepend">
                          <span class="add-on"><i class="icon-key"></i></span>
                          <input type="password" name="password" maxlength="20" class="span12" id="prependedInput" placeholder="<?php echo lang('user_password'); ?>" />
                    </div>
                </li>
                <li id="remember_me">
                    <label class="checkbox">
                        <?php echo form_checkbox('remember', '1', FALSE); ?> <?php echo lang('user_remember'); ?>
                    </label>

                </li>
                <li class="form_buttons">
                    <input type="submit" value="<?php echo lang('user_login_btn') ?>" name="btnLogin"/> <span class="register"> | <a href="<?php echo site_url('register');?>" class="btn"><?php echo lang('user_register_btn');?></a></span>
                </li>
                <li class="reset_pass">
                        <?php echo anchor('users/reset_pass', lang('user_reset_password_link'));?>
                </li>
        </ul>
        <?php echo form_close(); ?>
    </div>
</div>
