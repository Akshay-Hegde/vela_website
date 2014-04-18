<section id="respond" class="vmargin">
    <div class="span3 side" >
        <h3><span><?php echo lang('comments:your_comment'); ?></span></h3>
        <p>We would be glad to get your feedback. Take a moment to comment and tell us what you think.</p>
        <p>* Required fields</p>
        <p>Email will not be published.</p>
    </div>
    <div class="span9">
        <?php echo form_open("comments/create/{$module}", 'id="create-comment"') ?>
            <noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>
            <?php echo form_hidden('entry', $entry_hash) ?>
            

           <?php if ( ! is_logged_in()): ?>
                <p>
                    <input type="text" class="required" value="<?php echo $comment['name'] ?>" name="name" id="author" placeholder="<?php echo lang('comments:name_label'); ?>*">
                </p>
                <p>
                    <input type="email" class="required" value="<?php echo $comment['email'] ?>" name="email" id="email" placeholder="Email Address*">
                </p>
                <p>
                    <input type="text" value="<?php echo $comment['website'] ?>" name="website" id="url" placeholder="<?php echo lang('comments:website_label'); ?>">
                </p>
            <?php endif; ?>


            <p>
                <textarea class="required span12" name="comment" rows="5" cols="30" id="comment" placeholder="<?php echo lang('comments:message_label'); ?>*"></textarea>
            </p>

            <p class="form-submit">
                <input type="submit" class="btn" value="<?php echo lang('comments:send_label');?>" id="submit" name="submit">
            </p>

        <?php echo form_close(); ?>
    </div>
        
</section>

