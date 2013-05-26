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
		<div class="body row-fluid">
			<?php if($noticia['Noticia']['foto']) { ?>
				<div class="span8 resume">
					<?php echo $noticia['Noticia']['resume'] ?>
				</div>
				<div class="span4">
					<a href="#myModal" data-toggle="modal">
						<div class="row-fluid">
							<div class="span11">
									<?php echo $this->Html->image('fotos/'.$noticia['Noticia']['foto']) ?>
							</div>
							<div class="fotoFooter span11">
								<?php echo $noticia['Noticia']['foto_footer'] ?>
							</div>
						</div>
					</a>
				</div>
			<?php } else { ?>
				<div class="span12">	
					<p class="resume">	
						<?php echo $noticia['Noticia']['resume'] ?>
					</p>
				</div>
			<?php } ?>
		</div>	
		<div class="body row-fluid">
			<div class="span12">	
				<?php echo nl2br($noticia['Noticia']['body']) ?>
			</div>
		</div>
	</div>
</div>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
