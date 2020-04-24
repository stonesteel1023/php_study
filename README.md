# php.ini 환경 설정
 - 출처 : http://egloos.zum.com/silve2/v/4444284
 
### [Language Options]

engine = On : Apache에서 PHP 스크립트 언어 엔진 적용(Off로 설정시 PHP파일을 보여주지 못하고 다운로드하게 됨)
zend.ze1_compatibility_mode = Off : zend 엔진 버전1의 호환모드 설정
short_open_tag = On : <? 태그 사용 허용(Off로 설정시 <?php, 와 <script> 태그만 인식)
asp_tags = Off : ASP 스타일의 <%, %> 태그 사용여부 설정
precision = 12 : 부동소수점의 유효 자리수 설정
y2k_compliance = On : 2000년 호환모드로 설정
output_buffering = Off : 모든 파일의 출력 버퍼링 활성화 여부 설정(구체적인 숫자 입력시 출력 버퍼링을 특정 사이즈로 제한)
;output_handler = : 스크립트의 모든 출력을 특정 함수를 통해 할 수 있음
zlib.output_compression = Off : zlib을 사용해 페이지를 압축할 것인지 설정
;zlib.output_compression_level = -1 : 압축 레벨 설정
;zlib.output_handler = : zlib.output_compression을 활성화할 경우, 추가 출력 핸들러를 지정할 수 없음
implicit_flush = Off : On 설정시 print(), echo() 및 각 HTML 블록의 뒤에 flush()함수를 부르는 것과 동일하게 작용(성능저하 유발)

unserialize_callback_func = : unserialize 중에 정의되지 않은 클래스를 작성해야 할 경우, 콜백 함수를 호출(정의되지 않은 클래스를 작성해야 할 때마다 호출)
allow_call_time_pass_reference = On : 함수 사용시 변수를 강제적으로 참조하는 것 금지


### [Safe Mode]

safe_mode = Off : 안전모드 사용여부 설정
safe_mode_gid = Off : 파일이 열릴 때, UID 비교검사 수행(On 설정시 GID 비교검사 수행)
safe_mode_include_dir = : 지정한 디렉토리 및 하위 디렉토리의 파일을 include 하는 경우, UID/GID 검사 미수행
safe_mode_exec_dir = : (안전모드에서) system() 및 시스템 프로그램을 실행하는 함수의 경로(이 디렉토리에 없으면 함수를 실행할 수 없음)
safe_mode_allowed_env_vars = PHP_ : (안전모드에서) 지정된 문자로 시작하는 환경변수만 변경 가능
safe_mode_protected_env_vars = LD_LIBRARY_PATH : putenv()로 변경할 수 없는 환경변수 설정
;open_basedir = : 안전모드와 관계없이 PHP가 열 수 있는 디렉토리 설정
disable_functions = : 특정 함수 사용 금지 설정
disable_classes = : 특정 클래스 사용 금지 설정
;highlight.string = #DD0000 : 문법의 하이라이트 표시 설정(string, comment, keywork, bg, default, html 설정 가능)
;ignore_user_abort = On : 클라이언트가 연결을 끊었을 때, 스크립트 수행을 중단한 것인지 설정(기본값은 스크립트 중단)
;realpath_cache_siae = 16k : realpath 캐쉬 양 설정
;realpath_cache_ttl = 120 : 캐쉬의 유효기간을 초단위로 설정
expose_php = On : PHP가 해당 서버에 인스톨되고, 사용되고 있다는 내용 알림 설정(On 설정시 내용 알림)


### [Resource Limits]

max_execution_time = 30 : 스크립트 최대 실행시간(초단위) 설정
max_input_time = 60 : POST, GET, 파일업로드 등의 입력 데이터를 받아들이는 최대시간(초단위) 설정
memory_limit = 128M : 스크립트가 사용할 수 있는 최대 메모리양 설정


### [Error handling and logging]

error_reporting = E_ALL & ~E_NOTICE : E_NOTICE를 제외한 모든 에러 출력(다음의 항목들이 사용 가능함, E_ALL[각주:1], E_ERROR[각주:2], E_RECOVERABLE_ERROR[각주:3], E_WARNING[각주:4], E_PARSE[각주:5], E_NOTICE[각주:6], E_CORE_ERROR[각주:7], E_CORE_WARNING[각주:8], E_COMPILE_ERROR[각주:9], E_COMPILE_WARNING[각주:10], E_USER_ERROR[각주:11], E_USER_WARNING[각주:12], E_USER_NOTICE[각주:13])

display_errors = On : 에러 표시 설정(보안상 이 기능 대신 error_log를 사용할 것을 권장)
display_startup_errors = Off : PHP 시작시 에러 미표시 설정
log_errors = Off : 로그파일에 에러로그 기록여부 설정
ignore_repeated_errors = Off : 반복된 에러의 기록여부 설정(Off 설정시 반복 에러 기록 안함)
track_errors = Off : $php_errormsg에 마지막 에러/경고 메시지 저장 여부 설정
;html_errors = Off : 에러 메세지에 HTML 태그 추가여부 설정(Off 설정시 HTML 태그 미추가)
;error_prepend_string = "<font color=ff0000>" : 에러 메세지 앞에 출력하는 라인 설정
;error_append_string = "</font>" : 에러 메세지의 뒤에 출력하는 라인 설정
;error_log = filename : 지정된 파일에 에러 기록
;error_log = syslog : syslog에 에러 기록


### [Data Handling]

;arg_separator.output = "&amp;" : PHP가 생성한 URL 인자를 구분하는 구분자 설정
;arg_separator.input = ";&" : PHP가 URL에서 변수를 분리하는데 사용하는 구분자 설정
variables_order = "EGPCS" : EGPCS[각주:14] 변수의 파싱순서 설정(GP로 설정시 GET 변수는 같은 이름의 POST 변수에 덮어씌워짐)
register_globals = Off : 입력 데이터의 글로벌 변수 등록여부 설정(Off 설정시 $var 대신 $_REQUEST["var"], $_GET["var"], $_POST["var"] 등으로 써야 함 - 권장)
register_long_arrays = On : $HTTP_*_VARS 형태의 예약변수 등록 여부 설정(Off 설정시 $HTTP_GET_VARS 대신 $_GET 등의 자동 전역배열을 사용함 - 권장)
register_argc_argv = On : argc 및 argv 변수의 사용여부 설정
post_max_size = 8M : POST 데이터가 허용하는 최대 사이즈 설정(큰 파일 업로드시 post_max_size가 upload_max_filesize보다 커야함)
magic_quotes_gpc = On : GET/POST/Cookie의 입력 데이터에 포함된 작은 따옴표, 큰 따옴표, 역슬래쉬, NULL은 자동으로 역슬래쉬로 이스케이프할지 설정
magic_quotes_runtime = Off : DB나 텍스트 파일에 포함된 작은 따옴표, 큰 따옴표, 역슬래쉬, NULL을 자동으로 역슬래쉬로 이스케이프할지 설정
magic_quotes_sybase = Off : 작은 따옴표를 \' 대신 ''로 변환할지 설정(On 설정시 ''로 변환)
auto_prepend_file =, auto_append_file = : PHP 문서 전후에 추가할 파일 설정
default_mimetype = "text/html", default_charset = "utf-8" : Content-type: 헤더로 출력할 문자 인코딩 설정
;always_populate_raw_post_data = On : 항상 $HTTP_RAW_POST_DATA 변수를 선언할지 설정

 

