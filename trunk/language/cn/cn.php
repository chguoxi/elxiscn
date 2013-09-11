<?php 
/**
* @version: 4.0
* @package: Elxis CMS
* @subpackage: Elxis Language
* @author: Elxis Team ( http://www.elxis.org )
* @copyright: (C) 2006-2012 Elxis.org. All rights reserved.
* @description: en-GB (English - Great Britain) language for Elxis CMS
* @license: Elxis public license http://www.elxis.org/elxis-public-license.html
* @translator: Ioannis Sannos ( http://www.elxis.org )
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*****************************************************************************/

defined('_ELXIS_') or die ('Direct access to this location is not allowed.');


$locale = array('en_GB.utf8', 'en_GB.UTF-8', 'en_GB', 'en', 'english', 'england'); //utf-8 locales array

$_lang = array();
//date formats
$_lang['DATE_FORMAT_BOX'] = 'd-m-Y'; //supported formats: d-m-Y, Y-m-d, d/m/Y, Y/m/d
$_lang['DATE_FORMAT_BOX_LONG'] = 'd-m-Y H:i:s'; //supported formats: d-m-Y H:i:s, Y-m-d H:i:s, d/m/Y H:i:s, Y/m/d H:i:s
$_lang['DATE_FORMAT_1'] = "%d/%m/%Y"; //example: 25/12/2010
$_lang['DATE_FORMAT_2'] = "%b %d, %Y"; //example: Dec 25, 2010
$_lang['DATE_FORMAT_3'] = "%B %d, %Y"; //example: December 25, 2010
$_lang['DATE_FORMAT_4'] = "%b %d, %Y %H:%M"; //example: Dec 25, 2010 12:34
$_lang['DATE_FORMAT_5'] = "%B %d, %Y %H:%M"; //example: December 25, 2010 12:34
$_lang['DATE_FORMAT_6'] = "%B %d, %Y %H:%M:%S"; //example: December 25, 2010 12:34:45
$_lang['DATE_FORMAT_7'] = "%a %b %d, %Y"; //example: Sat Dec 25, 2010
$_lang['DATE_FORMAT_8'] = "%A %b %d, %Y"; //example: Saturday Dec 25, 2010
$_lang['DATE_FORMAT_9'] = "%A %B %d, %Y"; //example: Saturday December 25, 2010
$_lang['DATE_FORMAT_10'] = "%A %B %d, %Y %H:%M"; //example: Saturday December 25, 2010 12:34
$_lang['DATE_FORMAT_11'] = "%A %B %d, %Y %H:%M:%S"; //example: Saturday December 25, 2010 12:34:45
$_lang['DATE_FORMAT_12'] = "%a %B %d, %Y %H:%M"; //example: Sat December 25, 2010 12:34
$_lang['DATE_FORMAT_13'] = "%a %B %d, %Y %H:%M:%S"; //example: Sat December 25, 2010 12:34:45
$_lang['THOUSANDS_SEP'] = ',';
$_lang['DECIMALS_SEP'] = '.';
//month names
$_lang['JANUARY'] = 'January';
$_lang['FEBRUARY'] = 'February';
$_lang['MARCH'] = 'March';
$_lang['APRIL'] = 'April';
$_lang['MAY'] = 'May';
$_lang['JUNE'] = 'June';
$_lang['JULY'] = 'July';
$_lang['AUGUST'] = 'August';
$_lang['SEPTEMBER'] = 'September';
$_lang['OCTOBER'] = 'October';
$_lang['NOVEMBER'] = 'November';
$_lang['DECEMBER'] = 'December';
$_lang['JANUARY_SHORT'] = 'Jan';
$_lang['FEBRUARY_SHORT'] = 'Feb';
$_lang['MARCH_SHORT'] = 'Mar';
$_lang['APRIL_SHORT'] = 'Apr';
$_lang['MAY_SHORT'] = 'May';
$_lang['JUNE_SHORT'] = 'Jun';
$_lang['JULY_SHORT'] = 'Jul';
$_lang['AUGUST_SHORT'] = 'Aug';
$_lang['SEPTEMBER_SHORT'] = 'Sep';
$_lang['OCTOBER_SHORT'] = 'Oct';
$_lang['NOVEMBER_SHORT'] = 'Nov';
$_lang['DECEMBER_SHORT'] = 'Dec';
//day names
$_lang['MONDAY'] = '星期一';
$_lang['THUESDAY'] = '星期二';
$_lang['WEDNESDAY'] = '星期三';
$_lang['THURSDAY'] = '星期四';
$_lang['FRIDAY'] = '星期五';
$_lang['SATURDAY'] = '星期六';
$_lang['SUNDAY'] = '星期天';
$_lang['MONDAY_SHORT'] = 'Mon';
$_lang['THUESDAY_SHORT'] = 'Tue';
$_lang['WEDNESDAY_SHORT'] = 'Wed';
$_lang['THURSDAY_SHORT'] = 'Thu';
$_lang['FRIDAY_SHORT'] = 'Fri';
$_lang['SATURDAY_SHORT'] = 'Sat';
$_lang['SUNDAY_SHORT'] = 'Sun';
/* elxis performance monitor */
$_lang['ELX_PERF_MONITOR'] = 'Elxis 性能监视';
$_lang['ITEM'] = '项目';
$_lang['INIT_FILE'] = '初始化文件';
$_lang['EXEC_TIME'] = '运行时间';
$_lang['DB_QUERIES'] = '数据库查询';
$_lang['ERRORS'] = '错误';
$_lang['SIZE'] = '大小';
$_lang['ENTRIES'] = '文章';

