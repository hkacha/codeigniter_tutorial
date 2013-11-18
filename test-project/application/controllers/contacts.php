<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('contact');
		$data['query']=$this->contact->get_name();
		$this->load->view('contact_html',$data);
	}
}

?>