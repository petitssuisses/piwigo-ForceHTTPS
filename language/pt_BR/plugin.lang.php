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
$lang['301 permanent, 302 temporary'] = '301 permanente, 302 temporários';
$lang['Advanced options'] = 'Opções avançadas';
$lang['Force HTTPS for administration'] = 'Force HTTPS para administração';
$lang['Force HTTPS for identification'] = 'Force HTTPS para a identificação';
$lang['Force usage of HTTPS on this site'] = 'Force HTTPS para este site';
$lang['Global HTTPS'] = 'Global HTTPS';
$lang['Global activation'] = 'Ativação global';
$lang['HTTPS activated for administration pages only'] = 'HTTPS ativado apenas para páginas de administração';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS ativado apenas para identificação, registro e páginas de perfil';
$lang['HTTPS available'] = 'HTTPS disponível';
$lang['HTTPS unavailable'] = 'HTTPS disponível';
$lang['I have proceeded to the manual check'] = 'Eu procedi para a verificação manual';
$lang['Manual Verification'] = 'Verificação Manual';
$lang['Parial activation'] = 'Ativação parcial';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'O Plugin não pôde verificar automaticamente a compatibilidade SSL/HTTPS do host. Verifique manualmente se a navegação HTTPS está disponível usando o seguinte botão. NÃO ative HTTPS se a página dentro do popup não puder ser carregada com sucesso.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Seu servidor de hospedagem não suporta HTTPS, um certificado SSL é necessário. A ativação do plugin está desativada.';
$lang['Your hosting server does support HTTPS.'] = 'Seu servidor de hospedagem suporta HTTPS.';
$lang['fhp_activate_sts_comment_short'] = 'Ativa a SEGURANÇA DE TRANSPORTE Rigorosa HTTP (HSTS). Para usar apenas se você possui um certificado TLS assinado';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'a idade máxima deve ser igual a um mínimo de seis meses (15768000), mas recomenda-se um período mais longo como dois anos (63072000)';
$lang['seconds'] = 'segundos';