<?php

/* Classe Request - HarmoFWK
* Gère les paramètres en GET et en POST de manière centralisée pour faciliter la tâche du Module. 
* 
* Changelog 
* [21/05/2014] 
* Nettoyage du Code. 
*/

class Request{
	
	private static $inst; // Instance unique
	
 	// Initialisation de l'instance
	public static function get_instance(){
			if (self::$inst==NULL)
				self::$inst=new Request;
			return self::$inst;
	}

	// Get une valeur en GET ou en POST
	public function __get($name){
		return isset ($_REQUEST[$name]) ? trim($_REQUEST[$name]) : '' ;
	}

 	// DEPRECATED : Get un paramètre en GET
	public function get($name){
		return isset ( $_GET[$name]) ? $_GET[$name] : "";
	}

 	// DEPRECATED : Get un paramètre en POST
	public function post($name){
		return isset($_POST[$name])?$_POST[$name]:"";
	}

 	// Get un fichier uploadé ou NULL
	public function file($name){
		return isset($_FILES[$name])?$_FILES[$name]:NULL;
	}
}
