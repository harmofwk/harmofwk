<?php
class Initdb extends Module{

	public function action_index(){
		$this->set_title("Init db");

		// 
		// TODO : remplir l'array avec le nom de toutes les tables à créer (class extends Doctrine_Record)
		//
		$tables = array(
			'News');

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

		$this->site->redirect("index");
	}

	
	
}	
?>