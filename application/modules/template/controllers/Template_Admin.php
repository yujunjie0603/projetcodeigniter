<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_Admin extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function home($data)
	{	

		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$dataHead = array();
		if (isset($data['css'])) {
			$dataHead['css'] = $data['css'];
		}
		if (isset($data['js'])) {
			$dataHead['js'] = $data['js'];
		}

		$this->load->view('header_admin', $dataHead);
		$this->load->View('admin', $data);
		$this->load->view('footer_admin');
	}
}