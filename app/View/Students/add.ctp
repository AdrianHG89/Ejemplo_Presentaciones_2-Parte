<h1>Agregar estudiantes</h1>
<?php
	echo $this->Form->create('Student'); //De que modelo es
	echo $this->Form->input('name', array('label'=>'Nombre')); //Debe tener el mismo nombre que el atributo en la BBDD
	echo $this->Form->input('last_name', array('label'=>'Apellido')); // Pero podemos añadir el atributo label para que la vista se en español
	echo $this->Form->end('Guardar estudiante'); //EL boton
?>