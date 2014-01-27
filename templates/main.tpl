<!-- start template-->
<!DOCTYPE html>
<html>
	<head>
		<title>{$titre}</title>
		<script src='http://{$smarty.server.SERVER_NAME}/js/jquery-1.10.2.min.js'></script>
		<script src='http://{$smarty.server.SERVER_NAME}/js/jquery-ui-1.10.3.custom.min.js'></script>	
		<script src='http://{$smarty.server.SERVER_NAME}/styles/bootstrap/js/bootstrap.min.js'></script>	
		<script src='http://{$smarty.server.SERVER_NAME}/js/default.js'></script>
		<script src='http://{$smarty.server.SERVER_NAME}/js/zebra_form.js'></script>
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/ui-lightness/jquery-ui-1.10.3.custom.min.css' />
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/bootstrap/css/bootstrap.min.css' />	
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/defaut.css' />
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/zebraform/zebra_form.css' />
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
						{if $login}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Connecté <b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li> <a href='/test'> Sous-lien </a> </li>
								<li> <a href='/test'> Sous-lien 2 </a> </li>
								<li> <a href='/test'> Sous-lien 3 </a> </li>
							</ul>
						</li>
						{/if}
				</ul>
				{$Bloc_Login}			
		</nav>


    <div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/{$module}">{$module}</a></li>
			<li class="active">{$titre}</li>
		</ol>

		{if $messages}
			<div class="bs-callout bs-callout-danger">
				{$messages}
			</div>
		{/if}

		<div id='module'>
			{$bloc_contenu}
		</div>			
				{if $affichages}
			<div class='alert alert-info'>
				<h4> Erreurs ! </h4>
				<p>
				{$affichages}
				</p>
			</div>
			{/if}
			{if $erreurs}
			<div class='alert alert-warning'>
				<h4> Erreurs ! </h4>			
				<p>
				{$erreurs}
				</p>
			</div>
			{/if}
	</div>
	</body>
		
</html>
<!-- end template-->