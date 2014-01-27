<?php /* Smarty version Smarty-3.1.1, created on 2014-01-27 19:36:04
         compiled from "templates\ModuleOnly.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323352e6b52429c377-70267631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3c44253c2fded75c338c9ee26aa040d0c6db427' => 
    array (
      0 => 'templates\\ModuleOnly.tpl',
      1 => 1389901873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323352e6b52429c377-70267631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52e6b52430bc2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6b52430bc2')) {function content_52e6b52430bc2($_smarty_tpl) {?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
		<script src='js/jquery-1.10.2.min.js'></script>
		<script src='js/jquery-ui-1.10.3.custom.min.js'></script>	
		<script src='styles/bootstrap/js/bootstrap.min.js'></script>	
		<script src='js/default.js'></script>	
		<link rel='stylesheet' href='styles/ui-lightness/jquery-ui-1.10.3.custom.min.css' />
		<link rel='stylesheet' href='styles/bootstrap/css/bootstrap.min.css' />	
		<link rel='stylesheet' href='styles/defaut.css' />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="container">
			<div id='module'>
		        <?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

		    </div>
		</div>
	</body>
</html><?php }} ?>