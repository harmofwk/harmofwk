<?php

/* Classe Module - HarmoFWK
* Initialis� par le FrontController. G�re la database, le templating, les sessions, et les requ�tes HTTP. 
* 
* Changelog 
* [21/05/2014] 
* Ajout d'un __call() pour g�rer l'erreur action_inconnue directement dans le module. 
* Nettoyage du Code. 
*/

class Module {

	protected $tpl_name=""; // Template � charger
	public $metainfos;

	public function init(){
		$this->metainfos = new Metainfos();
		
		// Adding default css and script
		$this->metainfos->addCSS("kickstart/kickstart.css");
		$this->metainfos->addCSS("defaut.css");
		$this->metainfos->addJS("jquery-1.10.2.min.js");
		$this->metainfos->addJS("kickstart.js");
		$this->metainfos->addJS("default.js");
	}
	
	// Initialise les variables de config du site
	public function set_variables($config){
		foreach($config as $var=>$val)
			$this->$var=$val;
	}
	
	// Initialise le titre de la page dans le Header du navigateur
	public function set_title($title){
		$this->tpl->assign('titre',$title);	
	}

	// Get le nom du template � charger
	public function get_tpl_name(){
		return empty($this->tpl_name) ? get_class($this) : $this->tpl_name;	
	}
	// Set le nom du template � charger
	public function set_tpl_name($tpl){
		$this->tpl_name=$tpl;	
	}

	// MEthode magique de gestion d'erreurs et de m�thodes inconnues
	public function __call($name, $arguments){
		throw new Exception("Action inconnue : $name");
	}
}
?>