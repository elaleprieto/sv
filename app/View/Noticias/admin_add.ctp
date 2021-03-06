<?php $this->Html->css('noticias/admin_add', null, array('inline' => false)) ?>
<?php $this->assign('nombreSeccion', 'Carga de Noticias') ?>

<h2 class="row text-right title">
	<div class="span11">
		<?php echo $this->Time->format('d/m/y', time()) . ' · ' . $this->Session->read('Auth.User.name') ?>
	</div>
</h2>

<div class="noticias form">
	<?php echo $this -> Form -> create('Noticia', array('enctype' => 'multipart/form-data')); ?>
	<div class="row-fluid">
		<?php echo $this->Form->input('title', array('class'=>'span12', 'div'=>'offset1 span10', 'label'=>'Título')) ?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('resume', array('class'=>'span12', 'div'=>'offset1 span10', 'label'=>'Síntesis')) ?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('body', array('class'=>'span12', 'div'=>'offset1 span10', 'label'=>'Cuerpo')) ?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('archivo', array('class'=>'span12', 'div'=>'offset1 span10', 'label'=>'Foto', 'type'=>'file')) ?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('foto_footer', array('class'=>'span12', 'div'=>'offset1 span10', 'label'=>'Leyenda de la Foto')) ?>
	</div>
	<div class="row-fluid">
		<?php
		echo $this->Form->label('Noticia.published', 'Publicada: ', array('class'=>'offset1 span1'));
		$checkbox = $this->Form->checkbox('published'); 
		echo $this->Html->div('span1 text-center', $checkbox)
		?>
	</div>
	<div class="row-fluid">
		<?php echo $this->Form->input('Guardar', array('class'=>'span4', 'div'=>'span6 text-right', 'label'=>FALSE, 'type'=>'submit')) ?>
		<div class="span6 text-left">
			<?php echo $this->Form->button('Cancelar', array('class'=>'span4', 'type'=>'button')) ?>
		</div>
	</div>
	<?php echo $this -> Form -> end() ?>
</div>
