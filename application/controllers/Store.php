<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('store');
		$this->load->view('store_contents');
		$this->load->view('footer');
	}
	public function cloth()
	{
		$this->load->view('header');
		$this->load->view('store_cloth');
		$this->load->view('store_contents');
		$this->load->view('footer');
	}
	public function ecobag()
	{
		$this->load->view('header');
		$this->load->view('store_ecobag');
		$this->load->view('store_contents');
		$this->load->view('footer');
	}
	public function pouch()
	{
		$this->load->view('header');
		$this->load->view('store_pouch');
		$this->load->view('footer');
	}


}
