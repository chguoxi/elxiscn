<?php 
/**
* @version		$Id: auth.php 1224 2012-07-01 18:56:53Z datahell $
* @package		Elxis
* @subpackage	Component Extensions Manager
* @copyright	Copyright (c) 2006-2012 Elxis CMS (http://www.elxis.org). All rights reserved.
* @license		Elxis Public License ( http://www.elxis.org/elxis-public-license.html )
* @author		Elxis Team ( http://www.elxis.org )
* @description 	Elxis CMS is free software. Read the license for copyright notices and details
*/

defined('_ELXIS_') or die ('Direct access to this location is not allowed');


class authExtmanagerController extends extmanagerController {

	/*********************/
	/* MAGIC CONSTRUCTOR */
	/*********************/
	public function __construct($view=null, $task='', $model=null) {
		parent::__construct($view, $task, $model);
	}


	/**************************************************/
	/* PREPARE TO DISPLAY AUTHENTICATION METHODS LIST */
	/**************************************************/
	public function listauth() {
		$eLang = eFactory::getLang();
		$pathway = eFactory::getPathway();
		$eDoc = eFactory::getDocument();

		$pathway->addNode($eLang->get('EXTENSIONS'), 'extmanager:/');
		$pathway->addNode($eLang->get('AUTH_METHODS'), 'extmanager:auth/');
		$eDoc->setTitle($eLang->get('AUTH_METHODS'));

		$this->view->listauth();
	}


