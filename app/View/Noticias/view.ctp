<?php $this->Html->css('noticias/view', null, array('inline' => false)) ?>

<div class="row-fluid">
	<div class="offset1 span10">
		<div class="row-fluid">
			<div class="span12">
				 <h1 class="title">
					<?php echo h($noticia['Noticia']['title']); ?>
				 </h1>	
			</div>
		</div>	
		<div class="row-fluid">
			<div class="span12">
				<div class="titleLine"></div>
				<h2 class="title">
					<?php echo $this->Time->format('d/m/y', $noticia['Noticia']['created']) ?>
					·
					<?php echo $noticia['User']['name'] ?>
				</h2>
			</div>
		</div>	
		<div class="row-fluid">
			<div class="span12">	
				<p class="resume">	
					<?php echo $noticia['Noticia']['resume'] ?>
				</p>
			</div>
		</div>	
		<div class="row-fluid">
			<div class="span12">	
				<p class="body">	
					<?php echo nl2br($noticia['Noticia']['body']) ?>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noticia'), array('action' => 'edit', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
