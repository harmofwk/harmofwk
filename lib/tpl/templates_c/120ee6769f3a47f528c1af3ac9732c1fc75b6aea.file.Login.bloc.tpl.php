<?php /* Smarty version Smarty-3.1.1, created on 2014-01-17 19:41:30
         compiled from "blocs\Login.bloc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2103652d8369c55e4d6-19207524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120ee6769f3a47f528c1af3ac9732c1fc75b6aea' => 
    array (
      0 => 'blocs\\Login.bloc.tpl',
      1 => 1389987680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103652d8369c55e4d6-19207524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52d8369c6efef',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8369c6efef')) {function content_52d8369c6efef($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['login']->value){?>	
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