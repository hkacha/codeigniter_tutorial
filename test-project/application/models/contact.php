<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Contact extends CI_Model
{
	
	public function get_name()
	{
		$this->load->database();
		$query=$this->db->get('posts');
		return $query->result();
	}
}

?>