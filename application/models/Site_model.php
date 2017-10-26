<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Site model
 * database layer for site information
 * @filesource /application/model/Site_model.php
 */
class Site_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	/**
	 * get all site related data as a json object
	 * @return class all site related data
	 */
	public function getAllSiteData()
	{
		$this->db->select('name, data');
		$query = $this->db->get_where('Site', array('name' => 'site'));
		$site = json_decode($query->row()->data);
		return $site;
	}
	/**
	 * get Registration customization data as a json object
	 * @return class all registration email data
	 */
	public function getRegistrationEmialDetails()
	{
		$query = $this->db->get_where('Site', array('name' => 'registration_email'));
		$email = json_decode($query->row()->data);
		return $email;
	}

}