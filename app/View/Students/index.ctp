<h1>Listado de estudiantes</h1>
<?php echo $this->Html->link('Nuevo Estudiante', array('action'=>'add'));?>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Acciones</th>		
	</tr>
<?php foreach($estudiantes as $estudiante):?>
	<tr>
		<td><?php echo $estudiante['Student']['id'];?></td>
		<td><?php echo $estudiante['Student']['name'];?></td>
		<td><?php echo $estudiante['Student']['last_name'];?></td>
		<td>
			<?php echo $this->Html->link('Editar', array('action'=>'edit', $estudiante['Student']['id']));?>
			<?php echo $this->Form->postLink('Borrar', array('action'=>'delete', $estudiante['Student']['id']),array('confirm'=>'¿Realmente desea borrar a ' . $estudiante['Student']['name'] . '?'));?>
		</td>
	</tr>
<?php endforeach;?>
</table>