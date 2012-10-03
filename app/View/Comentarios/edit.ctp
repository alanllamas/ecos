<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><?php echo __('Editar Comentario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('post_id');
		echo $this->Form->input('email', array('label' => 'E-mail:'));
		echo $this->Form->input('comentario', array('label' => 'Comentario:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Comentario.id')), null, __('¿Estas seguro que deseas eliminar el Comentario # %s?', $this->Form->value('Comentario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
	</ul>
</div>