/* general */
$_lang['HOME'] = '首页';
$_lang['YOU_ARE_HERE'] = '您在这里';
$_lang['CATEGORY'] = '栏目';
$_lang['DESCRIPTION'] = '描述';
$_lang['FILE'] = '文件';
$_lang['IMAGE'] = '图像';
$_lang['IMAGES'] = '图像';
$_lang['CONTENT'] = '内容';
$_lang['DATE'] = '日期';
$_lang['YES'] = '是';
$_lang['NO'] = '否';
$_lang['NONE'] = '没有';
$_lang['SELECT'] = '选择';
$_lang['LOGIN'] = '登录';
$_lang['LOGOUT'] = '登出';
$_lang['WEBSITE'] = '网站';
$_lang['SECURITY_CODE'] = '验证码';
$_lang['RESET'] = '重填';
$_lang['SUBMIT'] = '提交';
$_lang['REQFIELDEMPTY'] = '还有至少一个必填项是空的!';
$_lang['FIELDNOEMPTY'] = "%s 不能为空!";
$_lang['FIELDNOACCCHAR'] = "%s 含有不合法字符!";
$_lang['INVALID_DATE'] = '无效的日期!';
$_lang['INVALID_NUMBER'] = '无效的数字!';
$_lang['INVALID_URL'] = '无效的URL!';
$_lang['FIELDSASTERREQ'] = '带星号 * 的项必填.';
$_lang['ERROR'] = '错误';
$_lang['REGARDS'] = '此致';
$_lang['NOREPLYMSGINFO'] = '请勿直接恢复本邮件,因为本邮件发送只作参考信息之用.';
$_lang['LANGUAGE'] = '语言';
$_lang['PAGE'] = '页面';
$_lang['PAGEOF'] = "个页面 %s 中的 %s";
$_lang['OF'] = '的';
$_lang['DISPLAY_FROM_TO_TOTAL'] = "Displaying %s to %s of %s items";
$_lang['HITS'] = '点击';
$_lang['PRINT'] = '打印';
$_lang['BACK'] = '返回';
$_lang['PREVIOUS'] = '上一个';
$_lang['NEXT'] = '下一个';
$_lang['CLOSE'] = '关闭';
$_lang['CLOSE_WINDOW'] = '关闭窗口';
$_lang['COMMENTS'] = '评论';
$_lang['COMMENT'] = '评论';
$_lang['PUBLISH'] = '发布';
$_lang['DELETE'] = '删除';
$_lang['EDIT'] = '编辑';
$_lang['COPY'] = '复制';
$_lang['SEARCH'] = '搜索';
$_lang['PLEASE_WAIT'] = '请稍等...';
$_lang['ANY'] = '不限';
$_lang['NEW'] = '新';
$_lang['ADD'] = '添加';
$_lang['VIEW'] = '查看';
$_lang['MENU'] = '菜单';
$_lang['HELP'] = '帮助';
$_lang['TOP'] = '顶部';
$_lang['BOTTOM'] = '底部';
$_lang['LEFT'] = '左侧';
$_lang['RIGHT'] = '右侧';
$_lang['CENTER'] = '居中';

/* xml */
$_lang['CACHE'] = '缓存';
$_lang['ENABLE_CACHE_D'] = '开启本项目缓存?';
$_lang['YES_FOR_VISITORS'] = '是的,为游客开启';
$_lang['YES_FOR_ALL'] = '是的,为所有用户开启';
$_lang['CACHE_LIFETIME'] = '缓存生存时间';
$_lang['CACHE_LIFETIME_D'] = '时间, 分钟, 知道此项目缓存被刷新.';
$_lang['NO_PARAMS'] = '没有参数!';
$_lang['STYLE'] = '风格';
$_lang['ADVANCED_SETTINGS'] = '高级设置';
$_lang['CSS_SUFFIX'] = 'CSS 后缀';
$_lang['CSS_SUFFIX_D'] = '将被添加到模块CSS class后缀.';
$_lang['MENU_TYPE'] = '菜单类型';
$_lang['ORIENTATION'] = '方向';
$_lang['SHOW'] = '显示';
$_lang['HIDE'] = '隐藏';
$_lang['GLOBAL_SETTING'] = '全局设置';

