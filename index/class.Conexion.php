<?php
class Conexion extends MySQLi{
	
	public function __construct()
	{
		parent::__construct('localhost','root','','fyreco_test');
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
		unset($x);
	}
	
	public function recorrer($y)
	{
		return mysqli_fetch_array($y);	
	}
}
?>