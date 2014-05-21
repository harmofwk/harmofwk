<?php

/* Classe FrontController - HarmoFWK
* Envoie le contenu, appelle le module et l'action selon la page appelée. 
* 
* Changelog 
* [21/05/2014] 
* Remplacement de l'erreur action_inconnue par un appel à __call() dans Module.class.php.
* Nettoyage du Code. 
*/

Class FrontController{

	public static $_content_="";

	public function __construct($config){
		foreach($config as $var=>$val)
			$this->$var=$val;
		$this->config=$config;
		
	}

	public function load_content(){

		// Get le Module appelé ou Index par défaut
		$module= ( $this->req->module != '' ) ? $this->req->module : 'index';	
		// Get l'action appelée ou Index par défaut
		$action= ( $this->req->action != '')   ? $this->req->action : 'index';	
		
		// Assignation des variables au template
		$this->tpl->assign('titre',' ');
		$this->tpl->assign('module',$module);
		$this->tpl->assign('action',$action);

		// Vérification de l'existence du Module
		if(!class_exists($module))
			if(file_exists("modules/$module/$module.module.php"))
				require("modules/$module/$module.module.php");
			else
				throw new Exception("Module inconnu : $module");

		// Instanciation du Module
		$m=new $module();
		// On lie le template à afficher
		$m->set_tpl_name("$action");
		// Formatage de la fonction action__$action
		$action="action_$action";
		// On lie les variables de template, de site, de database et de request au module
		$m->set_variables($this->config);
		$m->init();
		
		// On appelle l'action
		$m->$action();

		// On affiche le template
		$res=$this->tpl->fetch("file:modules/$module/tpl/".$m->get_tpl_name().".tpl");
		$this->tpl->assign('bloc_contenu',$res);
		$this->tpl->assign('messages',$this->site->liste_messages());
	}
}

?>