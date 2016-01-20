<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	public function profile()
	{
		if (!empty($_FILES)) {
		  $tempFile = $_FILES['userfile']['tmp_name'];
		  $targetPath = APPPATH."files/profile/";  //4
		  $targetFile =  $targetPath. $_FILES['userfile']['name'];  //5
		  move_uploaded_file($tempFile,$targetFile); //6
		}

		// $config['upload_path'] = "/files/profile/";
		//
		// $this->load->library('upload', $config);
		//
		// if ( ! $this->upload->do_upload())
		// {
		// 	$error = array('error' => $this->upload->display_errors());
		// 	echo "Sibal";
		// }
		// else
		// {
		// 	$data = array('upload_data' => $this->upload->data());
		// 	echo "good";
		// }
	}
}
