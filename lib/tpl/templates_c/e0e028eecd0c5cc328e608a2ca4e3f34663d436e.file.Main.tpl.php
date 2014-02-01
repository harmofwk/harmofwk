<?php /* Smarty version Smarty-3.1.1, created on 2014-02-01 22:17:01
         compiled from "templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2091652e6bf5039fdb4-41533618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0e028eecd0c5cc328e608a2ca4e3f34663d436e' => 
    array (
      0 => 'templates\\Main.tpl',
      1 => 1391292799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2091652e6bf5039fdb4-41533618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52e6bf5050dca',
  'variables' => 
  array (
    'titre' => 0,
    'messages' => 0,
    'bloc_contenu' => 0,
    'affichages' => 0,
    'erreurs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6bf5050dca')) {function content_52e6bf5050dca($_smarty_tpl) {?><!-- start template-->
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/jquery-1.10.2.min.js'></script>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/jquery-ui-1.10.3.custom.min.js'></script>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/kickstart.js'></script>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/zebra_form.js'></script>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/default.js'></script>
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/ui-lightness/jquery-ui-1.10.3.custom.min.css' />
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/kickstart/kickstart.css' />
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/zebraform/zebra_form.css' />
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/defaut.css' />
	</head>
	<body>
		<header>
			<h1> HarmoFwk </h1>
		</header>
		<nav>
			<ul class="menu"> 
				<li><a href="#"> Index </a></li>
				<li><a href="#"> Install </a></li>
				<li><a href="#"> Getting Start </a></li>
			</ul>
		</nav>


    <div class="container">

		<?php if ($_smarty_tpl->tpl_vars['messages']->value){?>
			<div class="bs-callout bs-callout-danger">
				<?php echo $_smarty_tpl->tpl_vars['messages']->value;?>

			</div>
		<?php }?>

		<div id='module'>
			<?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

		</div>			
				<?php if ($_smarty_tpl->tpl_vars['affichages']->value){?>
			<div class='alert alert-info'>
				<h4> Erreurs ! </h4>
				<p>
				<?php echo $_smarty_tpl->tpl_vars['affichages']->value;?>

				</p>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['erreurs']->value){?>
			<div class='alert alert-warning'>
				<h4> Erreurs ! </h4>			
				<p>
				<?php echo $_smarty_tpl->tpl_vars['erreurs']->value;?>

				</p>
			</div>
			<?php }?>
	</div>
	</body>
		
</html>
<!-- end template--><?php }} ?>