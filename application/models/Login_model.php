<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	var $details; // 글로벌 declare
	
	public function check_login($user_id, $user_pw){
		$query =$this->db->query("
			select * from `USER` where user_id='$user_id' and user_pw='$user_pw';
		");
		
		$login = $query->result();
		
		if(count($login) == 1){
			$this->details = $login[0];
			$this->send_info();
			return true;
		}
		else{
			return false;
		}
	
	}
	
	public function send_info(){
		return array(
				'user_name'=>"user_name",
				'user_email'=>"user_email"
				
		);
	}
	
	public function set_session(){
		
	}
	
	public function logout_session(){
		
	}
	
}