<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model_user extends CI_Model
{
	public function get_user(){
		return $this->db->get('user')->result_array();
	}
}