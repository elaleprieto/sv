<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8">
	<![endif]--> <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
			Comuna de Sauce Viejo
		</title>
		<?php echo $this -> Html -> meta('icon') ?>
		
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

		<?php echo $this -> Html -> css(array('vendor/bootstrap.min.css')) ?>

        <style>
            body {
                padding-top: 0px;
                padding-bottom: 40px;
            }
        </style>
        <?php echo $this -> Html -> css(array('vendor/bootstrap-responsive.min.css', 'layouts/default')) ?>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
		<?php echo $this -> fetch('meta') ?>
		<?php echo $this -> fetch('css') ?>
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
							<?php //echo $this->Html->image('logo.png', array('id'=>'logo')) ?>
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
							<?php echo $this -> Session -> flash(); ?>
				
							<article class="row-fluid">
								<div class="span12">
									<?php echo $this -> fetch('content'); ?>
								</div>
							</article>
						</div>
						<aside class="span2">
							<?php echo $this->Html->image('telefonos.png') ?>
						</aside>
					</div>
				</div>
			</div>

            <footer>
	            <hr id="finalLine">
            	<div class="row">
            		<div class="span6 right">
            			<p>Rivadavia 1164 - Teléfono 4950065 - 4950409</p>
            			<p>Sauce Viejo - Santa Fe</p>
            			<p>Cód. Postal 3017 - Fax: 4950065</p>
            			<p>E-mail: comunadesauceviejo@ciudad.com.ar</p>
            		</div>
            		<div class="span6">
            			<?php echo $this->Html->image('logo.png', array('id'=>'logoFooter')) ?>
            		</div>
            	</div>
            </footer>
        </div> <!-- /container -->
		
		
		
		
		
		
		<!-- <div id="container">
			<div id="header">
				<h1><?php echo $this -> Html -> link($cakeDescription, 'http://cakephp.org'); ?></h1>
			</div>
			<div id="content">
	
				<?php echo $this -> Session -> flash(); ?>
	
				<?php echo $this -> fetch('content'); ?>
			</div>
			<div id="footer">
				<?php echo $this -> Html -> link($this -> Html -> image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)); ?>
			</div>
		</div> -->
		<?php echo $this->element('sql_dump') ?>
		
		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
		<?php echo $this->fetch('script') ?>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>
</html>
