<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayananlegalisasicoststructure extends CI_Controller {


	public function index()
	{
		$page_name = $this->router->fetch_class();
		$this->template_lib->load('NavigationSection/pelayananlegalisasicoststructure');
	}

}