### [Paths and Directories]

;include_path = ".:/php/includes" : require(), include(), fopen_with_path() 함수가 파일을 찾는 디렉토리 목록 설정
doc_root = : PHP 루트 디렉토리 설정(안전모드 설정시 루트 디렉토리 밖의 파일은 사용할 수 없음)
user_dir : PHP 파일을 사용하는 유저의 홈 디렉토리(public_html) 이름 설정
extension_dir = "/usr/local/server/php/modules" : 확장모듈 디렉토리 설정
extension = mysqli.so ; : PHP가 시작할 때 읽어들일 모듈 설정
enable_dl = On : dl() 함수를 유효하게 할 것인지 설정
; cgi.force_redirect = 1 : 대부분의 웹서버에서 PHP를 CGI로 사용할 때 보안을 위해 설정(기본값 On)
; cgi.redirect_status_env = ; : ?
;cgi.rfc2616_headers = 0 : PHP가 HTTP 응답코드를 보낼때 사용할 헤더 설정(0 설정시 Status: 헤더를, 1 설정시 RFC 2616 호환 헤더 전송)

 

### [File Uploads]

file_uploads = On : 파일 업로드 허가여부 설정
;upload_tmp_dir = : HTTP로 파일 업로드시 임시 작업 디렉토리 설정(미 지정시 시스템 디폴트 디렉토리[각주:15]가 사용됨)
upload_max_filesize = 2M : 업로드 파일의 최대 사이즈 설정

 

### [Fopen wrappers]

allow_url_fopen = Off : 파일 액세스시 외부사이트 파일을 불러올 수 있는지여부 설정(보안상 Off로 설정할 것을 권장함)
;from="admin@myhome.com" : 익명 FTP의 패스워드 설정
;user_agent = "PHP" : PHP가 전송하는 유저에이전트 설정
default_socket_timeout = 60 : 소켓기반 스트림의 기본 시간제한 설정
;auto_detect_line_endings = Off : fget(), file()로 읽은 데이터의 줄바꿈 방식 선택여부 설정(On 설정시 유닉스, MS-DOS, 매킨토시 방식 중 어떤 것을 사용할 것인지 검사)


# 글로벌 설정
 
