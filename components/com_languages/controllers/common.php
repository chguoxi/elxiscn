<?php 
/**
* @version		$Id: common.php 584 2011-09-04 16:17:02Z datahell $
* @package		Elxis
* @subpackage	Component Languages
* @copyright	Copyright (c) 2006-2012 Elxis CMS (http://www.elxis.org). All rights reserved.
* @license		Elxis Public License ( http://www.elxis.org/elxis-public-license.html )
* @author		Elxis Team ( http://www.elxis.org )
* @description 	Elxis CMS is free software. Read the license for copyright notices and details
*/

defined('_ELXIS_') or die ('Direct access to this location is not allowed');


class languagesController {

	protected $view = null;
	protected $model = null;


	/*********************/
	/* MAGIC CONSTRUCTOR */
	/*********************/
	protected function __construct($view=null, $model=null) {
		$this->view = $view;
		$this->model = $model;
	}


	/*******************************************/
	/* REMOVE LANGUAGE PREFIX FROM FILENAME(S) */
	/*******************************************/
	protected function removeLangPrefix($lng, $lfs) {
		if (!$lfs) { return array(); }
		$clean = array();
		foreach ($lfs as $lf) {
			$clean[] = preg_replace('/^('.$lng.'\.)/', '', $lf);
		}
		return $clean;
	}

}

?>