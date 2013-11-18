<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model
{
	
	public function get_posts($num=20, $start=0)
	{
		$this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_post($postID)
	{
		$this->db->select()->from('posts')->where(array('active' => 1, 'postID'=>$postID))->order_by('date_added','desc');
		$query = $this->db->get();
		return $query->first_row('array');
	}

	function insert_post($data)
	{
		$this->db->insert('posts',$data);
		return;
	}

	function update_post($data)
	{
		$this->db->
	}
}

?>