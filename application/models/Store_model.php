<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function contents(){
	return $this->db->query("
		select store_image, store_day, store_goal, store_goal_now, artist_type, user_name, artist_profile, store_type, store_status
		from MDPICK m, STORE s, USER u
		where m.store_id = s.store_id and s.user_id = u.user_id;
		");
	}
}