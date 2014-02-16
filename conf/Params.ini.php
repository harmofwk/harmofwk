<?php

/*
** Fichier de paramètres centralisé de HarmoFWK
** 
** Renseignez chaque point avec soin pour configurer votre site !
** Ces paramètres sont ensuite utilisés à divers endroits par le Framework.
** 
**/

//
// Paramètres de connexions à la base de données
//

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("BASE","base_fwk");
define("PORT","");

//
// Adresse Email de contact de l'admin
//

define("EMAIL", "admin@localhost");

//
// Salt pour les passwords, fortement recommandé pour éviter les attaques par rainbow tables
//

define("SALT", "th1sisas4lt");

//
// Définit si la réecriture d'url est activée (_.htaccess renommé en .htaccess requis au niveau d'Apache)
//

define("URLREWRITE", true);

//
// Constantes des chemins vers les répertoires du Framework
//

define('CLASSES',dirname($_SERVER["SCRIPT_FILENAME"])."/tables");
define('TEMPLATES',dirname($_SERVER["SCRIPT_FILENAME"])."/templates");
define('STYLES',dirname($_SERVER["SCRIPT_FILENAME"])."/styles");
define('MODULES',dirname($_SERVER["SCRIPT_FILENAME"])."/modules");
define('LIB',dirname($_SERVER["SCRIPT_FILENAME"])."/lib");
define('BLOCS',dirname($_SERVER["SCRIPT_FILENAME"])."/blocs");

define('DEBUG', 0);

?>