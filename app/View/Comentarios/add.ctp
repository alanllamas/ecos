<div class="comentarios form">
<?php echo $this->Form->create('Comentario'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Comentario'); ?></legend>
	<?php
		echo $this->Form->input('post_id');
		echo $this->Form->input('email', array('label' => 'E-mail:'));
		echo $this->Form->input('comentario', array('label' => 'Comentario:'));
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
