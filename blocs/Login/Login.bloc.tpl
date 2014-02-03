<h4> Espace Membre </h4>
{if isset($login)}
	<p> Bienvenue {$login} ! <br />
		<a href='{getLien module=connexion action=deconnect}'> Se déconnecter </a>
	</p>
{else}
	<form method='POST' action="{getLien module=connexion action=login}">
		<input name='Login' type="text" placeholder="Identifiant">
		<input name='Pass' type="password" placeholder="Pass">
		<div class="clear"></div>
		<input type="submit" value='Connexion'>
	</form>
{/if}