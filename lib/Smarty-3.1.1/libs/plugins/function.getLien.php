<?php
	// Fonction appelé pour générer un lien vers un module / action
	// Afin de gérer l'url rewriting
	// 
	// fix 04/02/2014 : Gère deux arguments en GET
	function smarty_function_getLien($params, &$smarty) {

		// Récupération des paramètres
		$module = $params['module']; 
		$action = $params['action']; 

		if(isset($params['arg1'])) {
			$arg1 = $params['arg1'];
			$val1 = $params['val1'];
		}

		if(isset($params['arg2'])) {
			$arg2 = $params['arg2'];
			$val2 = $params['val2'];
		}

		// Génération du lien
		if(URLREWRITE == true) {
			if(!isset($arg1) && !isset($arg2))
				$link = "/$module/$action";
			if(isset($arg1) && !isset($arg2))
				$link = "/$module/$action-$arg1-$val1.html";
			if(isset($arg1) && isset($arg2))
				$link = "/$module/$action-$arg1-$val1-$arg2-$val2.html";
		}
		else {

			$link = "?module=$module&action=$action";
		}
			
		return $link;
	}

?>