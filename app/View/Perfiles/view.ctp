<div class="perfiles view">
<h2><?php  echo __('Perfile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perfile['User']['id'], array('controller' => 'users', 'action' => 'view', $perfile['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Perfile'), array('action' => 'edit', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Perfile'), array('action' => 'delete', $perfile['Perfile']['id']), null, __('Are you sure you want to delete # %s?', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Perfiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perfile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
