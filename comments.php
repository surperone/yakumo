    <?php function threadedComments($comments, $options) {
        $commentClass = '';
            if ($comments->authorId) {
                if ($comments->authorId == $comments->ownerId) {
                    $commentClass .= ' comment-by-author';
                } else {
                    $commentClass .= ' comment-by-user';
                }
            }
        $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
	?>

    <li id="li-<?php $comments->theId(); ?>" class="media comment-body<?php 
        if ($comments->levels > 0) {
            echo ' comment-child';
            $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
        } else {
            echo ' comment-parent';
        }
        $comments->alt(' comment-odd', ' comment-even');
        echo $commentClass;
        ?>">
        <span class="pull-left">
        	<?php $comments->gravatar('80', ''); ?>
        </span>
        <div id="<?php $comments->theId(); ?>" class="media-body">
            <p><?php $comments->author(); ?> <time datetime="<?php $comments->date('Y.m.d H:i'); ?>"><?php $comments->date('Y.m.d H:i'); ?></time>
            <span class="comment-reply pull-right"><?php $comments->reply(); ?></span></p>
            <div class="comment-content"><?php $comments->content(); ?></div>
        </div>
        <?php if ($comments->children) { ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </li>
    <?php } ?>
			
	<div id="comments">
        <?php $this->comments()->to($comments); ?>
        <?php if ($comments->have()): ?>              
        <?php $comments->listComments(); ?>
        <?php $comments->pageNav('前一页', '后一页'); ?>
        <?php endif; ?>			  
        <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
		    <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
		    </div>
		    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if($this->user->hasLogin()): ?>
                <p><?php _e('登录账号 => '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> => <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('注销'); ?></a></p>
                <?php else: ?>

                <div id="comments-info">
                    <input type="text" name="author" id="author" class="text" placeholder="昵称" value="<?php $this->remember('author'); ?>" required /> 
                    <input type="email" name="mail" id="mail" class="text" placeholder="邮箱" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
        
                    <input type="url" name="url" id="url" class="text" placeholder="网站" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                </div>
                <?php endif; ?>
                <div id="comments-detail">
                    <textarea rows="5" name="text" id="textarea" class="textarea" placeholder="添加新评论" required ><?php $this->remember('text'); ?></textarea>
                    <button type="submit" class="submit"><i class="iconfont iconfont-submit" style="font-size:4rem;color:#77787b">&#xe600;</i></button>
                </div>   
            </form>
        </div>
        <?php else: ?>
            <p class="bg-warning">评论已关闭</p>
        <?php endif; ?>
    </div>