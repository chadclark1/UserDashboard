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

		// var_dump($this->session->all_userdata()); die;

		// $user_id = $this->session->userdata['user_id'];

		$message = $this->input->post('message');


		$this->Message->add($id, $message);

		$data = $this->session->all_userdata();

		// var_dump($data['user_email']); die();

		$userdata = array(
               'user_email' => $data['user_email'],
               'user_first_name' => $data['user_first_name'],
               'user_last_name' => $data['user_last_name'],
               'is_logged_in' => true,
               // 'user_level' => $data['level'],
               'user_id' => $data['user_id']
            );

        	$this->session->set_userdata($userdata);



		redirect('/users/show/$id');
		

		// var_dump($this->set_info($user_id)); die();

		// $this->show_messages($id);

	}

}