<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller {

	public function index()
	{
		// $this->load->model('join_model');
		// $data['id_list'] = $this->join_model->id_list(); // id 중복확인

		$this->load->view('header');
		$this->load->view('join');
		$this->load->view('footer');
	}

	public function func_join()
	{
		$this->load->view('header');
		$this->load->view('join');
		$this->load->view('footer');
	}
	public function id_check()
	{
		$this->load->model('join_model');
		$result=$this->join_model->id_list();
		if ($result->num_rows()==0) {
			echo "true";
		}else {
			echo "";
		}
	}

}
