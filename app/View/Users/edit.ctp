<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username', array('label' => 'Usuario:'));
		echo $this->Form->input('password', array('label' => 'Contraseña:'));
		echo $this->Form->input('role', array('label' => 'Rol:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar Usuario')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Esta seguro que desea eliminar el Usuario # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
