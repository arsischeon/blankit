<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join_model extends CI_Model{
	public function __construct(){
		$this->load->database();

	}

	public function id_list(){ // 회원가입 join 페이지에서 id 중복확인 위해 모든 id 끌고오기
		$id=$this->input->get("id");
		return $this->db->query("select * from `USER` where user_id='".$id."';");
	}
}
