<?php 
/**
* @version		$Id: general.php 1295 2012-09-24 16:04:25Z datahell $
* @package		Elxis
* @subpackage	Elxis Defender
* @copyright	Copyright (c) 2006-2012 Elxis CMS (http://www.elxis.org). All rights reserved.
* @license		Elxis Public License ( http://www.elxis.org/elxis-public-license.html )
* @author		Elxis Team ( http://www.elxis.org )
* @description 	Elxis CMS is free software. Read the license for copyright notices and details
*/

defined('_ELXIS_') or die ('Direct access to this location is not allowed.');


/* QUERY, NESTING, REFERRER (Last update: 2011-06-21 20:50:10) */
$signatures = array(
	array('inmatch', 'querydec', '*/','RFI attack/SQL injection.'),
	array('inmatch', 'querydec', '/*','RFI attack/SQL injection.'),
	array('inmatch', 'query', '%u','RFI attack/SQL injection (Unicode ASCII escaping).'),
	array('inmatch', 'query', '%0', 'RFI attack/SQL injection (Unprintable ASCII escaping).'),
	array('inmatch', 'query', '%1', 'RFI attack/SQL injection (Unprintable ASCII escaping).'),
	array('rmatch', 'query', '%3B', 'RFI attack/SQL injection.'),
	array('inmatch', 'query', '%250', 'RFI attack/SQL injection (Unprintable ASCII escaping).'),
	array('inmatch', 'query', '%251', 'RFI attack/SQL injection (Unprintable ASCII escaping.'),
	array('inmatch', 'query', '%25u', 'RFI attack/SQL injection (Unicode ASCII escaping.'),
	array('inmatch', 'query', '%2525', 'RFI attack/SQL injection (nested percents, level 1 e.g. %2525).'), //67a extended description
	array('inmatch', 'query', '%25252525', 'RFI attack/SQL injection (nested percents, level 2 e.g. %25252525).'), //67a extended description
	array('inmatch', 'query', '%2527', 'RFI attack/SQL injection (nested percent and e.g. %2527).'), //67a extended description
	array('rmatch', 'query', '%253B', 'RFI attack/SQL injection.'),
	array('rmatch', 'querydec', ';', 'RFI attack/SQL injection (some browser plugins like Linkification for Firefox may cause this).'), //66f
	array('lmatch', 'querydec', ';', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydec', 'elx_users', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydec', '++++', 'SQL overflow attempt.'),
	array('inmatch', 'querydec', 'concat_ws', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydec', 'concat(', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydec', 'union select', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydec', 'select union', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydec', 'declare', 'RFI attack/SQL injection.'),
	array('inmatch', 'querydecsws', 'include(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'require(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'eval(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'code(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'echo(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'system(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'exec(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'unction(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'if(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'exists(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'open(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'escape(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'write(', 'Command injection.'),
	array('inmatch', 'querydecsws', 'file(', 'Command injection.'),
	array('inmatch', 'querydec', '$_get','General CMS/RFI attack.'),
	array('inmatch', 'querydecsws', 'request[','General CMS/RFI attack.'),
	array('inmatch', 'querydec', '[itemid]','General CMS/RFI attack.'),
	array('inmatch', 'querydec', '[file]', 'General CMS attack.'),
	array('inmatch', 'querydec', '[src', 'General CMS attack.'),
	array('inmatch', 'querydec', 'mosconfig', 'Mambo / Elxis 2009.x CMS attack.'),
	array('inmatch', 'querydec', '[loadfile', 'RFI attack/General CMS attack.'),
	array('inmatch', 'querydec', '[0,', 'General CMS attack.'),
	array('inmatch', 'querydec', '->', 'General CMS attack.'),
	array('inmatch', 'querydec', 'page=-', 'general CMS attack.'),
	array('rmatch', 'query', '%00', 'Null truncation attempt.'),
	array('inmatch', 'querydecsws', '8585072011', 'QUERY CRASH ATTEMPT. Please do not use death number in URL.'),
	array('inmatch', 'querydecsws', 'amp;amp;', 'Ampersand nesting obfuscation attempt MK2. INSTA-BAN.'),
	array('inmatch', 'query', '??', 'Badly formed query,  must not have 2 question marks in a row.'),
	array('inmatch', 'querydec', '???', 'Badly formed query,  must not have 3 question marks in a row even with escaping.'),
	array('inmatch', 'querydec', '(username', '(username in query.'),
	array('inmatch', 'querydec', 'password)', 'password) in query.'),
	array('inmatch', 'querydec', 'http:', 'RFI (http).'),
	array('inmatch', 'querydec', '1http:', 'RFI (http).'),
	array('inmatch', 'querydec', 'https:', 'RFI (https).'),
	array('inmatch', 'querydec', 'ftp:', 'RFI (ftp).'),
	array('inmatch', 'querydec', 'ftps:', 'RFI (ftps).'),
	array('inmatch', 'querydec', 'gopher:', 'RFI (gopher).'),
	array('inmatch', 'querydec', 'mms:', 'RFI (mms).'),
	array('inmatch', 'querydec', 'rtsp:', 'RFI (rtsp).'),
	array('inmatch', 'querydec', 'rtp:', 'RFI (rtp).'),
	array('inmatch', 'querydec', 'udp:', 'RFI (udp).'),
	array('inmatch', 'querydec', 'telnet:', 'RFI (telnet).'),
	array('inmatch', 'querydec', 'path]', 'Path hack.'),
	array('inmatch', 'querydec', 'root]', 'Root hack.'),
	array('inmatch', 'querydec', '<script', 'http javascript (wedge end/script start) injection.'),
	array('inmatch', 'querydec', '/script>', 'http javascript (wedge start/script end) injection.'),
	array('inmatch', 'querydec', '<body', 'Attempting to cause a new body to start.'),
	array('inmatch', 'querydec', '<?', 'PHP Script Execution Attempt.'),
	array('inmatch', 'querydec', '=|', 'Execution Attempt.'),
	array('inmatch', 'querydec', ';|', 'Execution Attempt.'),
	array('inmatch', 'querydec', '";', 'Execution Attempt.'),
	array('inmatch', 'querydec', '|include', 'RFI Attempt.'),
	array('inmatch', 'querydec', '|require', 'RFI Attempt.'),
	array('inmatch', 'querydec', 'php://', 'Global stream hack.'),
	array('inmatch', 'querydec', '_server[', 'Global var hack.'),
	array('inmatch', 'querydec', '_get[', 'Global var hack.'),
	array('inmatch', 'querydec', '_post[', 'Global var hack.'),
	array('inmatch', 'querydec', '_files[', 'Global var hack.'),
	array('inmatch', 'querydec', '_request[', 'Global var hack.'),
	array('inmatch', 'querydec', '_env[', 'Global var hack.'),
	array('inmatch', 'querydec', '_cookie[', 'Global var hack.'),
	array('inmatch', 'querydec', '_session[', 'Global var hack.'),
	array('inmatch', 'querydec', 'argc', 'Global var hack.'),
	array('inmatch', 'querydec', 'argv', 'Global var hack.'),
	array('inmatch', 'querydec', 'globals[', 'Global var hack.'),
	array('inmatch', 'querydec', 'alert(', 'XSS attack obfuscation.'),
	array('inmatch', 'querydecsws', '(select', 'SQL injection SQL-04 Mk2'),
	array('inmatch', 'querydec', '_schema', 'SQL injection SQL-06.'),
	array('inmatch', 'querydec', '_table', 'SQL injection SQL-07.'),
	array('inmatch', 'querydec', '(select', 'SQL injection SQL-08.'),
	array('inmatch', 'querydec', '(version', 'SQL injection SQL-09.'),
	array('inmatch', 'querydec', 'version)', 'SQL injection SQL-10.'),
	array('inmatch', 'querydec', 'user)', 'SQL injection SQL-11.'),
	array('inmatch', 'querydec', 'name)', 'SQL injection SQL-12.'),
	array('inmatch', 'querydec', '(sql', 'SQL injection SQL-13.'),
	array('inmatch', 'querydec', '@datadir', 'SQL injection SQL-14.'),
	array('inmatch', 'querydec', 'convert(', 'SQL injection SQL-17.'),
	array('inmatch', 'querydec', 'set(', 'SQL injection SQL-18.'),
	array('inmatch', 'querydec', 'sleep(', 'SQL injection SQL-19.'),
	array('inmatch', 'querydec', 'benchmark(', 'SQL injection SQL-20.'),
	array('inmatch', 'querydecsws', 'if(', 'SQL injection SQL-21.'),
	array('inmatch', 'querydecsws', 'database(', 'SQL injection SQL-23.'),
	array('inmatch', 'querydecsws', 'system(', 'SQL injection SQL-24.'),
	array('inmatch', 'querydecsws', 'substr(', 'SQL injection SQL-26.'),
	array('inmatch', 'querydec', 'privilege_type', 'SQL injection SQL-27.'),
	array('inmatch', 'querydec', 'create user', 'SQL injection SQL-28.'),
	array('inmatch', 'querydec', 'drop user', 'SQL injection SQL-29.'),
	array('inmatch', 'querydec', 'grant all privileges on', 'SQL injection SQL-30.'),
	array('inmatch', 'querydec', 'sys.user', 'SQL injection SQL-31.'),
	array('inmatch', 'querydec', 'extproc', 'SQL injection SQL-32.'),
	array('inmatch', 'querydec', 'dbmsinfo', 'SQL injection SQL-33.'),
	array('inmatch', 'querydec', 'syscat', 'SQL injection SQL-34.'),
	array('inmatch', 'querydec', 'sysibm', 'SQL injection SQL-35.'),
	array('inmatch', 'querydec', 'dbinfo', 'SQL injection SQL-36.'),
	array('inmatch', 'querydec', 'systab', 'SQL injection SQL-37.'),
	array('inmatch', 'querydec', 'waitfor', 'SQL injection SQL-38.'),
	array('inmatch', 'querydec', 'bulk insert', 'SQL injection SQL-39.'),
	array('inmatch', 'querydec', 'drop table', 'SQL injection SQL-40.'),
	array('inmatch', 'querydec', 'create table', 'SQL injection SQL-41.'),
	array('inmatch', 'querydec', 'password_hash', 'SQL injection SQL-44.'),
	array('inmatch', 'querydec', 'mysql.elx_user', 'SQL injection SQL-45.'),
	array('inmatch', 'querydec', 'type_name', 'SQL injection SQL-48.'),
	array('inmatch', 'requesturi', '..../', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '....%5C', 'Directory traversal attack.'),
	array('inmatch', 'querydec', 'num_replies=77777', 'overflow hack.'),
	//array('inmatch', 'querydec', '//', 'Directory traversal attack.'),
	//array('inmatch', 'requesturi', '//', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '././', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', './/.//', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '..', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '/././', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '/../../', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '//.//.//', 'Directory traversal attack.'),
	array('inmatch', 'requesturi', '//..//..//', 'Directory traversal attack.'),
	array('inmatch', 'querydec', 'modez=', 'Common bot command qualifier.'),
	array('inmatch', 'querydec', '=shellz', 'Common bot command.'),
	array('inmatch', 'querydec', '=scannerz', 'Common bot command..'),
	array('inmatch', 'querydec', '=botz', 'Common bot command.'),
	array('inmatch', 'querydec', '=psybnc', 'Common bot command.'),
	array('inmatch', 'query', '?cmd=', 'Nesting attack. Remote bot command mode.'),
	array('inmatch', 'query', '?&cmd=', 'Nesting attack. Remote bot command mode.'),
	array('inmatch', 'query', '?&', 'Nesting attack. Malformed.'),
//Nesting Attacks
	array('inmatch', 'querydec', '.jpg?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.gif?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.png?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.css?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.js?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.ico?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.xsl?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.xml?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.gz?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.tar?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.zip?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.xml?', 'Nesting attack.'),
	array('inmatch', 'querydec', '.txt?', 'Nesting attack.'),
	array('minmatch', 'querydec', '.php?', 1, 'Nesting attack.'),
	array('minmatch', 'querydec', '.htm?', 1, 'Nesting attack.'),
	array('minmatch', 'querydec', '.html?', 1, 'Nesting attack.'),
	array('minmatch', 'querydec', '.asp?', 1, 'Nesting attack.'),
	array('minmatch', 'querydec', 'page=', 2, 'Nesting attack.'),
	array('minmatch', 'querydec', 'highlight=', 1, 'Nesting attack.'),
//HTTP_Referer Scans
	array('inmatch', 'fromhost', '<?', 'Php Script Execution Attempt.'),
	array('inmatch', 'fromhost', '?>', 'Php Script Break Attempt.'),
	array('inmatch', 'fromhost', 'drop table', 'SQL injection attempt.'),
	array('inmatch', 'fromhost', ' href', 'http url injection.'),
	array('inmatch', 'fromhost', '<iframe', 'iframe injection.'),
	array('inmatch', 'fromhost', '<script', 'http javascript (wedge end/script start) injection.'),
	array('inmatch', 'fromhost', '/script>', 'http javascript (wedge start/script end) injection.'),
	array('lmatch', 'fromhost', ';', 'RFI attack/SQL injection thru referer logging.'),
	array('lmatch', 'fromhost', '[url=', 'bbcode URL injection.'),
	array('lmatch', 'fromhost', '[/url', 'bbcode URL injection.'),
	array('inmatch', 'fromhost', '.php++', 'Referer code injection thru referer logging attempt, ++ after php, should be ? or +.'),
	array('inmatch', 'fromhost', 'result:+%0', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%1', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%8', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%9', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%a', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%b', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%c', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%d', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%e', 'Unprintable ASCII Injection/Execution attempt thru referer logging.'),
	array('inmatch', 'fromhost', 'result:+%f', 'Unprintable ASCII Injection/Execution attempt thru referer logging.')
);

?>