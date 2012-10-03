<div class="conjuntions view">
<h2><?php  echo __('Conjunción'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conjuntion['Conjuntion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($conjuntion['Conjuntion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($conjuntion['Conjuntion']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('X'); ?></dt>
		<dd>
			<?php echo h($conjuntion['Conjuntion']['x']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Y'); ?></dt>
		<dd>
			<?php echo h($conjuntion['Conjuntion']['y']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Conjunción'), array('action' => 'edit', $conjuntion['Conjuntion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Conjunción'), array('action' => 'delete', $conjuntion['Conjuntion']['id']), null, __('¿Estas seguro que deseas eliminar la Conjunción # %s?', $conjuntion['Conjuntion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Conjunción'), array('action' => 'add')); ?> </li>
	</ul>
</div>

