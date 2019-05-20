<?php
/*
	Bora BOZDOGAN
	14.05.2019
	
*/
class Controller{
	public $configFile     = 'application/mvc.settings.php';
	
	
	public function getView($viewName,$data=null){

		if(file_exists(APPDIR . DIRECTORY_SEPARATOR . "View" . DIRECTORY_SEPARATOR . $viewName . '.view.php')) {
			require_once(APPDIR . DIRECTORY_SEPARATOR . "View" . DIRECTORY_SEPARATOR . $viewName . '.view.php');
		}else {
			require APPDIR . '/Core/Error.php';
			$Error = new ErrorClass();
			$Error->ControllerNotFound();
		}
		
	}

		
	
}