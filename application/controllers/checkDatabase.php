<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkDatabase extends CI_Controller {
	public function index()
	{	$this->load->model('checkDatabasemodel');
		$query = $this->checkDatabasemodel->getTables();
		$this->load->view('checkDatabaseview', array("query"=>$query));
	}
}
