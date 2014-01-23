<?php

/****************************
** Gestionnaire d'erreurs et exceptions 
****************************/
function exc($exc){
	global $tpl;
	global $err;
	$err=true;
	ob_end_flush();
	$tpl->assign('message',$exc->getFile()." : ".$exc->getLine()."<br>".$exc->getMessage());
	$tpl->display('Error.tpl');
}

function erreur($errno, $errstr, $errfile, $errline){
	global $debugs;
	$debugs[]= "<b>$errfile</b> : $errline $errstr";
}

/****************************
** Initialisation de la page 
****************************/

header('Content-type:text/html; charset=utf-8');
ini_set('display_errors',1);

/****************************
** Gestion des erreurs 
****************************/
set_exception_handler('exc');
set_error_handler('erreur');
$debugs = array();
ob_start();

/****************************
** Chargement des params et des classes 
****************************/
require_once("conf/Params.ini.php");
require_once("lib/Autoload.php");

/****************************
** Template 
****************************/
require_once('lib/Smarty-3.1.1/libs/Smarty.class.php');
$tpl = new Smarty();
$tpl->template_dir = 'templates/';
$tpl->compile_dir = 'lib/tpl/templates_c/';
$tpl->config_dir = 'lib/tpl/configs/';
$tpl->cache_dir = 'lib/tpl/cache/';

/****************************
** Session
****************************/
$session=Session::get_instance();

/****************************
** Site 
****************************/
$site=Site::get_instance($session);

/****************************
** Base de données ... BIENTOT REMPLACE PAR DOCTRINE/EZPDO
****************************/
try{
	$db=DB::get_instance();
}catch(Exception $e){
	$site->ajouter_message("Impossible de se connecter sur la base de données ".DB_HOST."/".BASE,ALERTE);
	$site->ajouter_message("Editer les paramètres du fichier <b>conf/Params.ini.php</b>",ALERTE);	
	$db=null;
}

/****************************
** Wrapper Request
****************************/
$request=Request::get_instance();

/****************************
** Wrapper de config  
****************************/
$config=array('db'=>$db,'tpl'=>$tpl,'session'=>$session,'req'=>$request,'site'=>$site);

/****************************
** Chargement du frontController et du module 
****************************/
$moteur=new FrontController($config);
$moteur->load_content($tpl);

/****************************
** Chargement des blocs statiques sur la page
****************************/
include ("conf/Blocs.ini.php");
foreach ($blocs as $b){
	$bl = new $b();
	$bl->set_variables($config);
	$bl->display();
	$res=$tpl->fetch("file:blocs/$b.bloc.tpl");
	$tpl->assign("Bloc_$b",$res);
}

/****************************
** Récupération des affichages et des erreurs 
****************************/
$echx = ob_get_clean();
$tpl->assign("affichages",$echx);

$aff_errs="";
foreach($debugs as $d)
	$aff_errs .=  "<div>$d</div>";
$tpl->assign("erreurs",$aff_errs);

/****************************
** AFFICHAGE DE LA PAGE SELON LE MODE VOULUE
****************************/
if($site->DisplayModuleOnly)
	$tpl->display('ModuleOnly.tpl');
elseif($site->DisplayModuleDialog)
	$tpl->display('ModuleDialog.tpl');
else
	$tpl->display('Main.tpl');
?>
