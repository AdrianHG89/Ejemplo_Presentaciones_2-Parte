<div class="platos view">
<h2><?php echo __('Plato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plato['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $plato['Categoria']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plato'), array('action' => 'edit', $plato['Plato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plato'), array('action' => 'delete', $plato['Plato']['id']), null, __('Are you sure you want to delete # %s?', $plato['Plato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Platos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
