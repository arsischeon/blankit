<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->model('order_model');
		$data['cart']=$this->order_model->cart();
		
		$this->load->view('header');
		$this->load->view('order',$data);
		$this->load->view('footer');
	}
	public function complete()
	{
		$this->load->view('header');
		$this->load->view('order_complete');
		$this->load->view('footer');
	}
	public function func_order_ok()
	{
		$data['bank'] = $this->input->post('bank');
		$this->load->view('func_order_ok', $data);
		
	}
}
