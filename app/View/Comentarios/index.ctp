<div class="comentarios index">
	<h2><?php echo __('Comentarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email', 'E-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('comentario', 'Comentario'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php
	foreach ($comentarios as $comentario): ?>
	<tr>
		<td><?php echo h($comentario['Comentario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comentario['Post']['title'], array('controller' => 'posts', 'action' => 'view', $comentario['Post']['id'])); ?>
		</td>
		<td><?php echo h($comentario['Comentario']['email']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['comentario']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['created']); ?>&nbsp;</td>
		<td><?php echo h($comentario['Comentario']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comentario['Comentario']['id']), null, __('¿Estas seguro que deseas eliminar el Comentario # %s?', $comentario['Comentario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Comentario'), array('action' => 'add')); ?></li>
	</ul>
</div>
