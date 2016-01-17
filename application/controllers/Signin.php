<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('signin');
		$this->load->view('footer');
	}
}
