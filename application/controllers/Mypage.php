<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('mypage_order');
		$this->load->view('footer');
	}
	public function info()
	{
		$this->load->view('header');
		$this->load->view('mypage_info');
		$this->load->view('footer');
	}
}
