<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre:'));
		echo $this->Form->input('descripcion', array('label' => 'Descripción:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
