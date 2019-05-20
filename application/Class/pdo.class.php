<?php
/*	
	Bora BOZDOGAN
	20.05.2019
*/
class ccPDO {
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbs  = "ccPDO";
	
	public function __construct(){
		if (!defined('PDO::ATTR_DRIVER_NAME')) {
			die('pdo sunucuda kapalı');
		}
		
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbs . "";
		$dbs = new PDO($dsn,$this->user,$this->pass);
		
	}
  
  
}