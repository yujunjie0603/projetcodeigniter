<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_image extends CI_Model 
{
    public function __construct()
    {

        parent::__construct();
    }

    public function find($aWhere)
    {
        $this->db->select('*');
        $this->db->from('image');
        $this->db->where($aWhere);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    public function getProductImages($idProduct)
    {
        $this->db->select('*');
        $this->db->from('image as i');
        $this->db->join('product_image as pi', 'pi.id_image = i.id', 'inner');
        $this->db->where('pi.id_product', $idProduct);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

}