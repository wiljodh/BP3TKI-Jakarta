<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galerifoto extends CI_Controller {


	public function index()
	{
		$this->template_lib->load('NavigationSection/galerifoto');
	}

}
