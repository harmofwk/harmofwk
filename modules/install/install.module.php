<?php
function endsWith($str, $sub) {
    return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
}

class install extends Module{

	public function action_index(){
		$this->set_title("Installation");

		// Sécurisation de ce module, l'install doit être activé
		if(!file_exists("conf/INSTALL"))
		{
			$this->site->redirect("index");
		}

		//
		// Module d'installation et de configuration automatique
		//

		// Lecture du fichiers de paramètres
		if(file_exists("conf/Params.ini.php"))
		{
			$this->tpl->assign("params", true);
			if(defined("URLREWRITE"))
			{
				$this->tpl->assign("params_rewriteurl", URLREWRITE);
			}
			else $this->tpl->assign("params_rewriteurl", false);

		}
		else
		{
			$this->tpl->assign("params", false);
			$this->tpl->assign("params_rewriteurl", false);
		}

		// check connexion à la bdd
		try {
			$this->db->connect();
			$this->tpl->assign("connexion_bdd", true);
		}catch(Exception $e) {
			$this->tpl->assign("connexion_bdd", false);
		}

		// Chargement de Zebra_Form 
		try   {
			$test = new Zebra_Form("form");
			$this->tpl->assign("zf", true);
		}
		catch(Exception $e) {
			$this->tpl->assign("zf", false);
		}

		// Chargement des tables Doctrine Record
		$dir = opendir(CLASSES);
		$my_tables = array();
	    while (false !== ($entry = readdir($dir))) {
	    	if(!endsWith($entry, "Table.class.php") && $entry != "." && $entry != "..")
	    	{
	    		$exp = explode(".", $entry);
	    		$my_tables[] = $exp[0];
	    	}
	    }
		$this->tpl->assign("my_tables", $my_tables);

	}

	public function action_initdb(){

		// Chargement des tables Doctrine Record
		$dir = opendir(CLASSES);
		$my_tables_doctrine = array();
	    while (false !== ($entry = readdir($dir))) {
	    	if(!endsWith($entry, "Table.class.php") && $entry != "." && $entry != "..")
	    	{
	    		$exp = explode(".", $entry);
	    		$my_tables_doctrine[] = $exp[0];
	    	}
	        	
	    }

		foreach($my_tables_doctrine as $t)
		{
			try {
				$table = Doctrine_Core::getTable($t); 
				$this->db->export->createTable($table->getTableName(), $table->getColumns());
			    $this->site->ajouter_message("La table ".$t." a bien été crée.");
			} catch(Doctrine_Connection_Exception $e) { // Si une exception est lancée.
				$this->site->ajouter_message("Une erreur s'est produite lors de la création d'une table.");
			}			
		}

		$this->site->redirect("install");
	}

	public function action_doc(){
		// Action qui ne fait rien de particulier ici
		// Affiche quelques élèments de doc utiles
	}

	
	
}	
?>