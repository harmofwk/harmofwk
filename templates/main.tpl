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
		<header>
			<h1> HarmoFwk </h1>
		</header>
		<nav>
			<ul class="menu"> 
				<li><a href="#"> Index </a></li>
				<li><a href="#"> Install </a></li>
				<li><a href="#"> Getting Start </a></li>
			</ul>
		</nav>


    <div class="container">

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