<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User model
 * database layer for user information manipultaion
 *
 * @filesource /application/models/User_model.php
 */
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	/**
	 * checks if username is available to register
	 *
	 * @param  string $username username to check if it's already there
	 * @return boolean true if avalable false if not
	 */
	public function checkUsernameAvailable($username){
		$this->db->select('user_name');
		$query = $this->db->get_where('User', array('user_name' => $username));
		if(sizeof($query->result_array())) return false;
		else return true;
	}
	/**
	 *adds new user
	 * @param string $username        less than 45 charachters
	 * @param string $passwordHash    64 charchters
	 * @param string $salt            32 chatachters
	 * @param string $verficationCode 32 chatachters
	 * @return int userId
	 */
	public function addNewUser($username, $passwordHash, $salt, $verficationCode)
	{
		$data = array(
	        'user_name' => $username,
	        'password' => $passwordHash,
	        'password_salt' => $salt,
	        'verification_code' => $verficationCode
			);
		$this->db->insert('User', $data);
		$this->db->select('id');
		$query = $this->db->get_where('User', array('user_name' => $username));
		return $query->row()->id;
	}
	/**
	 * Verify user email with  verificatio code
	 * @param  int $userId          used Id
	 * @param  string $verficationCode 32 charchter verfication code
	 * @return boolean                  verified or not
	 */
	public function verifyUser($userId, $verficationCode){
		$this->db->select('verification_code');
		$query = $this->db->get_where('User', array('id' => $userId));
		if(sizeof($query->row_array()) != 0)
		{
			if($query->row()->verification_code == $verficationCode)
			{
				$data = array(
			        'verified' => true
				);
				$this->db->where('id', $userId);
				$this->db->update('User', $data);
				return true;
			}
		}
		return false;
	}

}
