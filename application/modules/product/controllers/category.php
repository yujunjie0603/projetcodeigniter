<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MX_Controller
{

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Mdl_category');
        $this->load->model('Mdl_product');
    }

    public function index($id="")
    {

        if ($id != "") {

            $value = $this->Mdl_category->find($id);
            $data['category'] = $value;
            $products = $this->Mdl_product->find();
            $data['view_file'] = "products";

        } else {

            $value = $this->Mdl_category->getAllCategory();
            $data['listCategory'] = $value;
            $data['view_file'] = "categorys";
        }
        $data['module'] = 'product';
        echo Modules::run('template/homepage', $data);
    }

    public function getListCategory()
    {
        return $this->Mdl_category->getAllCategory();
    }

    public function category()
    {

    }
}