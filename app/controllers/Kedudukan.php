<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kedudukan extends CI_Controller {


	public function index()
	{
		$this->load->model('tentang_model');
		$site = $this->tentang_model->listing();
		$data['body'] = array("kedudukan_1" => $site['kedudukan_1'], "kedudukan_2" => $site['kedudukan_2']);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/kedudukan');
	}

}
