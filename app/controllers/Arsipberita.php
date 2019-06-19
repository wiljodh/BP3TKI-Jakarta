<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsipberita extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('pagination');
		$page = $this->input->get('page', true);
		$page = $page && $page > 0 ? $page : 1;
		$this->load->model('berita_model');
		$limit = 3;
		$result_count = $this->berita_model->count_listing();
		$total_page = (int) ceil($result_count / $limit);
		$start = ($page * $limit) - ($limit - 1);
		$data['listing'] = $this->berita_model->listing($limit, $start);
		$data['limit'] = $limit;
		$data['result_count'] = $result_count;
		$data['page'] = $page;
		$range = 5;
	
		$data['pagination'] = $this->create_pagination($page, $total_page, $limit);
		$data['prev'] = ($page > 1)? '<li class="prev"><a href="?page='.($page - 1).'"><i class="ion-ios-arrow-left"></i></a></li>' : "";
		$data['next'] = ($page < $total_page) ? '<li class="next"><a href="?page='.($page + 1).'"><i class="ion-ios-arrow-right"></i></a></li>' : "";
		$this->template_lib->setData($data);
		$this->template_lib->load('NavigationSection/arsipberita');
	}

	// <li class="active"><a href="#">1</a></li>
	private function create_pagination($current_page, $total_page, $range){
		$page = [];
		$start_number = ($current_page > $range)? $current_page - $range : 1;
		$end_number = ($current_page < ($total_page - $range))? $current_page + $range : $total_page;
		for($i = $start_number; $i <= $end_number; $i++){
			$page[] = array(
				'p' => $i,
				'is_active' => ($current_page == $i)? ' class="active"' : ''
			);
		  }
		return $page;
	}

}
