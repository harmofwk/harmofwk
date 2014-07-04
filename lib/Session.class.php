<?php
session_set_cookie_params("0",dirname($_SERVER["SCRIPT_NAME"]));
session_start();

/* Classe Session - HarmoFWK
* Gère les Sessions.
* 
* Changelog 
* [21/05/2014] 
* Nettoyage du Code. 
*/

class Session{
 
 	// Instance unique
	private static $instance;

	// Initialisation de l'instance 
 	public static function get_instance(){
 		if(!self::$instance)
 			self::$instance =  new Session();
 		return self::$instance;
 	}

 	function __construct(){
 	}
  
  	// Ouverture de la Session Utilisateur
	function ouvrir(){
		$this->ouverte = true;
	}
	
	// Fermeture de la Session Utilisateur
	function fermer(){
		unset($this->ouverte);
	}

	// Retourne TRUE si une session est ouverte
	function ouverte(){
		return isset($this->ouverte);
	}
	
	// Get une variable de session précedemment stockée
	function __get($variable){
		if(!empty($_SESSION['__variables'][$variable]))
			return  $_SESSION['__variables'][$variable];
		else
			return "";
	}

	// Set une variable de session
	function __set($variable,$valeur){
			$_SESSION['__variables'][$variable]=$valeur;
	}

	// Destruction d'une variable de session
	function __unset($variable){
			unset($_SESSION['__variables'][$variable]);
	}

	// Retourne TRUE si la variable de session existe
	function __isset($variable){
			return isset($_SESSION['__variables'][$variable]);
	}

	
}
?>