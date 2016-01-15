<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model{
	function mdpick(){
		return mysql_query("
				
				");
	}
	/*select store_image, store_day, store_goal, store_goal_now, user_id
				from MDPICK join STORE
				on MDPICK.store_id = STORE.store_id;*/
}