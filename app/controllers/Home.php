<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->model('berita_model');
		$data['slide'] = $this->berita_model->recent_list(5, 'DESC');
		$arr = $this->berita_model->recent_list(4, 'DESC');
		$list = array_chunk($arr, 2);
		$data['list'] = $list;
		$this->template_lib->setData($data);
		$this->template_lib->load('index');
	}

}
