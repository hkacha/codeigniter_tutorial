<?php
// Controller

class Contacts extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('contact');
	}

	// get all records
	function index($start=0)
	{
		$data['contact'] = $this->contact->get_all_contacts(3,$start);

		// code of pagination
		$this->load->library('pagination');
		$config['base_url'] = base_url().'contacts/index';
		$config['total_rows'] = $this->contact->get_contact_count();
		$config['per_page'] = 3;

		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();
		$this->load->view('contact_index', $data);
	}

	function new_contact()
	{
		if ($_POST) {
			$data = array(
				'name' => $_POST['name'],
				'contact_no' => $_POST['contact_no']
				);
			$this->contact->add_new_contact($data);
			redirect(base_url().'contacts');
		}
		else{
			$this->load->view('new_contact');
		}
	}

	function detail_contacts($id)
	{
		$data['contact'] = $this->contact->detail_contact($id);
		$this->load->view('detail_contact',$data);
	}

	function edit_contact($id)
	{
		if ($_POST) {
			$data = array(
				'name' => $_POST['name'],
				'contact_no' => $_POST['contact_no']
			);
			$this->contact->update_contact($id, $data);
			redirect(base_url().'contacts');
		}
		$data['contact'] = $this->contact->detail_contact($id);
		$this->load->view('edit_contact', $data);
	}

	function delete_contact($id)
	{
		$this->contact->delete_contact($id);
		redirect(base_url().'contacts');
	}
}

?>