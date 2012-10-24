<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Agregar post'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('label' => 'Usuario:'));
		echo $this->Form->input('title', array('label' => 'Título:'));
		echo $this->Form->input('body', array('label' => 'Contenido:'));
		echo $this->Form->input('Categoria', array('label' => 'Categorias:'));
		echo $this->Form->input('Conjuntion', array('label' => 'Conjunciones:'));
		echo $this->Form->input('Tag', array('label' => 'Tags:'));
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
