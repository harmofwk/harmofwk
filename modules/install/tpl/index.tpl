<h1> Installation d'HarmoFWK </h1>
<p> Merci d'avoir choisi HarmoFWK, cette page est la page de configuration et d'installation automatique du Framework. HarmoFWK utilise l'ORM Doctrine pour gérer vos accès en lecture et en écriture dans votre base de données. Il intègre aussi la librairie Zebra_Form, puissante librairie jQuery/PHP de création et gestion de formulaires HTML. </p>

<a href="{getLien module=index action=index}"> Test de liens </a>

<h2> Etat de la configuration : -- </h2>

Chargement des paramètres de configuration : -- -- 

Chargement des Blocs de contenus : -- -- 
Listes des blocs chargés : -- -- -- -- -- -- 

Chargement de ZebraForm : -- --



Base de données et Doctrine = {if $connexion_bdd} OK {else} NON CONNECTE {/if}

Chargement des tables : -- -- 
Listes des tables chargés : -- -- -- -- --

<h2> Todo </h2>

<ol>
	<li> Définir vos paramètres personnalisés dans conf/Params.ini.php. </li>
	<li> Ecrire vos classes Doctrine_Record de définition de vos tables. </li>
	<li> Optionnel : Lancer le script de création de base de données. </li>
</ol>