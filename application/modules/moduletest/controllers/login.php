<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MX_Controller {
	
	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');		
		$data['module'] = 'moduletest';
		$data['view_file'] = "login";
		echo Modules::run('template/homepage', $data);
	}

	public function auth()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)	{
			$this->load->model('Mdl_user');
			//$value = $this->Mdl_user->checkUser();
			$data['module'] = 'moduletest';
			$data['view_file'] = "login";
			echo Modules::run('template/homepage', $data);
			echo "non";
		} else {
			$data['module'] = 'moduletest';
			$data['view_file'] = "login";
			echo Modules::run('template/homepage', $data);			
		    echo "ok";
		}		
	}
}