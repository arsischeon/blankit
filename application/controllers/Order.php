<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('order');
		$this->load->view('footer');
	}
}
