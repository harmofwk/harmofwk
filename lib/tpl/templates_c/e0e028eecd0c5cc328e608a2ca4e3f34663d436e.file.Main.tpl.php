<?php /* Smarty version Smarty-3.1.1, created on 2014-01-23 20:16:42
         compiled from "templates\Main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2063052e178aa7bd011-40378775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0e028eecd0c5cc328e608a2ca4e3f34663d436e' => 
    array (
      0 => 'templates\\Main.tpl',
      1 => 1389987858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063052e178aa7bd011-40378775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
    'login' => 0,
    'Bloc_Login' => 0,
    'module' => 0,
    'messages' => 0,
    'bloc_contenu' => 0,
    'affichages' => 0,
    'erreurs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52e178aadf713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e178aadf713')) {function content_52e178aadf713($_smarty_tpl) {?><!-- start template-->
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/jquery-1.10.2.min.js'></script>
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/jquery-ui-1.10.3.custom.min.js'></script>	
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/bootstrap/js/bootstrap.min.js'></script>	
		<script src='http://<?php echo $_SERVER['SERVER_NAME'];?>
/js/default.js'></script>	
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/ui-lightness/jquery-ui-1.10.3.custom.min.css' />
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/bootstrap/css/bootstrap.min.css' />	
		<link rel='stylesheet' href='http://<?php echo $_SERVER['SERVER_NAME'];?>
/styles/defaut.css' />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"> HarmoFWK </a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
						<li><a href='/test'>Lien</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown <b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li> <a href='/test'> Sous-lien </a> </li>
								<li> <a href='/test'> Sous-lien 2 </a> </li>
								<li> <a href='/test'> Sous-lien 3 </a> </li>
							</ul>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['login']->value){?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Connecté <b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li> <a href='/test'> Sous-lien </a> </li>
								<li> <a href='/test'> Sous-lien 2 </a> </li>
								<li> <a href='/test'> Sous-lien 3 </a> </li>
							</ul>
						</li>
						<?php }?>
				</ul>
				<?php echo $_smarty_tpl->tpl_vars['Bloc_Login']->value;?>
			
		</nav>


    <div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</li>
		</ol>

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