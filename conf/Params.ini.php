<?php

/*
** Fichier de paramètres centralisé de HarmoFWK
** 
** Vous pouvez renseigner ici tout vos paramètres
** de Base de données, sécurités, noms de répertoires, 
** affichages...
**
** 
**/

//
// Paramètres de connexions à la base de données
//

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("BASE","");
define("PORT","");

//
// Salt pour les passwords, fortement recommandé pour éviter les attaques par rainbow tables
//

define("SALT", "th1sisas4lt");

//
// Booléen pour afficher ou non le fil d'ariane sur toutes les pages du sites
// Sous la forme Home / {module} / {titre de la page}
//

define("BREADCRUMB", true);

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