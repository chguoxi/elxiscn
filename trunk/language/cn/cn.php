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
$_lang['NEED_HIGHER_ACCESS'] = '此操作需要您有更高的访问等级!';
$_lang['AREYOUSURE'] = '确定吗?';

/* highslide */
$_lang['LOADING'] = '加载中...';
$_lang['CLICK_CANCEL'] = '点击取消';
$_lang['MOVE'] = '更多';
$_lang['PLAY'] = '播放';
$_lang['PAUSE'] = '暂停';
$_lang['RESIZE'] = '调整大小';

/* admin */
$_lang['ADMINISTRATION'] = '管理员';
$_lang['SETTINGS'] = '设置';
$_lang['DATABASE'] = '数据库';
$_lang['ON'] = '开启';
$_lang['OFF'] = '关闭';
$_lang['WARNING'] = '警告';
$_lang['SAVE'] = '保存';
$_lang['APPLY'] = '应用';
$_lang['CANCEL'] = '取消';
$_lang['LIMIT'] = '限制';
$_lang['ORDERING'] = '排序';
$_lang['NO_RESULTS'] = '没有数据!';
$_lang['CONNECT_ERROR'] = '连接数据库出错!';
$_lang['DELETE_SEL_ITEMS'] = '删除选中项?';
$_lang['TOGGLE_SELECTED'] = '选择/取消选择';
$_lang['NO_ITEMS_SELECTED'] = '没有选择项目!';
$_lang['ID'] = 'Id';
$_lang['ACTION_FAILED'] = '操作失败!';
$_lang['ACTION_SUCCESS'] = '操作成功!';
$_lang['NO_IMAGE_UPLOADED'] = '没有图片上传成功';
$_lang['NO_FILE_UPLOADED'] = '没有文件上传成功';
$_lang['MODULES'] = '模块';
$_lang['COMPONENTS'] = '组件';
$_lang['TEMPLATES'] = '模版';
$_lang['SEARCH_ENGINES'] = '搜索引擎';
$_lang['AUTH_METHODS'] = '认证方法';
$_lang['CONTENT_PLUGINS'] = '内容插件';
$_lang['PLUGINS'] = '插件';
$_lang['PUBLISHED'] = '已发布';
$_lang['ACCESS'] = '访问';
$_lang['ACCESS_LEVEL'] = '访问等级';
$_lang['TITLE'] = '标题';
$_lang['MOVE_UP'] = '上升';
$_lang['MOVE_DOWN'] = '下降';
$_lang['WIDTH'] = '宽度';
$_lang['HEIGHT'] = '高度';
$_lang['ITEM_SAVED'] = '项目以保存';
$_lang['FIRST'] = 'First';
$_lang['LAST'] = 'Last';
$_lang['SUGGESTED'] = '建议';
$_lang['VALIDATE'] = '验证';
$_lang['NEVER'] = '永不';
$_lang['ALL'] = '所有';
$_lang['ALL_GROUPS_LEVEL'] = "所有分组等级 %s";
$_lang['REQDROPPEDSEC'] = '由于安全原因,您的请求已被忽略,请再试一次.';
$_lang['PROVIDE_TRANS'] = '请提供一个翻译!';
$_lang['AUTO_TRANS'] = '自动翻译';
$_lang['STATISTICS'] = '统计';
$_lang['UPLOAD'] = '上传';
$_lang['MORE'] = '更多';

?>