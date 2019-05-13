<?php
	
	/*
		CCMVC - 13.05.2019
		Bora BOZDOGAN
	*/

class ccmvc {
	
	protected $homeController = "HomeController"; 
	protected $methodName     = "index";
	protected $paramsArray    = [];
	
	public function __construct(){
		$request = $this->getURL();
		
		if() {
			
		}
	}
	

	public function getURL() {
		if(isset(strip_tags($_GET['uri']))){
			$requestParse = explode("/",strip_tags($_GET['uri']));
			return $requestParse;
		}
	}
	
	
}
