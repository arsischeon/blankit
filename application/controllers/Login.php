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
		$user_id = $this->input->post('user_id');
		$user_pw = $this->input->post('user_pw');
		
		$this->load->model('login_model');
		if ($this->login_model->check_login($user_id, $user_pw)){
			$data['result'] = "login success!";
		}
		else {
			$data['result'] = "login failure!";
		}
		
		$this->load->view('test_result', $data);
	}

}
