<?php 
/**
* @version		$Id: mssql.adapter.php 547 2011-07-30 08:12:50Z datahell $
* @package		Elxis
* @subpackage	Database
* @copyright	Copyright (c) 2006-2012 Elxis CMS (http://www.elxis.org). All rights reserved.
* @license		Elxis Public License ( http://www.elxis.org/elxis-public-license.html )
* @author		Elxis Team ( http://www.elxis.org )
* @description 	Elxis CMS is free software. Read the license for copyright notices and details
*/

defined('_ELXIS_') or die ('Direct access to this location is not allowed.');


class elxisMssqlAdapter extends elxisDbAdapter {


	/*************************************/
	/* CALL THE PARENT CLASS CONSTRUCTOR */
	/*************************************/
	public function __construct($pdo=null) {
		parent::__construct($pdo);
	}


	/*************************************/
	/* ADD LIMIT/OFFSET TO SQL STATEMENT */
	/*************************************/
	public function addLimit($sql, $offset=-1, $limit=-1) {
		if ($limit <= 0) { return $sql; }
		if ($offset < 0) { $offset = 0; }

		$orderby = stristr($sql, 'ORDER BY');
		if ($orderby !== false) {
			$sort = (stripos($orderby, 'desc') !== false) ? 'desc' : 'asc';
			$order = str_ireplace('ORDER BY', '', $orderby);
			$order = eUTF::trim(preg_replace('/ASC|DESC/i', '', $order));
		}

		$sql = preg_replace('/^SELECT\s/i', 'SELECT TOP '.($limit+$offset).' ', $sql);

		$sql = 'SELECT * FROM (SELECT TOP '.$limit.' * FROM ('.$sql.') AS inner_tbl';
		if ($orderby !== false) {
	    	$sql .= ' ORDER BY '.$order.' ';
			$sql .= (stripos($sort, 'asc') !== false) ? 'DESC' : 'ASC';
	    }
		$sql .= ') AS outer_tbl';
		if ($orderby !== false) {
			$sql .= ' ORDER BY '.$order.' '.$sort;
		}
		return $sql;
	}


	/*****************************************************************/
	/* GET THE LAST ID GENERATED BY AN IDENTITY/AUTOINCREMENT COLUMN */
	/*****************************************************************/
    public function lastInsertId($tableName=null, $primaryKey=null) {
		$sql = 'SELECT SCOPE_IDENTITY()';
		return (int)$this->pdo->query($sql)->fetchColumn();
    }


    /****************************/
	/* LIST ALL DATABASE TABLES */
	/****************************/
    public function listTables() {
        $sql = "SELECT name FROM sysobjects WHERE type = 'U' ORDER BY name";
    	$stmt = $this->pdo->prepare($sql);
    	$stmt->execute();
    	return $stmt->fetchCol();
    }


	/***********************************/
	/* BACKUP DATABASE (NOT SUPPORTED) */
	/***********************************/
	public function backup($params) {
		return -1;
	}

}

?>