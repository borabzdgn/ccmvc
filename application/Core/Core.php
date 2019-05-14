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
		$request = ucfirst($request[0]);
		require_once($this->configFile);
		$HC = $this->homeController;
		//$request = $this->request;

		if(file_exists(APPDIR . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR  . $request ."Controller.php")) {
			require_once APPDIR . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . "Controller.php";
			require_once APPDIR . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $request  ."Controller.php";
			
		}elseif($request == "") {
			require_once APPDIR . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . "Controller.php";
			require_once APPDIR . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR  . $HC . '.php';
		}else {
			require_once APPDIR . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . "Error.php";
			$Error = new ErrorClass();
			$Error->ControllerNotFound();
		}
		

	}
	

	public function getURL() {
		if(isset($_GET['uri'])){
			$requestParse = explode("/",strip_tags($_GET['uri']));
			return $requestParse;
		}
	}
	
	
}
