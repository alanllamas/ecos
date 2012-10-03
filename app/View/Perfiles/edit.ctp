<div class="perfiles form">
<?php echo $this->Form->create('Perfile'); ?>
	<fieldset>
		<legend><?php echo __('Editar Perfil'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id', array('label' => 'ID:'));
		echo $this->Form->input('nombre', array('label' => 'Nombre:'));
		echo $this->Form->input('apellidos', array('label' => 'Apellidos:'));
		echo $this->Form->input('email', array('label' => 'E-mail:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Perfile.id')), null, __('¿Estas seguro que deseas eliminar el Perfil # %s?', $this->Form->value('Perfile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
			</ul>
</div>
