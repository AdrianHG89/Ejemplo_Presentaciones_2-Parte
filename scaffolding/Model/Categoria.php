<?php
class Categoria extends Model {
	public $displayField = 'nombre';
	
	public $hasMany = array('Platos');
}
