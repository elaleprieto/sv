<?php 
echo $this->Html->css('noticias/admin_index', null, array('inline' => false));
echo $this->Html->scriptBlock('WEBROOT="'.$this -> Html-> url('/', true).'"');
echo $this->Html->script('noticias/admin_index', array('inline' => false));
$this->assign('nombreSeccion', 'Administrador de Noticias');
?>

<div class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			<div class="offset1 span10">
				<div class="row-fluid cabecera">
					<div class="cabecera span7 text-left">
						NOTICIA
					</div>
					<div class="cabecera span2 text-center">
						PUBLICADA
					</div>
				</div>
			</div>
		</div>
		<?php foreach ($noticias as $noticia): ?>
			<?php echo $this->Form->create('Noticia', array('action'=>'publish')) ?>
			<div class="row-fluid">
				<div class="offset1 span10">
					<div class="row-fluid noticia">
						<div class="span7">
							<!-- Título de la Noticia -->
							<?php
								$titulo =  $this->Html->tag('h1', h($noticia['Noticia']['title']), array('class'=>'title'));
								echo $this->Html->div('row-fluid', $this->Html->div('span12', $titulo))
							?>
							<!-- Fecha y Autor de la Noticia -->
							<?php 
								$info = $this->Html->tag('h2', $this->Time->format('d/m/y', h($noticia['Noticia']['created'])) . ' · ' . h($noticia['User']['name']), array('class'=>'title'));
								echo $this->Html->div('row-fluid', $this->Html->div('span12', $info))
							?>
						</div>
						<div class="atributos span2 text-center">
							<?php echo $this->Form->checkbox('published', array('checked'=>$noticia['Noticia']['published'])) ?>
						</div>
						<div class="atributos span3 text-center">
							<?php echo $this->Form->button('Guardar', array('class'=>'guardar', 'data-id'=>$noticia['Noticia']['id'], 'type'=>'button')) ?>
							<?php echo $this->Form->button('Editar', array('class'=>'editar', 'data-id'=>$noticia['Noticia']['id'], 'type'=>'button')) ?>
							<?php echo $this->Form->button('Eliminar', array('class'=>'eliminar', 'data-id'=>$noticia['Noticia']['id'], 'type'=>'button')) ?>
						</div>
					</div>
				</div>
				<div class="span1 loading">
					<?php echo $this->Html->image('loading1.gif', array('class'=>'loading', 'data-id'=>$noticia['Noticia']['id'])) ?>
				</div>
				<?php echo 	$this->Form->hidden('id', array('value'=>$noticia['Noticia']['id'])) ?>
			</div>
			
			<?php echo $this->Form->end() ?>
		
		<?php endforeach; ?>
	</div>
</div>

<div class="row-fluid text-center">
	<div class="span12">
		<div class="paging">
			<?php
			echo $this -> Paginator -> prev('« ', array(), null, array('class' => 'prev disabled'));
			echo $this -> Paginator -> numbers(array('after'=>']', 'before'=>'[', 'separator'=>'] ['));
			echo $this -> Paginator -> next(' »', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>

