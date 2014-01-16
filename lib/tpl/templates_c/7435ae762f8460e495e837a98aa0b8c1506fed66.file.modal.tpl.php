<?php /* Smarty version Smarty-3.1.1, created on 2014-01-16 19:48:26
         compiled from "templates\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1873852d83700649a95-80784813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7435ae762f8460e495e837a98aa0b8c1506fed66' => 
    array (
      0 => 'templates\\modal.tpl',
      1 => 1389901675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1873852d83700649a95-80784813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52d837006a497',
  'variables' => 
  array (
    'titre' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d837006a497')) {function content_52d837006a497($_smarty_tpl) {?><html>
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