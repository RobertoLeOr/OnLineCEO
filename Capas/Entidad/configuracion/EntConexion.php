<?php

class EntConexion {

	public $Usuario;
	
	public $Clave;
	
	public $BaseDatos;
	
	public $Servidor;
	
	public $TipoBaseDatos;
	
	public $CharSet;
	
	public function __construct() {
		$this->$Usuario="root";
		$this->$Clave="raiz";
		$this->$BaseDatos="OnLineCEO";
		$this->$Servidor="localhost";
		$this->$TipoBaseDatos="mysql";
		$this->$CharSet="utf8";
	}
	
}

?>
