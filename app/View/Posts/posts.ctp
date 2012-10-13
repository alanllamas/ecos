<header class="postslist header"><h3>POSTS</h3> </header>
<secticlass="float-left" on class="posts">
	<table class="postslist">
		<?php foreach($posts as $post):?>
		<tr class="clear">
		
			<td class="float-left" id="img"><img src="/ecos/img/cerebro2.png" alt="cerebro"></td>
			<td class="float-left" id="contenido">
			<h3><?php echo $post['Post']['title']?></h3>
			<p> <?php
				echo $this->Text->truncate($post['Post']['body'] , 255,array(
		
		'ellipsis' => '...',
		'exact' => false,
		'html' => 'true',
	));
			?></p>
			</td>
			<td id="categoria">
				<dl>
					<dt>Categoria:</dt>
					<dd>
						<?php
							echo $post ['Categoria']['name'] 
						?>
					</dd>
					<dt>Publicado:</dt>
					<dd>
						<?php 
							echo $this->Time->format('F jS, Y',$post['Post']['created'])
						?>
					</dd>
				</dl>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
</section>
<footer class="posts footer">
	<div class="socialmedia post">
		<a href="#" class="f"></a>
		<a href="#" class="t"></a>
	</div>
</footer>
