<section class="busqueda">	
	<?php 
		echo $this->Form->create('Conjuntion', array('type'=>'post'));
		echo $this->Form->input('key_words', array('label' => 'Palábras Clave:'));
		echo $this->Form->input('tags', array('label' => 'Tags:')); 
		echo $this->Form->input('idioma', array(
				'label' => 'Idioma:',
			    'options' => array('es-mx' => 'Español','en-us' => 'English','fr-fr' => 'Français' , 'el-el' => 'ελληνικά'),
			    'default' => 'es-mx'
			));
	?>
	
	<section class="float-left clear">
		<h3>Matriz</h3>
		<table cellpadding="0" cellspacing="0" id="matriz">
			<tr>
				<td class="gradiente active"><a href="">BlaBla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
			</tr>
			<tr>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
			</tr>
			<tr>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
			</tr>
			<tr>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
			</tr>
			<tr>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
				<td class="gradiente"><a href="">Bla</a></td>
			</tr>
		</table>
	</section>
	<section class="float-left">
		<h3>Categorías</h3>
		<ul class="listacategorias">
			<li class="gradiente active">Agua</li>
			<li class="gradiente">Politica</li>
			<li class="gradiente">Alimentación</li>
			<li class="gradiente">Arte</li>
			<li class="gradiente">Cambio climático</li>
			<li class="gradiente">Ciencia</li>
			<li class="gradiente">Construcción</li>
			<li class="gradiente">Contaminación</li>
			<li class="gradiente">Decadencia</li>
			<li class="gradiente">Demografía</li>
			<li class="gradiente">Destacadas</li>
			<li class="gradiente">Economía</li>
			<li class="gradiente">Educación</li>
			<li class="gradiente">En resistencia</li>
			<li class="gradiente">Energía</li>
			<li class="gradiente">Estilo de vida</li>
			<li class="gradiente">Eventos</li>
			<li class="gradiente">Históricos</li>
			<li class="gradiente">Información libre</li>
			<li class="gradiente">Las más recientes</li>
			<li class="gradiente">Migración</li>
			<li class="gradiente">Minería</li>
			<li class="gradiente">Normatividad</li>
			<li class="gradiente">Pobreza</li>
			<li class="gradiente">Recursos</li>
			<li class="gradiente">Religión</li>
			<li class="gradiente">Residuos</li>
			<li class="gradiente">Salud</li>
			<li class="gradiente">Sin categoría</li>
			<li class="gradiente">T.V</li>
			<li class="gradiente">Tecnología</li>
			<li class="gradiente">Transgénicos</li>
			<li class="gradiente">Transporte</li>
			<li class="gradiente">Turismo</li>
		</ul>
	</section>
	<section class="float-left">	
		<h3>Top 10 Tags</h3>
		<ul class="listatags">
			<li class="gradiente active">tag1</li>
			<li class="gradiente">Tag2</li>
			<li class="gradiente">Tag3</li>
			<li class="gradiente">Tag4</li>
			<li class="gradiente">Tag5</li>
			<li class="gradiente">Tag6</li>
			<li class="gradiente">Tag7</li>
			<li class="gradiente">Tag8</li>
			<li class="gradiente">Tag9</li>
			<li class="gradiente">Tag10</li>

		</ul>
	</section>
	<?php 
		echo $this->Form->end(array("label" => "Buscar", "class" => "gradiente"));
	?>
</section> 












