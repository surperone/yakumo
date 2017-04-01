<?php $this->need('header.php'); ?>

<body class="post-template">

	<header id="header" data-url="<?php if(isset($this->fields->cover)){$this->fields->cover();}else{$this->options->themeUrl('image/header.jpg');} ?>" class="home-header blog-background banner-mask lazy no-cover">		
    	<div class="nav-header">
            <div class="nav-header-container">
                 <a href="<?php $this->options->siteUrl(); ?>" class="back-home">首页</a>
            </div>
    	</div>
        <div class="header-wrap" >
            <div class="post-info-container">
                <h2 class="post-page-title ">
                	<?php $this->title() ?>              	
            	</h2>
	            <time class="post-page-time"><?php $this->date('d M Y'); ?></time>
	            <span class="post-page-author"><?php $this->author(); ?></span>
                <span class="post-page-tags">
                    <?php $this->tags(' ', true, ''); ?>
               	</span>
           	</div>
        </div>
        <div class="arrow_down">
               <a href="javascript:;"></a>
        </div>
	</header>

	<main class="content" id="main" role="main">
	    <article>
	     	<section class="post-content">
	     		<div class="single-post-inner">
	        		<?php $this->content(); ?>
	       			<div class="tag-box">
	          			<?php $this->tags(' ', true, ''); ?>
	        		</div>
			        <div class="money-like" id="like-money">
			            <div class="reward-button">赏
			            	<span class="money-code">
				           		<span class="alipay-code">
					                <a href="javascript:;">
					                	<img src="<?php $this->options->themeUrl('image/alipay.png'); ?>"><b>支付宝打赏</b>
					                </a>
				           		</span>
					            <span class="wechat-code">
					            	<a href="javascript:;">
					                	<img src="<?php $this->options->themeUrl('image/wechat.png'); ?>"><b>微信打赏</b>
					                </a>
					            </span>
					        </span>
		            	</div>
		            	<p class="money-notice">若你觉得我的文章对你有帮助 欢迎点击上方按钮对我打赏</p>
		        	</div>
			        <div class="qr-code">
			            <img src="https://pan.baidu.com/share/qrcode?w=145&h=145&url=<?php $this->permalink() ?>" alt="">
			            <p>扫描二维码 分享此文章</p>
			        </div>
	     		</div>
	    	</section>
	    	
				<?php if (!empty($this->options->authorAvatar)): ?>			     			
				<section class="author">
	                <figure class="author-image">
	                    <a class="img" href="<?php $this->author->permalink(); ?>" style="background-image: url(<?php $this->options->authorAvatar(); ?>)"><span class="hide"><?php $this->author(); ?></span></a>
	                </figure>               
	                <section class="author-detail">
	                    <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>        
	                </section>
	            </section>	

			    <?php endif; ?>

	    </article>
	    <section class="share">
            <div class="share-icons" id="share-icons">
            	<?php if (!empty($this->options->weibo)): ?>	
               	<a class="icon-share" target="_blank" href="<?php $this->options->weibo(); ?>">
                    <span class=""><i class="iconfont iconfont-weibo">&#xe712;</i></span>
                </a>
                <?php endif; ?>

                <?php if (!empty($this->options->zhihu)): ?>	
                <a class="icon-share" target="_blank" href="<?php $this->options->zhihu(); ?>">
                    <span class=""><i class="iconfont iconfont-zhihu">&#xe704;</i></span>
                </a>
                <?php endif; ?>

                <?php if (!empty($this->options->douban)): ?>	
                <a class="icon-share" target="_blank" href="<?php $this->options->douban(); ?>">
                    <span class=""><i class="iconfont iconfont-douban">&#xe711;</i></span>
                </a>
                <?php endif; ?>

                <?php if (!empty($this->options->github)): ?>	
                <a class="icon-share" target="_blank" href="<?php $this->options->github(); ?>">
                    <span class=""><i class="iconfont iconfont-github">&#xe710;</i></span>
                </a>
                <?php endif; ?>

                <?php if (!empty($this->options->facebook)): ?>	
                <a class="icon-share" target="_blank" href="<?php $this->options->facebook(); ?>">
                    <span class=""><i class="iconfont iconfont-facebook">&#xe708;</i></span>
                </a>
                <?php endif; ?>

                <?php if (!empty($this->options->twitter)): ?>	
                <a class="icon-share" target="_blank" href="<?php $this->options->twitter(); ?>">
                    <span class=""><i class="iconfont iconfont-twitter">&#xe701;</i></span>
                </a>
                <?php endif; ?>
            </div>
        </section>
		<?php $this->need('comments.php'); ?>
	</main>

	<script type="text/javascript" src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('fancybox/jquery.fancybox.css'); ?>"/>
	<script type="text/javascript" src="<?php $this->options->themeUrl('fancybox/jquery.fancybox.pack.js'); ?>"></script>

	<script>
	    $(document).ready(function() {
	        $('.fancybox').fancybox();
	    });
	</script>

	<?php $this->need('footer.php'); ?>
