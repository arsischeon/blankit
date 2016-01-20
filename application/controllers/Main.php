<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		//$this->load->library('session');
		
		$this->load->model('main_model');
		$data['mdpick']=$this->main_model->mdpick();

		$this->load->model('artist_model');
		$data['artist_list']=$this->artist_model->artist_list();
		// $data['mdartist']=$this->main->mdartist();
		$this->load->view('header');
		$this->load->view('main',$data);
		// 푸터는 메인페이지 안에 들어가있음
	}
}
