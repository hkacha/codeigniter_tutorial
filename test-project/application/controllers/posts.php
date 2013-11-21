<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller
{
	
	function index($start=0)
	{
		$this->load->model('post');
		$data['posts'] = $this->post->get_posts(5,$start);
		
		// code for pagination
		$this->load->library('pagination');
		$config['base_url'] = base_url().'posts/index';
		$config['total_rows'] = $this->post->get_posts_count();
		$config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();

		$this->load->view('post_index',$data);
	}

	function post($postID)
	{
		$this->load->model('post');
		$data['post'] = $this->post->get_post($postID);
		$this->load->view('post',$data);
	}

	function new_post()
	{
		$this->load->model('post');
		if ($_POST) {
			$data=array(
				'title' => $_POST['title'],
				'post' => $_POST['post'],
				'active' => 1
			);
			$this->post->insert_post($data);
			redirect(base_url().'post/');
		} else {
			$this->load->view('new_post');
		}
	}

	function editpost($postID)
	{
		$this->load->model('post');
		if ($_POST) {
			$data=array(
				'title' => $_POST['title'],
				'post' => $_POST['post'],
				'active' => 1
			);
			$this->post->update_post($postID,$data);
		}
		$data['post']=$this->post->get_post($postID);
		$this->load->view('edit_post',$data);
	}

	function deletepost($postID)
	{
		$this->load->model('post');
		$this->post->delete_post($postID);
		redirect(base_url());
	}
}

?>