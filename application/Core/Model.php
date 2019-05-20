<?php
/*
	Bora BOZDOGAN
	20.05.2019
	
*/
class Model{
	public $configFile     = 'application/mvc.settings.php';
	
	
		
	public function getModel($modelName) {
		if(file_exists(APPDIR . DIRECTORY_SEPARATOR . "Model" . DIRECTORY_SEPARATOR . $modelName . '.model.php')) {
			require_once(APPDIR . DIRECTORY_SEPARATOR . "Model" . DIRECTORY_SEPARATOR . $modelName . '.model.php');
		}else {
			require APPDIR . '/Core/Error.php';
			$Error = new ErrorClass();
			$Error->ModelNotFound();
		}
	}

		
	
}