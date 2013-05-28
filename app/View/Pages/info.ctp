<?php $this -> Html -> css('pages/info', null, array('inline' => false))
?>

<div class="row-fluid">
			<div class="offset1 span3 text-center">
				<?php echo $this->Html->image('logoVerde.png')
				?>
			</div>
			<div class="span4">
				<div class="row-fluid">
					<div class="span12">
						<h1 class="title">DATOS</h1>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<hr class="title span12" />
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							País:  Argentina
							<br />
							Provincia:  Santa Fe
							<br />
							Departamento: La Capital
							<br />
							Fundación: 1891 (Manuel Gálvez)
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							Superficie: Total 189 km²
							<br />
							Altitud: Media 10 msnm
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							Población: Total 8 505 hab.
							<br />
							Densidad: 34,42 hab/km²
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							Gentilicio: sauceviejense
							<br />
							Código postal: 3017
							<br />
							Prefijo telefónico: 0342
							<br />
							Aglomerado urbano: Gran Santa Fe
						</p>
					</div>
				</div>
			</div>
			<div class="offset1 span3">
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
			</div>
</div>
<div class="row-fluid">
	<div class="offset1 span11">
		<div class="relative row-fluid">
			<div class="span7">
				<div class="row-fluid">
					<div class="span12">
						<h1 class="title">CÓMO LLEGAR</h1>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<hr class="title span12" />
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							La localidad de Sauce Viejo se ubica al centro-este de la Provincia de Santa Fe. Se encuentra a 22 kilómetros de Santa Fe Capital; a 52 kilómetros de Paraná (Entre Ríos); 105 kilómetros de Rosario; a 115 kilómetros de Rafaela.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							<strong>Desde Santa Fe Capital</strong>
							<br />
							Se arriba a Sauce Viejo a través de la Ruta Nacional Nº 11 o siguiendo la Autopista "Brigadier General Estanislao López" que une las ciudades de Santa Fe y Rosario, con dirección sur.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							<strong>Desde Paraná (Entre Ríos)</strong>
							<br />
							Se debe tomar la Ruta Nacional Nº 168 hasta Santa Fe Capital; desde allí tomar la Ruta Nacional Nº 11 con dirección sur.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							<strong>Desde Rosario</strong>
							<br />
							Se arriba a Sauce Viejo tomando la Ruta Provincial Nº 64 y luego la Ruta Nacional Nº 11, o siguiendo la Autopista "Brigadier General Estanislao López".
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<p class="info">
							<strong>Desde Rafaela</strong>
							<br />
							Se debe tomar la Ruta Provincial Nº 70; Ruta Provincial Nº 6; Ruta Nacional Nº 19 y finalmente la Ruta Nacional Nº 11 con dirección sur.
						</p>
					</div>
				</div>
			</div>
		
			<!-- Mapa -->
			<div class="absolute bottomCero rightTreinta pull-right span5">
				<div class="pull-right right row-fluid">
					<div class="span12">
						<a href="https://maps.google.com.ar/maps?q=-31.771029,-60.837203&num=1&t=h&z=16" target="_blank">
							<?php echo $this->Html->image('iconoMapa.png', array('id'=>'iconoMapa')) ?>
						</a>
						<?php echo $this->Html->image('mapa.png', array('class'=>'mapa')) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
