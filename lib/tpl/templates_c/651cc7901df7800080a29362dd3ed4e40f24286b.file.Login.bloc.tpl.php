<?php /* Smarty version Smarty-3.1.1, created on 2014-01-27 20:19:51
         compiled from "blocs\Login\Login.bloc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:781552e6bf503380c8-11544766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651cc7901df7800080a29362dd3ed4e40f24286b' => 
    array (
      0 => 'blocs\\Login\\Login.bloc.tpl',
      1 => 1390853989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '781552e6bf503380c8-11544766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52e6bf50374a8',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6bf50374a8')) {function content_52e6bf50374a8($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>	
<ul class="nav navbar-nav navbar-right">
	<li><a href='/connexion/deconnect'> <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 | Se déconnecter</a></li>
</ul>
<?php }else{ ?>
	<form class="navbar-form navbar-right" role="form" method='POST' action="/connexion/login">
		<div class="form-group">
			<input name='Login' type="text" placeholder="Identifiant" class="form-control">
		</div>
		<div class="form-group">
			<input name='Pass' type="password" placeholder="Pass" class="form-control">
		</div>
	<input type="submit" class="btn btn-success" value='Connexion'>
	</form>
<?php }?>
</div>
<?php }} ?>