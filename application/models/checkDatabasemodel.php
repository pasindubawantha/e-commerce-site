<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkDatabasemodel extends CI_Model {
	public function getTables()
	{	$this->load->database();
		$query = $this->db->query("SHOW TABLES;");
		return $query;
	}
}
