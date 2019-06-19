<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	public function index()
	{
		$this->template_lib->load('NavigationSection/berita');
	}

	public function r($slug){
		$this->load->model('berita_model');
		$data = (array) $this->berita_model->read($slug);
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/berita');
	}

}