## 변수설정

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.5pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:28.5pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$GLOBALS<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:28.5pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>모든 전역변수의 배열<span lang=EN-US>(global</span>키워드처럼 함수 안에서
  글로벌 변수에 접근할 수 있다<span lang=EN-US>. $GLOBALS['<span class=SpellE>myvar</span>']</span>처럼
  접근<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_SERVER<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>서버환경 변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_GET<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>GET </span><span class=SpellE><span
  style='font-size:10.0pt'>메소드로</span></span><span style='font-size:10.0pt'> 넘어온
  변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_POST<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>POST </span><span class=SpellE><span
  style='font-size:10.0pt'>메소드로</span></span><span style='font-size:10.0pt'> 넘어온
  변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_COOKIE<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>쿠키 변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_FILES<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>파일 업로드와 관련된 변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_ENV<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>환경 변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_REQUEST<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>사용자가 입력한 변수의 배열로<span lang=EN-US> $_GET, $_POST,
  $COOKIE</span>를 포함<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=117 style='width:87.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$_SESSION<o:p></o:p></span></p>
  </td>
  <td width=483 style='width:361.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:10.0pt'>세션 변수의 배열<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>산술 연산자<span
lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>연산자<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=509 style='width:381.4pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>설명<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>+<o:p></o:p></span></p>
  </td>
  <td width=509 style='width:381.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:10.0pt'>더하기<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=509 style='width:381.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:10.0pt'>빼기<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>*<o:p></o:p></span></p>
  </td>
  <td width=509 style='width:381.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:10.0pt'>곱하기<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>/<o:p></o:p></span></p>
  </td>
  <td width=509 style='width:381.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:10.0pt'>나누기<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>%<o:p></o:p></span></p>
  </td>
  <td width=509 style='width:381.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:10.0pt'>나머지<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
lang=EN-US style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>복합 대입연산자<span
lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>연산자<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=242 style='width:181.5pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>예제<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=267 style='width:199.9pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>설명<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>+=<o:p></o:p></span></p>
  </td>
  <td width=242 style='width:181.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a += $b<o:p></o:p></span></p>
  </td>
  <td width=267 style='width:199.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a = $a +$b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>-=<o:p></o:p></span></p>
  </td>
  <td width=242 style='width:181.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a -= $b<o:p></o:p></span></p>
  </td>
  <td width=267 style='width:199.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a = $a - $b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>*=<o:p></o:p></span></p>
  </td>
  <td width=242 style='width:181.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a *= $b<o:p></o:p></span></p>
  </td>
  <td width=267 style='width:199.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a = $a * $b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>/=<o:p></o:p></span></p>
  </td>
  <td width=242 style='width:181.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a /= $b<o:p></o:p></span></p>
  </td>
  <td width=267 style='width:199.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a = $a / $b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>%=<o:p></o:p></span></p>
  </td>
  <td width=242 style='width:181.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a %= $b<o:p></o:p></span></p>
  </td>
  <td width=267 style='width:199.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a = $a % $b<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=91 style='width:68.25pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>.=<o:p></o:p></span></p>
  </td>
  <td width=242 style='width:181.5pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a .= $b<o:p></o:p></span></p>
  </td>
  <td width=267 style='width:199.9pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  lang=EN-US style='font-size:10.0pt'>$a = $<span class=GramE>a .</span> $b<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
lang=EN-US style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>비교연산자<span
lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>연산자<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=168 style='width:126.0pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>예제<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=340 style='width:254.65pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>설명<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>==<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  == $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>값이 같을 경우<span
  lang=EN-US> 1 == '1'</span>도 참이 됨<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:28.5pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:28.5pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>===<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:28.5pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  === $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:28.5pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>값뿐만 아니라<span
  lang=EN-US> Type</span>도 같은 경우에만 참이 됨<span lang=EN-US><o:p></o:p></span></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>1
  === 1</span><span style='font-size:10.0pt;line-height:120%'>만 참<span
  lang=EN-US>, 1==='1'</span>은 거짓<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>!=<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  != $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>type</span><span
  style='font-size:10.0pt;line-height:120%'>과 상관없이 값이 <span class=SpellE>다른경우</span><span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>!==<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  != $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>Type</span><span
  style='font-size:10.0pt;line-height:120%'>만 달라도 다른 값으로 확인<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>&lt;<o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  &lt;$b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>작다<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>&gt;<o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  &gt;$b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>크다<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:15.0pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:15.0pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>&lt;=<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:15.0pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$a
  &lt;= 15<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:15.0pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>작거나 같다<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>&gt;=<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;$b
  &gt;=6<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>크거나 같다<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>논리연산자<span
lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>연산자<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=168 style='width:126.0pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>예제<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=340 style='width:254.65pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span style='font-size:10.0pt;
  line-height:120%'>설명<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>!<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>!$a<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>$a</span><span
  style='font-size:10.0pt;line-height:120%'>의 값<span lang=EN-US> true</span>→<span
  lang=EN-US>false, false </span>→<span lang=EN-US>true<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>&amp;&amp;<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>$a
  &amp;&amp; $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>모두<span
  lang=EN-US> true</span>이면<span lang=EN-US> true<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>||<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>$a
  || $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span class=SpellE><span style='font-size:10.0pt;
  line-height:120%'>둘중에</span></span><span style='font-size:10.0pt;line-height:
  120%'> 하나라도<span lang=EN-US> true</span>이면<span lang=EN-US> true<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>and<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>$a
  and $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&amp;&amp;</span><span
  style='font-size:10.0pt;line-height:120%'>과 같음<span lang=EN-US>(</span>우선순위는 낮음<span
  lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>or<o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>$a
  or $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>||</span><span
  style='font-size:10.0pt;line-height:120%'>와 같음<span lang=EN-US>(</span>우선순위는 낮음<span
  lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=92 style='width:69.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;margin-bottom:
  4.0pt;text-align:center;line-height:120%'><span class=SpellE><span
  lang=EN-US style='font-size:10.0pt;line-height:120%'>xor</span></span><span
  lang=EN-US style='font-size:10.0pt;line-height:120%'><o:p></o:p></span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>$a
  <span class=SpellE>xor</span> $b<o:p></o:p></span></p>
  </td>
  <td width=340 style='width:254.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>두 개의 논리값이 같으면<span
  lang=EN-US> false, </span>다르면<span lang=EN-US> true<o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>연산자 우선순위<span
lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>결합 순서<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>연산자<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=178 style='width:133.15pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>비고<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>(
  )<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>new<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.oop5.basic.php#language.oop5.basic.new"
  target="_self">new</a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>[
  ]<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/function.array.php" target="_self">array()</a><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>++
  --<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.increment.php"
  target="_self"><span lang=EN-US><span lang=EN-US>증가/</span></span><span
  lang=EN-US><span lang=EN-US>감소</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>~
  - (<span class=SpellE>int</span>) (float) (string) (array) (object) (<span
  class=SpellE>bool</span>) @<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.types.php" target="_self"><span
  lang=EN-US><span lang=EN-US>자료형</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>instanceof</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'><o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.types.php" target="_self"><span
  lang=EN-US><span lang=EN-US>자료형</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>오른쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>!<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.logical.php"
  target="_self"><span lang=EN-US><span lang=EN-US>논리</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>*
  / %<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.arithmetic.php"
  target="_self"><span lang=EN-US><span lang=EN-US>계산</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>+
  - .<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.arithmetic.php"
  target="_self"><span lang=EN-US><span lang=EN-US>계산</span></span></a> </span><span
  style='font-size:10.0pt;line-height:120%'>그리고 <span lang=EN-US><a
  href="http://www.php.net/manual/kr/language.operators.string.php"
  target="_self"><span lang=EN-US><span lang=EN-US>문자열</span></span></a><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&lt;&lt;&nbsp;&gt;&gt;<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.bitwise.php"
  target="_self"><span lang=EN-US><span lang=EN-US>비트</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&lt;&nbsp;&lt;=
  &gt;&gt;= &lt;&gt;<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.comparison.php"
  target="_self"><span lang=EN-US><span lang=EN-US>비교</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>없음<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>==
  != === !==<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.comparison.php"
  target="_self"><span lang=EN-US><span lang=EN-US>비교</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&amp;<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.bitwise.php"
  target="_self"><span lang=EN-US><span lang=EN-US>비트</span></span></a> </span><span
  style='font-size:10.0pt;line-height:120%'>그리고 <span lang=EN-US><a
  href="http://www.php.net/manual/kr/language.references.php" target="_self"><span
  lang=EN-US><span lang=EN-US>참조</span></span></a><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>^<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.bitwise.php"
  target="_self"><span lang=EN-US><span lang=EN-US>비트</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>|<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.bitwise.php"
  target="_self"><span lang=EN-US><span lang=EN-US>비트</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&amp;&amp;<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.logical.php"
  target="_self"><span lang=EN-US><span lang=EN-US>논리</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>||<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.logical.php"
  target="_self"><span lang=EN-US><span lang=EN-US>논리</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>?
  :<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.comparison.php#language.operators.comparison.ternary"
  target="_self"><span lang=EN-US><span lang=EN-US>삼항</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>오른쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>&nbsp;=
  += -= *= /= .= %= &amp;= |= ^= &lt;&lt;= &gt;&gt;= <o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.assignment.php"
  target="_self"><span lang=EN-US><span lang=EN-US>할당</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>and<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.logical.php"
  target="_self"><span lang=EN-US><span lang=EN-US>논리</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>xor</span></span><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'><o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.logical.php"
  target="_self"><span lang=EN-US><span lang=EN-US>논리</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>or<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'><a
  href="http://www.php.net/manual/kr/language.operators.logical.php"
  target="_self"><span lang=EN-US><span lang=EN-US>논리</span></span></a>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=81 style='width:60.75pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>왼쪽<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=341 style='width:255.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>,<o:p></o:p></span></p>
  </td>
  <td width=178 style='width:133.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>다양한 사용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>형 검사
함수<span lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>함수<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=478 style='width:358.15pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>내용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_array</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 배열인지<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_double</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 rowspan=3 style='width:358.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 부동소수점인지
  검사<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_float</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_real</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_long</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 rowspan=3 style='width:358.15pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 <st1:PersonName
  w:st="on">정수형</st1:PersonName>인지 검사<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_int</span></span><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>()<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_integer</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_string</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 문자열인지 검사<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_bool</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 <span
  class=SpellE>불린형인지</span> 검사<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_object</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 객체인지 검사<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_resource</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 자원인지 검사<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_null</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 비어있는지 검사<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_scalar</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 <st1:PersonName
  w:st="on">정수형</st1:PersonName><span lang=EN-US>, </span><span class=SpellE>불리언</span><span
  lang=EN-US>, </span>문자열<span lang=EN-US>, </span><span class=SpellE>실수형인지</span>
  검사<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_numeric</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 숫자 또는 숫자로
  구성된 문자열인지 검사<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>is_callable</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>()<o:p></o:p></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수에 지정된 값이 호출될
  수 있는 함수의 이름인지 검사<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>변수 상태
검사<span lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>함수<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=478 style='width:358.15pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>내용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>isset</span></span><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>(</span><span style='font-size:10.0pt;line-height:120%'>변수이름<span
  lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 존재하면<span
  lang=EN-US> true, </span>아니면<span lang=EN-US> false<o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:24.75pt'>
  <td width=122 style='width:91.5pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:24.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span lang=EN-US style='font-size:10.0pt;line-height:120%'>empty(</span><span
  style='font-size:10.0pt;line-height:120%'>변수이름<span lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
  <td width=478 style='width:358.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:24.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>변수가 존재하고 비어있지
  않고<span lang=EN-US>, 0</span>이 <span class=SpellE>아닌값을</span> 가지고 있으면<span
  lang=EN-US> false<o:p></o:p></span></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>아니면<span
  lang=EN-US> true<o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'>[</span><span style='font-size:10.0pt'>형 변환
함수<span lang=EN-US>]<o:p></o:p></span></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=152 style='width:114.0pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>함수<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=448 style='width:335.65pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>내용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:24.75pt'>
  <td width=152 style='width:114.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:24.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>intval</span></span><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>(&quot;</span><span style='font-size:10.0pt;line-height:
  120%'>숫자<span lang=EN-US>&quot;, </span>진수<span lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
  <td width=448 style='width:335.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:24.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>숫자를 지정된 진수로
  인식해서<span lang=EN-US> 10</span>진수 숫자로 변환해서 반환함<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=152 style='width:114.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>floatval</span></span><span lang=EN-US style='font-size:
  10.0pt;line-height:120%'>(</span><span style='font-size:10.0pt;line-height:
  120%'>숫자<span lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
  <td width=448 style='width:335.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>숫자를 <span
  class=SpellE>실수형으로</span> 변환<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:12.75pt'>
  <td width=152 style='width:114.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span class=SpellE><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>strval</span></span><span lang=EN-US style='font-size:10.0pt;
  line-height:120%'>(</span><span style='font-size:10.0pt;line-height:120%'>숫자<span
  lang=EN-US>)<o:p></o:p></span></span></p>
  </td>
  <td width=448 style='width:335.65pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:120%'><span style='font-size:10.0pt;line-height:120%'>숫자를 <span
  class=SpellE>문자형으로</span> 반환<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-margin-top-alt:auto;margin-bottom:4.0pt'><span