	/*************************************************************/
	/* RETURN LIST OF AUTH METHODS FOR GRID IN XML FORMAT (AJAX) */
	/*************************************************************/
	public function getauth() {
		$elxis = eFactory::getElxis();
		$eLang = eFactory::getLang();
		$eDate = eFactory::getDate();

		$sortcols = array('title', 'auth', 'ordering');
		$options = array(
			'rp' => 10, 'page' => 1,
			'sortname' => 'ordering', 'sortorder' => 'asc',
			'qtype' => '', 'query' => '', 'limitstart' => 0
		);

		$options['rp'] = (isset($_POST['rp'])) ? (int)$_POST['rp'] : 10;
		if ($options['rp'] < 1) { $options['rp'] = 10; }
		$elxis->updateCookie('rp', $options['rp']);
		$options['page'] = (isset($_POST['page'])) ? (int)$_POST['page'] : 1;
		if ($options['page'] < 1) { $options['page'] = 1; }
		$options['sortname'] = (isset($_POST['sortname'])) ? trim($_POST['sortname']) : 'ordering';
		if (($options['sortname'] == '') || !in_array($options['sortname'], $sortcols)) { $options['sortname'] = 'ordering'; }
		$options['sortorder'] = (isset($_POST['sortorder'])) ? trim($_POST['sortorder']) : 'asc';
		if ($options['sortorder'] != 'desc') { $options['sortorder'] = 'asc'; }

		$total = $this->model->countAuthMethods();

		$maxpage = ceil($total/$options['rp']);
		if ($maxpage < 1) { $maxpage = 1; }
		if ($options['page'] > $maxpage) { $options['page'] = $maxpage; }
		$options['limitstart'] = (($options['page'] - 1) * $options['rp']);
		if ($total > 0) {
			$rows = $this->model->getAuthMethods($options);
			if ($rows) {
				elxisLoader::loadFile('components/com_extmanager/includes/extension.xml.php');
				$exml = new extensionXML();
				foreach ($rows as $k => $row) {
					$info = $exml->quickXML('auth', $row->auth);
					$rows[$k]->version = $info['version'];
					$rows[$k]->created = $info['created'];
					unset($info);
				}
				unset($exml);
			}
		} else {
			$rows = array();
		}

		$this->ajaxHeaders('text/xml');

		echo "<rows>\n";
		echo '<page>'.$options['page']."</page>\n";
		echo '<total>'.$total."</total>\n";
		if ($rows && (count($rows) > 0)) {
			$i = 0;
			$numrows = count($rows);
			$pubicon = $elxis->icon('tick', 16);
			$unpubicon = $elxis->icon('error', 16);
			$upicon = '<img src="'.$elxis->icon('arrowup', 16).'" alt="up" border="0" />';
			$downicon = '<img src="'.$elxis->icon('arrowdown', 16).'" alt="down" border="0" />';
			$canedit = ($elxis->acl()->check('com_extmanager', 'auth', 'edit') > 0) ? true : false;
			$edit_link = $elxis->makeAURL('extmanager:auth/edit.html');

			foreach ($rows as $row) {
				$sn = $options['limitstart'] + $i + 1;
				$picon = ($row->published == 1) ? $pubicon : $unpubicon;
				$versiontxt = ($row->version == 0) ? '<span style="color:#666;">'.$eLang->get('NOT_AVAILABLE').'</span>' : $row->version;
				$datetxt = '';
				if (trim($row->created) != '') {
					$datetxt = $eDate->formatDate($row->created, $eLang->get('DATE_FORMAT_2'));
				}
				if ($datetxt == '') { $datetxt = '<span style="color:#666;">'.$eLang->get('NOT_AVAILABLE').'</span>'; }

				$ordertxt = '';
				if ($canedit) {
					$condition1 = (!isset($rows[$i-1])) ? false : true;
					$condition2 = (!isset($rows[$i+1])) ? false : true;					
					if ((($i > 0) || (($i + $options['limitstart']) > 0)) && $condition1) {
						$ordertxt .= '<a href="javascript:void(null);" title="'.$eLang->get('MOVE_UP').'" onclick="moveauthentication('.$row->id.', 1)">'.$upicon."</a>";
					}
        			if ((($i < $numrows - 1) || (($i + $options['limitstart']) < $total - 1)) && $condition2) {
        				$ordertxt .= '<a href="javascript:void(null);" title="'.$eLang->get('MOVE_DOWN').'" onclick="moveauthentication('.$row->id.', 0)">'.$downicon."</a>";
       				}
       			} else {
       				$ordertxt = $row->ordering;
				}

				echo '<row id="'.$row->id.'">'."\n";
				echo '<cell>'.$sn."</cell>\n";
				if ($canedit) {
					echo '<cell><![CDATA[<a href="'.$edit_link.'?id='.$row->id.'" title="'.$eLang->get('EDIT').'" style="text-decoration:none;">'.$row->title."</a>]]></cell>\n";
				} else {
					echo '<cell><![CDATA['.$row->title."]]></cell>\n";
				}
				echo '<cell><![CDATA['.$row->auth."]]></cell>\n";
				echo '<cell><![CDATA[<img src="'.$picon.'" alt="icon" border="0" />]]></cell>'."\n";
       			echo '<cell><![CDATA['.$ordertxt."]]></cell>\n";
       			echo '<cell><![CDATA['.$versiontxt."]]></cell>\n";
				echo '<cell><![CDATA['.$datetxt."]]></cell>\n";
				echo "</row>\n";
				$i++;
			}
		}
		echo '</rows>';
		exit();
	}


	/********************************************/
	/* MOVE AN AUTHENTICATION METHOD UP OR DOWN */
	/********************************************/
	public function moveauth() {
		$elxis = eFactory::getElxis();

		$this->ajaxHeaders('text/plain');
		if ($elxis->acl()->check('com_extmanager', 'auth', 'edit') < 1) {
			echo '0|'.eFactory::getLang()->get('NOTALLOWACTION');
			exit();
		}

		$id = (isset($_POST['id'])) ? (int)$_POST['id'] : 0;
		if ($id < 1) {
			echo '0|Invalid request!';
			exit();
		}
		$moveup = (isset($_POST['moveup'])) ? (int)$_POST['moveup'] : 0;
		$inc = ($moveup == 1) ? -1 : 1;

		$row = new authenticationDbTable();
		if (!$row->load($id)) {
			echo '0|Authentication method not found!';
			exit();
		}

		$ok = $row->move($inc);
		if (!$ok) {
			echo '0|'.addslashes($row->getErrorMsg());
		} else {
			echo '1|Success!';
		}
		exit();
	}


