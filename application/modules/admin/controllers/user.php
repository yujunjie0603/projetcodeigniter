<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdl_user');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');		
	}

	public function index()
	{
		$listUser = $this->Mdl_user->getAllUser();
		$data['module'] = 'admin';
		$data['view_file'] = "user";
		$data['listUser'] = $listUser;
		echo Modules::run('template/Template_Admin/home', $data);		
	}

	public function edit($id="")
	{
		$user = array();
		if ($id) {
			$user = $this->Mdl_user->find($id);
		}

		$this->form_validation->set_rules('nom', 'nom', 'trim');
		$this->form_validation->set_rules('prenom', 'Prenom', 'trim');
		$this->form_validation->set_rules('date_naissance_jour', 'Date_naissance_jour', 'trim');
		$this->form_validation->set_rules('date_naissance_mois', 'Date_naissance_mois', 'trim');
		$this->form_validation->set_rules('date_naissance_annee', 'Date_naissance_annee', 'trim');
		$this->form_validation->set_rules('sex', 'Sex', 'trim');

		$data['user'] = $user;
        $data['module'] = 'admin';
        $data['view_file'] = "edit";
        echo Modules::run('template/Template_Admin/home', $data);
	}
}