<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if( $this->session->userdata('isLoggedIn') ) {
        redirect('/main');
    	}	
    	else {
        $this->show_login(false);
    	}
	}
	
	public function show_login( $show_error = false )
	{
		$data['error'] = $show_error;

		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
	}
	
	public function login_user() {
		// Create an instance of the user model
		$this->load->model('user_m');
	
		// Grab the email and password from the form POST
		$user_pw = $this->input->post('user_pw');
		$user_id  = $this->input->post('user_id');
	
		//Ensure values exist for email and pass, and validate the user's credentials
		if( $user_pw && $user_id && $this->user_m->validate_user($user_id,$user_pw)) {
			// If the user is valid, redirect to the main view
			redirect('/main');
		} else {
			// Otherwise show the login screen with an error message.
			$this->show_login(true);
		}
	}
}
