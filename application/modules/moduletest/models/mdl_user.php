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
}