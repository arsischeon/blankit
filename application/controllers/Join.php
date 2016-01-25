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

	public function func_join_ok()
	{
		$id = $this->input->post('id');
		$pw = $this->input->post('pw');
		$name = $this->input->post('name');
			$phone1 = $this->input->post('phone1');
			$phone2 = $this->input->post('phone2');
			$phone3 = $this->input->post('phone3');
		$phone = $phone1 . $phone2 . $phone3;
		
		//$type1 = $this->input->post('type1');
		//$type2 = $this->input->post('type2');
		$data['type1'] = $this->input->post('type1');
		$data['type2'] = $this->input->post('type2');
		
		$this->load->view('test_result', $data);
		
		
	}
	public function id_check()
	{
		$this->load->model('join_model');
		$result=$this->join_model->id_list();
		if ($result->num_rows()==0) {
			echo "true";
		} else {
			echo "";
		}
	}
	public function phone_check()
	{
		require_once(APPPATH.'libraries/coolsms.php');
		$secret=mt_rand()%90+10;
		$SESSION['phone_check']=$secret;
		$phone=$this->input->get("phone");
		$api_key = 'NCS53C2A831865B7';
		$api_secret = 'BEF1FE1C24C72F28C488728F91A2C838';

		$rest = new coolsms($api_key, $api_secret);

		$options->type = "SMS";
		$options->to = $phone;
		$options->from = "01071097327";
		$options->text = "인증 번호는 ".$secret." 입니다. 올바르게 입력해주세요.";
		$rest->send($options);
		echo "<div id='kkk' >".$secret."</div>";
	}
}
