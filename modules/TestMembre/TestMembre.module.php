<?php


class TestMembre extends Module{

	public function	action_index(){
		
		
		$mb = new  MembreManager ();
		
		//création d'un membre fictif
		echo "<p>Création BD</p>";		
		$membre=new Membre();
		$membre->login="test".time();
		$membre->nom="test".time();
		$membre->prenom="test";
		$membre->mail="test";		
		$membre->pass=md5("test");
		$resultat = $mb->creer($membre);

		echo "utilisateur créé, id=".$resultat->id;
		
		//récupération dans la BD
		echo "<p>récupération BD</p>";
		
		$membre = $mb->chercherParId($resultat->id);
		var_dump($membre);
		
		
		
		
	}
}


?>
