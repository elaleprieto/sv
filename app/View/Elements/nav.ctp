<nav class="row">
	<div id="nav" class="span12">
		<div class="row">
			<div class="span10">
				<?php echo $this->Html->link(':: Noticias', array('controller'=>'noticias', 'action'=>'index'), array('class'=>'item1')) ?>
			</div>
			<div class="span2 text-center">
				<?php echo $this->Html->link('<i class="icon-envelope" title="Contacto con la Comuna"></i>', '/contacto', array('class'=>'btn btn-link', 'escape'=>false)) ?>
				<?php echo $this->Html->link('<i class="icon-info-sign" title="Información de la Comuna"></i>', '/info', array('class'=>'btn btn-link', 'escape'=>false)) ?>
			</div>
		</div>
	</div>
</nav>