<div class="conjuntions form">
<?php echo $this->Form->create('Conjuntion'); ?>
	<fieldset>
		<legend><?php echo __('Editar Conjunción'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('descripcion', array('label' => 'Descripción'));
		echo $this->Form->input('x', array('label' => 'X'));
		echo $this->Form->input('y', array('label' => 'Y'));
		echo $this->Form->input('Post');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Conjuntion.id')), null, __('¿Estas seguro que deseas eliminar la Conjunción # %s?', $this->Form->value('Conjuntion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
	</ul>
</div>
