<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function check_login($user_id, $user_pw){
		$query =$this->db->query("
			select * from `USER` where user_id='$user_id' and user_pw='$user_pw';
		");
		
		$login = $query->result();
		
		if(count($login) == 1){
			$this->details = $login[0];
			return true;
		}
		else{
			return false;
		}
	
	}
	
}