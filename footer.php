	<footer class="site-footer clearfix ">
	    <section class="copyright "><b><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> &copy; <?php echo date("Y"); ?></b></section>        
        <section><b>京ICP备16042939号</b></section>    
        <a href="https://www.upyun.com" target="_blank"><img style="max-width:75px;max-height:15px" src="https://bayun.b0.upaiyun.com/yakumo/image/upyun.png"></a>  
	</footer>  
	<?php $this->footer(); ?>
	<script type="text/javascript" src="https://bayun.b0.upaiyun.com/yakumo/js/all.min.js"></script>
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
