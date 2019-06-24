<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {


	public function index()
	{
		$this->load->model('tentang_model');
		$site = $this->tentang_model->listing();
		$data['body'] = array("visi" => $site['visi'], "misi" => $site['misi']);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/visimisi');
	}

}
