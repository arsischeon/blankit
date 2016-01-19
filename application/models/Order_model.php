<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function cart(){
	return $this->db->query("
		select user_name, user_email, user_phone, user_home, user_home2, user_home3, u.user_id as buyer, s.user_id as artist, s.store_id,
			cart_type, cart_color, cart_size, cart_num, cart_price, cart_price_total, cart_status, store_name
		from USER u, CART c, STORE s
		where u.user_id = c.user_id and s.store_id = c.store_id and cart_status = 1;
		");
	}
	
	public function order($receiver, $email, $phone1, $phone2, $phone3, $home1, $home2, $home3, $payer, $bank, $account, $notice){
		$home = $home1 . "/" . $home2 . "/" . $home3;
		$phone = $phone1 . "/" . $phone2 . "/" . $phone3;
		
		return $this->db->query("
		INSERT INTO ORDER(order_date, order_price, order_status, order_home, order_receiver, order_phone, order_email, order_name, order_bank, order_account, order_notice)
		VALUES ('', '', '0', '$home', '$receiver', '$phone', '$email', '$payer', '$bank', '$account', '$notice');
		");
	}
	
}