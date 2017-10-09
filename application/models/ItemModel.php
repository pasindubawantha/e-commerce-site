<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemModel extends CI_Model {
	public function getItemData($id){
		$this->load->database();
		$query = $this->db->get_where('Item', array('id' => $id));
		return $query->row_array();
	}
}
?>