<?php $this->Html->css('pages/contacto', null, array('inline' => false)) ?>
<?php echo $this->Html->script('pages/contacto.min', array('inline' => false)) ?>

<div class="row-fluid">
    <div class="alert offset1 span10" id="alerta"></div>
	<div class="offset1 span1 text-center">
		<?php echo $this->Html->image('sobreContacto.png', array('id'=>'sobreContacto')) ?>
	</div>
	<div class="span9">
		<div class="row-fluid">
			<div class="span12">
				<h1 class="title">CONTACTO</h1>
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
					Rivadavia 1164 - Teléfono (0342) 4950065 / 4950409
				</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<p class="info">
					Sauce Viejo - Santa Fe
				</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<p class="info">
					Cód. Postal 3017 - Fax (0342) 4950065
				</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<p class="info">
					E-mail: comunadesauceviejo@ciudad.com.ar
				</p>
			</div>
		</div>
	</div>
</div>

<?php # Formulario de Contacto ?>
<div class="row-fluid">
	<div class="offset1 span10">
		<?php 
		echo $this->Form->create('Contacto', array('id'=>'formulario', 'url' => array('controller' => 'users', 'action' => 'contactar')));
		echo $this->Form->input('nombre', array('class'=>'span12', 'label'=>'NOMBRE', 'required'=>'required'));
		echo $this->Form->input('asunto', array('class'=>'span12', 'label'=>'ASUNTO', 'required'=>'required'));
		echo $this->Form->input('remitente', array('class'=>'span12', 'label'=>'CORREO ELECTRÓNICO', 'required'=>'required'));
		echo $this->Form->input('mensaje', array('class'=>'span12', 'label'=>'MENSAJE', 'required'=>'required', 'type'=>'textarea'));
		echo $this->Form->submit('Enviar', array('class'=>'span4', 'div'=>'text-center'));
		echo $this->Form->end();
		?>
	</div>
</div>



