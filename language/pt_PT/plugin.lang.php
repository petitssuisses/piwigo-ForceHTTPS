<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['fhp_about'] = 'Acerca';
$lang['fhp_activate_sts_comment'] = 'Ativar HTTP único Transporte Seguro (HSTS)<br/> Esta opção deve ser ativada se você possuir um certificado TLS . Não tem efeito se "Força HTTPS" estiver desativado<br/><br/> <i>HSTS é um mecanismo de segurança web através do qual o servidor web, declara o navegador  para interagir com ele usando apenas ligações seguras HTTPS. Quando HSTS está ativo, um campo de cabeçalho "Transporte único de segurança" é colocado no cabeçalho http, e qualquer link do site é automaticamente substituído por uma ligação segura. <br/></I>';
$lang['fhp_activate_sts_label'] = 'Usar STS';
$lang['fhp_description'] = 'Esta extenção preenche uma lacuna de segurança do Piwigo. Permite aos administradores forçar o uso de ligações SSL seguras para navegar Piwigo (quando https está disponível no servidor de hospedagem). <br> É altamente recomendável usar conexões seguras para proteger o utilizador e as transmissões de senha.';
$lang['fhp_force_https_comment'] = 'Ativar esta opção para forçar os utilizadores a ligar-se através de ligação segura.';
$lang['fhp_force_https_label'] = 'Forçar HTTPS';
$lang['fhp_force_https_warning'] = '<b>Atenção!</b> Antes de ativar ligação segura, verifique se o seu server suporta https. Poderá clicar no link que se segue para testar (Carrega a página no modo https)';
$lang['fhp_options_group'] = 'Opções';
$lang['fhp_security_group'] = 'Definições de segurança';
$lang['fhp_sts_maxage_comment'] = 'STS max-age em segundos';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_submit'] = 'Submeter';
$lang['fhp_test_https_link'] = 'teste esta página em https ( janela popup)';
?>