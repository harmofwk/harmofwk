<!-- start template-->
<!DOCTYPE html>
<html>
	<head>
		<title>{$titre}</title>
		<script src='http://{$smarty.server.SERVER_NAME}/js/jquery-1.10.2.min.js'></script>
		<script src='http://{$smarty.server.SERVER_NAME}/js/jquery-ui-1.10.3.custom.min.js'></script>
		<script src='http://{$smarty.server.SERVER_NAME}/js/kickstart.js'></script>
		<script src='http://{$smarty.server.SERVER_NAME}/js/zebra_form.js'></script>
		<script src='http://{$smarty.server.SERVER_NAME}/js/default.js'></script>
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/ui-lightness/jquery-ui-1.10.3.custom.min.css' />
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/kickstart/kickstart.css' />
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/zebraform/zebra_form.css' />
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/defaut.css' />
	</head>
	<body>
		{if $messages}
		<div id="zonemessage">
				{$messages}
		</div>
		{/if}

		<div id="page">

			<div class="grid flex">
				<div class="col_12">
					{$bloc_contenu}
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<!-- BEGIN. Supprimer pour la prod... -->
		{if $affichages}
		<div class='notice error'>
			<h4> Affichages </h4>
			<p>{$affichages}</p>
		</div>
		{/if}

		{if $erreurs}
		<div class='notice error'>
			<h4> Erreurs </h4>			
			<p>{$erreurs}</p>
		</div>
		{/if}
		<!-- Supprimer pour la prod... END. -->

	</body>
		
</html>
<!-- end template-->