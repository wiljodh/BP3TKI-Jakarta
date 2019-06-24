<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugasdanfungsi extends CI_Controller {


	public function index()
	{
		$this->load->model('tentang_model');
		$site = $this->tentang_model->listing();
		$data['body'] = array("tugas" => $site['tugas'], "fungsi" => $site['kedudukan_2']);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/tugasdanfungsi');
	}

}
