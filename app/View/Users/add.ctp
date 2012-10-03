<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Usuario:'));
		echo $this->Form->input('password', array('label' => 'Contraseña:'));
		echo $this->Form->input('confirm_password', array('label' => 'Confirmar Contraseña:'));
		echo $this->Form->input('role', array('label' => 'Rol:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Añadir Usuario')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
		
	</ul>
</div>
