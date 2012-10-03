<div class="conjuntions index">
	<h2><?php echo __('Conjuntions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion', 'Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('x', 'X'); ?></th>
			<th><?php echo $this->Paginator->sort('y', 'Y'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php
	foreach ($conjuntions as $conjuntion): ?>
	<tr>
		<td><?php echo h($conjuntion['Conjuntion']['id']); ?>&nbsp;</td>
		<td><?php echo h($conjuntion['Conjuntion']['name']); ?>&nbsp;</td>
		<td><?php echo h($conjuntion['Conjuntion']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($conjuntion['Conjuntion']['x']); ?>&nbsp;</td>
		<td><?php echo h($conjuntion['Conjuntion']['y']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $conjuntion['Conjuntion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $conjuntion['Conjuntion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $conjuntion['Conjuntion']['id']), null, __('¿Estas seguro de querer eliminar la Conjunción # %s?', $conjuntion['Conjuntion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Conjunción'), array('action' => 'add')); ?></li>
	</ul>
</div>
