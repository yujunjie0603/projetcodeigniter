<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_product extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProduct()
    {
        $product = $this->db->get('product');
        return $product->result();
    }

    public function find($where)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    public function save($data)
    {
        if (isset($data['id']) && $data['id'] != "") {

            return $this->db->update('product', $data, "id = " . $data['id']);
        } else {

            return $this->db->insert('product', $data);
        }
    }

    public function active($id)
    {
        $data = array('id' => $id, 'active' => 1);
        return $this->save($data);
    }

    public function delete($id)
    {
        return $this->db->delete('category', array('id' => $id)); 
    }

}
