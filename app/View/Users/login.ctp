<?php $this->Html->css('users/login', null, array('inline' => false)) ?>
<?php $this->assign('nombreSeccion', 'Ingreso') ?>

<div class="row-fluid">
	<div class="offset1 span10">
		<?php echo $this -> Session -> flash('auth'); ?>
	</div>
</div>
<?php echo $this -> Form -> create('User'); ?>
	<div class="row-fluid">
		<div class="offset1 span10">
			<fieldset>
				<legend>
					Sitio Web de la Comuna de Sauce Viejo
				</legend>
				<?php
				echo $this -> Form -> input('username', array('class'=>'span12', 'label' => 'Usuario'));
				echo $this -> Form -> input('password', array('class'=>'span12', 'label' => 'Contraseña'));
				?>
			</fieldset>
		</div>
	</div>
	<div class="row-fluid">
		<div class="offset1 span10 text-center">
			<? echo $this->Form->submit('Ingresar', array('class'=>'span4', 'label'=>FALSE, 'type'=>'submit')) ?>
		</div>
	</div>			
<?php echo $this -> Form -> end(); ?>