<!DOCTYPE html>
<html lang="es-ES">
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8">
	<![endif]--> <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php echo $this->element('head') ?>
		<?php echo $this->Html->css(array('vendor/bootstrap-responsive.min.css', 'layouts/admin')) ?>
		<?php echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min') ?>
		<?php echo $this->fetch('meta') ?>
		<?php echo $this->fetch('css') ?>
	</head>
	<body>
		<!--[if lt IE 7]>
		    <p class="chromeframe alert">Estás usando un navegador <strong>desactualizado</strong>. Por favor, <a href="http://browsehappy.com/">actualiza tu navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true">activa Google Chrome Frame</a> para mejorar tu experiencia.</p>
		<![endif]-->
		<div class="container">
			<div class="row"><div id="lineaHeader" class="span12"></div></div>
	        <header class="row">
				<div class="offset1 span10 text-center">
					<?php echo $this->Html->image('logo.png', array('id'=>'logo')) ?>
					<div id="nombreSeccion" class="text-right"><?php echo $this->fetch('nombreSeccion'); ?></div>
				</div>
			</header>
				
			<section id="content">
				<?php echo $this->Session->flash(); ?>
	
				<div class="row-fluid">
					<div class="span12" id="outside">
						<div class="row-fluid" id="lineaTop">
							<div class="offset1 span11" >
								<?php echo $this->Html->link('Inicio', array('admin'=>FALSE, 'controller'=>'noticias', 'action'=>'index')) ?>
								<span class="separador">|</span>
								<?php echo $this->Html->link('Administrar', array('admin'=>TRUE, 'controller'=>'noticias', 'action'=>'index')) ?>
								<span class="separador">|</span>
								<?php echo $this->Html->link('Cargar Noticia', array('admin'=>TRUE, 'controller'=>'noticias', 'action'=>'add')) ?>
							</div>
						</div>
						<div class="row-fluid">
							<div class="offset1 span10" id="inside">
								<div class="span12">
									<?php echo $this->fetch('content'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

            <?php echo $this->element('footer') ?>
        </div>
        <!-- /container -->
		
		<?php echo $this->element('sql_dump') ?>
		
		<!-- Scripts -->
		<?php echo $this->element('scripts') ?>
	</body>
</html>
