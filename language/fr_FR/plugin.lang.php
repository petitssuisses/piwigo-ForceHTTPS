<?php
$lang['fhp_about'] = 'A propos';
$lang['fhp_description'] = 'Ce plugin comble une fonctionnalité indispensable à Piwigo et permet de forcer l\'utilisation de connexions sécurisées par SSL dans Piwigo, quand celles-ci sont disponibles sur le serveur hébergeant l\'application.
<br>Il est fortement recommandé d\'utiliser des connexions sécurisées pour protéger les transmissions de votre nom d\'utilisateur et mot de passe.
';

$lang['fhp_security_group'] = 'Gestion de la sécurité';
$lang['fhp_options_group'] = 'Options';
$lang['fhp_force_https_label'] = 'Forcer HTTPS';
$lang['fhp_force_https_comment'] = 'Activer cette option pour forcer les clients à se connecter à Piwigo via une connexion chiffrée.';
$lang['fhp_force_https_warning'] = '<b>Attention !</b> Avant d\'activer la connexion chiffrée, veuillez vérifier que votre serveur peut être accédé via https en cliquant sur le lien ci-après (affichage de cette même page en https).';
$lang['fhp_test_https_link'] = 'Tester cette page en https (popup)';
$lang['fhp_activate_sts_label'] = 'Utiliser STS';
$lang['fhp_activate_sts_comment'] = 'Activer HTTP Strict Transport Security (HSTS)<br/>
									Cette option doit être activée si vous utilisez un certificat TLS/SSL signé par une autorité valide (sans effet si "Forcer HTTPS" est désactivée)<br/><br/>
									<i>HSTS est un mécanisme de sécurité permettant de déclarer au navigateur web qu\'il doit interagir avec
									le serveur en utilisant une connexion sécurisée (https).
									Lorsque la politique HSTS est active, un champ en-tête "Strict-Transport-Security" est ajouté dans les requêtes, et tous les liens d\'un site sont alors automatiquement remplacés par des liens sécurisés.<br/>
									</i>';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_sts_maxage_comment'] = 'STS max-age en secondes';

$lang['fhp_submit'] = 'Enregistrer';
?>
