<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('artist');
		$this->load->view('footer');
	}
}
