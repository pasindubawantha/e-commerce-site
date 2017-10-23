<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Category model
 * database layer for categories
 * @filesource /applicatoin/models/Category_model
 */
class Category_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	/**
	 * return all searchable categories
	 * @return class seachable categories
	 */
	public function getAllCategories()
	{
		$this->db->select('id, name,');
		$query = $this->db->get('Category');
		return $query->result();
	}
	public function getMainCatergoryies()
	{
		$this->db->select('*');
		$query = $this->db->get_where('Category', array('parent_category' => null));
		return $query->result();
	}
	public function getSubCategories($mainCategoryId)
	{
		$this->db->select('*');
		$query = $this->db->get_where('Category', array('parent_category' => $mainCategoryId));
		return $query->result();
	}
	public function getCategoryHeighrachy()
	{
		$categories = $this->getMainCatergoryies();
		foreach($categories as $category)
		{
			$sub[$category->id] =  $this->getSubCategories($category->id);
		}
		return $sub;
	}

}
