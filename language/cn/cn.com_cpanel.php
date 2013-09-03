<?php 
/**
* @version: 4.1
* @package: Elxis CMS
* @subpackage: Elxis Language
* @author: Elxis Team ( http://www.elxis.org )
* @copyright: (C) 2006-2013 Elxis.org. All rights reserved.
* @description: en-GB (English - Great Britain) language for component CPanel
* @license: Elxis public license http://www.elxis.org/elxis-public-license.html
* @translator: Ioannis Sannos ( http://www.elxis.org )
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*****************************************************************************/

defined('_ELXIS_') or die ('Direct access to this location is not allowed.');


$_lang = array();
$_lang['CONTROL_PANEL'] = '控制台';
$_lang['GENERAL_SITE_SETS'] = '生成网站配置';
$_lang['LANGS_MANAGER'] = '语言管理';
$_lang['MANAGE_SITE_LANGS'] = '管理网站语言';
$_lang['USERS'] = '用户';
$_lang['MANAGE_USERS'] = '创建、修改、删除用户帐号';
$_lang['USER_GROUPS'] = '用户组';
$_lang['MANAGE_UGROUPS'] = '管理用户组';
$_lang['MEDIA_MANAGER'] = '媒体管理';
$_lang['MEDIA_MANAGER_INFO'] = '管理多媒体文件';
$_lang['ACCESS_MANAGER'] = '访问管理';
$_lang['MANAGE_ACL'] = '管理访问控制列表';
$_lang['MENU_MANAGER'] = '菜单管理';
$_lang['MANAGE_MENUS_ITEMS'] = '管理菜单和菜单项';
$_lang['FRONTPAGE'] = '前台';
$_lang['DESIGN_FRONTPAGE'] = '设计前台页面';
$_lang['CATEGORIES_MANAGER'] = '栏目管理';
$_lang['MANAGE_CONT_CATS'] = '管理内容类别';
$_lang['CONTENT_MANAGER'] = '内容管理';
$_lang['MANAGE_CONT_ITEMS'] = '管理内容项目';
$_lang['MODULES_MANAGE_INST'] = '管理和安装新模块.';
$_lang['PLUGINS_MANAGE_INST'] = '管理和安装新插件.';
$_lang['COMPONENTS_MANAGE_INST'] = '管理和安装新组件.';
$_lang['TEMPLATES_MANAGE_INST'] = '管理和安装新模版.';
$_lang['SENGINES_MANAGE_INST'] = '管理和安装新搜索引擎.';
$_lang['MANAGE_WAY_LOGIN'] = '管理用户可能登录网站的方式.';
$_lang['TRANSLATOR'] = '翻译器';
$_lang['MANAGE_MLANG_CONTENT'] = '管理多语言内容';
$_lang['LOGS'] = '日志';
$_lang['VIEW_MANAGE_LOGS'] = '查看和管理日志文件';
$_lang['GENERAL'] = '普通';
$_lang['WEBSITE_STATUS'] = '网站状态';
$_lang['ONLINE'] = '在线';
$_lang['OFFLINE'] = '离线';
$_lang['ONLINE_ADMINS'] = '在线只对管理员可见';
$_lang['OFFLINE_MSG'] = '离线消息';
$_lang['OFFLINE_MSG_INFO'] = '此字段留空自动显示多语言消息';
$_lang['SITENAME'] = '网站名称';
$_lang['URL_ADDRESS'] = 'URL 地址';
$_lang['REPO_PATH'] = '库路径';
$_lang['REPO_PATH_INFO'] = 'Elxis 文件夹的完整路径. 默认留空,
	位置在 (elxis_root/repository/). 我们强烈建议移动该文件夹到WWW文件夹以外并重命名,让其他人(或机器)不可读!';
