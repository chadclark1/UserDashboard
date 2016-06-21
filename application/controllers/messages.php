<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function set_info($id)
	{

		// $this->load->library("../controllers/users/set_user_info($id)");

		$this->load->library('../controllers/users');

		$this->users->set_user_info($id);
	}

	public function show_messages($id){

		$this->load->model('Message');

		$messages = $this->Message->get_all_messages_by_id($id);

		// $posts = $this->Message->get_all_messages();

		// $this->session->set_userdata('posts', $posts); 



		$this->session->set_userdata('messages', $messages);

		// var_dump($this->session->all_userdata()); die();


		// redirect("/comments/show_comments");

		$this->load->view('show');



	}

	public function add_message($id)
	{


		$this->load->model('Message');


		$message = $this->input->post('message');


		$this->Message->add($id, $message);

		$data = $this->session->all_userdata();	

		redirect("/users/show/$id");
		

	}

}