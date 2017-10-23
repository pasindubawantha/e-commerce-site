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
		$this->load->model('Site_model');
	}
	public function index()
	{
		$data['latest_designs'] = $this->Item_Model->getLatestDesigns();
		$data['special_offers'] = $this->Item_Model->getSpecialOffers();
		$data['collections'] = $this->Item_Model->getCollections();
		$data['mainCategories'] = $this->Category_model->getMainCatergoryies();
		$data['subCategories'] = $this->Category_model->getCategoryHeighrachy();
		$data['site'] = $this->Site_model->getAllSiteData();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
	public function contactUs()
	{
		echo "contactUS";
	}

	public function singleItem($id) {
//	    $this->load->view('templates/header');
    }

}
