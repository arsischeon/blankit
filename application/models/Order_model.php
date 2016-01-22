<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function cart(){
		$user_id_SESSION = $this->session->userdata('user_id');
		
		 return $this->db->query("
				select user_name, user_email, user_phone, user_home, user_home2, user_home3, u.user_id as buyer, s.user_id as artist, s.store_id,
				cart_id, cart_type, cart_color, cart_size, cart_num, cart_price, cart_price_total, cart_status, store_name, store_random_id
				from USER u, CART c, STORE s
				where u.user_id = c.user_id and s.store_id = c.store_id and cart_status = 1 and c.user_id = '$user_id_SESSION';
		");
	}
	
	public function address(){
		$user_id_SESSION = $this->session->userdata('user_id');
		
		return $this->db->query("
				select user_name, user_email, user_phone, user_home, user_home2, user_home3
				from USER u
				where u.user_id = '$user_id_SESSION';
				");
	}
	
	public function generateOrderRandomId(){
		return $this->db->query("
				select max(order_id) as seed from `ORDER`;
		");
	}
	
	public function order($receiver, $email, $phone1, $phone2, $phone3, $home1, $home2, $home3, $payer, $bank, $account, $notice, $totalPrice, $orderRandomId){
		$home = $home1 . "/" . $home2 . "/" . $home3;
		$phone = $phone1 . $phone2 . $phone3;
		$date = date('Y-m-d H:i:s');
		$user_id_SESSION = $this->session->userdata('user_id');
		
		$this->db->query("
		INSERT INTO `ORDER` (order_date, order_price, order_status, order_home, order_receiver, order_phone, order_email, order_name, order_bank, order_account, order_notice, order_random_id, user_id)
		VALUES ('$date', '$totalPrice', '0', '$home', '$receiver', '$phone', '$email', '$payer', '$bank', '$account', '$notice', '$orderRandomId', '$user_id_SESSION');
		");
	}
	
	public function realCart(){ // /order/cart에서 주문 리스트 확인 밑에 출력 될 것들
		$user_id_SESSION = $this->session->userdata('user_id');
		
		return $this->db->query("
			select store_random_id, user_name, store_name, cart_type, cart_color, cart_size, cart_num, cart_price, c.cart_id as ID
			from `CART` c, `STORE` s, `USER` u
			where c.user_id = '$user_id_SESSION' and c.cart_status = '1' and c.store_id = s.store_id and s.store_status = '1' and u.user_id = s.user_id;
			"); // CART 테이블에서 현재 세션 유저가 '담긴상태(1)'를 불러들임 & 해당 제품의 정보가 진행중이면 그 정보까지 & 그 정보의 디자이너 이름
	}
	
	public function deleteCart($deleteCart){ // cart 삭제를 담당 
		$this->db->query("
			update cart_status
			from `CART`
			where ;
		")
	}
}