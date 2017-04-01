	<footer class="site-footer clearfix ">
	    <section class="copyright "><b><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> &copy; <?php echo date("Y"); ?></b></section>        
        <section><b>主题作者 <a href="https://www.bayun.org" target="_blank">八云酱</a></b></section>     
	</footer>  
	<?php $this->footer(); ?>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/all.min.js'); ?>"></script>
	<script>
	(function(){
	    var bp = document.createElement('script');
	    var curProtocol = window.location.protocol.split(':')[0];
	    if (curProtocol === 'https') {
	        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
	    }
	    else {
	        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	    }
	    var s = document.getElementsByTagName("script")[0];
	    s.parentNode.insertBefore(bp, s);
	})();
	</script>
</body>	
</html>
