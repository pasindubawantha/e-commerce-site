<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoryModel extends CI_Model {
	public function getAll()
	{
		$this->load->database();
		$query = $this->db->get('Category');
		return $query->result_array();
	}
}