/* users & authentication */
$_lang['USERNAME'] = '用户名';
$_lang['PASSWORD'] = '密码';
$_lang['NOAUTHMETHODS'] = '没有设置认证方式';
$_lang['AUTHMETHNOTEN'] = '%s 认证方式没有开启!';
$_lang['PASSTOOSHORT'] = '您的密码因为太短而不被接受';
$_lang['USERNOTFOUND'] = '用户不存在';
$_lang['INVALIDUNAME'] = '无效的用户名';
$_lang['INVALIDPASS'] = '无效的密码';
$_lang['AUTHFAILED'] = '认证失败';
$_lang['YACCBLOCKED'] = '您的帐号已被阻止';
$_lang['YACCEXPIRED'] = '您的帐号已过期';
$_lang['INVUSERGROUP'] = '无效的用户组';
$_lang['NAME'] = '名称';
$_lang['FIRSTNAME'] = '名字';
$_lang['LASTNAME'] = '姓氏';
$_lang['EMAIL'] = 'E-mail';
$_lang['INVALIDEMAIL'] = '无效的 e-mail 地址';
$_lang['ADMINISTRATOR'] = '超级管理员';
$_lang['GUEST'] = '访客';
$_lang['EXTERNALUSER'] = '第三方用户';
$_lang['USER'] = '用户';
$_lang['GROUP'] = '组';
$_lang['NOTALLOWACCPAGE'] = '您无权限访问此页面!';
$_lang['NOTALLOWACCITEM'] = '您无权限访问此项目!';
$_lang['NOTALLOWMANITEM'] = '您无权限管理此页面!';
$_lang['NOTALLOWACTION'] = '您无权限进行此操作!';
$_lang['NEED_HIGHER_ACCESS'] = 'You need a higher access level for this action!';
$_lang['AREYOUSURE'] = 'Are you sure?';

/* highslide */
$_lang['LOADING'] = 'Loading...';
$_lang['CLICK_CANCEL'] = 'Click to cancel';
$_lang['MOVE'] = 'Move';
$_lang['PLAY'] = 'Play';
$_lang['PAUSE'] = 'Pause';
$_lang['RESIZE'] = 'Resize';

/* admin */
$_lang['ADMINISTRATION'] = 'Administration';
$_lang['SETTINGS'] = 'Settings';
$_lang['DATABASE'] = 'Database';
$_lang['ON'] = 'On';
$_lang['OFF'] = 'Off';
$_lang['WARNING'] = 'Warning';
$_lang['SAVE'] = 'Save';
$_lang['APPLY'] = 'Apply';
$_lang['CANCEL'] = 'Cancel';
$_lang['LIMIT'] = 'Limit';
$_lang['ORDERING'] = 'Ordering';
$_lang['NO_RESULTS'] = 'No results found!';
$_lang['CONNECT_ERROR'] = 'Connection Error';
$_lang['DELETE_SEL_ITEMS'] = 'Delete selected items?';
$_lang['TOGGLE_SELECTED'] = 'Toggle selected';
$_lang['NO_ITEMS_SELECTED'] = 'No items selected!';
$_lang['ID'] = 'Id';
$_lang['ACTION_FAILED'] = 'Action failed!';
$_lang['ACTION_SUCCESS'] = 'Action completed successfully!';
$_lang['NO_IMAGE_UPLOADED'] = 'No image uploaded';
$_lang['NO_FILE_UPLOADED'] = 'No file uploaded';
$_lang['MODULES'] = 'Modules';
$_lang['COMPONENTS'] = 'Components';
$_lang['TEMPLATES'] = 'Templates';
$_lang['SEARCH_ENGINES'] = 'Search engines';
$_lang['AUTH_METHODS'] = 'Authentication methods';
$_lang['CONTENT_PLUGINS'] = 'Content plugins';
$_lang['PLUGINS'] = 'Plugins';
$_lang['PUBLISHED'] = 'Published';
$_lang['ACCESS'] = 'Access';
$_lang['ACCESS_LEVEL'] = 'Access level';
$_lang['TITLE'] = 'Title';
$_lang['MOVE_UP'] = 'Move up';
$_lang['MOVE_DOWN'] = 'Move down';
$_lang['WIDTH'] = 'Width';
$_lang['HEIGHT'] = 'Height';
$_lang['ITEM_SAVED'] = 'Item saved';
$_lang['FIRST'] = 'First';
$_lang['LAST'] = 'Last';
$_lang['SUGGESTED'] = 'Suggested';
$_lang['VALIDATE'] = 'Validate';
$_lang['NEVER'] = 'Never';
$_lang['ALL'] = 'All';
$_lang['ALL_GROUPS_LEVEL'] = "All groups of level %s";
$_lang['REQDROPPEDSEC'] = 'Your request dropped for security reasons. Please try again.';
$_lang['PROVIDE_TRANS'] = 'Please provide a translation!';
$_lang['AUTO_TRANS'] = 'Automatic translation';
$_lang['STATISTICS'] = 'Statistics';
$_lang['UPLOAD'] = 'Upload';
$_lang['MORE'] = 'More';

?>