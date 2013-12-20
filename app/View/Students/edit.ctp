<h1>Editar Estudiante</h1>
<?php
	echo $this->Form->create('Student', array('action'=>'edit')); //De que modelo es y ahora lleva asociado una accion
	echo $this->Form->input('name', array('label'=>'Nombre'));
	echo $this->Form->input('last_name', array('label'=>'Apellido'));
	echo $this->Form->input('id', array('type'=>'hidden'));
	echo $this->Form->end('Guardar cambios'); //EL boton
?>