<?php
/*
	Bora BOZDOGAN
	14.05.2019
	.
*/
class ErrorClass{
	
	public function ControllerNotFound() {
		header("HTTP/1.0 404 Not Found");
		die("controller not found");
	}
	
	
}