$_lang['FRIENDLY_URLS'] = '友好URL地址';
$_lang['SEF_INFO'] = '设置为 YES (推荐) 重命名 htaccess.txt 文件为 .htaccess';
$_lang['STATISTICS_INFO'] = '开启网站访问统计?';
$_lang['GZIP_COMPRESSION'] = 'GZip 压缩';
$_lang['GZIP_COMPRESSION_DESC'] = 'Elxis会把稳定压缩后发送到客户端,这样可以节省70%~80%的流量.';
$_lang['DEFAULT_ROUTE'] = '默认路由';
$_lang['DEFAULT_ROUTE_INFO'] = '使用一个Elxis格式化的URI作为网站首页 ';
$_lang['META_DATA'] = 'META 数据';
$_lang['META_DATA_INFO'] = '网站简短描述';
$_lang['KEYWORDS'] = '关键词';
$_lang['KEYWORDS_INFO'] = '多个关键词用逗号隔开';
$_lang['STYLE_LAYOUT'] = '样式和布局';
$_lang['SITE_TEMPLATE'] = '网站模板';
$_lang['ADMIN_TEMPLATE'] = '后台模板';
$_lang['ICONS_PACK'] = '图标数据包';
$_lang['LOCALE'] = '区域设置';
$_lang['TIMEZONE'] = '时区';
$_lang['MULTILINGUISM'] = '多语言';
$_lang['MULTILINGUISM_INFO'] = '允许您使用多种语言输入文本. 
	如果不需要本功能请不要开启,会使网站变慢.  即使本项设置为"No",不会对Elxis接口造成影响,它仍然是多语言.';
$_lang['CHANGE_LANG'] = '切换语言';
$_lang['LANG_CHANGE_WARN'] = '如果您切换了语言,可能有语言指标和翻译表的翻译不一致的情况.';
$_lang['CACHE'] = '缓存';
$_lang['CACHE_INFO'] = 'Elxis  can save the generated HTML code by individual elements into cache for faster later re-generation. 
	This is a general setting, you must also enable cache on the elements (eg. modules) you wish to be cached.';
$_lang['APC_INFO'] = 'The Alternative PHP Cache (APC) is an opcode cache for PHP. It must be supported by your web server. 
	It is not recommended on shared hosting environments. Elxis will use it on special pages to improve site performace.';
$_lang['APC_ID_INFO'] = 'In case more than 1 sites are hosted on the same server identify 
	them by providing a unique integer for this site.';
$_lang['USERS_AND_REGISTRATION'] = 'Users and Registration';
$_lang['PRIVACY_PROTECTION'] = 'Privacy protection';
$_lang['PASSWORD_NOT_SHOWN'] = 'The current password is not shown for security reasons. 
	Fill this field in only if you wish to change the current password.';
$_lang['DB_TYPE'] = 'Database type';
$_lang['ALERT_CON_LOST'] = 'If changed the connection to the current database will be lost!';
$_lang['HOST'] = 'Host';
$_lang['PORT'] = 'Port';
$_lang['PERSISTENT_CON'] = 'Persistent connection';
$_lang['DB_NAME'] = 'DB Name';
$_lang['TABLES_PREFIX'] = 'Tables prefix';
$_lang['DSN_INFO'] = 'A ready-to-use Data Source Name string to be used for connecting to the database.';
$_lang['SCHEME'] = 'Scheme';
$_lang['SCHEME_INFO'] = 'The absolute path to a database file if you use a database such as SQLite.';
$_lang['SEND_METHOD'] = 'Send method';
$_lang['SMTP_OPTIONS'] = 'SMTP options';
$_lang['AUTH_REQ'] = 'Authentication required';
$_lang['SECURE_CON'] = 'Secure connection';
$_lang['SENDER_NAME'] = 'Sender name';
$_lang['SENDER_EMAIL'] = 'Sender e-mail';
$_lang['RCPT_NAME'] = 'Recipient name';
$_lang['RCPT_EMAIL'] = 'Recipient e-mail';
$_lang['TECHNICAL_MANAGER'] = 'Technical manager';
$_lang['TECHNICAL_MANAGER_INFO'] = 'The technical manager receives error and security related alerts.';
$_lang['USE_FTP'] = 'Use FTP';
$_lang['PATH'] = 'Path';
$_lang['FTP_PATH_INFO'] = 'The relative path from the FTP root folder to Elxis installation folder (example: /public_html).';
$_lang['SESSION'] = 'Session';
$_lang['HANDLER'] = 'Handler';
$_lang['HANDLER_INFO'] = 'Elxis can save sessions as files into Repository or into the database. 
	You can also choose None to let PHP save sessions into the server\'s default location.';
