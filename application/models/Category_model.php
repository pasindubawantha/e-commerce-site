<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Category model
 * database layer for categories
 */
class Category_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_main_categories()
	{

	}

}
