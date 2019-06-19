<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_lib
{
	private $ci;
	private $data;
	private $css;
	private $js;

	function __construct()
	{
		$this->ci =& get_instance();
	}

	function setData($data){
		$this->data = $data;
	}

	function getData(){
		return $this->data;
	}

    function setCss($css) {
        $this->css = $css;
    }

	function getCss() {
        return $this->css;
    }

    function setJavascript($js) {
        $this->js = $js;
    }

	function getJavascript() {
        return $this->js;
    }

    function load($view = null, $base = 'Base'){
    	$data = $this->data;
		$data['base_url'] = site_url();
		$this->ci->load->library('parser');	
    	$data['body'] = $this->ci->parser->parse('Content/' . $view, $data, TRUE);
    	$data['base_url'] = site_url();
    	$this->ci->parser->parse($base, $data);
    }
	
}
