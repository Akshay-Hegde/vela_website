<section id="comments" class="vmargin">

    <h3 class="h-bg-1 vmargin"><span><?php echo lang('comments:title'); ?></span></h3>

            
    <?php if ($comments): ?>

        <?php foreach ($comments as $item): ?>
        <ul class="comment-list">
            <li>
                <div class="commentHolder row-fluid">
                    <div class="span2">
                        <div>
                            <?php echo gravatar($item->user_email, 60); ?>
                        </div>
                    </div>


                    <div class="comment-info span10">
                        <div class="name">
                            <p><?php echo $item->website ? anchor($item->website, $item->user_name, 'rel="external nofollow"') : $item->user_name; ?></p>
                        </div>
                        <div class="comment-meta">
                            <p><?php echo format_date($item->created_on); ?></p>
                        </div>
                        <div>
                            <?php if (Settings::get('comment_markdown') AND $item->parsed > ''): ?>
                                <?php echo $item->parsed; ?>
                            <?php else: ?>
                                <p><?php echo nl2br($item->comment); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>	
            </li>

        </ul>
        <?php endforeach; ?>

    <?php else: ?>
        <p><?php echo lang('comments:no_comments'); ?></p>
    <?php endif; ?>
</section>



