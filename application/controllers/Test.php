<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('js_test');
		$this->load->view('footer');
	}
}
