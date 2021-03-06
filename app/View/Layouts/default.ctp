<!DOCTYPE html>
<html lang="es-ES">
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8">
	<![endif]--> <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php echo $this->element('head') ?>
		<?php echo $this->element('head-default') ?>
        
		<?php echo $this->fetch('meta') ?>
		<?php echo $this->fetch('css') ?>
	</head>
	<body>
		<!--[if lt IE 7]>
		    <p class="chromeframe alert">Estás usando un navegador <strong>desactualizado</strong>. Por favor, <a href="http://browsehappy.com/">actualiza tu navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true">activa Google Chrome Frame</a> para mejorar tu experiencia.</p>
		<![endif]-->
		<div class="container">
	        <header class="row">
				<div class="span12">
					<div class="row">
						<div id="bannerTop" class="span12">
							<?php echo $this->Html->image('top/sauce.jpg') ?>
						</div>
						<div id="rampa" class="span6">
						</div>
						<div class="span1">
							<?php echo $this->Html->link($this->Html->image('logo.png', array('id'=>'logo')), '/info', array('escape'=>false)) ?>
						</div>
					</div>
				</div>
			</header>
			<?php echo $this->element("nav") ?>

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
						<aside class="span3">
							<div class="row-fluid">
								<div class="span12">
									<?php echo $this->Html->image('aside/telefonos.png') ?>
								</div>
							</div>
							<div class="bannerAside row-fluid">
								<div class="span12">
									<?php echo $this->Html->image('aside/horariosOficina.png') ?>
								</div>
							</div>
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
