<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdl_user');
	}

	public function index()
	{
		$listUser = $this->Mdl_user->getAllUser();
		$data['module'] = 'admin';
		$data['view_file'] = "user";
		echo Modules::run('template/admin/index', $data);		
	}
}