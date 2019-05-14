<?php
/*
	Bora BOZDOGAN
	14.05.2019
	
*/
class Controller{
	public $configFile     = 'application/mvc.settings.php';
	
	
	public function getView($viewName){
		require_once APPDIR . "\{$configFile}";
	}
	
	
}