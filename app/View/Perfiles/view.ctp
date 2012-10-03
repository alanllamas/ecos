<div class="perfiles view">
<h2><?php  echo __('Perfile'); ?></h2>
	<dl>
		<dt><?php echo __('ID:'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario:'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perfile['User']['id'], array('controller' => 'users', 'action' => 'view', $perfile['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre:'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos:'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E-mail:'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar perfil'), array('action' => 'edit', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar perfil'), array('action' => 'delete', $perfile['Perfile']['id']), null, __('¿Estas seguro que deseas eliminar el Perfil # %s?', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo perfil'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
