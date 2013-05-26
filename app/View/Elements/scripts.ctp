<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="<?php echo $this->Html->url('/') ?>js/vendor/jquery-1.9.1.min.js"><\/script>')
</script>
<?php echo $this->Html->script('vendor/bootstrap.min') ?>
<?php echo $this->fetch('script') ?>
<script async="async" type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-27799433-6']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})(); 
</script>