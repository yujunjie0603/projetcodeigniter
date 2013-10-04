<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class moduletest extends MX_Controller {

	public function index()
	{
		
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}