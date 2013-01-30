=== RiverCraft === <br>
Contributors: RiverNight <br>
Plugin URI: http://wordpress.org/extend/plugins/rivercraft/ <br>
Donate link: / <br>
Tags: jsonapi, minecraft, bukkit <br>
Requires at least: 3.0 <br>
Tested up to: 3.5 <br>
Stable tag: 1.2.1 <br>
License: GPLv2 or later <br>
 
RiverCraft permet d'unir votre serveur Minecraft et votre site/blog Wordpress à l'aide de JSONAPI.
 
== Description ==
 
<strong>RiveCraft</strong> permet d'unir votre serveur Minecraft et votre site/blog Wordpress à l'aide de JSONAPI.
Pour plus d'information, cliquez <a href="http://www.bukkit.fr/index.php?threads/web-rivercraft-union-de-wordpress-et-de-minecraft.5048/">ici</a>
 
== Installation ==
 
<ul>
	<li>
		Vous devez tout d'abord installer le plugin <a href="http://dev.bukkit.org/server-mods/jsonapi/">JSONAPI</a> dans le dossier Plugin du serveur CraftBukkit.
	</li>
	<li>	
		Ensuite réactulaiser ou redémarrer votre serveur.
		Un nouveau dossier au nom de JSONAPI devrai apparaître dans le dossier Plugin.
	</li>
	<li>
		Ouvrez le fichier config.yml qui s'y trouve.
		Vous devriez voir : <br>
			<ul>
				<li style="list-style-type:none;">
					<code>
					method-whitelist: <br>
						- getPlayerLimit <br>
						- dynmap.getPort <br>
					logins: <br>
						usernameGoesHere: passwordGoesHere <br>
					options: <br>
						startup-delay: 2000 <br>
						port: 20059 <br>
						ip-whitelist: [] <br>
						log-to-console: true <br>
						log-to-file: 'false' <br>
						salt: 'salt goes here' <br>
						anyone-can-use-calladmin: true <br>
						server-name: 'default' <br>
					</code>
				</li>
			</ul>

			<br><ul>
				<li>Modifiez "usernameGoeshere" avec un nom d'utilisateur.</li>
				<li>Modifiez "passwordGoesHere" avec un mot de passe.</li>
				<li>Modifiez "20059" avec le port demandé au préalable à votre hébergeur.</li>
				<li>Modifiez "salt goes here" avec un second mot de passe.</li>
				<li>Exemple de configuration: <br>
					<code>
						method-whitelist: <br>
							- getPlayerLimit <br>
							- dynmap.getPort <br>
						logins: <br>
							root: root <br>
						options: <br>
							startup-delay: 2000 <br>
							port: 25600 <br>
							ip-whitelist: [] <br>
							log-to-console: true <br>
							log-to-file: 'false' <br>
							salt: salt <br>
							anyone-can-use-calladmin: true <br>
							server-name: 'default' <br>
					</code>
				</li>
			</ul>

			
	</li>

	<li>
		Installez RiverCraft, si ce n'est pas déjà fait sur votre site/blog Wordpress.
	</li>
	<li>Allez dans le nouveau menu Rivecraft qui se trouve dans votre BackOffice.</li>
	<li>Insérez les  informations demandés</li>
	<li>Allez dans le Apparence>Widgets et activez le widget. Normalement les champs sont déjà remplis. Vous pouvez éventuellement modifier ces champs pour afficher un autre serveur.</li>

</ul>

== Screenshots ==

1. Exemple d'un serveur en ligne
2. Exemple d'un serveur hors ligne

== Frequently Asked Questions ==

<center>/</center>

== Upgrade Notice ==

<center>/</center>

== Changelog ==

= Version 1.2 (25/01/2013) =

- MàJ non-obligatoire
- Modification du CSS
 
= Version 1.0 (14/01/2013) =
 
- Première release