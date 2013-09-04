<?php 
/**
* @version: 4.0
* @package: Elxis CMS
* @subpackage: Elxis Language
* @author: Elxis Team ( http://www.elxis.org )
* @copyright: (C) 2006-2012 Elxis.org. All rights reserved.
* @description: en-GB (English - Great Britain) language for component eMenu
* @license: Elxis public license http://www.elxis.org/elxis-public-license.html
* @translator: Ioannis Sannos ( http://www.elxis.org )
*
* ---- THIS FILE MUST BE ENCODED AS UTF-8! ----
*
*****************************************************************************/

defined('_ELXIS_') or die ('Direct access to this location is not allowed.');


$_lang = array();
$_lang['MENU'] = '菜单';
$_lang['MENU_MANAGER'] = '菜单关联';
$_lang['MENU_ITEM_COLLECTIONS'] = '菜单项集合';
$_lang['SN'] = 'S/N'; //serial number
$_lang['MENU_ITEMS'] = '菜单项';
$_lang['COLLECTION'] = '集合';
$_lang['WARN_DELETE_COLLECT'] = '此操作会删除整个菜单集合, 所有该集合的菜单项以及关联的模块都会被删除!';
$_lang['CNOT_DELETE_MAINMENU'] = '您不能删除主菜单集合!';
$_lang['MODULE_TITLE'] = '模块标题';
$_lang['COLLECT_NAME_INFO'] = '集合名称应该是唯一的并由字母和数字组合,不能包含空格!';
$_lang['ADD_NEW_COLLECT'] = '添加新集合';
$_lang['EXIST_COLLECT_NAME'] = '已经存在一个同名的集合!';
$_lang['MANAGE_MENU_ITEMS'] = '关联菜单项';
$_lang['EXPAND'] = 'Expand';
$_lang['FULL'] = 'Full';
$_lang['LIMITED'] = 'Limited';
$_lang['TYPE'] = '类型';
$_lang['LEVEL'] = '级别';
$_lang['MAX_LEVEL'] = '最高级别';
$_lang['LINK'] = '链接';
$_lang['ELXIS_LINK'] = 'Elxis 链接';
$_lang['SEPARATOR'] = '分离器';
$_lang['WRAPPER'] = 'Wrapper';
$_lang['WARN_DELETE_MENUITEM'] = '您确定要删除该菜单项吗? 子菜单项同时会被删除!';
$_lang['SEL_MENUITEM_TYPE'] = '选择菜单类型';
$_lang['LINK_LINK_DESC'] = '链接到 Elxis页面.';
$_lang['LINK_URL_DESC'] = 'Standard link to an external page.';
$_lang['LINK_SEPARATOR_DESC'] = 'Text string without link.';
$_lang['LINK_WRAPPER_DESC'] = 'Link to an external page displayed inline in site.';
$_lang['EXPAND_DESC'] = 'Generates, if supported, a sub-menu. Limited expansion shows only the first level items while Full the whole tree.';
$_lang['LINK_TARGET'] = 'Link target';
$_lang['SELF_WINDOW'] = 'Self window';
$_lang['NEW_WINDOW'] = 'New window';
$_lang['PARENT_WINDOW'] = 'Parent window';
$_lang['TOP_WINDOW'] = 'Top window';
$_lang['NONE'] = 'None';
$_lang['ELXIS_INTERFACE'] = 'Elxis interface';
$_lang['ELXIS_INTERFACE_DESC'] = 'Links to index.php generate normal pages including modules, while links to inner.php pages where only the main component area is visible (useful for popup windows).';
$_lang['FULL_PAGE'] = 'Full page';
$_lang['ONLY_COMPONENT'] = 'Only component';
$_lang['POPUP_WINDOW'] = 'Popup window';
$_lang['TYPICAL_POPUP'] = 'Typical popup';
$_lang['LIGHTBOX_WINDOW'] = 'Lightbox window';
$_lang['PARENT_ITEM'] = 'Parent Item';
$_lang['PARENT_ITEM_DESC'] = 'Make this menu item sub-menu of an other menu item by selecting it as parent.';
$_lang['POPUP_WIDTH_DESC'] = 'The width of the popup window or the wrapper in pixels. 0 for auto control.';
$_lang['POPUP_HEIGHT_DESC'] = 'The height of the popup window or the wrapper in pixels. 0 for auto control.';
$_lang['MUST_FIRST_SAVE'] = 'You must first save this item!';
$_lang['CONTENT'] = 'Content';
$_lang['SECURE_CONNECT'] = 'Secure connection';
$_lang['SECURE_CONNECT_DESC'] = 'Only if enabled in general configuration and you have an SSL certificate installed.';
$_lang['SEL_COMPONENT'] = 'Select component';
$_lang['LINK_GENERATOR'] = 'Link generator';
$_lang['URL_HELPER'] = 'Write the full URL to the external page you want to link to and a title for your link. 
	You can open this link in a popup or even a lightbox window. Options Width and Height controls the dimensions 
	of the popup/lightbox windows.';
$_lang['SEPARATOR_HELPER'] = 'A Separator is not a link but just text. So the Link option is of no importance. 
	Use it as a non-clickable header for your sub-menus or for other usage.';
$_lang['WRAPPER_HELPER'] = 'Wrapper allows you to display ANY page inside your site wrapped by an i-frame. 
	External pages will look like they are provided by your own site. You must provide the full URL to the 
	wrapped page. You can open this link in a popup or even a lightbox window. Options Width and Height controls 
	the dimensions of the wrapped area and the popup/lightbox windows.';
$_lang['TIP_INTERFACE'] = '<strong>Tip</strong><br />Select <strong>Only Component</strong> as the Elxis interface 
	if you plan to open the link in a popup/lightbox window.';
$_lang['COMP_NO_PUBLIC_IFACE'] = 'This component does not have a public interface!';
$_lang['STANDARD_LINKS'] = 'Standard links';
$_lang['BROWSE_ARTICLES'] = 'Browse articles';
$_lang['ACTIONS'] = 'Actions';
$_lang['LINK_TO_ITEM'] = 'Link to this item';
$_lang['LINK_TO_CAT_RSS'] = 'Link to category\'s RSS feed';
$_lang['LINK_TO_CAT_ATOM'] = 'Link to category\'s ATOM feed';
$_lang['LINK_TO_CAT_OR_ARTICLE'] = 'Link to category or article';
$_lang['ARTICLE'] = 'Article';
$_lang['ARTICLES'] = 'Articles';
$_lang['ASCENDING'] = 'Ascending';
$_lang['DESCENDING'] = 'Descending';
$_lang['LAST_MODIFIED'] = 'Last modified';
$_lang['CAT_CONT_ART'] = "Category %s contains %s articles."; //fill in by CATEGORY NAME and NUMBER
$_lang['ART_WITHOUT_CAT'] = "There are %s articles without category."; //fill in by NUMBER
$_lang['NO_ITEMS_DISPLAY'] = 'There are no items to display!';
$_lang['ROOT'] = 'Root'; //root category
$_lang['COMP_FRONTPAGE'] = "Component's %s frontpage"; //fill in by COMPONENT NAME
$_lang['LINK_TO_CAT'] = 'Link to content\'s category';
$_lang['LINK_TO_CAT_ARTICLE'] = 'Link to category\'s article';
$_lang['LINK_TO_AUT_PAGE'] = 'Link to autonomous page';
$_lang['SPECIAL_LINK'] = 'Special link';
$_lang['FRONTPAGE'] = 'Frontpage';
$_lang['BASIC_SETTINGS'] = 'Basic settings';
$_lang['OTHER_OPTIONS'] = 'Other options';

?>