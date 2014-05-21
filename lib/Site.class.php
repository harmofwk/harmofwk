<?php

/* Classe Site - HarmoFWK
* Gère les redirections, les Messages d'erreur, le Debug, et les Routes. 
* 
* Changelog 
* [21/05/2014] 
* Nettoyage du Code. 
*/

define("ALERTE",1);
define("ERREUR",2);
define("OK",4);
define("INFO",8);
 	
class Site{

	// Instance Unique
	private static $inst;

	// Initialisation de l'instance
	public static function get_instance($config){
			if (self::$inst==NULL)
				self::$inst = new Site($config);
			return self::$inst;
	}

	// Lie l'instance à la session
	private function __construct($session){
		$this->session=$session;		
	}
	
	// Fonction de redirection vers un autre module:action
	function redirect($module='index',$action='index'){

		session_write_close();
		global $err;
		if(!$err){
			if(defined("URLREWRITE"))
			{
				if(URLREWRITE == true)
					header("Location: /$module/$action");
				else
					header("Location: ?module=$module&action=$action");
			}
			else header("Location: ?module=$module&action=$action");
			exit();
		}
	}

	// Afichage de tous les messages envoyés par les modules
	function liste_messages(){
		if(!$this->session->_messages)
			return NULL;

		$str="";
		foreach($this->session->_messages as $message=>$type)
		
			$str.=$this->format($message,$type);
		
		$this->effacer_messages();
		return $str;
	}
	 
	 
	// Ajout d'un message par le module
	function ajouter_message($message,$type=INFO){
		$temp=$this->session->_messages;
		$temp[$message]=$type;
		$this->session->_messages=$temp;
	}
	 
	// Supression des messages envoyés par le module
	function effacer_messages(){
		unset($this->session->_messages);
	}

	// Formatage des messages selon le type
	function format($message, $type=INFO){
	 
		switch($type){
			case INFO: 
				$class='notice success';
			break;
			case ERREUR: 
				$class='notice error';
				$message="<b>$message</b><pre>\n".self::trace(debug_backtrace())."</pre>";
			break;
			case OK: 
				$class='notice success';
			break;
			case ALERTE: 
				$class='notice warning';
			break;
			default:
				$class='notice success';
		}
	 
return <<< ENDOFMESSAGE
	 
<div class='$class'>
	$message
</div>
			
ENDOFMESSAGE;
		}
		 
		// Affiche une Trace de Debug
		function debug($message){
			return "<pre class='debug'>"
					."<b>"
					.print_r($message,true)
					."</b>\n"
					.$this->trace(debug_backtrace())
					."</pre>";
		}

		
		// Affiche la trace d'execution courante
		function trace($backtrace){
		 
			$chaine='';
			if($backtrace)
				$trace=array_reverse($backtrace);
			else
				$trace=array_reverse(debug_backtrace());
			$fonction=NULL;
			$decalage='';
			foreach($trace as $appel){
		 
				$chaine.= $decalage.$appel['file'].', ligne '.$appel['line'];
				if($fonction){
					$chaine.=" : $fonction()\n";
					$decalage="  ".$decalage;
				}else{
					$decalage="  +--";
					$chaine.= "\n";
				}
		 
				$fonction=$appel['function'];
		 
			}
			return $chaine;
		}
}
?>