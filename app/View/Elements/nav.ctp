<nav class="row">
	<div id="nav" class="span12">
		<div class="row">
			<div class="span11">
				<?php echo $this->Html->link(':: Noticias', array('controller'=>'noticias', 'action'=>'index'), array('class'=>'item1')) ?>
			</div>
			<div class="span1">
				<?php echo $this->Html->link('<i class="icon-info-sign" title="Información de la Comuna"></i>', '/info', array('class'=>'btn btn-link', 'escape'=>false)) ?>
			</div>
		</div>
	</div>
</nav>