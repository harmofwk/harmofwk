# HarmoFWK

Forké depuis [d-durand/mini-fwk](https://github.com/d-durand/mini-fwk)

Publié sous licence GPLv3

Copyright [Maxime Gilardi](http://www.max-g.fr) (Harmo)

-----------------

HarmoFWK est un framework MVC écrit en PHP minimaliste. No bullshit. 

## Pourquoi ?

Ce fork a plusieurs utilités : 
* D'une part, me construire mon propre **Framework PHP MVC**, en partant d'un existant et en y ajoutant d'autres fonctionnalités, en améliorer d'autres, et disposer d'une base homemade qui ne soit pas dépendant d'autres gros Framework que je n'apprécie pas particulièrement.
* D'autre part, m'apprendre à utiliser **Git et GitHub**, car ceci est mon premier projet sur GitHub.

## Qu'est ce que c'est ?

Ce framework est un mini framework MVC écrit en PHP, à l'origine destiné à être un support pédagogique à l'IUT informatique d'Amiens pour appréhender les bases du MVC. Historiquement, il contenait : 

* Le Moteur de Template **Smarty**.
* La librairie CSS **Bootstrap** de Twitter.
* La librairie Javascript **jQuery/jQueryUI**.
* Toute l'architecture MVC (Modules, Actions, classe de BDD, config etc).

## Ajouts et nouveautés

A ce jour, HarmoFWK possède plusieurs fonctionnalités supplémentaires : 

* Gestion de l'URL Rewriting (dans le framework et dans Smarty).
* Intégration de Doctrine qui facilite grandement les accès en base.
* Intégration de Zebra_Form, puissante librairie de création de formulaires HTML.
* Intégration de Kickstart, librairie CSS simpliste semblable à bootstrap.
* Gestion des APPLICATION_ENV Apache (dev ou prod) pour les paramètres et le debug.

Consultez la documentation disponible à l'installation pour en savoir plus sur ces librairies ! 

## Roadmap

Mes idées d'améliorations et d'ajouts qui seront intégrés à l'avenir. Les délais sont très larges et à titre indicatif. 

* ~2 mois : Remplacer Doctrine par un ORM maison (HarmORM), plus léger, plus rapide, et qui se suffira à lui-même. 
* ~3 mois : Ajout de types de champs supplémentaires sur Zebra_Form (ColorPicker et RichTextEditor). 
* ~6 mois : Inclusion de plusieurs modules pré-codés et prêts à l'emploi (Forum, Espace Membre, ...). Gestion sous formes de Bundles. 
* +6 mois : Création d'un HarmoCMS très simplifié avec auto install, déploiement auto de bundles, backend complet... 

## Install / Getting Started

1. Placer HarmoFWK à l'endroit de votre choix.

2. Dans votre navigateur, au lancement, le module d'installation devrait apparaître. Sinon, créez le fichier INSTALL dans le dossier conf/.Vous pouvez y voir quelques notions de configurations, et une Table de Base de données de test prêt à être créer. Le gros bouton vert va lancer le script Doctrine de création de vos tables en BDD. 

3. Dans le fichier conf/Params.ini.php, vérifier les différents points de configurations. Paramètres de connexion à la base données en prod ou en dev, activation de l'url rewriting, et email de l'administrateur. 

4. Si vous activez l'URL Rewriting, renommez le fichier _.htaccess en .htaccess, ou copiez le contenu dans votre VirtualHost Apache. Le mod_rewrite doit être activé. Ne pas oublier de modifier le paramètre RewriteBase si votre site n'est pas à la racine de votre nom de domaine. 

5. Ecrivez vos classes Doctrine_Record qui définira la structure de votre Base de données. Puis, créez les automatiquement à l'aide du bouton du module d'installation. La base de données doit exister. 

6. Supprimer le fichier INSTALL et le module install pour plus de sécurité. 