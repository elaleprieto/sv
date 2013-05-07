<?php $this->Html->css('noticias/index', null, array('inline' => false)) ?>

<div class="noticias">
	<?php foreach ($noticias as $noticia): ?>
		<h1 class="title"><?php echo h($noticia['Noticia']['title']) ?></h1>
		<div class="titleLine"></div>
		<h2 class="title">
			<?php echo $this->Time->format('d/m/y', $noticia['Noticia']['created']) ?>
			·
			<?php echo $noticia['User']['name'] ?>
		</h2>
		<p class="body">	
			<?php echo $noticia['Noticia']['resume'] ?>
		</p>
		<p class="link"><?php echo $this->Html->link('[ Seguir Leyendo ]', array('action'=>'view', $noticia['Noticia']['id'])) ?></p>
	<?php endforeach; ?>
	
	<p>
		<?php
		// echo $this -> Paginator -> counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
		?>
	</p>
	<div class="paging">
		<?php
		echo $this -> Paginator -> prev('« ', array(), null, array('class' => 'prev disabled'));
		echo $this -> Paginator -> numbers(array('after'=>']', 'before'=>'[', 'separator'=>'] ['));
		echo $this -> Paginator -> next(' »', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>