	/***************************************/
	/* TOGGLE AUTH METHOD'S PUBLISH STATUS */
	/***************************************/
	public function publishauth() {
		$elxis = eFactory::getElxis();

		$this->ajaxHeaders('text/plain');
		if ($elxis->acl()->check('com_extmanager', 'auth', 'edit') < 1) {
			echo '0|'.eFactory::getLang()->get('NOTALLOWACTION');
			exit();
		}
		$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
		$response = $this->model->publishAuth($id, -1);
		$this->ajaxHeaders('text/plain');
		if ($response['success'] === false) {
			echo '0|'.addslashes($response['message']);
		} else {
			echo '1|'.$response['message'];
		}
		exit();
	}


	/******************************/
	/* EDIT AUTHENTICATION METHOD */
	/******************************/
	public function editauth() {
		$eLang = eFactory::getLang();
		$elxis = eFactory::getElxis();
		$pathway = eFactory::getPathway();
		$eDoc = eFactory::getDocument();

		if ($elxis->acl()->check('com_extmanager', 'auth', 'edit') < 1) {
			$msg = $eLang->get('NOTALLOWACTION');
			$link = $elxis->makeAURL('extmanager:/');
			$elxis->redirect($link, $msg, true);
		}

		$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
		$row = new authenticationDbTable();
		if (!$row->load($id)) {
			$link = $elxis->makeAURL('extmanager:auth/');
			$elxis->redirect($link, 'Authentication method not found!', true);
		}

		$xmlfile = ELXIS_PATH.'/components/com_user/auth/'.$row->auth.'/'.$row->auth.'.auth.xml';
		if (!file_exists($xmlfile)) {
			$link = $elxis->makeAURL('extmanager:auth/');
			$elxis->redirect($link, 'Authentication method XML file was not found!', true);
		}

		//$eLang->load('com_user');
		$eLang->load($row->auth, 'auth');

		$allauths = $this->model->getAllAuths();

		elxisLoader::loadFile('components/com_extmanager/includes/extension.xml.php');
		$exml = new extensionXML();
		$exml->parse($xmlfile, true);
		$exml->checkDependencies();

		$pathway->addNode($eLang->get('EXTENSIONS'), 'extmanager:/');
		$pathway->addNode($eLang->get('AUTH_METHODS'), 'extmanager:auth/');
		$pathway->addNode($eLang->get('EDIT').' '.$row->title);
		$eDoc->setTitle($eLang->get('EDIT').' '.$row->title);

		$toolbar = $elxis->obj('toolbar');
		$toolbar->add($eLang->get('SAVE'), 'save', false, '', 'elxSubmit(\'save\');');
		$toolbar->add($eLang->get('APPLY'), 'saveedit', false, '', 'elxSubmit(\'apply\');');
		$toolbar->add($eLang->get('CANCEL'), 'cancel', false, $elxis->makeAURL('extmanager:auth/'));

		$this->view->editAuthentication($row, $allauths, $exml, $xmlfile);
	}


	/******************************/
	/* SAVE AUTHENTICATION METHOD */
	/******************************/
	public function saveauth() {
		$elxis = eFactory::getElxis();
		$eLang = eFactory::getLang();
		$eSession = eFactory::getSession();

		$sess_token = trim($eSession->get('token_elxisform'));
		$token = trim(filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW));
		if (($token == '') || ($sess_token == '') || ($sess_token != $token)) {
			exitPage::make('403', 'CEXT-0015', $eLang->get('REQDROPPEDSEC'));
		}

		$task = isset($_POST['task']) ? $_POST['task'] : 'save';
		if ($task != 'apply') { $task = 'save'; }
		$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
		if ($id < 0) { $id = 0; }

		if ($elxis->acl()->check('com_extmanager', 'auth', 'edit') < 1) {
			$msg = $eLang->get('NOTALLOWACTION');
			$link = $elxis->makeAURL('extmanager:/');
			$elxis->redirect($link, $msg, true);
		}

