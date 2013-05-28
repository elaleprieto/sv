<?php echo $this->Html->css('noticias/index', null, array('inline' => false)) ?>

<div class="noticias">
	<?php foreach ($noticias as $noticia): ?>
		<h1 class="title">
			<?php echo $this->Html->link(h($noticia['Noticia']['title']), array('action'=>'ver', $noticia['Noticia']['id'])) ?>
		</h1>
		<div class="titleLine"></div>
		<h2 class="title">
			<?php echo $this->Time->format('d/m/y', $noticia['Noticia']['created']) ?>
			·
			<?php echo $noticia['User']['name'] ?>
		</h2>
		<div class="row-fluid body">
			<?php if($noticia['Noticia']['foto']) { ?>
				<div class="span7">
					<?php echo $noticia['Noticia']['resume'] ?>
				</div>
				
				<div class="span4">
					<a href="#fotoModal<?php echo $noticia['Noticia']['id'] ?>" data-toggle="modal">
						<div class="row-fluid">
							<div class="span12">
									<?php echo $this->Html->image('fotos/'.$noticia['Noticia']['foto']) ?>
							</div>
							<div class="fotoFooter span12">
								<?php echo $noticia['Noticia']['foto_footer'] ?>
							</div>
						</div>
					</a>
				</div>
				<!-- Modal -->
				<div id="fotoModal<?php echo $noticia['Noticia']['id'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h3><?php echo $noticia['Noticia']['foto_footer'] ?></h3>
					</div>
					<div class="modal-body">
						<?php echo $this->Html->image('fotos/'.$noticia['Noticia']['foto']) ?>
					</div>
				</div>
			<?php } else { ?>
				<div class="span11">
					<?php echo $noticia['Noticia']['resume'] ?>
				</div>
			<?php } ?>
		</div>	
		<p class="link"><?php echo $this->Html->link('[ Seguir Leyendo ]', array('action'=>'ver', $noticia['Noticia']['id'])) ?></p>

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
