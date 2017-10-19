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
		$this->load->model('Category_model');
	}
	public function home()
	{
		$data['categories'] = $this->Category_model->get_main_categories();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer', $data);
	}
}
