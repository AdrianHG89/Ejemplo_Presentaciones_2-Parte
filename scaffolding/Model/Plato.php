<?php
class Plato extends Model {
	public $displayField = 'nombre';
	
	public $belongsTo = array('Categoria');
}
