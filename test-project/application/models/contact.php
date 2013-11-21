<?php

class Contact extends CI_Model
{
	// get all records by this function
	public function get_all_contacts($num=3, $start=0)
	{
		$this->db->select()->from('contactlist')->order_by('id', 'desc')->limit($num,$start);
		$query = $this->db->get();
		return $query->result_array();
	}

	function add_new_contact($data)
	{
		$this->db->insert('contactlist', $data);
		return;
	}

	function get_contact_count()
	{
		$this->db->select('id')->from('contactlist');
		$query = $this->db->get();
		return $query->num_rows();
	}

	function detail_contact($id)
	{
		$this->db->select()->from('contactlist')->where(array('id' => $id));
		$query = $this->db->get();
		return $query->first_row('array');
	}

	function update_contact($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('contactlist',$data);
	}

	function delete_contact($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('contactlist');
	}

}
?>