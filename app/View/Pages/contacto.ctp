<?php $this -> Html -> css('pages/contacto', null, array('inline' => false))
?>

<div id="contacto">
	<div class="row">
		<div class="span4 text-center">
			<?php echo $this->Html->image('logoVerde.png')
			?>
		</div>
		<div class="span4">
			<div class="row">
				<div class="span4">
					<h1 class="title">DATOS</h1>
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<hr class="title span3" />
				</div>
			</div>
			<div class="row">
				<div class="span4">
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
			<div class="row">
				<div class="span4">
					<p class="info">
						Superficie: Total 189 km²
						<br />
						Altitud: Media 10 msnm
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<p class="info">
						Población: Total 6 505 hab.
						<br />
						Densidad: 34,42 hab/km²
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span4">
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
		<div class="pull-right span2">
			<div class="row">
				<div class="span2">
					<?php echo $this->Html->image('telefonos.png') ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span7">
			<div class="row">
				<div class="span4">
					<h1 class="title">CÓMO LLEGAR</h1>
				</div>
			</div>
			<div class="row">
				<div class="span4">
					<hr class="title span3" />
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p class="info">
						La localidad de Sauce Viejo se ubica al centro-este de la Provincia de Santa Fe. Se encuentra a 22 kilómetros de Santa Fe Capital; a 52 kilómetros de Paraná (Entre Ríos); 105 kilómetros de Rosario; a 115 kilómetros de Rafaela.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p class="info">
						Desde Santa Fe Capital
						<br />
						Se arriba a Sauce Viejo a través de la Ruta Nacional Nº 11, con dirección sur.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p class="info">
						Desde Paraná (Entre Ríos)
						<br />
						Se debe tomar la Ruta Nacional Nº 168 hasta Santa Fe Capital; desde allí tomar la Ruta Nacional Nº 11 con dirección sur.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p class="info">
						Desde Rosario
						<br />
						Se arriba a Sauce Viejo tomando la Ruta Provincial Nº 64 y luego la Ruta Nacional Nº 11.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p class="info">
						Desde Rafaela
						<br />
						Se debe tomar la Ruta Provincial Nº 70; Ruta Provincial Nº 6; Ruta Nacional Nº 19 y finalmente la Ruta Nacional Nº 11 con dirección sur.
					</p>
				</div>
			</div>
		</div>
		
		<!-- Mapa -->
		<div class="pull-right span3">
			<div class="pull-right right row">
				<div class="span4">
					<?php echo $this->Html->image('iconoMapa.png', array('id'=>'iconoMapa')) ?>
					<?php echo $this->Html->image('mapa.png', array('class'=>'mapa')) ?>
				</div>
			</div>
		</div>
	</div>
</div>