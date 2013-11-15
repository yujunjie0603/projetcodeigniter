<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template extends MX_Controller
{
	public function homepage($data)
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->module('category/category');
		$listCategoryMenu = $this->category->getListCategory();
		$data['listCategoryMenu'] = $listCategoryMenu;
		$dataHead = array();
		if (isset($data['css'])) {
			$dataHead['css'] = $data['css'];
		}
		if (isset($data['js'])) {
			$dataHead['js'] = $data['js'];
		}
		$this->load->view('header', $dataHead);
		$this->load->View('homepage', $data);
		$this->load->view('footer');
	}

	public function admin($data)
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