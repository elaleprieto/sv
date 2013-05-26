<!DOCTYPE html>
<html lang="es-ES">
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8">
	<![endif]--> <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php echo $this->element('head') ?>
        <?php echo $this->Html->css(array('vendor/bootstrap-responsive.min.css', 'layouts/default')) ?>
		<?php echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min') ?>
		<?php echo $this->fetch('meta') ?>
		<?php echo $this->fetch('css') ?>
	</head>
	<body>
		<!--[if lt IE 7]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<div class="container">
	        <header class="row">
				<div class="span12" id="banner">
					<div class="row">
						<div id="rampa" class="span6">
						</div>
						<div class="span6">
							<?php echo $this->Html->link($this->Html->image('logo.png', array('id'=>'logo')), '/contacto', array('escape'=>false)) ?>
						</div>
					</div>
				</div>
			</header>
			<nav id="menu">
				<?php echo $this->Html->link(':: Noticias', array('controller'=>'noticias', 'action'=>'index')) ?>
			</nav>

			<div class="fondoMarron row-fluid">
				<div class="fondoBlanco offset1 span10" id="content">
					<div class="row-fluid">
						<div class="span9">
							<?php echo $this->Session->flash(); ?>
				
							<article class="row-fluid">
								<div class="span12">
									<?php echo $this->fetch('content'); ?>
								</div>
							</article>
						</div>
						<aside class="span2">
							<?php echo $this->Html->image('telefonos.png') ?>
						</aside>
					</div>
				</div>
			</div>

            <?php echo $this->element('footer') ?>
        </div>
        <!-- /container -->
		
		<?php echo $this->element('sql_dump') ?>
		
		<!-- Scripts -->
		<?php echo $this->element('scripts') ?>
	</body>
</html>