		$row = new authenticationDbTable();
		if (!$row->load($id)) {
			$link = $elxis->makeAURL('extmanager:auth/');
			$elxis->redirect($link, 'Authentication method not found!', true);
		}

		$old_ordering = $row->ordering;
		$row->ordering = isset($_POST['ordering']) ? (int)$_POST['ordering'] : 0;
		$row->published = isset($_POST['published']) ? (int)$_POST['published'] : 0;
		$row->title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

		$xmlfile = ELXIS_PATH.'/components/com_user/auth/'.$row->auth.'/'.$row->auth.'.auth.xml';
		if (file_exists($xmlfile)) {
			elxisLoader::loadFile('includes/libraries/elxis/parameters.class.php');
			$params = new elxisParameters('', $xmlfile, 'auth');
			$parr = (isset($_POST['params'])) ? $_POST['params'] : array();
			$row->params = $params->toString($parr);
			unset($params);
		} else {
			$row->params = null;
		}

		if (!$row->update()) {
			$redirurl = $elxis->makeAURL('extmanager:auth/edit.html?id='.$id);
			$elxis->redirect($redirurl, $row->getErrorMsg(), true);
		}

		if ($old_ordering <> $row->ordering) { $row->reorder(); }

		$eSession->set('token_elxisform');
		$task = filter_input(INPUT_POST, 'task', FILTER_UNSAFE_RAW);
		$redirurl = ($task == 'apply') ? $elxis->makeAURL('extmanager:auth/edit.html?id='.$row->id) : $elxis->makeAURL('extmanager:auth/');
		$elxis->redirect($redirurl, $eLang->get('ITEM_SAVED'));
	}


	/********************************/
	/* DELETE AUTHENTICATION METHOD */
	/********************************/
	public function deleteauth() {
		$elxis = eFactory::getElxis();
		$eLang = eFactory::getLang();

		if ($elxis->acl()->check('com_extmanager', 'auth', 'install') < 1) {
			$this->ajaxHeaders('text/plain');
			echo '0|'.addslashes($eLang->get('NOTALLOWACTION'));
			exit();
		}

		if (defined('ELXIS_MULTISITE') && (ELXIS_MULTISITE != 1)) {
			$this->ajaxHeaders('text/plain');
			echo '0|'.addslashes($eLang->get('UNINST_EXT_MOTHERSITE'));
			exit();
		}

		$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
		if ($id < 1) {
			$this->ajaxHeaders('text/plain');
			echo '0|Authentication method not found!';
			exit();
		}

		$row = new authenticationDbTable();
		if (!$row->load($id)) {
			$this->ajaxHeaders('text/plain');
			echo '0|'.$row->getErrorMsg();
			exit();
		}

		if ($elxis->getConfig('SECURITY_LEVEL') > 0) {
			$this->ajaxHeaders('text/plain');
			echo '0|'.addslashes($eLang->get('UNINST_NALLOW_SECLEVEL'));
			return $response;
		}

		if ($row->iscore == 1) {
			$this->ajaxHeaders('text/plain');
			echo '0|'.addslashes($eLang->get('CNOT_UNINST_CORE_EXTS'));
			exit();
		}

		if ($row->auth == 'elxis') {
			$this->ajaxHeaders('text/plain');
			echo '0|You can not uninstall the Elxis authentication method!';
			exit();
		}

		elxisLoader::loadFile('components/com_extmanager/includes/extension.xml.php');
		$exml = new extensionXML();
		$info = $exml->quickXML('auth', $row->auth);
		$ath_version = $info['version'];
		unset($exl);

		elxisLoader::loadFile('components/com_extmanager/includes/installer.class.php');
		$installer = new elxisInstaller();
		$ok = $installer->uninstall('auth', $row->auth, $row->id, $ath_version);
		if (!$ok) {
			$msg = $installer->getError();
			if ($msg == '') { $msg = $eLang->get('ACTION_FAILED'); }
			$this->ajaxHeaders('text/plain');
			echo '0|'.addslashes($msg);
			exit();
		}

		$this->ajaxHeaders('text/plain');
		echo '1|Success';
		exit();
	}

}

?>