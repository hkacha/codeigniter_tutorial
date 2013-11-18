<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('post');
		$data['posts'] = $this->post->get_posts();
		$this->load->view('post_index',$data);
	}
}

?>