<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('main_model');
		//$data['mdpick']=$this->main->mdpick();
		// $data['mdartist']=$this->main->mdartist();
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');
	}
}
