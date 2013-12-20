<?php
class StudentsController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('Session');

	public function index(){
		// Para añadir una parte de where
		//$params = array('order' => 'name desc');
		// Seria como select * from....
		$this->set('estudiantes', $this->Student->find('all'/*, $params*/));
		// Para por ejemplor solo mostrar el estudiante con id 2
		//$this->set('estudiantes', $this->Student->findByid(2));		
		//findby? e indicamos el campo de la base de datos
	}
	
	public function add(){
		if($this->request->is('post')): //Comprobamso que se trata de un peticion tipo post (envio formulario)
			// Esta linea es la que sustituye al SQL
			if($this->Student->save($this->request->data)):
				$this->Session->setFlash('Estudiante guardado');
				$this->redirect(array('action' => 'index'));
			endif;
		endif;
	}
	
	public function edit($id = null){
		$this->Student->id = $id; // WHERE ID=?
		// Para cuando queremos cargar los datos del id pasado (es una peticion get quiere acceder a la fuente de datos y mostrar)
		if($this->request->is('get')):
			$this->request->data = $this->Student->read(); // Leemos de la base de datos buscando por id anterior
		else: //Peticion no es get, es decir ya hemos hecho cambios y ahora los queremos hacer permanentes enviarlos a la base de datos
			/*echo "<pre>";
				print_r($this->request->data['Student']['name']);
			echo "</pre>";
			exit;*/
			// Guardamos los datos en la base de datos.
			if($this->Student->save($this->request->data)): // Si todo sale bien mostramos un mensaje de exito
				$this->Session->setFlash('Estudiante '. $this->request->data['Student']['name'] .' modificado con exito');
				$this->redirect(array('action' => 'index'));
			else:// Else mostramos un mensaje de error
				$this->Session->setFlash('No se pudo modificar');
			endif;
		endif;
	}
	
	public function delete($id){
		if($this->request->is('get')):
			throw new MethodNotAllowedException();
		else: //El post vienen protegido
			if($this->Student->delete($id)):
				$this->Session->setFlash('Estudiante Borrado.');
				$this->redirect(array('action' => 'index'));
			endif;			
		endif;
	}
}
