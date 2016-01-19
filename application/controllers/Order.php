<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->model('order_model');
		$data['cart']=$this->order_model->cart();
		
		$this->load->view('header');
		$this->load->view('order');
		$this->load->view('footer');
	}
	public function complete()
	{
		$this->load->view('header');
		$this->load->view('order_complete');
		$this->load->view('footer');
	}
}
