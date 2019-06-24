<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyiapanpenempatan extends CI_Controller {


	public function index()
	{
		$this->load->model('struktur_organisasi_model');
		$site = $this->struktur_organisasi_model->listing();
		$data['body'] = array("organisasi_4" => $site['organisasi_4']);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/penyiapanpenempatan');
	}

}
