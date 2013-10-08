<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class moduletest extends MX_Controller {

	public function index()
	{
		
		$this->load->helper('url');
		$this->load->model('Mdl_user');
		$values = $this->Mdl_user->getAllUser();
		//var_dump($values->result());
		$data['data_value'] = array('test1' => 123);
		$data['module'] = 'moduletest';
		$data['view_file'] = 'index';
		//$this->load->view('header');
		//$this->load->view('index');
		//$this->load->view('footer');
		echo Modules::run('template/homepage', $data);
	}
}