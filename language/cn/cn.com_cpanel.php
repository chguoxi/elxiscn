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
$_lang['CACHE_INFO'] = 'Elxis 可以缓存生成的HTML代码方便下次访问,您还可以开启元素(比如模块)缓存.';
$_lang['APC_INFO'] = 'The 可选PHP缓存 (APC) 是PHP opcode缓存. 必须由服务器支持. 
	不推荐使用共享主机环境. Elxis 会在特殊的页面使用,以提高网站性能.';
$_lang['APC_ID_INFO'] = '考虑到以后可能会有更多的网站在同一个服务器上,请使用一个唯一是数字id来标识当前网站.';
$_lang['USERS_AND_REGISTRATION'] = '用户和注册';
$_lang['PRIVACY_PROTECTION'] = '隐私政策';
$_lang['PASSWORD_NOT_SHOWN'] = '由于安全问题,当前密码不被显示. 如果您希望修改密码,则填写该项目.';
$_lang['DB_TYPE'] = '数据库类型';
$_lang['ALERT_CON_LOST'] = '如果修改链接,当前数据库会丢失!';
$_lang['HOST'] = '主机';
$_lang['PORT'] = '端口';
$_lang['PERSISTENT_CON'] = '持久链接';
$_lang['DB_NAME'] = '数据库名';
$_lang['TABLES_PREFIX'] = '表前缀';
$_lang['DSN_INFO'] = '使用现成的数据源链接数据库.';
$_lang['SCHEME'] = '方案';
$_lang['SCHEME_INFO'] = '数据库文件的绝对路径，如果你使用SQLite等类型数据库.';
$_lang['SEND_METHOD'] = '发送方式';
$_lang['SMTP_OPTIONS'] = 'SMTP 选项';
$_lang['AUTH_REQ'] = '必须验证';
$_lang['SECURE_CON'] = '安全链接';
$_lang['SENDER_NAME'] = '发件人名称';
$_lang['SENDER_EMAIL'] = '发件人 e-mail';
$_lang['RCPT_NAME'] = '接收人';
$_lang['RCPT_EMAIL'] = '接收人 e-mail';
$_lang['TECHNICAL_MANAGER'] = '技术管理';
$_lang['TECHNICAL_MANAGER_INFO'] = '技术经理收到的错误和安全相关的警报.';
$_lang['USE_FTP'] = '使用 FTP';
$_lang['PATH'] = '路径';
$_lang['FTP_PATH_INFO'] = '从ftp根目录到安装目录的相对路径 (如: /public_html).';
$_lang['SESSION'] = 'Session';
$_lang['HANDLER'] = 'Handler';
$_lang['HANDLER_INFO'] = 'Elxis 可以把session储存到文件或者数据库 . 
	您也可以不选择该项,让PHP保存到服务器默认的位置.';
