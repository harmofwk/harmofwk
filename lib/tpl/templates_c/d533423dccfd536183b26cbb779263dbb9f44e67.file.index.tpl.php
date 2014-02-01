<?php /* Smarty version Smarty-3.1.1, created on 2014-02-01 22:17:01
         compiled from "modules\install\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2272552e6d072a07751-24637013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd533423dccfd536183b26cbb779263dbb9f44e67' => 
    array (
      0 => 'modules\\install\\tpl\\index.tpl',
      1 => 1391293003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2272552e6d072a07751-24637013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52e6d072a3d3d',
  'variables' => 
  array (
    'connexion_bdd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6d072a3d3d')) {function content_52e6d072a3d3d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_getLien')) include 'C:\wamp\www\HarmoFWK\lib\Smarty-3.1.1\libs\plugins\function.getLien.php';
?><h1> Installation d'HarmoFWK </h1>
<p> Merci d'avoir choisi HarmoFWK, cette page est la page de configuration et d'installation automatique du Framework. HarmoFWK utilise l'ORM Doctrine pour gérer vos accès en lecture et en écriture dans votre base de données. Il intègre aussi la librairie Zebra_Form, puissante librairie jQuery/PHP de création et gestion de formulaires HTML. </p>

<a href="<?php echo smarty_function_getLien(array('module'=>'index','action'=>'index'),$_smarty_tpl);?>
"> Test de liens </a>
<h2> Etat de la configuration : -- </h2>

Chargement des paramètres de configuration : -- -- 

Chargement des Blocs de contenus : -- -- 
Listes des blocs chargés : -- -- -- -- -- -- 

Chargement de ZebraForm : -- --



Base de données et Doctrine = <?php if ($_smarty_tpl->tpl_vars['connexion_bdd']->value){?> OK <?php }else{ ?> NON CONNECTE <?php }?>

Chargement des tables : -- -- 
Listes des tables chargés : -- -- -- -- --

<h2> Todo </h2>

<ol>
	<li> Définir vos paramètres personnalisés dans conf/Params.ini.php. </li>
	<li> Ecrire vos classes Doctrine_Record de définition de vos tables. </li>
	<li> Optionnel : Lancer le script de création de base de données. </li>
</ol><?php }} ?>