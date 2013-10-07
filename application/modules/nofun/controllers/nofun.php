<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nofun extends MX_Controller {

	public function test($name = "", $sex = "")
	{
		
		echo "here nofun ". $sex . " " . $name;
	}
}