$_lang['FILES'] = 'Files';
$_lang['LIFETIME'] = 'Lifetime';
$_lang['SESS_LIFETIME_INFO'] = 'Time till the session expires when you are idle.';
$_lang['CACHE_TIME_INFO'] = 'After this time cached items get re-generated.';
$_lang['MINUTES'] = 'minutes';
$_lang['HOURS'] = 'hours';
$_lang['MATCH_IP'] = 'Match IP';
$_lang['MATCH_BROWSER'] = 'Match browser';
$_lang['MATCH_REFERER'] = 'Match HTTP Referrer';
$_lang['MATCH_SESS_INFO'] = 'Enables an advanced session validation routine.';
$_lang['ENCRYPTION'] = 'Encryption';
$_lang['ENCRYPT_SESS_INFO'] = 'Encrypt session data?';
$_lang['ERRORS'] = 'Errors';
$_lang['WARNINGS'] = 'Warnings';
$_lang['NOTICES'] = 'Notices';
$_lang['NOTICE'] = 'Notice';
$_lang['REPORT'] = 'Report';
$_lang['REPORT_INFO'] = 'Errors report level. On production sites we recommend you to set it to off.';
$_lang['LOG'] = 'Log';
$_lang['LOG_INFO'] = 'Error log level. Select which errors you wish Elxis to write in system 
	log (repository/logs/).';
$_lang['ALERT'] = 'Alert';
$_lang['ALERT_INFO'] = 'Mail fatal errors to site\'s technical manager.';
$_lang['ROTATE'] = 'Rotate';
$_lang['ROTATE_INFO'] = 'Rotate error logs at the end of each month. Recommended.';
$_lang['DEBUG'] = 'Debug';
$_lang['MODULE_POS'] = 'Module positions';
$_lang['MINIMAL'] = 'Minimal';
$_lang['FULL'] = 'Full';
$_lang['DISPUSERS_AS'] = 'Display users as';
$_lang['USERS_REGISTRATION'] = 'Users registration';
$_lang['ALLOWED_DOMAIN'] = 'Allowed domain';
$_lang['ALLOWED_DOMAIN_INFO'] = 'Write a domain name (i.e. elxis.org) only for which the system 
	will accept registration e-mail addresses.';
$_lang['EXCLUDED_DOMAINS'] = 'Excluded domains';
$_lang['EXCLUDED_DOMAINS_INFO'] = 'Comma separated list of domain names (i.e. badsite.com,hacksite.com) 
	from which e-mail addresses are not acceptable during registration.';
$_lang['ACCOUNT_ACTIVATION'] = 'Account activation';
$_lang['DIRECT'] = 'Direct';
$_lang['MANUAL_BY_ADMIN'] = 'Manual by administrator';
$_lang['PASS_RECOVERY'] = 'Password recovery';
$_lang['SECURITY'] = 'Security';
$_lang['SECURITY_LEVEL'] = 'Security level';
$_lang['SECURITY_LEVEL_INFO'] = 'By increasing the security level some options are enabled by force 
	while some features may be disabled. Consult Elxis documentation for more.';
$_lang['NORMAL'] = 'Normal';
$_lang['HIGH'] = 'High';
$_lang['INSANE'] = 'Insane';
$_lang['ENCRYPT_METHOD'] = 'Encryption method';
$_lang['AUTOMATIC'] = 'Automatic';
$_lang['ENCRYPTION_KEY'] = 'Encryption key';
$_lang['ELXIS_DEFENDER'] = 'Elxis defender';
$_lang['ELXIS_DEFENDER_INFO'] = 'Elxis defender protects your web site from XSS and SQL injection attacks. 
	This powerful tool filters user requests and blocks attacks to your site. It will also notify you for 
	an attack and log it. You can select which type of filters to be applied or even lock your system\'s 
	crucial files for unauthorized modifications. The more filters you enable the slower your site will run. 
	We recommend enabling options G, C and F. Consult Elxis documentation for more.';
