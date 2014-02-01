<?php
class install extends Module{

	public function action_index(){
		$this->set_title("Installation");

		global $my_tables_doctrine;
		print_r($my_tables_doctrine);
		
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

	}

	public function action_initdb(){


		// 
		// TODO : remplir l'array avec le nom de toutes les tables à créer (class extends Doctrine_Record)
		// dans params ini php


		foreach($tables as $t)
		{
			try {
				$table = Doctrine_Core::getTable($t); 
				$this->db->export->createTable($table->getTableName(), $table->getColumns());
			    $this->site->ajouter_message("La table ".$t." a bien été crée.");
			} catch(Doctrine_Connection_Exception $e) { // Si une exception est lancée.
				echo $e->getMessage(); // On l'affiche.
			}			
		}

		$this->site->redirect("install");
	}

	
	
}	
?>