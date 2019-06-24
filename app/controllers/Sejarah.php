<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {


	public function index()
	{
		$this->load->model('tentang_model');
		$site = $this->tentang_model->listing();
		$data['body'] = array("sejarah" => $site['sejarah']);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/sejarah');
	}

}
