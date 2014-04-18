<?php echo form_open('users/login', array('id'=>'login-small')); ?>
<?php if (isset($redirect_hash) && $redirect_hash): ?>
<?php echo form_hidden('redirect_hash', $redirect_hash); ?>
<?php endif; ?>
<ul>
	<li class="email">
		<div class="input-prepend">
                  <span class="add-on"><i class="icon-user"></i></span>
                  <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="span12" id="prependedInput" placeholder="'.lang('user_email').'"')?>
                </div>
	</li>
	<li class="pword">
		<div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span>
                      <input type="password" name="password" maxlength="20" class="span12" id="prependedInput" placeholder="<?php echo lang('user_password'); ?>" />
                </div>
	</li>
	<li class="form-buttons">
		<input type="submit" value="<?php echo lang('user_login_btn') ?>" name="btnLogin" /> | <a href="<?php echo site_url('register');?>" class="btn"><?php echo lang('user_register_btn');?></a>
	</li>
	<li class="remember-me">
		<label class="checkbox">
                    <?php echo form_checkbox('remember', '1', FALSE); ?> <?php echo lang('user_remember'); ?>
                </label>
	</li>	
</ul>
<?php echo form_close(); ?>