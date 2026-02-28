<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+
$lang['fhp_options_group'] = '옵션';
$lang['fhp_security_group'] = '보안 설정';
$lang['fhp_sts_maxage_comment'] = 'STS 최대 유효 기간 (초)';
$lang['fhp_sts_maxage_label'] = 'STS 최대 유효 기간';
$lang['fhp_submit'] = '제출';
$lang['fhp_test_https_link'] = '이 페이지를 https로 테스트하기 (팝업 창)';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = '최대 유효 기간은 최소 6개월(15768000초) 이상이어야 하며, 2년(63072000초)과 같은 더 긴 기간을 권장합니다.';
$lang['seconds'] = '초';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = '플러그인이 호스트의 SSL/HTTPS 호환성을 자동으로 확인할 수 없습니다. 아래 버튼을 사용하여 HTTPS 탐색이 가능한지 수동으로 확인해 주세요. 팝업 내 페이지가 정상적으로 로드되지 않을 경우 HTTPS를 활성화하지 마십시오.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = '호스팅 서버가 HTTPS를 지원하지 않습니다. SSL 인증서가 필요합니다. 플러그인 활성화가 비활성화되었습니다.';
$lang['Your hosting server does support HTTPS.'] = '호스팅 서버가 HTTPS를 지원합니다.';
$lang['fhp_about'] = '정보';
$lang['fhp_activate_sts_comment'] = '활성 HTTP Strict Transport Security (HSTS)<br/>서명된 TLS 인증서를 소유한 경우 이 옵션을 활성화해야 합니다. "HTTPS 강제 적용"이 꺼져 있으면 효과가 없습니다.<br/><br/> <i>HSTS는 웹 서버가 웹 브라우저에게 안전한 HTTPS 연결만을 사용하도록 선언하는 웹 보안 메커니즘입니다. HSTS가 활성화되면 "Strict-Transport-Security" 헤더 필드가 HTTP 헤더에 추가되며, 모든 사이트 링크가 자동으로 보안 링크로 대체됩니다.<br/></i>';
$lang['fhp_activate_sts_comment_short'] = 'HTTP Strict Transport Security(HSTS)를 활성화합니다. 서명된 TLS 인증서를 소유한 경우에만 사용하십시오.';
$lang['fhp_activate_sts_label'] = 'STS 사용';
$lang['fhp_description'] = '이 플러그인은 Piwigo의 보안 취약점을 보완합니다. 관리자가 Piwigo 탐색 시 SSL 보안 연결 사용을 강제할 수 있게 합니다(호스팅 서버에서 https 사용 가능 시). <br>사용자 및 비밀번호 전송 보호를 위해 보안 연결 사용을 적극 권장합니다.';
$lang['fhp_force_https_comment'] = '이 옵션을 활성화하면 클라이언트가 Piwigo에 보안 연결로만 접속하도록 강제합니다.';
$lang['fhp_force_https_label'] = 'HTTPS 강제 적용';
$lang['fhp_force_https_warning'] = '<b>경고!</b> 보안 연결을 활성화하기 전에 서버가 https를 지원하는지 반드시 확인하십시오. 다음 링크를 클릭하여 확인할 수 있습니다.';
$lang['301 permanent, 302 temporary'] = '301 영구적, 302 임시적';
$lang['Advanced options'] = '고급 옵션';
$lang['Force HTTPS for administration'] = '관리자 페이지에 HTTPS 강제 적용';
$lang['Force HTTPS for identification'] = '식별 페이지에 HTTPS 강제 적용';
$lang['Force usage of HTTPS on this site'] = '이 사이트에서 HTTPS 사용 강제';
$lang['Global HTTPS'] = '전역 HTTPS';
$lang['Global activation'] = '전역 활성화';
$lang['HTTPS activated for administration pages only'] = '관리자 페이지만 HTTPS 활성화';
$lang['HTTPS activated for identification, register and profile pages only'] = '식별, 회원가입 및 프로필 페이지만 HTTPS 활성화';
$lang['HTTPS available'] = 'HTTPS 사용 가능';
$lang['HTTPS unavailable'] = 'HTTPS 사용 불가';
$lang['I have proceeded to the manual check'] = '수동 검사로 진행했습니다';
$lang['Manual Verification'] = '수동 검증';
$lang['Parial activation'] = '부분 활성화';