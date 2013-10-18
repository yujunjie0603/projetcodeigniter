<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MX_Controller {

	public function index()
	{
		//var_dump($_SERVER['HTTP_REFERER']);
		if ($this->session->userdata('connect') && $this->session->userdata('auth')) {
	
			redirect('/moduletest/', 'refresh');
		} else {

			$this->load->helper(array('form'));
			$this->load->library('form_validation');		
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			if ($this->form_validation->run() == FALSE)	{
			} else {
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				if ($this->check_user($email, $password)) {
					redirect('/moduletest/', 'refresh');
				} else {
					
				}
			}
			$data['module'] = 'moduletest';
			$data['view_file'] = "login";
		}
		echo Modules::run('template/homepage', $data);
	}

	public function check_user($email, $password)
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('Mdl_user');
		$value = $this->Mdl_user->checkUser($email, $password);
		if ($value) {
			$this->session->set_userdata('auth', $value);
			$this->session->set_userdata('connect', true);
			return true;
		}
		$this->session->set_flashdata('error_login', 'Le login ou le mot de pass est incorrect !');
		return false;
	}

	public function inscription()
	{
		//$this->load->helper(array('form'));
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('email_inscription', 'Email_inscription', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password_inscription', 'Password_inscription', 'required');
		$this->form_validation->set_rules('confirme_inscription', 'Confirme_inscription', 'required');
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

	public function logout()
	{
		$this->session->unset_userdata('connect');
		$this->session->unset_userdata('auth');
		redirect('/moduletest/', 'refresh');
	}
}