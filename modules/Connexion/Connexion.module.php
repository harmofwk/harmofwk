<?php
class Connexion extends Module{
			

	public function action_login(){

		// A FAIRE
		// verifier les donnees de connexion
		//charger le membre
		//$user=Membre::chercherParId(/*mettre l'id*/);
		//$this->session->ouvrir($user);
		
		//code de demo
		$this->session->ouvrir($this->req->Login); 	
		$this->tpl->assign('login', $this->req->Login);
		$this->site->ajouter_message("Vous êtes connecté en tant que ".$this->req->Login);
		$this->site->redirect("index");
	}

	public function action_deconnect(){		
		$this->site->ajouter_message('Vous êtes déconnecté');							
		$this->session->fermer(); 			
		$this->site->redirect("index");
	}

}
?>