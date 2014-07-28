<!DOCTYPE html>
<html lang="{$html_lang}">
	<head>
		<meta charset="{$meta_charset}">
		<meta name="description" content="{$site_description}">
		<meta name="keywords" content="{$site_keywords}">
		<meta name="author" content="{$site_author}">
		<title>{$titre}</title>
		{foreach $tabjs as $js}
		<script src='http://{$smarty.server.SERVER_NAME}/js/{$js}'></script>

		{/foreach}

		{foreach $tabcss as $css}
		<link rel='stylesheet' href='http://{$smarty.server.SERVER_NAME}/styles/{$css}' />

		{/foreach}

	</head>
	<body>

		<header>
			<h1> HarmoFwk </h1>
		</header>

		<nav>
			<ul class="menu"> 
				<li><a href="{getLien module=index action=index}"> Index </a></li>
				<li><a href="{getLien module=install action=index}"> Installation </a></li>
				<li><a href="{getLien module=install action=doc}"> Documentations </a></li>
			</ul>
		</nav>

		{if $messages}
		<div id="zonemessage">
				{$messages}
		</div>
		{/if}

		<div id="page">

			<div class="grid flex">
				<div class="col_8">
					{$bloc_contenu}
				</div>

				<div class="col_4">
					{$Bloc_Helloworld}
				</div>
			</div>

			<div class="clear"></div>

		</div>

		{if $appenv == "dev"}
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
		{/if}
		
	</body>
		
</html>