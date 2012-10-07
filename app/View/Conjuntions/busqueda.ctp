<section class="busqueda">	
	<?php 
		echo $this->Form->create('Conjuntion', array('type'=>'post'));
		echo $this->Form->input('key_words', array('label' => 'Palábras Clave:'));
		echo $this->Form->input('tags', array('label' => 'Tags:')); 
	?>
	<section class="float-left">
		<h3>Matriz</h3>
		<table cellpadding="0" cellspacing="0" id="matriz">
			<tr>
				<td class="active"><a href="">Bla</a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
			</tr>
			<tr>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
			</tr>
			<tr>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
			</tr>
			<tr>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
			</tr>
			<tr>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
				<td><a href=""></a></td>
			</tr>
		</table>
	</section>
	<section class="float-left">
		<h3>Categorías</h3>
		<ul class="listacategorias">
			<li class="active">Agua</li>
			<li>Politica</li>
			<li>Alimentación</li>
			<li>Arte</li>
			<li>Cambio climático</li>
			<li>Ciencia</li>
			<li>Construcción</li>
			<li>Contaminación</li>
			<li>Decadencia</li>
			<li>Demografía</li>
			<li>Destacadas</li>
			<li>Economía</li>
			<li>Educación</li>
			<li>En resistencia</li>
			<li>Energía</li>
			<li>Estilo de vida</li>
			<li>Eventos</li>
			<li>Históricos</li>
			<li>Información libre</li>
			<li>Las más recientes</li>
			<li>Migración</li>
			<li>Minería</li>
			<li>Normatividad</li>
			<li>Pobreza</li>
			<li>Recursos</li>
			<li>Religión</li>
			<li>Residuos</li>
			<li>Salud</li>
			<li>Sin categoría</li>
			<li>T.V</li>
			<li>Tecnología</li>
			<li>Transgénicos</li>
			<li>Transporte</li>
			<li>Turismo</li>
		</ul>
	</section>
	<section class="float-left">	
		<h3>Top 10 Tags</h3>
		<ul class="listatags">
			<li class="active">tag1</li>
			<li>Tag2</li>
			<li>Tag3</li>
			<li>Tag4</li>
			<li>Tag5</li>
			<li>Tag6</li>
			<li>Tag7</li>
			<li>Tag8</li>
			<li>Tag9</li>
			<li>Tag10</li>

		</ul>
	</section>
	<?php 
		echo $this->Form->end('Buscar');
	?>
</section>












