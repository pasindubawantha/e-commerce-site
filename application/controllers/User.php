<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User Class
 * handles user registration, login , account details
 * logged in user data is saved in session->user
 */
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->library('email');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$rememberMe = $this->input->post('remember_me');
		$redirectURL = $this->input->post('callback_url');
		if($this->User_Model->checkUserVerified($username))
		{
			$user = $this->User_Model->checkUserPassword($username, $password);
			if($user)
			{
				$this->session->set_userdata('user', $user);
				$this->session->set_flashdata('sign_in_sucess', true);
				redirect($redirectURL);
			}
			else
			{
				$this->session->set_flashdata('sign_in_password_missmatch', true);
				$this->session->set_flashdata('sign_in_failed', true);
				redirect($redirectURL);
			}
		}
		else
		{
			$this->session->set_flashdata('sign_in_user_not_verified', true);
			$this->session->set_flashdata('sign_in_failed', true);
			redirect($redirectURL);
		}

	}
	/**
	 * user regitration form action
	 * @return void
	 */
	public function register()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confirmPassword = $this->input->post('confirm_password');
		$redirectURL = $this->input->post('callback_url');

		if($username == null){
			$this->session->unset_userdata('registered');
			redirect($redirectURL);
		}
		if($this->User_Model->checkUsernameAvailable($username))
		{
			if($password == $confirmPassword)
			{
				$salt = hash('md5', random_bytes(64));
				$verificationCode = hash('md5', random_bytes(64));
				$password = $salt.$password;
				$passwordHash = hash('sha256', $password);
				$userId = $this->User_Model->addNewUser($username, $passwordHash, $salt, $verificationCode);

				// $config = Array(
			 //      'protocol' => 'smtp',
			 //      'smtp_host' => 'ssl://smtp.googlemail.com',
			 //      'smtp_port' => 465,
			 //      'smtp_user' => 'pasindubawantha0@gmail.com',
			 //      'smtp_pass' => 'ucsc@123',
			 //    );

				$emailData = $this->Site_model->getRegistrationEmialDetails();
				$this->email->from($emailData->from_email, $emailData->from_name);
				$this->email->to($username);
				$this->email->subject($emailData->subject);
				$this->email->message($emailData->message." visit ".$emailData->siteURL."/User/verifyRegistratrion/".$userId."/".$verificationCode);
				$this->email->send();

				$this->session->set_flashdata('sign_up_sucess', true);
				$this->session->set_userdata('registered', true);
				redirect($redirectURL);
			}
			else
			{
				$this->session->set_flashdata('sign_up_password_missmatch', true);
				$this->session->set_flashdata('sign_up_failed', true);
				redirect($redirectURL);
			}
		}
		else
		{
			$this->session->set_flashdata('sign_up_bad_email', $username);
			$this->session->set_flashdata('sign_up_failed', true);
			redirect($redirectURL);
		}
	}
	/**
	 * user verification controller
	 * @param  string $userId           user ID auto generated primary key
	 * @param  string $verificationCode 32 charchter string
	 * @return null
	 */
	public function verifyRegistratrion($userId, $verificationCode)
	{
		if($this->User_Model->verifyUser($userId, $verificationCode))
		{
			$this->load->view('templates/registrationVerified');
		}
		else
		{
			$this->load->view('templates/registrationVerificationFailed');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('logged_off', true);
		redirect('/');
	}
	public function account()
	{

	}

}
