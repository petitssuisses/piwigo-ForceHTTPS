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
$lang['fhp_description'] = 'Este plugin preenche uma lacuna de segurança em Piwigo. Ele permite os administradores forçar o uso de conexões SSL seguras para navegar no Piwigo (quando https está disponível no servidor de hospedagem). <br> É altamente recomendável usar conexões seguras para proteger o usuário e as transmissões de senha.';
$lang['fhp_force_https_comment'] = 'Ative essa opção para forçar os clientes se conectarem ao Piwigo através de uma conexão segura.';
$lang['fhp_force_https_warning'] = '<b> Atenção! </b> Antes de ativar conexão segura, por favor verificar se o seu servidor suporta https. Você pode clicar no link a seguir para testar (carregar esta página em modo https).';
$lang['fhp_activate_sts_comment'] = 'Ativar HTTP com Segurança de Transporte Restrita (HSTS) <br/> Esta opção deve ser ativada se você possui um cerificado TLS assinados. Ele não tem efeito se "Força HTTPS" estiver desligado <br/><br/><i> HSTS é um mecanismo de segurança web através do qual o servidor web, declara o navegador da web para interagir com ele usando apenas conexões HTTPS seguros. Quando HSTS está ativo, um campo de cabeçalho "Strict-transporte e de segurança" é colocado no cabeçalho http, e qualquer link do site é automaticamente substituída por uma ligação segura. <br/></I>';
$lang['fhp_about'] = 'Sobre';
$lang['fhp_activate_sts_label'] = 'Use STS';
$lang['fhp_force_https_label'] = 'Forçar HTTPS';
$lang['fhp_options_group'] = 'Opções';
$lang['fhp_security_group'] = 'Configurações de Segurança';
$lang['fhp_sts_maxage_comment'] = 'STS idade máxima em segundos';
$lang['fhp_sts_maxage_label'] = 'STS idade máxima';
$lang['fhp_submit'] = 'Submeter';
$lang['fhp_test_https_link'] = 'Testando essa página em https (janela popup)';
?>