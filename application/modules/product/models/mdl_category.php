<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_category extends CI_Model 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCategory()
    {
        $category = $this->db->get('category');
        return $category->result();
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
        return false;
    }

    public function save($data)
    {
        if (isset($data['id']) && $data['id'] != "") {

            return $this->db->update('category', $data, "id = " . $data['id']);
        } else {

            return $this->db->insert('category', $data);
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

?>