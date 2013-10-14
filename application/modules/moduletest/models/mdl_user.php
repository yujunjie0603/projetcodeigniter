<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_user extends CI_Model 
{

    public function __construct() {
    	parent::__construct();
	}

	public function getAllUser()
	{

		$query = $this->db->get('user');
		return $query;
	}

	public function checkUser($email, $password)
	{

	 	$this->db->select('*');
	   	$this->db->from('user');
	   	$this->db->where('email', $email);
	   	$this->db->where('password', MD5($password));
	   	$this->db->limit(1);
	   	$query = $this->db->get();
		if($query -> num_rows() == 1){
		    return $query->result();
		} else {
		    return false;
		}
	}
}