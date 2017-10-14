<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function index()
	{	
		$this->load->model('ItemModel');
		$this->load->model('categoryModel');

		$category = $_GET['category'];
		$term = $_GET['term'];

		if($category == 'All'){
			echo $term ;
		}else{
			echo $term ;
		echo $category ;
		}

		//$item = $this->ItemModel->SearchAllItems();

		//$categories = $this->categoryModel->getAll();

		//$this->load->view('Header/header', array('categories'=>$categories));
		// $this->load->view('Search/SearchView', array('items'=>$items));
		// $this->load->view('Footer/footer');
	}
}
?>