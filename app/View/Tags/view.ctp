<div class="tags view">
<h2><?php  echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar tag'), array('action' => 'delete', $tag['Tag']['id']), null, __('¿Estas seguro de querer eliminar el Tag # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo tag'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Posts relacionados'); ?></h3>
	<?php if (!empty($tag['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Título'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['categoria_id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['body']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Elimianr'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('¿Estas seguro de querer eliminar el Post # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
