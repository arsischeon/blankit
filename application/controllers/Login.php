<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function func_login_check(){
		$data['user_id'] = $this->input->post('user_id');
		$data['user_pw'] = $this->input->post('user_pw');
		$this->load->view('login_success', $data);
	}

}
