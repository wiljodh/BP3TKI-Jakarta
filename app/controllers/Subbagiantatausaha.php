<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subbagiantatausaha extends CI_Controller {


	public function index()
	{
		$this->load->model('struktur_organisasi_model');
		$site = $this->struktur_organisasi_model->listing();
		$data['body'] = array("organisasi_2" => $site['organisasi_2']);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/subbagiantatausaha');
	}

}
