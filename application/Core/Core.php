<?php
	
	/*
		CCMVC - 13.05.2019
		Bora BOZDOGAN
	*/

class ccmvc {
	
	protected $homeController = "HomeController"; 
	protected $methodName     = "index";
	protected $paramsArray    = [];
	public    $configFile     = '../mvc.settings.php';
	
	public function __construct(){
		$request = $this->getURL();
		$request = ucfirst($request[0]);
		require_once $configFile;
		
		if(file_exists(APPDIR . 'Controller' . "\{$request}.php")) {
			
		}
	}
	

	public function getURL() {
		if(isset(strip_tags($_GET['uri']))){
			$requestParse = explode("/",strip_tags($_GET['uri']));
			return $requestParse;
		}
	}
	
	
}
