<div class="conjuntions form">
<?php echo $this->Form->create('Conjuntion'); ?>
	<fieldset>
		<legend><?php echo __('Add Conjuntion'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('x');
		echo $this->Form->input('y');
		echo $this->Form->input('Post');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Conjuntions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
