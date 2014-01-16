<?php
//
// Gestionnaire d'Exceptions : Template d'erreurs
//

function exc($exc){
	global $tpl;
	global $err;
	$err=true;
	ob_end_flush();
	$tpl->assign('message',$exc->getFile()." : ".$exc->getLine()."<br>".$exc->getMessage());
	$tpl->display('erreur.tpl');
}

// Gestionnaire d'erreurs : Affiche les erreurs dans une boite sous la page
function erreur($errno, $errstr, $errfile, $errline){
	global $debugs;
	$debugs[]= "<b>$errfile</b> : $errline $errstr";
}

//
// Initialisation de la page 
//

header('Content-type:text/html; charset=utf-8');
ini_set('display_errors',1);

// Gestion d'erreurs et exceptions 
set_exception_handler('exc');
set_error_handler('erreur');
$debugs = array();

// Capture des affichages parasites
ob_start();

// Chargeurs de classes automatiques
require_once("conf/Params.ini.php");
require_once("lib/Autoload.php");

//
// Classes du wrapper config
//

// Template
require_once('lib/Smarty-3.1.1/libs/Smarty.class.php');
$tpl = new Smarty();
$tpl->template_dir = 'templates/';
$tpl->compile_dir = 'lib/tpl/templates_c/';
$tpl->config_dir = 'lib/tpl/configs/';
$tpl->cache_dir = 'lib/tpl/cache/';


// Session
$session=Session::get_instance();

// Site
$site=Site::get_instance($session);

// Base de données
try{
	$db=DB::get_instance();
}catch(Exception $e){
	$site->ajouter_message("Impossible de se connecter sur la base de données ".DB_HOST."/".BASE,ALERTE);
	$site->ajouter_message("Editer les paramètres du fichier <b>conf/Params.ini.php</b>",ALERTE);	
	$db=null;
}

// Requête
$request=Request::get_instance();

// Wrapper
$config=array('db'=>$db,'tpl'=>$tpl,'session'=>$session,'req'=>$request,'site'=>$site);


// Chargement du menu
include ("conf/Menus.ini.php");
$tpl->assign("menus",$menus);


// Chargement du module actuel
$moteur=new FrontController($config);
$moteur->load_content($tpl);

// Chargement des blocs statiques
include ("conf/Blocs.ini.php");
foreach ($blocs as $b){
	$bl = new $b();
	$bl->set_variables($config);
	$bl->display();
	$res=$tpl->fetch("file:blocs/$b.bloc.tpl");
	$tpl->assign("Bloc_$b",$res);
}

// Récupération des affichages parasites
$echx = ob_get_clean();
$tpl->assign("affichages",$echx);

// Récupération des erreurs parasites
$aff_errs="";
foreach($debugs as $d)
	$aff_errs .=  "<div>$d</div>";
$tpl->assign("erreurs",$aff_errs);

// Affichage du template selon le mode voulue
if($request->displayModuleOnly)
	$tpl->display('module.tpl');
elseif($request->displayModuleInDialog)
	$tpl->display('modal.tpl');
else
	$tpl->display('main.tpl');
?>
