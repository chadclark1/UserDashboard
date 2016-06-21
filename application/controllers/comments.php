<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {


	public function show_comments($id){

		// echo "hi comment"; die();

		$this->load->model('Comment');

		$comments = $this->Comment->get_all_comments();

		// var_dump($comments); die();

		$this->session->set_userdata('comments', $comments);


		redirect("/messages/show_messages/$id");

		// var_dump($this->session->userdata('comments'));
		// die();

		// $this->load->view('show');
	}

	public function add_comment($user_id, $message_id, $id){

		$this->load->model('Comment');


		$comment = $this->input->post('comment');


		$this->Comment->add($comment, $user_id, $message_id);

		redirect("/users/show/$id");

	
	}

}