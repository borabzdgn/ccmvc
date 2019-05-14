<?php
	
	/*
		CCMVC - 13.05.2019
		Bora BOZDOGAN
	*/

class ccmvc {
	
	public $homeController = "HomeController"; 
	public $methodName     = "index";
	public $configFile     = 'application/mvc.settings.php';
	
	public function __construct(){
		$request = $this->getURL();
		print_r($request);
		$request = ucfirst($request[0]);
		require_once($this->configFile);
		$HC = $this->homeController;
		
		if(file_exists(APPDIR . 'Controller' . "\{$request}.php")) {
			require_once APPDIR . 'Controller' . "\{$request}.php";
			require_once APPDIR . 'Core' . "\Controlller.php";
			$Controller = new Controller();
		}elseif(file_exists(APPDIR . 'Controller' . "\{$HC}.php")) {
			require_once APPDIR . 'Controller' . $HC . '\.php';
			require_once APPDIR . 'Core' . $HC ."\Controlller.php";
		}else {
			require_once APPDIR . '\Core\Error.php';
			
		}
	}
	

	public function getURL() {
		if(isset($_GET['uri'])){
			$requestParse = explode("/",strip_tags($_GET['uri']));
			return $requestParse;
		}
	}
	
	
}
