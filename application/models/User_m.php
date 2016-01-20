<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	var $details;
	
	public function validate_user( $user_id, $user_pw ) {
		// Build a query to retrieve the user's details
		// based on the received username and password
		$this->db->from('USER');
		$this->db->where('user_id',$user_id );
		$this->db->where( 'user_pw', $user_pw );
		$login = $this->db->get()->result();
	
		// The results of the query are stored in $login.
		// If a value exists, then the user account exists and is validated
		if ( is_array($login) && count($login) == 1 ) {
			// Set the users details into the $details property of this class
			$this->details = $login[0];
			// Call set_session to set the user's session vars via CodeIgniter
			$this->set_session();
			return true;
		}
	
		return false;
	}
	
	public function set_session() {
		// session->set_userdata is a CodeIgniter function that
		// stores data in a cookie in the user's browser.  Some of the values are built in
		// to CodeIgniter, others are added (like the IP address).  See CodeIgniter's documentation for details.
		$this->session->set_userdata( array(
				'user_id'=>$this->details->user_id,
				'user_name'=>$this->details->user_name,
				'isLoggedIn'=>true
		)
				);
	}
}