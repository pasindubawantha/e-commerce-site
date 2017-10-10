<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	public function details($id)
	{	
		$this->load->model('ItemModel');
		$this->load->model('categoryModel');
		$item = $this->ItemModel->getItemData($id);
		$categories = $this->categoryModel->getAll();

		$this->load->view('Header/header', array('categories'=>$categories));
		$this->load->view('Item/ItemView', array('item'=>$item));
		$this->load->view('Footer/footer');
	}
}
?>