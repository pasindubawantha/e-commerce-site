<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	public function index($id)
	{	
		$this->load->model('ItemModel');
		$item = $this->ItemModel->getItemData($id);
		$this->load->view('Header/header');
		$this->load->view('Item/ItemView', array('item'=>$item));
		$this->load->view('Footer/footer');
	}
}
?>