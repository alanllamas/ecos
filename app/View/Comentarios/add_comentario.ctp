<header class="add_comentario header"><h2>Nuevo Comentario</h2></header>
<section class="add_comentario">
		<?php
		 	echo $this->Form->create('Comentario', array('class' => 'forma-mensaje clear'));
		 	echo $this->Form->input('post_id', array('type' => 'hidden'));
		 	echo $this->Form->input('email', array('label' => 'E-mail:'));
		 	echo $this->Form->input('comentario', array('label' => 'Comentario:'));
		 	echo $this->Form->end('Enviar');
		?>
</section>
<footer class="add_comentario footer">
	<div class="socialmedia post">
		<a href="#" class="f"></a>
		<a href="#" class="t"></a>
	</div>
</footer>