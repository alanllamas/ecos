<div class="perfiles index">
	<h2><?php echo __('Perfiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos', 'Apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('email', 'E-mail'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php
	foreach ($perfiles as $perfile): ?>
	<tr>
		<td><?php echo h($perfile['Perfile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($perfile['User']['id'], array('controller' => 'users', 'action' => 'view', $perfile['User']['id'])); ?>
		</td>
		<td><?php echo h($perfile['Perfile']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($perfile['Perfile']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($perfile['Perfile']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $perfile['Perfile']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $perfile['Perfile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $perfile['Perfile']['id']), null, __('¿Estas seguro que deseas eliminar el Perfil # %s?', $perfile['Perfile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo perfil'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