$_lang['FILES'] = '文件';
$_lang['LIFETIME'] = '生存时间';
$_lang['SESS_LIFETIME_INFO'] = '当您不操作的时候,会话过期的时间.';
$_lang['CACHE_TIME_INFO'] = '超过这个时间,重新生存缓存.';
$_lang['MINUTES'] = '分钟';
$_lang['HOURS'] = '小时';
$_lang['MATCH_IP'] = '匹配IP';
$_lang['MATCH_BROWSER'] = '匹配浏览器';
$_lang['MATCH_REFERER'] = '匹配HTTP来路';
$_lang['MATCH_SESS_INFO'] = '启用高级会话验证程序.';
$_lang['ENCRYPTION'] = '加密';
$_lang['ENCRYPT_SESS_INFO'] = '加密session数据?';
$_lang['ERRORS'] = '错误';
$_lang['WARNINGS'] = '提醒';
$_lang['NOTICES'] = '注意';
$_lang['NOTICE'] = '注意';
$_lang['REPORT'] = '报告';
$_lang['REPORT_INFO'] = '错误报告级别. 我们建议成品网站关闭所有错误报告.';
$_lang['LOG'] = '日志';
$_lang['LOG_INFO'] = '错误日志级别. 选择您希望写入错误日志的错误级别 (repository/logs/).';
$_lang['ALERT'] = '提醒';
$_lang['ALERT_INFO'] = '给技术经理的邮件致命错误.';
$_lang['ROTATE'] = '替换';
$_lang['ROTATE_INFO'] = '每个月替换错误日志. 推荐.';
$_lang['DEBUG'] = '调试';
$_lang['MODULE_POS'] = '模块位置';
$_lang['MINIMAL'] = '最小';
$_lang['FULL'] = '完整';
$_lang['DISPUSERS_AS'] = '展示用户';
$_lang['USERS_REGISTRATION'] = '用户注册';
$_lang['ALLOWED_DOMAIN'] = '允许域名';
$_lang['ALLOWED_DOMAIN_INFO'] = '填写一个域名 (如. elxis.org) 仅允许该域名的邮箱注册.';
$_lang['EXCLUDED_DOMAINS'] = '例外域名';
$_lang['EXCLUDED_DOMAINS_INFO'] = '注册的时候不接受的邮箱域名列表,多个用逗号隔开.';
$_lang['ACCOUNT_ACTIVATION'] = '账号激活';
$_lang['DIRECT'] = '指令';
$_lang['MANUAL_BY_ADMIN'] = '管理员手册';
$_lang['PASS_RECOVERY'] = '密码恢复';
$_lang['SECURITY'] = '安全';
$_lang['SECURITY_LEVEL'] = '安全级别';
$_lang['SECURITY_LEVEL_INFO'] = '提升安全级别会强制开启或关闭一些功能,如需了解更多,请查看Elxis文档.';
$_lang['NORMAL'] = '普通';
$_lang['HIGH'] = '高';
$_lang['INSANE'] = '最高级';
$_lang['ENCRYPT_METHOD'] = '加密方法';
$_lang['AUTOMATIC'] = '自动';
$_lang['ENCRYPTION_KEY'] = '加密 key';
$_lang['ELXIS_DEFENDER'] = 'Elxis 守护者';
$_lang['ELXIS_DEFENDER_INFO'] = 'Elxis 守护者保护您的网站不受XSS和SQL攻击.这个强大的工具用于过滤用户请求和防止网站受攻击.
	 收到攻击的时候它还会通知您并记录日志.您可以选择使用的过滤器类型甚至锁定您的系统中未授权修改的文件. 然而开启太多的过滤器会
	 使您的网址变慢.我们建议开启G,C 和F级别的就可以了.了解更多详见Elxis文档 .';
$_lang['SSL_SWITCH'] = 'SSL 切换';
$_lang['SSL_SWITCH_INFO'] = '在隐私是重要的页面,Elxis 会自动切换HTTP为HTTPS. 
	管理员中心会永久使用 HTTPS方案. 需要SSL证书!';
$_lang['PUBLIC_AREA'] = '公共区域';
$_lang['GENERAL_FILTERS'] = '一般规则';
$_lang['CUSTOM_FILTERS'] = '自定义规则';
$_lang['FSYS_PROTECTION'] = '文件系统保护';
$_lang['CHECK_FTP_SETS'] = '检查FTP设置';
$_lang['FTP_CON_SUCCESS'] = 'FTP服务器链接成功!';
$_lang['ELXIS_FOUND_FTP'] = 'Elxis 安装文件已经在FTP上.';
$_lang['ELXIS_NOT_FOUND_FTP'] = 'Elxis 安装文件已经在FTP上!请检查FTP路径选项.';
$_lang['CAN_NOT_CHANGE'] = '您不能改变它.';
$_lang['SETS_SAVED_SUCC'] = '设置修改成功';
$_lang['ACTIONS'] = '操作';
$_lang['BAN_IP_REQ_DEF'] = '禁止IP地址需要开启至少一个Elxis 防卫方案!';
$_lang['BAN_YOURSELF'] = '您是想禁止自己吗?';
$_lang['IP_AL_BANNED'] = '这个IP已被禁止!';
$_lang['IP_BANNED'] = 'IP地址 %s 已被禁止!';
$_lang['BAN_FAILED_NOWRITE'] = '禁止失败! 文件 repository/logs/defender_ban.php 不可写.';
$_lang['ONLY_ADMINS_ACTION'] = '只有超级管理员能执行此操作!';
$_lang['CNOT_LOGOUT_ADMIN'] = '您不能以管理员的身份登出!';
$_lang['USER_LOGGED_OUT'] = '该用户已登出!';
$_lang['SITE_STATISTICS'] = '网站统计';
$_lang['SITE_STATISTICS_INFO'] = '网站流量统计';
$_lang['BACKUP'] = '备份';
$_lang['BACKUP_INFO'] = '创建完整备份和管理备份.';
$_lang['BACKUP_FLIST'] = '已有备份列表';
$_lang['TYPE'] = '类型';
$_lang['FILENAME'] = '文件名';
$_lang['SIZE'] = '尺寸';
$_lang['NEW_DB_BACKUP'] = '创建数据库备份';
$_lang['NEW_FS_BACKUP'] = '创建文件备份';
$_lang['FILESYSTEM'] = '文件系统';
$_lang['DOWNLOAD'] = '下载';
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