lang=EN-US style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><b><span lang=EN-US>[</span>방명록 테이블
구성<span lang=EN-US>]</span></b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=71 style='width:53.0pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  style='mso-bidi-font-family:"Times New Roman"'>필드<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=82 style='width:61.85pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-family:"Times New Roman"'>형식<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=75 style='width:56.4pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>NULL</span><span
  style='mso-bidi-font-family:"Times New Roman"'>여부<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=157 style='width:117.75pt;border:solid black 1.0pt;border-left:
  none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-family:"Times New Roman"'>내용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 style='width:62.25pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>key<o:p></o:p></span></p>
  </td>
  <td width=131 style='width:98.4pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  style='mso-bidi-font-family:"Times New Roman"'>추가속성<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=71 style='width:53.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>id<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>int</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(10)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:56.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 style='width:117.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span style='mso-bidi-font-family:"Times New Roman"'>글번호</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=83 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>Primary
  Key<o:p></o:p></span></p>
  </td>
  <td width=131 style='width:98.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>auto_increment</span></span><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=71 style='width:53.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>name<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varchar</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(20)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:56.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 style='width:117.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>이름<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=131 style='width:98.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=71 style='width:53.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>password<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varcahr</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(20)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:56.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 style='width:117.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>비밀번호<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=131 style='width:98.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:9.75pt'>
  <td width=71 style='width:53.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>content<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>text<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:56.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 style='width:117.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-family:"Times New Roman"'>글
  내용<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=131 style='width:98.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:21.75pt'>
  <td width=71 style='width:53.0pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>writedate</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>timestamp<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:56.4pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 style='width:117.75pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>글이 등록된
  <span class=SpellE>날짜와시간</span><span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=131 style='width:98.4pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>current_timestamp</span></span><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><b><span lang=EN-US>list </span>파일<span
