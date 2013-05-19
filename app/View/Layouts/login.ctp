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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
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
        <?php echo $this -> Html -> css(array('vendor/bootstrap-responsive.min.css', 'layouts/admin')) ?>

        <?php echo $this->Html->script('vendor/modernizr-2.6.2-respond-1.1.0.min') ?>
        
		<?php echo $this -> fetch('meta') ?>
		<?php echo $this -> fetch('css') ?>
	</head>
	<body>
		<!--[if lt IE 7]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<div class="container">
			<div class="row"><div id="lineaHeader" class="span12"></div></div>
	        <header class="row">
				<div class="offset1 span10 text-center">
					<?php echo $this->Html->image('logo.png', array('id'=>'logo')) ?>
					<div id="nombreSeccion" class="text-right"><?php echo $this -> fetch('nombreSeccion'); ?></div>
				</div>
			</header>
				
			<section id="content">
				<?php echo $this -> Session -> flash(); ?>
	
				<div class="row-fluid">
					<div class="span12" id="outside">
						<div class="row-fluid" id="lineaTop">
							
						</div>
						<div class="row-fluid">
							<div class="offset1 span10" id="inside">
								<div class="span12">
									<?php echo $this -> fetch('content'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

            <footer>
	            <hr id="finalLine">
            	<div class="row">
            		<div class="span6 text-right">
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
		
		<?php echo $this->element('sql_dump') ?>
		
		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo $this->Html->url('/') ?>js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		<?php echo $this->Html->script('vendor/bootstrap.min') ?>
		<?php echo $this->fetch('script') ?>
		<script async="async" type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-27799433-6']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
