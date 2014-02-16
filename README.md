# HarmoFWK

Forké depuis [d-durand/mini-fwk](https://github.com/d-durand/mini-fwk)

## Pourquoi ?
------------------
Ce fork a plusieurs utilités : 
* D'une part, me construire mon propre **Framework PHP MVC**, en partant d'un existant et en y ajoutant d'autres fonctionnalités, en améliorer d'autres, et disposer d'une base homemade qui ne soit pas dépendant d'autres gros Framework que je n'apprécie pas particulièrement.
* D'autre part, m'apprendre à utiliser **Git et GitHub**, car ceci est mon premier projet sur GitHub.

## Qu'est ce que c'est ?
------------------
Ce framework est un mini framework MVC écrit en PHP, à l'origine destiné à être un support pédagogique à l'IUT informatique d'Amiens pour appréhender les bases du MVC. Aujourd'hui, le framework inclut : 

* Le Moteur de Template **Smarty**.
* La librairie CSS **Bootstrap** de Twitter.
* La librairie Javascript **jQuery/jQueryUI**.
* Toute l'architecture MVC (Modules, Actions, classe de BDD, config etc).

HarmoFWK a pour but d'ajouter des fonctionnalités, ou en modifier.

## Ajouts et nouveautés
------------------

A ce jour, HarmoFWK possède plusieurs fonctionnalités supplémentaires : 
* Gestion de l'URL Rewriting (dans le framework et dans Smarty).
* Intégration de Doctrine qui facilite grandement les accès en base.
* Intégration de Zebra_Form, puissante librairie de création de formulaires HTML.
* Intégration de Kickstart, librairie CSS simpliste semblable à bootstrap.

Consultez la documentation disponible à l'installation pour en savoir plus sur ces librairies ! 

## Install / Getting Started
------------------

Un module d'installation est activée dès la première utilisation. Si ce n'est pas le cas, créez le fichier INSTALL dans le dossier conf/.
Vous pouvez y vérifier la configuration du fichier Params.ini.php, des blocs et des tables chargées. Vous pouvez créez vos tables dans votre base de données. 
Supprimez le fichier INSTALL pour terminer l'installation (l'accès à ce module ne sera plus possible). 