$_lang['SSL_SWITCH'] = 'SSL switch';
$_lang['SSL_SWITCH_INFO'] = 'Elxis will automatically switch from HTTP to HTTPS in pages where privacy is important. 
	For the administration area the HTTPS scheme will be permanent. Requires an SSL certificate!';
$_lang['PUBLIC_AREA'] = 'Public area';
$_lang['GENERAL_FILTERS'] = 'General rules';
$_lang['CUSTOM_FILTERS'] = 'Custom rules';
$_lang['FSYS_PROTECTION'] = 'Filesystem protection';
$_lang['CHECK_FTP_SETS'] = 'Check FTP settings';
$_lang['FTP_CON_SUCCESS'] = 'The connection to the FTP server was successful.';
$_lang['ELXIS_FOUND_FTP'] = 'Elxis installation was found on FTP.';
$_lang['ELXIS_NOT_FOUND_FTP'] = 'Elxis installation was not found on FTP! Check the value of the FTP path option.';
$_lang['CAN_NOT_CHANGE'] = 'You can not change it.';
$_lang['SETS_SAVED_SUCC'] = 'Settings saved successfully';
$_lang['ACTIONS'] = 'Actions';
$_lang['BAN_IP_REQ_DEF'] = 'To ban an IP address it is required to enable at least one option in Elxis defender!';
$_lang['BAN_YOURSELF'] = 'Are you trying to ban yourself?';
$_lang['IP_AL_BANNED'] = 'This IP is already banned!';
$_lang['IP_BANNED'] = 'IP address %s banned!';
$_lang['BAN_FAILED_NOWRITE'] = 'Ban failed! File repository/logs/defender_ban.php is not writeable.';
$_lang['ONLY_ADMINS_ACTION'] = 'Only administrators can perform this action!';
$_lang['CNOT_LOGOUT_ADMIN'] = 'You cannot log an administrator out!';
$_lang['USER_LOGGED_OUT'] = 'The user was logged out!';
$_lang['SITE_STATISTICS'] = 'Site statistics';
$_lang['SITE_STATISTICS_INFO'] = 'See the site traffic statistics';
$_lang['BACKUP'] = 'Backup';
$_lang['BACKUP_INFO'] = 'Take a new full site backup and manage existing ones.';
$_lang['BACKUP_FLIST'] = 'Existing backup files list';
$_lang['TYPE'] = 'Type';
$_lang['FILENAME'] = 'File name';
$_lang['SIZE'] = 'Size';
$_lang['NEW_DB_BACKUP'] = 'New database backup';
$_lang['NEW_FS_BACKUP'] = 'New filesystem backup';
$_lang['FILESYSTEM'] = 'File system';
$_lang['DOWNLOAD'] = 'Download';
$_lang['TAKE_NEW_BACKUP'] = 'Take a new backup?\nThis may take a while, please be patient!';
$_lang['FOLDER_NOT_EXIST'] = "Folder %s does not exist!";
$_lang['FOLDER_NOT_WRITE'] = "Folder %s is not writeable!";
$_lang['BACKUP_SAVED_INTO'] = "Backup files get saved into %s";
$_lang['CACHE_SAVED_INTO'] = "Cache files get saved into %s";
$_lang['CACHED_ITEMS'] = 'Cached items';
$_lang['ELXIS_ROUTER'] = 'Elxis router';
$_lang['ROUTING'] = 'Routing';
$_lang['ROUTING_INFO'] = 'Re-route user requests to custom URL addresses.';
$_lang['SOURCE'] = 'Source';
$_lang['ROUTE_TO'] = 'Route to';
$_lang['REROUTE'] = "Re-route %s";
$_lang['DIRECTORY'] = 'Directory';
$_lang['SET_FRONT_CONF'] = 'Set site frontpage in Elxis configuration!';
$_lang['ADD_NEW_ROUTE'] = 'Add a new route';
$_lang['OTHER'] = 'Other';
$_lang['LAST_MODIFIED'] = 'Last modified';
$_lang['PERIOD'] = 'Period'; //time period
$_lang['ERROR_LOG_DISABLED'] = 'Error logging is disabled!';
$_lang['LOG_ENABLE_ERR'] = 'Log is enabled only for fatal errors.';
$_lang['LOG_ENABLE_ERRWARN'] = 'Log is enabled for errors and warnings.';
$_lang['LOG_ENABLE_ERRWARNNTC'] = 'Log is enabled for errors, warnings and notices.';
$_lang['LOGROT_ENABLED'] = 'Logs rotation is enabled.';
$_lang['LOGROT_DISABLED'] = 'Logs rotation is disabled!';
$_lang['SYSLOG_FILES'] = 'System log files';
$_lang['DEFENDER_BANS'] = 'Defender bans';
$_lang['LAST_DEFEND_NOTIF'] = 'Last Defender notification';
$_lang['LAST_ERROR_NOTIF'] = 'Last Error notification';
$_lang['TIMES_BLOCKED'] = 'Times blocked';
$_lang['REFER_CODE'] = 'Reference code';
$_lang['CLEAR_FILE'] = 'Clear file';
$_lang['CLEAR_FILE_WARN'] = 'The contents of the file will be removed. Continue?';
$_lang['FILE_NOT_FOUND'] = 'File not found!';
$_lang['FILE_CNOT_DELETE'] = 'This file cannot be deleted!';
$_lang['ONLY_LOG_DOWNLOAD'] = 'Only files with the extension .log can be downloaded!';
$_lang['SYSTEM'] = 'System';
$_lang['PHP_INFO'] = 'PHP information';
$_lang['PHP_VERSION'] = 'PHP version';
$_lang['ELXIS_INFO'] = 'Elxis information';
$_lang['VERSION'] = 'Version';
$_lang['REVISION_NUMBER'] = 'Revision number';
$_lang['STATUS'] = 'Status';
$_lang['CODENAME'] = 'Codename';
$_lang['RELEASE_DATE'] = 'Release date';
$_lang['COPYRIGHT'] = 'Copyright';
$_lang['POWERED_BY'] = 'Powered by';
$_lang['AUTHOR'] = 'Author';
$_lang['PLATFORM'] = 'Platform';
$_lang['HEADQUARTERS'] = 'Headquarters';
$_lang['ELXIS_ENVIROMENT'] = 'Elxis enviroment';
$_lang['DEFENDER_LOGS'] = 'Defender logs';
$_lang['ADMIN_FOLDER'] = 'Administration folder';
$_lang['DEF_NAME_RENAME'] = 'Default name, rename it!';
$_lang['INSTALL_PATH'] = 'Installation path';
$_lang['IS_PUBLIC'] = 'Is public!';
$_lang['CREDITS'] = 'Credits';
$_lang['LOCATION'] = 'Location';
$_lang['CONTRIBUTION'] = 'Contribution';
$_lang['LICENSE'] = 'License';
$_lang['MULTISITES'] = 'Multisites';
$_lang['MULTISITES_DESC'] = 'Manage multiple sites under one Elxis installation.';
$_lang['MULTISITES_WARN'] = 'You can have multiple sites under one Elxis installation. Working with multisites 
	is a task that requires advanced knowledge of Elxis CMS. Before you import data to a new 
	multisite make sure the database exist. After creating a new multisite edit the htaccess 
	file based on the given istructions. Deleting a multi-site does not delete the linked database. Consult an 
	experienced technician if you need help.';
