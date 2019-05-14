<?php
	
	/*
		CCMVC - 13.05.2019
		Bora BOZDOGAN
	*/

class ccmvc {
	
	protected $homeController = "HomeController"; 
	protected $methodName     = "index";
	protected $paramsArray    = [];
	public    $configFile     = 'application/mvc.settings.php';
	
	public function __construct(){
		$request = $this->getURL();
		print_r($request);
		$request = ucfirst($request[0]);
		require_once($this->configFile);
		$HC = $this->homeController;
		
		if(file_exists(APPDIR . 'Controller' . "\{$request}.php")) {
			require_once APPDIR . 'Controller' . "\{$request}.php";
			require_once APPDIR . 'Core' . "\Controlller.php";
		}elseif(file_exists(APPDIR . 'Controller' . "\{$HC}.php")) {
			require_once APPDIR . 'Controller' . $HC . '\.php';
			require_once APPDIR . 'Core' . $HC ."\Controlller.php";
		}else {
			require_once APPDIR . '\Core\Error.php';
			// exception yazılacak
		}
	}
	

	public function getURL() {
		if(isset($_GET['uri'])){
			$requestParse = explode("/",strip_tags($_GET['uri']));
			return $requestParse;
		}
	}
	
	
}
