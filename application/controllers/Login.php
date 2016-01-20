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
			//$data['result'] = "login success!";
			//$data['info'] = $this->login_model->send_info(); 테스트 용도임
		}
		else {
			//$data['result'] = "login failure!";
			$redirectUrl = "http://blankit.kr/login?fail";
			$this->load->helper('url');
			redirect($redirectUrl);
		}
		
		$this->load->view('test_result', $data);
	}

}