lang=EN-US><span style='mso-spacerun:yes'>&nbsp; </span></span></b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:213.0pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:213.0pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;head&gt;&lt;title&gt;</span><span
  style='mso-bidi-font-family:바탕'>방명록입니다</span><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/title&gt;&lt;/head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;form action=&quot;<span
  class=SpellE>insert.php</span>&quot; method =&quot;post&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;table border=&quot;1&quot;
  width=&quot;600&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td&gt;</span><span
  style='mso-bidi-font-family:바탕'>이름</span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot;
  name=&quot;name&quot;&gt;&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td&gt;</span><span
  style='mso-bidi-font-family:바탕'>비밀번호</span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;password&quot;
  name=&quot;password&quot;&gt;&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  <span class=SpellE>colspan</span>=&quot;4&quot;&gt;<span style='mso-tab-count:
  1'> </span><o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;<span
  class=SpellE>textarea</span> name=&quot;content&quot; cols=&quot;80&quot;
  rows=&quot;5&quot;&gt;&lt;/<span class=SpellE>textarea</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  <span class=SpellE>colspan</span>=&quot;4&quot;
  align=&quot;center&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;</span><span
  style='mso-bidi-font-family:바탕'>확인</span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>&quot;&gt;&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><span style='mso-tab-count:
  1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/form&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US>[</span>방명록 글 삭제 파일
구성<span lang=EN-US>]</span></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:131.15pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:131.15pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;form action='<span
  class=SpellE>delete.php?id</span>=1&amp;mode=delete' method='post'&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;table width='600'
  border='1'&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;
  </span><span style='mso-bidi-font-family:"Times New Roman"'>이름<span
  lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>비밀번호<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;&lt;input
  type='submit' value='</span><span style='mso-bidi-font-family:"Times New Roman"'>확인<span
  lang=EN-US>'&gt;&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;form&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><b><span lang=EN-US>[</span>게시판<span
lang=EN-US> db </span>구성<span lang=EN-US>]</span></b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  style='mso-bidi-font-family:"Times New Roman"'>필드<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=82 style='width:61.85pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-family:"Times New Roman"'>형식<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=75 colspan=2 style='width:56.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>NULL</span><span
  style='mso-bidi-font-family:"Times New Roman"'>여부<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-family:"Times New Roman"'>내용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.3pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>key<o:p></o:p></span></p>
  </td>
  <td width=128 style='width:96.15pt;border:solid black 1.0pt;border-left:none;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:120%'><span
  style='mso-bidi-font-family:"Times New Roman"'>추가속성<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>id<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>int</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(10)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>글 번호<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>Primary
  Key<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>auto_increment</span></span><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>name<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varchar</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(20)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>이름<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>email<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varchar</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(30)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;</span><span
  class=SpellE><span style='mso-bidi-font-family:"Times New Roman"'>이메일</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:12.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>password<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varcahr</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(12)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>비밀번호<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>title<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varchar</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(70)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>제목<span
  lang=EN-US>&nbsp;<o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:12.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:9.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>content<o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>text<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-family:"Times New Roman"'>내용<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:9.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>writedate</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>datetime</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>글이 등록된
  날짜와 시간<span lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>current_timestamp</span></span><span lang=EN-US
  style='mso-bidi-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:21.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>ip</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>varchar</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(15)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<span
  class=SpellE>Ip</span> </span><span style='mso-bidi-font-family:"Times New Roman"'>주소<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:21.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:9.75pt'>
  <td width=74 style='width:55.2pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>viewcount</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'><o:p></o:p></span></p>
  </td>
  <td width=82 style='width:61.85pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span class=SpellE><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>int</span></span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>(10)<o:p></o:p></span></p>
  </td>
  <td width=75 style='width:55.9pt;border-top:none;border-left:none;border-bottom:
  solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:solid black .25pt;
  mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>not
  null<o:p></o:p></span></p>
  </td>
  <td width=157 colspan=2 style='width:117.8pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span style='mso-bidi-font-family:"Times New Roman"'>조회수<span
  lang=EN-US><o:p></o:p></span></span></p>
  </td>
  <td width=83 colspan=2 style='width:62.25pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .25pt;mso-border-left-alt:solid black .25pt;mso-border-alt:solid black .25pt;
  padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=129 colspan=2 style='width:96.65pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .25pt;mso-border-left-alt:solid black .25pt;
  mso-border-alt:solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:9.75pt'>
  <p class=hstyle0 align=left style='margin-bottom:4.0pt;text-align:left;
  line-height:120%'><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=77 style='border:none'></td>
  <td width=86 style='border:none'></td>
  <td width=75 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=156 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=82 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=128 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><b><span lang=EN-US>write </span>파일
구성</b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:16.35pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:16.35pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;title&gt; </span><span
  style='mso-bidi-font-family:"Times New Roman"'>간단 게시판<span lang=EN-US>&lt;/title&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>td { font-size :
  9pt; }<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:link</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> { font : 9pt; color
  : black; text-decoration : none; <o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-<span
  class=GramE>family<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span>:</span> </span><span style='mso-bidi-font-family:"Times New Roman"'>굴림<span
  lang=EN-US>; font-size : 9pt; }<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:visited</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> { text-decoration
  : none; color : black; font-size : 9pt; }<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:hover</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> { text-decoration
  : underline; color : black; <o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-size : 9pt; }<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>--&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;</span><o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;body <span
  class=SpellE>topmargin</span>=0 <span class=SpellE>leftmargin</span>=0
  text=&quot;#000000&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;BR&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=GramE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> </span><span
  style='mso-bidi-font-family:"Times New Roman"'>입력된 값을 다음 페이지로 넘기기 위해<span
  lang=EN-US> FORM</span>을 만든다<span lang=EN-US>. --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;table
  width=&quot;650&quot; border=&quot;0&quot; <span class=SpellE>cellpadding</span>=&quot;2&quot;
  <span class=SpellE>cellspacing</span>=&quot;1&quot; <span class=SpellE>bgcolor</span>=&quot;#FFFFFF&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td height=&quot;20&quot; align=&quot;center&quot; <span
  class=SpellE>bgcolor</span>=&quot;#111111&quot; <span class=SpellE>colspan</span>=&quot;2&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;font color=&quot;white&quot;&gt;&lt;B&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글 <span class=SpellE>쓰</span> 기<span
  lang=EN-US>&lt;/B&gt;&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;!-- </span><span style='mso-bidi-font-family:"Times New Roman"'>입력
  부분<span lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>이름<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;text&quot; name=&quot;name&quot;
  size=&quot;20&quot; <span class=SpellE>maxlength</span>=&quot;10&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td width=&quot;100&quot; align=&quot;left&quot; &gt;</span><span
  class=SpellE><span style='mso-bidi-font-family:"Times New Roman"'>이메일</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td align=&quot;left&quot; &gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;text&quot; name=&quot;email&quot; size=&quot;20&quot;
  <span class=SpellE>maxlength</span>=&quot;25&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>비밀번호<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;password&quot; name=&quot;password&quot;
  size=&quot;8&quot; <span class=SpellE>maxlength</span>=&quot;8&quot;&gt;(</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글을 수정<span class=GramE><span
  lang=EN-US>,</span>삭제할</span> 때 필요합니다<span lang=EN-US>.)<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>제 목<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;text&quot; name=&quot;title&quot;
  size=&quot;60&quot; <span class=SpellE>maxlength</span>=&quot;35&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp; </span><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;</span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>내용<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;TEXTAREA name=&quot;content&quot; cols=&quot;65&quot;
  rows=&quot;15&quot;&gt;&lt;/TEXTAREA&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;td <span class=SpellE>colspan</span>=&quot;2&quot;
  align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;submit&quot; value=&quot;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글 저장하기<span lang=EN-US>&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&amp;<span class=SpellE>nbsp;&amp;nbsp</span>;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;reset&quot; value=&quot;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>다시 쓰기<span lang=EN-US>&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&amp;<span class=SpellE>nbsp;&amp;nbsp</span>;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;INPUT type=&quot;button&quot; value=&quot;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>되돌아가기<span lang=EN-US>&quot; <span
  class=SpellE>onclick</span>=&quot;<span class=SpellE>history.go</span>(-1)&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span>&lt;/<span class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!-- </span><span
  style='mso-bidi-font-family:"Times New Roman"'>입력 부분 끝<span lang=EN-US>
  --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/form&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><b><span lang=EN-US>edit </span>파일
