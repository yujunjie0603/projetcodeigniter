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

	public function produit()
	{
		$this->load->view('header');
		$this->load->View('produit');
		$this->load->view('footer');
	}	
}