<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratEdaran extends CI_Controller {


	public function index()
	{
		$this->template_lib->load('NavigationSection/suratedaran');
	}

}
