<div class="comentarios view">
<h2><?php  echo __('Comentario'); ?></h2>
	<dl>
		<dt><?php echo __('Id:'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post:'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comentario['Post']['title'], array('controller' => 'posts', 'action' => 'view', $comentario['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-mail:'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario:'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['comentario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado:'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado:'); ?></dt>
		<dd>
			<?php echo h($comentario['Comentario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Comentario'), array('action' => 'edit', $comentario['Comentario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Comentario'), array('action' => 'delete', $comentario['Comentario']['id']), null, __('¿Estas seguro que deseas eiminar el Comentario # %s?', $comentario['Comentario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Comentario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
