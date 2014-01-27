<?php /* Smarty version Smarty-3.1.1, created on 2014-01-27 19:36:26
         compiled from "templates\ModuleDialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2127152e6b53a84cce0-46386931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96acf53881a3e328e8a7d9d66a95a2623ac8870' => 
    array (
      0 => 'templates\\ModuleDialog.tpl',
      1 => 1389901675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127152e6b53a84cce0-46386931',
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
  'unifunc' => 'content_52e6b53a8da1b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6b53a8da1b')) {function content_52e6b53a8da1b($_smarty_tpl) {?><html>
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
    <!-- boite de dialogue -->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h4>
      </div>
      <div class="modal-body">
        <?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</body>
</html><?php }} ?>