$_lang['MULTISITES_DISABLED'] = 'Multisites are disabled!';
$_lang['ENABLE'] = 'Enable';
$_lang['ACTIVE'] = 'Active';
$_lang['URL_ID'] = 'URL identifier';
$_lang['MAN_MULTISITES_ONLY'] = "You can manage multi-sites only from site %s";
$_lang['LOWER_ALPHANUM'] = 'Lowercase alphanumeric chars without spaces';
$_lang['IMPORT_DATA'] = 'Import data';
$_lang['CNOT_CREATE_CFG_NEW'] = "Could not create configuration file %s for the new site!";
$_lang['DATA_IMPORT_FAILED'] = 'Data import failed!';
$_lang['DATA_IMPORT_SUC'] = 'Data imported successfully!';
$_lang['ADD_RULES_HTACCESS'] = 'Add the following rules in htaccess file';
$_lang['CREATE_REPOSITORY_NOTE'] = 'It is strongly recommended to create a separate repository for each sub-site!';
$_lang['NOT_SUP_DBTYPE'] = 'Not supported database type!';
$_lang['DBTYPES_MUST_SAME'] = 'Database types of this site and the new site must be the same!';
$_lang['DISABLE_MULTISITES'] = 'Disable multisites';
$_lang['DISABLE_MULTISITES_WARN'] = 'All sites except the one with id 1 will be removed!';
$_lang['VISITS_PER_DAY'] = "Visits per day for %s"; //translators help: ... for {MONTH YEAR}
$_lang['CLICKS_PER_DAY'] = "Clicks per day for %s"; //translators help: ... for {MONTH YEAR}
$_lang['VISITS_PER_MONTH'] = "Visits per month for %s"; //translators help: ... for {YEAR}
$_lang['CLICKS_PER_MONTH'] = "Clicks per month for %s"; //translators help: ... for {YEAR}
$_lang['LANGS_USAGE_FOR'] = "Percentage languages usage for %s"; //translators help: ... for {MONTH YEAR}
$_lang['UNIQUE_VISITS'] = 'Unique visits';
$_lang['PAGE_VIEWS'] = 'Page views';
$_lang['TOTAL_VISITS'] = 'Total visits';
$_lang['TOTAL_PAGE_VIEWS'] = 'Page views';
$_lang['LANGS_USAGE'] = 'Languages usage';
$_lang['LEGEND'] = 'Legend';
$_lang['USAGE'] = 'Usage';
$_lang['VIEWS'] = 'Views';
$_lang['OTHER'] = 'Other';
$_lang['NO_DATA_AVAIL'] = 'No data available';
$_lang['PERIOD'] = 'Period';
$_lang['YEAR_STATS'] = 'Year statistics';
$_lang['MONTH_STATS'] = 'Month statistics';
$_lang['PREVIOUS_YEAR'] = 'Previous year';
$_lang['NEXT_YEAR'] = 'Next year';
$_lang['STATS_COL_DISABLED'] = 'The collection of statistical data is disabled! Enable statistics in Elxis configuration.';
$_lang['DOCTYPE'] = 'Document type';
$_lang['DOCTYPE_INFO'] = 'The recommended option is HTML5. Elxis will generate XHTML output even if you set DOCTYPE to HTML5. 
On XHTML doctypes Elxis serves documents with the application/xhtml+xml mime type on modern browsers and with text/html on older ones.';
$_lang['ABR_SECONDS'] = 'sec';
$_lang['ABR_MINUTES'] = 'min';
$_lang['HOUR'] = 'hour';
$_lang['HOURS'] = 'hours';
$_lang['DAY'] = 'day';
$_lang['DAYS'] = 'days';
$_lang['UPDATED_BEFORE'] = 'Updated before';
$_lang['CACHE_INFO'] = 'View and delete the items saved in cache.';
$_lang['ELXISDC'] = 'Elxis Downloads Center';
$_lang['ELXISDC_INFO'] = 'Browse live EDC and see available extensions';
$_lang['SITE_LANGS'] = 'Site languages';
$_lang['SITE_LANGS_DESC'] = 'By default all installed languages are available in site frontend area. You can change this 
	by selecting below the languages you wish only to be available in frontend.';
//Elxis 4.1
$_lang['PERFORMANCE'] = 'Performance';
$_lang['MINIFIER_CSSJS'] = 'CSS/Javascript minifier';
$_lang['MINIFIER_INFO'] = 'Elxis can unify individual local CSS and JS files and optionally compress them. The unified file will be saved in cache. 
So instead of having multiple CSS/JS files in your pages head section you will have only a minified one.';
$_lang['MOBILE_VERSION'] = 'Mobile version';
$_lang['MOBILE_VERSION_DESC'] = 'Enable mobile-friendly version for handheld devices?';

?>