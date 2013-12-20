<div class="platos index">
	<h2><?php echo __('Platos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($platos as $plato): ?>
	<tr>
		<td><?php echo h($plato['Plato']['id']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['created']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plato['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $plato['Categoria']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plato['Plato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plato['Plato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plato['Plato']['id']), null, __('Are you sure you want to delete # %s?', $plato['Plato']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Plato'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
