<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('main_model');
		// $data['recent']=$this->main->recent();
		// $data['artist']=$this->main->artist();
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
}
