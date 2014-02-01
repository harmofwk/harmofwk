<?php
	// Fonction appelé pour générer un lien vers un module / action
	// Afin de gérer l'url rewriting
	function smarty_function_getLien($params, &$smarty) {

		// Récupération des paramètres
		$module = $params['module']; 
		$action = $params['action']; 

		// Génération du lien
		if(URLREWRITE == true)
			$link = "/$module/$action";
		else
			$link = "?module=$module&action=$action";

		return $link;
	}

?>