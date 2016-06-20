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

		// var_dump($messages[0]); die();

		// var_dump($messages); die();

		// $this->load->view('show', array('messages' => $messages));

		return $messages;

	}

	public function add_message($id)
	{
		$this->load->model('Message');

		// var_dump($this->session->all_userdata()); die;

		// $user_id = $this->session->userdata['user_id'];

		$message = $this->input->post('message');


		$this->Message->add($id, $message);

		// redirect('/users/show');
		

		// var_dump($this->set_info($user_id)); die();

		// $this->show_messages($id);

	}

}