<!DOCTYPE html>

<html lang="es-mx">
	<head>
		<meta charset="utf-8"/>
		<title>Ecos del Buen Vivir</title>
		<?php echo $this->Html->css('estilo') ?>
		<?php
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script'); 
		?>
	</head>
	<body>
		<div class="wrapper main">
			<header class="main">
				<h1>Ecos del Buen Vivir</h1>
			</header>
			<section class="main">
				<?php echo $this->fetch('content') ?>
			</section>
			<footer class="main">
			</footer>
		</div>
	</body>
</html>