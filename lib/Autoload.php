<?php

/* Fonction Autoload - HarmoFWK
* Charge les dépendances du Framework.
* 
* Changelog 
* [21/05/2014] 
* Nettoyage du Code. 
*/

function __autoload_my_classes($name) {
	if($name == "Zebra_Form")
	{
		require_once(LIB . "/Zebraform/$name.php");
	}
    if(file_exists(CLASSES . "/$name.class.php"))
    	require_once( CLASSES . "/$name.class.php");
    else if(file_exists(LIB . "/$name.class.php"))
    	require_once(LIB . "/$name.class.php");
    else if(file_exists(BLOCS . "/$name/$name.bloc.php"))
    	require_once(BLOCS . "/$name/$name.bloc.php");
}

spl_autoload_register('__autoload_my_classes');

?>