구성</b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:833.25pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:833.25pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;title&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>간단 게시판<span lang=EN-US>&lt;/title&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>td { font-size :
  9pt; }<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:link</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> { font : 9pt;
  color : black; text-decoration : none; <o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-<span
  class=GramE>family<span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span>:</span> </span><span style='mso-bidi-font-family:"Times New Roman"'>굴림<span
  lang=EN-US>; font-size : 9pt; }<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:visited</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> { text-decoration
  : none; color : black; font-size : 9pt; }<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:hover</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> { text-decoration
  : underline; color : black; <o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-size : 9pt; }<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>--&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/head&gt;&nbsp;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;body <span
  class=SpellE>topmargin</span>=0 <span class=SpellE>leftmargin</span>=0
  text=&quot;#000000&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;BR&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;form
  action=&quot;<span class=SpellE>update.php?id</span>=17&quot;
  method=&quot;post&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;table
  width=&quot;650&quot; border=&quot;0&quot; <span class=SpellE>cellpadding</span>=&quot;2&quot;
  <span class=SpellE>cellspacing</span>=&quot;1&quot; <span class=SpellE>bgcolor</span>=&quot;#FFFFFF&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  height=&quot;20&quot; align=&quot;center&quot; <span class=SpellE>bgcolor</span>=&quot;#111111&quot;
  <span class=SpellE>colspan</span>=&quot;2&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color=&quot;white&quot;&gt;&lt;B&gt;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>글 <span class=SpellE>쓰</span> 기<span lang=EN-US>&lt;/B&gt;&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'><span lang=EN-US>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;!</span><span
  style='mso-bidi-font-family:"Times New Roman"'>&#8212;내용 입력<span lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>이름<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;text&quot; name=&quot;name&quot; size=&quot;20&quot; <span
  class=SpellE>maxlength</span>=&quot;10&quot; value=&quot;</span><st1:PersonName
  w:st="on"><st2:Sn w:st="on"><span style='mso-bidi-font-family:"Times New Roman"'>홍</span></st2:Sn><st2:GivenName
   w:st="on"><span style='mso-bidi-font-family:"Times New Roman"'>길동</span></st2:GivenName></st1:PersonName><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;100&quot; align=&quot;left&quot; &gt;</span><span class=SpellE><span
  style='mso-bidi-font-family:"Times New Roman"'>이메일</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;left&quot; &gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;text&quot; name=&quot;email&quot; size=&quot;20&quot; <span
  class=SpellE>maxlength</span>=&quot;25&quot;
  value=&quot;alzio7@alzio.co.kr&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:바탕'>비밀번호</span><span lang=EN-US style='mso-bidi-font-family:
  "Times New Roman"'>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;password&quot; name=&quot;password&quot; size=&quot;8&quot; <span
  class=SpellE>maxlength</span>=&quot;8&quot;&gt;(</span><span
  style='mso-bidi-font-family:"Times New Roman"'>비밀번호가 맞아야 수정이 가능합니다<span
  lang=EN-US>.)<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'><span lang=EN-US>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>제목<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;text&quot; name=&quot;title&quot; size=&quot;60&quot; <span
  class=SpellE>maxlength</span>=&quot;35&quot; value=&quot; </span><span
  style='mso-bidi-font-family:"Times New Roman"'>제목을 입력합니다<span lang=EN-US>.&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;100&quot; align=&quot;left&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>내용<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;left&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;TEXTAREA
  name=&quot;content&quot; cols=&quot;65&quot; rows=&quot;15&quot; &gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글 내용을 입력합니다<span class=GramE><span
  lang=EN-US>.&lt;</span></span><span lang=EN-US>/TEXTAREA&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  <span class=SpellE>colspan</span>=&quot;2&quot; align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;submit&quot; value=&quot;</span><span class=SpellE><span
  style='mso-bidi-font-family:"Times New Roman"'>글저장하기</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&amp;nbsp;&amp;nbsp;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;reset&quot; value=&quot;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>다시 쓰기<span lang=EN-US>&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&amp;<span
  class=SpellE>nbsp;&amp;nbsp</span>;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;button&quot; value=&quot;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>되돌아가기<span lang=EN-US>&quot; <span class=SpellE>onclick</span>=&quot;<span
  class=SpellE>history.go</span>(-1)&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!-- </span><span
  style='mso-bidi-font-family:"Times New Roman"'>내용 입력<span lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/form&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><span class=SpellE><b><span
