<!-- start template-->
<!DOCTYPE html>
<html>
	<head>
		<title> Erreur </title>
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
		<div id='page'>
			<h3> Oups ! Une erreur s'est produite. =( </h3>

			<p>
				Vous pouvez avertir l'administrateur à l'adresse suivante : {$email} <br />
				N'oubliez pas de copier/coller l'erreur ci-dessous. :)
			</p>

			<div class='notice error'>
				{$message|default:"Le site a rencontré un problème."}
			</div>
		</div>
	</body>
		
</html>
<!-- end template-->
