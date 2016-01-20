<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	public function profile()
	{
		if (!empty($_FILES)) {
			$tempFile = $_FILES['profile']['tmp_name'];
			$targetPath = "/files/profile/";  //4
			$targetFile =  $targetPath. $_FILES['profile']['name'];  //5
			move_uploaded_file($tempFile,$targetFile); //6
		}
		$this->load->view('header');
		$this->load->view('file_profile');
		$this->load->view('footer');
	}
}
