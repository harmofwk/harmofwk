<?php /* Smarty version Smarty-3.1.1, created on 2014-01-16 19:51:21
         compiled from "templates\module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2796552d836dd732816-96423005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d344d0277dd904267f129f6a128859d72f0a603' => 
    array (
      0 => 'templates\\module.tpl',
      1 => 1389901873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2796552d836dd732816-96423005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52d836dd77241',
  'variables' => 
  array (
    'titre' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d836dd77241')) {function content_52d836dd77241($_smarty_tpl) {?><html>
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