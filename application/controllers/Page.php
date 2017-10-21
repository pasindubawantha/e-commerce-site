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
	}
	public function index()
	{
		$data['latest_designs'] = $this->Item_Model->getLatestDesigns();
		$data['special_offers'] = $this->Item_Model->getSpecialOffers();
		$data['collections'] = $this->Item_Model->getCollections();
		$this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}

	public function singleItem($id) {
//	    $this->load->view('templates/header');
    }

    public function searchItem() {
	    $search = $this->input->post('search');
	    $category = $this->input->post('category');
	    $data['items'] = $this->Item_Model->getSearchItem($search, $category);
	    $this->load->view('templates/header');
	    $this->load->view('pages/search', $data);
	    $this->load->view('templates/footer');
    }

}
