<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), null, __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Platos'), array('controller' => 'platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plato'), array('controller' => 'platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Platos'); ?></h3>
	<?php if (!empty($categoria['Plato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Plato'] as $plato): ?>
		<tr>
			<td><?php echo $plato['id']; ?></td>
			<td><?php echo $plato['nombre']; ?></td>
			<td><?php echo $plato['descripcion']; ?></td>
			<td><?php echo $plato['created']; ?></td>
			<td><?php echo $plato['modified']; ?></td>
			<td><?php echo $plato['categoria_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'platos', 'action' => 'view', $plato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'platos', 'action' => 'edit', $plato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'platos', 'action' => 'delete', $plato['id']), null, __('Are you sure you want to delete # %s?', $plato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plato'), array('controller' => 'platos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
