<?php
// La tabla se llama students, por eso ponemos el nombre de la clase en minusclas
//CamelCase
class Student extends AppModel{
	public $validate = array(
		'name' => array('rule' => 'notEmpty', 'message' => 'El nombre no puede ser vacío.'),
		'last_name' => array('rule'=>'notEmpty', 'message' => 'Este campo no puede ser vacío.')
		
	);
}

//Validacion de datos de la documentacion
?>


