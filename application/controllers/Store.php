<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	public function index()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		
		$this->load->view('header');
		$this->load->view('store');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function cloth()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		
		$this->load->view('header');
		$this->load->view('store_cloth');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function ecobag()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		
		$this->load->view('header');
		$this->load->view('store_ecobag');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function pouch()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
		
		$this->load->view('header');
		$this->load->view('store_pouch');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function done()
	{
		$this->load->model('store_model');
		$data['contents']=$this->store_model->contents();
	
		$this->load->view('header');
		$this->load->view('store_done');
		$this->load->view('store_contents', $data);
		$this->load->view('footer');
	}
	public function product()
	{
		$this->load->model('store_model');
		$data['details']=$this->store_model->details();
		
		$this->load->view('header');
		$this->load->view('product', $data);
		$this->load->view('footer');
	}

}
