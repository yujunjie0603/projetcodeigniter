<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_user extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllUser()
	{
		return $this->db->get('user')->result();
	}

	public function save($data, $id="")
	{
		if ($id != "") {

            return $this->db->update('user', $data, "id = " . $id);
        } else {

            return $this->db->insert('user', $data);
        }
	}

	public function find($aWhere)
	{

	}

    public function active($id)
    {
        $data = array('active' => 1);
        return $this->save($data, $id);
    }

    public function delete($id)
    {
        return $this->db->delete('user', array('id' => $id)); 
    }
}