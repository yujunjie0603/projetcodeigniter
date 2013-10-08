<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template extends MX_Controller
{
	public function homepage($data)
	{
		$this->load->view('header');
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