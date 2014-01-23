<?php
/*
* Chargeur de classes
*/
function __autoload_my_classes($name) {
    if(file_exists(CLASSES . "/$name.class.php"))
    	require_once( CLASSES . "/$name.class.php");
    else if(file_exists(LIB . "/$name.class.php"))
    	require_once(LIB . "/$name.class.php");
    else if(file_exists(BLOCS . "/$name.bloc.php"))
    	require_once(BLOCS . "/$name.bloc.php");
}

spl_autoload_register('__autoload_my_classes');

?>