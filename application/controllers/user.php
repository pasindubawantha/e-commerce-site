<?php

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function index() {
//        $this->load->view('user/userLogin');
        $this->load->view('user/userRegistration');
    }

    public function userRegistrationView() {
        $this->load->view('user/userRegistration');
    }

    public function userAuthenticate() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == FALSE) {    //not necessary i think
            if(isset($this->session->userdata['logged_in'])) {
                $this->load->view('welcome_message');
            }
            else {
                $this->load->view('user/userLogin');
            }
        }                                               //
        else {
            $data = array (
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->userModel->login($data);
            if($result == TRUE) {
                $session_data = array(
                    'username' => $this->input->post('username')
                );
                $this->session->set_userdata('logged_in',$session_data);
                $this->load->view('welcome_message');
            }
            else {
                $data = array('error' => 'Invalid Username or Password. Please try again or Signup as a new user');
                $this->load->view('user/userLogin', $data);
            }
        }
    }

    public function userLogout() {
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message'] = 'Successfully Logout';
        $this->load->view('user/userLogin', $data);
    }

    public function userRegistration() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == FALSE) {
            $data['error'] = 'Please enter a valid Username & password';
            $this->load->view('userRegistration', $data);
        }
        else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->userModel->newUser($data);
            if($result == TRUE) {
                $data['message'] = 'Registration Successful';
                $this->load->view('user/userRegistration', $data);
            }
            else {
                $data['message'] = 'Username already exists!';
                $this->load->view('user/userRegistration', $data);
            }
        }
    }



}