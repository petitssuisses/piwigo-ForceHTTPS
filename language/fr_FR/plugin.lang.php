<?php
$lang['fhp_about'] = 'A propos';
$lang['fhp_description'] = 'Ce plugin permet de forcer l\'utilisation de connexions sécurisées par SSL dans Piwigo, quand celles-ci sont disponibles sur le serveur hébergeant l\'application.
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
// New 2.0.0
$lang['Global activation'] = 'Activation globale';
$lang['Parial activation'] = 'Activation partielle';
$lang['fhp_force_https_everywhere_label'] = 'HTTPS global';
$lang['fhp_force_https_everywhere_comment'] = 'Forcer l\'utilisation du protocole HTTPS sur l\'ensemble du site';
$lang['fhp_force_https_partial_login_label'] = 'HTTPS pour l\'identification';
$lang['fhp_force_https_partial_admin_label'] = 'HTTPS pour les pages d\'administration';
$lang['fhp_force_https_partial_login_comment'] = 'Forcer HTTPS pour l\'identification, le préférences et l\enregistrement';
$lang['fhp_force_https_partial_admin_comment'] = 'Forcer HTTPS pour les pages d\'administration';
$lang['seconds'] = 'secondes';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'max-age doit être égal au minimum d\une durée de six mois (15768000), mais une période plus longue comme deux ans (63072000) est recommandée';
$lang['301 permanent, 302 temporary'] = '301 permanent, 302 temporaire';
?>
