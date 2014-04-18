<h2 class="page-title underline vmargin50" id="page_title"><span><?php echo lang('user_login_header') ?></span></h2>

<div class="alert alert-success">
        <?php echo $this->lang->line('user_activated_message'); ?>
</div>
<div class="row-fluid">
    <div class="span4 offset4">
        <?php echo form_open('users/login', array('id'=>'login')); ?>
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

                <li class="form_buttons">
                        <input type="submit" value="<?php echo lang('user_login_btn') ?>" name="btnLogin" />
                </li>
        </ul>
        <?php echo form_close(); ?>
    </div>
</div>