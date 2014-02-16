<h3> Installation d'HarmoFWK </h3>
<p> Merci d'avoir choisi HarmoFWK, cette page est la page de configuration et d'installation automatique du Framework. HarmoFWK utilise l'ORM Doctrine pour gérer vos accès en lecture et en écriture dans votre base de données. <br />
Il intègre aussi la librairie Zebra_Form, puissante librairie jQuery/PHP de création et gestion de formulaires HTML. <br />
HarmoFWK offre également la librairie CSS Kickstart, semblable à Bootstrap. </p>

<h4> Etat de la configuration </h4>

<p> Nous vous invitons à vérifier l'état de la configuration afin de faire fonctionner au mieux le framework par la suite. </p>

<ul class="icons">
	<li>
		{if $params} <i class="icon-ok"></i> {else} <i class="icon-remove"></i> {/if}</i> Chargement du fichier Params.ini.php 
		<ul class="icons">
			<li><i class="icon-folder-open-alt"></i> Url Rewrite : {if $params_rewriteurl} Activé {else} Désactivé {/if} </li>
			<li>{if $connexion_bdd} <i class="icon-ok"></i> {else} <i class="icon-remove"></i> {/if} Connexion à la base de données </li>
		</ul>
	</li>
	<li>{if $zf} <i class="icon-ok"></i> {else} <i class="icon-remove"></i> {/if} Chargement de Zebra_Form </li>
	<li>
		<i class="icon-folder-open-alt"></i> Chargement de Doctrine2 : Listes des tables chargées
		<ul class="icons">
			{foreach $my_tables as $t}
			<li><i class="icon-ok"></i> {$t} </li>
			{/foreach}
		</ul>
	</li>
</ul>

<p class="center">
	<a class="button green" href="{getLien module=install action=initdb}"> <i class="icon-play-circle"></i> Créer vos tables en base de données </a> <br />
</p>

<h4> Read Me / Todo </h4>

<p> 
	Pour commencer, vous pouvez modifier quelques paramètres dans le fichier <code>conf/Params.ini.php</code>. Connexion à la base de données, URL Rewriting, et autres constantes utiles. <br />
</p>
<p>
	Ecrivez ensuite vos classes Doctrine_Record et Doctrine_Table en suivant l'exemple de la table News déjà fourni. <br />
	Une fois que ceci est fait, vous pouvez lancez le script d'initialisation de votre base de données (bouton ci-dessus) qui créera toutes vos tables dans votre base. 
</p>
<p>
	Les blocs de contenus sont des blocs qui ne sont pas forcèment des modules, que vous pouvez intégrer à toutes vos pages (comme un bloc d'espace membre de connexion/déconnexion). <br />
	Vous pouvez définir des blocs chacun dans un dossier distinct dans <code>blocs/</code>, en suivant l'exemple du bloc Login déjà défini pour exemple que vous pouvez reprendre et compléter.
</p>
<p> 
	Une fois l'installation terminé, vous pouvez supprimer le fichier <code>conf/INSTALL</code>, et pour plus de sécurité, vous pouvez supprimer le module <code>install</code>. 
</p>