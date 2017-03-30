<!DOCTYPE HTML>
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
  	<meta name="viewport" content="width=device-width,user-scalable=no">
  	<title>八云酱迷路中</title>
    <?php $this->header("generator=&template=&"); ?>
    <style>
        body {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0
        }
        img {
            width: 100%;
            height: 100%;
            position: fixed
        }
    </style>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/rainday.js'); ?>"></script>
    <script>
		function run() {
			var image = document.getElementById('background');
			image.onload = function() {
				var engine = new RainyDay({
					image: this,
                    opacity: 0.25
				});
				engine.rain([ [1, 0, 10], [1, 5, 1] ], 50);
			};
			image.crossOrigin = 'anonymous';
        	image.src = "<?php $this->options->themeUrl('image/header.jpg'); ?>";
        }
	</script>
</head>
<body onload="run();">
    <img id="background" alt="background">
</body>
</html>