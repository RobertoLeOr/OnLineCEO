<?php

require '../../Entidad/configuracion/EntConexion.php';
require '../frameworks/medoo.php';
		
// L. S. C. Roberto León Oramas
class PerBae {

	public $database;
	
	protected $infoCon;
	
	public function __construct() {
		
		$infoCon = new EntConexion();
		
		$this->$database =  new medoo([
								// required
								'database_type' => $this->$infoCon->$TipoBaseDatos,
								'database_name' => $this->$infoCon->$BaseDatos,
								'server' => $this->$infoCon->$Servidor,
								'username' => $this->$infoCon->$Usuario,
								'password' => $this->$infoCon->$Clave,
								'charset' => $this->$infoCon->$CharSet
							]);
	} // __construct
	
	
	
}

?>