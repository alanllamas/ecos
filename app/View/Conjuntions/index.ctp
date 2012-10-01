<div class="conjuntions index">
	<h2><?php echo __('Conjuntions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('x'); ?></th>
			<th><?php echo $this->Paginator->sort('y'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conjuntion['Conjuntion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conjuntion['Conjuntion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conjuntion['Conjuntion']['id']), null, __('Are you sure you want to delete # %s?', $conjuntion['Conjuntion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Conjuntion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
