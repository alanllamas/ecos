<header class="post clear header">
	<h2 class="float-left"><?php echo $post['Post']['title'] ?></h2>
	<p class="float-left">
		<?php echo $this->Html->link($post['Categoria']['name'], '#')?>
	</p>
</header>
<section class="post float-left">
	<?php echo $post['Post']['body']?>
</section>
<h3 class="post tags">TAGS</h3>
<ul class="post tags">
<?php foreach($post['Tag'] as $tag): ?>
<li class="float-left">
	<?php echo $this->Html->link($tag['name'], '#') ?>
</li>
<?php endforeach ?>
</ul>
<footer class="post clear footer">
	<dl class="clear float-left">
		<dt class="float-left">Creado</dt>
		<dd>
			<?php echo $this->Time->format('F jS, Y', $post['Post']['created'])?>
		</dd>
		<dt class="float-left">Autor:</dt>
		<dd><?php echo $post['User']['username'] ?></dd>
		<dt class="float-left">Comentarios</dt>
		<dd>
			<?php
				echo $count = sizeof($post['Comentario']);
			?>
		</dd>
	</dl>
	<div class="socialmedia post">
		<a href="#" class="f"></a>
		<a href="#" class="t"></a>
	</div>
</footer>

