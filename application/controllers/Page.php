<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Page Class
 * renders static pages
 */
class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Item_Model');
		$this->load->model('Category_model');
	}
	public function index()
	{
		$data['latest_designs'] = $this->Item_Model->getLatestDesigns();
		$data['special_offers'] = $this->Item_Model->getSpecialOffers();
		$data['collections'] = $this->Item_Model->getCollections();
		$data['categories'] = $this->Category_model->getAllCategories();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}

	public function singleItem($id) {
//	    $this->load->view('templates/header');
    }

}
