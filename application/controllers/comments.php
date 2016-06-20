<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	// public function show()
	// {
	// 	$this->load->library('../controllers/users/show');
	// }

	public function show_comments(){

		echo "hi"; die();

		$this->load->model('Comment');

		$comments = $this->Comment->get_all_comments();

		// var_dump($comments); die();

		return $comments;
	}

	public function add_comment($user_id, $message_id){

		$this->load->model('Comment');


		$comment = $this->input->post('comment');


		$this->Comment->add($comment, $user_id, $message_id);

	
	}

}