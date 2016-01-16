<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{
	public function mdpick(){
	return mysql_query("
				select store_image, store_day, store_goal, store_goal_now, artist_type, user_name, artist_profile
				from MDPICK m, STORE s, USER u
				where m.store_id = s.store_id and s.user_id = u.user_id;
				");
	}
}