lang=EN-US>read.php</span></b></span><b><span lang=EN-US> </span>파일 구성 </b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:821.25pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:821.25pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;title&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>간단 게시판<span lang=EN-US>&lt;/title&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>td {font-size :
  9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:link</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {font : 9pt; color
  : black; text-decoration : none;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-<span
  class=GramE>family :</span> </span><span style='mso-bidi-font-family:"Times New Roman"'>굴림<span
  lang=EN-US>; font-size : 9pt;}<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:visited</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {text-decoration :
  none; color : black; font-size : 9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:hover</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {text-decoration :
  underline; color : black; <o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-size : 9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>--&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/head&gt;&nbsp;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;body <span
  class=SpellE>topmargin</span>=&quot;0&quot; <span class=SpellE>leftmargin</span>=&quot;0&quot;
  text=&quot;#464646&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;BR&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;table
  width=&quot;650&quot; border=&quot;0&quot; <span class=SpellE>cellpadding</span>=&quot;2&quot;
  <span class=SpellE>cellspacing</span>=&quot;1&quot; <span class=SpellE>bgcolor</span>=&quot;#777777&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  height=&quot;20&quot; <span class=SpellE>colspan</span>=&quot;4&quot;
  align=&quot;center&quot; <span class=SpellE>bgcolor</span>=&quot;#999999&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color=&quot;white&quot;&gt;&lt;B&gt;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>글 제목 입니다<span class=GramE><span lang=EN-US>.&lt;</span></span><span
  lang=EN-US>/B&gt;&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;50&quot; height=&quot;20&quot; align=&quot;center&quot; <span
  class=SpellE>bgcolor</span>=&quot;#EEEEEE&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글쓴이<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;240&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;&gt;</span><st1:PersonName
  w:st="on"><span style='mso-bidi-font-family:"Times New Roman"'>홍길동</span></st1:PersonName><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;50&quot; height=&quot;20&quot; align=&quot;center&quot; <span
  class=SpellE>bgcolor</span>=&quot;#EEEEEE&quot;&gt;</span><span class=SpellE><span
  style='mso-bidi-font-family:"Times New Roman"'>이메일</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td<span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;</span>width=&quot;240&quot; <span
  class=SpellE>bgcolor</span>=&quot;white&quot;&gt;alzio7@alzio.co.kr&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;50&quot; height=&quot;20&quot; align=&quot;center&quot; <span
  class=SpellE>bgcolor</span>=&quot;#EEEEEE&quot;&gt;<span style='HWP-TAB:1'></span><span
  style='mso-bidi-font-family:"Times New Roman"'></span>날<span lang=EN-US>&amp;<span
  class=SpellE>nbsp<span class=GramE>;&amp;</span>nbsp;&amp;nbsp</span>;</span>짜<span
  lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;240&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;&gt;<st1:date
  Day="11" Month="12" Year="2030" o:ls="trans" w:st="on">2030-12-11</st1:date>
  00-00-00&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;50&quot; height=&quot;20&quot; align=&quot;center&quot; <span
  class=SpellE>bgcolor</span>=&quot;#EEEEEE&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>조회수<span lang=EN-US>&lt;/td&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td<span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;</span>width=&quot;240&quot; <span
  class=SpellE>bgcolor</span>=&quot;white&quot;&gt;0&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  <span class=SpellE>bgcolor</span>=&quot;white&quot; <span class=SpellE>colspan</span>=&quot;4&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color=&quot;black&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;pre&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글의 내용을 입력합니다<span class=GramE><span
  lang=EN-US>.&lt;</span></span><span lang=EN-US>/pre&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/font&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!-- </span><span
  style='mso-bidi-font-family:"Times New Roman"'>기타 버튼 들<span lang=EN-US>
  --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  <span class=SpellE>colspan</span>=&quot;4&quot; <span class=SpellE>bgcolor</span>=&quot;#999999&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;table
  width=&quot;100%&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  width=&quot;200&quot; align=&quot;left&quot; height=&quot;20&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;a
  <span class=SpellE>href</span>=&quot;<span class=SpellE>list.php<span
  class=GramE>?no</span></span>=20&quot;&gt;&lt;font
  color=&quot;white&quot;&gt;[목록보기]&lt;/font&gt;&lt;/a&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;a
  <span class=SpellE>href</span>=&quot;<span class=SpellE>write.php</span>&quot;&gt;&lt;font
  color=&quot;white&quot;<span class=GramE>&gt;[</span>글쓰기]&lt;/font&gt;&lt;/a&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;a
  <span class=SpellE>href</span>=&quot;<span class=SpellE>edit.php?id</span>=17&quot;&gt;&lt;font
  color=&quot;white&quot;&gt;[수정]&lt;/font&gt;&lt;/a&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;a
  <span class=SpellE>href</span>=&quot;<span class=SpellE>delpass.php?id</span>=17&quot;&gt;&lt;font
  color=&quot;white&quot;&gt;[삭제]&lt;/font&gt;&lt;/a&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;!</span><span
  style='mso-bidi-font-family:"Times New Roman"'>&#8212;이전 다음 표시<span lang=EN-US>
  --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;right&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;a
  <span class=SpellE>href</span>=<span class=SpellE>read.php?id</span>=18&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color='white'&gt;[</span><span style='mso-bidi-font-family:"Times New Roman"'>이전<span
  lang=EN-US>]&lt;/font&gt;&lt;/a&gt;&quot;;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;a
  <span class=SpellE>href</span>=<span class=SpellE>read.php?id</span>=16&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color=white&gt;[</span><span style='mso-bidi-font-family:"Times New Roman"'>다음<span
  lang=EN-US>]&lt;/font&gt;&lt;/a&gt;&quot;;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/b&gt;&lt;/font&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><span class=SpellE><b><span
lang=EN-US>delpass</span></b></span><b><span lang=EN-US> </span>파일 구성</b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:405.0pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:405.0pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;title&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>간단 게시판<span lang=EN-US>&lt;/title&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>td {font-size :
  9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:link</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {font : 9pt;color
  : <span class=SpellE>black;text</span>-decoration : none;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-family: </span><span
  style='mso-bidi-font-family:"Times New Roman"'>굴림<span class=GramE><span
  lang=EN-US>;font</span></span><span lang=EN-US>-size : 9pt;}<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:visited</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {text-decoration :
  none; color : black; font-size : 9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:hover</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {text-decoration :
  underline; color : black; <o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>font-size : 9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>--&gt;&lt;/style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;body <span
  class=SpellE>topmargin</span>=&quot;0&quot; <span class=SpellE>leftmargin</span>=&quot;0&quot;
  text=&quot;#464646&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;BR&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=GramE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> </span><span
  style='mso-bidi-font-family:"Times New Roman"'>입력된 값을 다음 페이지로 넘기기 위해<span
  lang=EN-US> FORM</span>을 만든다<span lang=EN-US>. --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;form
  action=&quot;<span class=SpellE>delete.php?id</span>=17&quot;
  method=&quot;post&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&nbsp;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;table
  width=&quot;300&quot; border=&quot;0&quot; <span class=SpellE>cellpadding</span>=&quot;2&quot;
  <span class=SpellE>cellspacing</span>=&quot;1&quot; <span class=SpellE>bgcolor</span>=&quot;#777777&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  height=20 align=&quot;center&quot; <span class=SpellE>bgcolor</span>=&quot;#999999&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color=&quot;white&quot;&gt;&lt;B&gt;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>비 밀 번 호 확 인<span lang=EN-US>&lt;/B&gt;&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;td
  align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;font
  color=&quot;white&quot;&gt;&lt;B&gt;</span><span class=GramE><span
  style='mso-bidi-font-family:"Times New Roman"'>비밀번호<span lang=EN-US> :</span></span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> &lt;/b&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;password&quot; name=&quot;password&quot; size=&quot;8&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;submit&quot; value=&quot;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>확인<span lang=EN-US> &quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;INPUT
  type=&quot;button&quot; value=&quot;</span><span style='mso-bidi-font-family:
  "Times New Roman"'>취소<span lang=EN-US>&quot; <span class=SpellE>onclick</span>=&quot;<span
  class=SpellE>history.go</span>(-1)&quot;&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='HWP-TAB:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=hstyle0 style='margin-bottom:4.0pt'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<p class=hstyle0 style='margin-bottom:4.0pt'><b><span lang=EN-US>List </span>파일
구성</b></p>

<table class=a border=0 cellspacing=0 cellpadding=0 style='border-collapse:
 collapse;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:805.05pt'>
  <td width=600 style='width:449.65pt;border:solid black 1.0pt;mso-border-alt:
  solid black .25pt;padding:1.4pt 5.1pt 1.4pt 5.1pt;height:805.05pt'>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;html&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;title&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>간단 게시판<span lang=EN-US>&lt;/title&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;!--<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>td {font-size :
  9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:link</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {font : 9pt;color
  : <span class=SpellE>black;text</span>-decoration : none; <span class=SpellE>fontfamily</span><o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>: </span><span
  style='mso-bidi-font-family:"Times New Roman"'>굴림<span class=GramE><span
  lang=EN-US>;font</span></span><span lang=EN-US>-size : 9pt;}<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:visited</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {text-decoration :
  none; color : black; font-size : 9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>A:hover</span></span><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'> {text-decoration :
  underline; color : black; font-size : 9pt;}<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>--&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/style&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/head&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;body <span
  class=SpellE>topmargin</span>=&quot;0&quot; <span class=SpellE>leftmargin</span>=&quot;0&quot;
  text=&quot;#464646&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;table
  width=&quot;650&quot; border=&quot;0&quot; <span class=SpellE>cellpadding</span>=&quot;2&quot;
  <span class=SpellE>cellspacing</span>=&quot;1&quot; <span class=SpellE>bgcolor</span>=&quot;#777777&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;!--</span><span
  style='mso-bidi-font-family:"Times New Roman"'>표 제목<span lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;<span
  class=SpellE>tr</span> height=&quot;20&quot; <span class=SpellE>bgcolor</span>=&quot;#999999&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  width=&quot;30&quot; align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;white&quot;&gt;</span><span style='mso-bidi-font-family:"Times New Roman"'>번호<span
  lang=EN-US>&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  width=&quot;370&quot; align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;white&quot;&gt;</span><span style='mso-bidi-font-family:"Times New Roman"'>제
  목<span lang=EN-US>&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  width=&quot;50&quot; align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;white&quot;&gt;</span><span style='mso-bidi-font-family:"Times New Roman"'>글쓴이<span
  lang=EN-US>&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  width=&quot;60&quot; align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;white&quot;&gt;</span><span style='mso-bidi-font-family:"Times New Roman"'>날
  짜<span lang=EN-US>&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  width=&quot;40&quot; align=&quot;center&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;white&quot;&gt;</span><span style='mso-bidi-font-family:"Times New Roman"'>조회수<span
  lang=EN-US>&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;!--
  </span><span style='mso-bidi-font-family:"Times New Roman"'>번호<span
  lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  height=&quot;20&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;
  align=&quot;center&quot;&gt;2&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;!--
  </span><span style='mso-bidi-font-family:"Times New Roman"'>제목<span
  lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  height=&quot;20&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;&gt;&amp;<span
  class=SpellE>nbsp</span>;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;a
  <span class=SpellE>href</span>=&quot;<span class=SpellE>read.php?id</span>=&lt;?<span
  class=SpellE>php</span> echo $id ?&gt;&amp;no=0&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글 제목입니다<span lang=EN-US>.&lt;/a&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;!--
  </span><span style='mso-bidi-font-family:"Times New Roman"'>이름<span
  lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  align=&quot;center&quot; height=&quot;20&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;black&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;a
  <span class=SpellE>href</span>=&quot;mailto:alzio7@alzio.co.kr&quot;&gt;</span><st1:PersonName
  w:st="on"><span style='mso-bidi-font-family:"Times New Roman"'>홍길동</span></st1:PersonName><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/a&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/font&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;!--
  </span><span style='mso-bidi-font-family:"Times New Roman"'>날짜<span
  lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  align=&quot;center&quot; height=&quot;20&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;black&quot;&gt;<st1:date Day="12" Month="1" Year="2030" o:ls="trans"
  w:st="on">2030-01-12</st1:date>&lt;/font&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;!--
  </span><span style='mso-bidi-font-family:"Times New Roman"'>조회수<span
  lang=EN-US> --&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  align=&quot;center&quot; height=&quot;20&quot; <span class=SpellE>bgcolor</span>=&quot;white&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;black&quot;&gt;20&lt;/font&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;table
  border=&quot;0&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;td
  width=&quot;600&quot; height=&quot;20&quot; align=&quot;center&quot; <span
  class=SpellE>rowspan</span>=&quot;4&quot;&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:4'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;font
  color=&quot;gray&quot;&gt;</span><span style='mso-bidi-font-family:"Times New Roman"'>◀<span
  lang=EN-US> 1 2 3 4 5 6 7 8 9 10 </span>▶<span lang=EN-US>&lt;/font&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/td&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/<span
  class=SpellE>tr</span>&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;/table&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'><span
  style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&lt;a
  <span class=SpellE>href</span>=&quot;<span class=SpellE>write.php</span>&quot;&gt;</span><span
  style='mso-bidi-font-family:"Times New Roman"'>글쓰기<span lang=EN-US>&lt;/a&gt;<o:p></o:p></span></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/center&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/body&gt;<o:p></o:p></span></p>
  <p class=hstyle0 style='margin-bottom:4.0pt;line-height:70%'><span
  lang=EN-US style='mso-bidi-font-family:"Times New Roman"'>&lt;/html&gt;<o:p></o:p></span></p>
  </td>
 </tr>
</table>

