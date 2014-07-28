<?php

/*
** Fichier de paramètres centralisé de HarmoFWK
** 
** Renseignez chaque point avec soin pour configurer votre site !
** Ces paramètres sont ensuite utilisés à divers endroits par le Framework.
** 
**/

defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'prod'));

//
// Paramètres de connexions à la base de données
//

if(APPLICATION_ENV == 'dev') {

	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("BASE","base_fwk");
	define("PORT","");

	//
	// Définit l'adresse email de l'administrateur pour envois de mails, logs, ou debug
	//
	define("EMAIL", "admin@localhost");

	//
	// Définit si la réecriture d'url est activée (_.htaccess renommé en .htaccess requis au niveau d'Apache)
	//
	define("URLREWRITE", true);
}
else
{

	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","passprod");
	define("BASE","base_fwk");
	define("PORT","");

	//
	// Définit l'adresse email de l'administrateur pour envois de mails, logs, ou debug
	//
	define("EMAIL", "myadress@domain.fr");

	//
	// Définit si la réecriture d'url est activée (_.htaccess renommé en .htaccess requis au niveau d'Apache)
	//
	define("URLREWRITE", true);
}

//
// Salt pour les passwords, fortement recommandé pour éviter les attaques par rainbow tables
//

define("SALT", "th1sisas4lt");

//
//
//
define("HTML_LANG", "fr");
define("META_CHARSET", "utf-8");
define("SITE_DESCRIPTION", "Un site utilisant HarmoFWK !");
define("SITE_KEYWORDS", "site, harmofwk, mot-clé");
define("SITE_AUTHOR", "Maxime Gilardi");

//
// Constantes des chemins vers les répertoires du Framework
//

define('CLASSES',dirname($_SERVER["SCRIPT_FILENAME"])."/tables");
define('TEMPLATES',dirname($_SERVER["SCRIPT_FILENAME"])."/templates");
define('STYLES',dirname($_SERVER["SCRIPT_FILENAME"])."/styles");
define('MODULES',dirname($_SERVER["SCRIPT_FILENAME"])."/modules");
define('LIB',dirname($_SERVER["SCRIPT_FILENAME"])."/lib");
define('BLOCS',dirname($_SERVER["SCRIPT_FILENAME"])."/blocs");

?>