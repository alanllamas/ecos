<div class="conjuntions form">
<?php echo $this->Form->create('Conjuntion'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Conjunción'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre:'));
		echo $this->Form->input('descripcion', array('label' => 'Descripcion:'));
		echo $this->Form->input('x', array('label' => 'X:'));
		echo $this->Form->input('y', array('label' => 'Y:'));
		echo $this->Form->input('Post');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
	</ul>
</div>
