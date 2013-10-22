<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_product');
        $this->load->model('Mdl_image');
    }

    public function index($id="")
    {
        if ($id != "") {

            $value = $this->Mdl_product->find(array('id' => $id));
            $data['product'] = $value;
            $images = $this->Mdl_image->getProductImages($id);
            $data['productImages'] = $images;
            $data['module'] = 'category';
            $data['view_file'] = "product";
            $data['css'] = array('slider_product.css');
            $data['js'] = array('slider_product.js');
            echo Modules::run('template/homepage', $data);

        } else {
            redirect('/product/', 'refresh');
        }
    }
}