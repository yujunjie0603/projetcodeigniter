<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_user');
        if(!$this->session->userdata('connect')) {

            redirect('/auth/', 'refresh');
        }

        if (!$this->session->userdata('admin')) {
            redirect('/category/', 'refresh');
        }        
    }

    public function index()
    {
        $listUser = $this->Mdl_user->getAllUser();
        $data['listUser'] = $listUser;
        $data['module'] = 'admin';
        $data['view_file'] = "user";
        echo  Modules::run('template/Template_Admin/home', $data);
    }
}