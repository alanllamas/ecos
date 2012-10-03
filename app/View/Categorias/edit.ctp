<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Nombre:'));
		echo $this->Form->input('descripcion', array('label' => 'Descripción:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Categoria.id')), null, __('¿Estas seguro que deseas eliminar la Categoria # %s?', $this->Form->value('Categoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
