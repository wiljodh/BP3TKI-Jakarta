<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crisiscenter extends CI_Controller {


	public function index()
	{
		$this->template_lib->load('NavigationSection/crisiscenter');
	}

}
