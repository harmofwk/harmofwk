<html>
  <head>
    <title>{$titre}</title>
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
        <h4 class="modal-title" id="myModalLabel">{$titre}</h4>
      </div>
      <div class="modal-body">
        {$bloc_contenu}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</body>
</html>