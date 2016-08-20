<?php
// L. S. C. Roberto León Oramas
// Información del Usuario

class EntUsuario {
	
	// Atributos y propiedades
	
	public $Nombre;
	
	public $Clave;
	
	public $Seccion;
	
	
	function __construct() {
		$this->Nombre ="";
		$this->Clave="";
		$this->Seccion="";
	}
	
	function __destruct() {
		unset($this->Nombre);
		unset($this->Clave);
		unset($this->Seccion);
	}
	
}

?>