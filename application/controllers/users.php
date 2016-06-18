<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function registration()
	{
		$this->load->view('register');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function addnew()
	{
		$this->load->view('new');
	}

	public function dashboard()
	{
		$this->load->model('User');

		$users = $this->User->show_users();

		$this->load->view('dashboard', array('users' => $users));

	}


	public function register()
	{

		$this->load->model('User');

		$user_info=$this->input->post();

		$this->load->library("form_validation");
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required|matches[password]');
		
		if($this->form_validation->run() === FALSE)
		{
		     $this->session->set_flashdata("login_error", "Please complete the registration form.");
            redirect("/users/registration");
		}

		$user_email = $this->User->get_user_by_email($user_info);

		if($user_email != NULL){
			$this->session->set_flashdata("login_error", "There is already and account associated with this email address");
            redirect("/users/registration");
		} else {

			$user = array(
               'user_email' => $user_info['email'],
               'user_first_name' => $user_info['first_name'],
               'user_last_name' => $user_info['last_name'],
               'is_logged_in' => true,
               'user_id' => $user_data['id']
            );

			

			$password = $user_info['password'];
			

			$salt = bin2hex(openssl_random_pseudo_bytes(22));

			$encrypted_password = md5($password . '' . $salt);

			$this->User->add($user_info, $salt, $encrypted_password);

		}
		

		// var_dump($this->User->add($user_info, $salt, $encrypted_password)); die();

		$this->session->set_userdata($user);

		$this->load->view('show');

	}

	public function authenticate()
	{

		$this->load->model('User');

		$user_info=$this->input->post();
		$email = $this->input->post('email');
        $password = $this->input->post('password');


		$this->load->library("form_validation");
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if($this->form_validation->run() === FALSE)
		{
		     $this->session->set_flashdata("login_error", "The email or password is incorrect");
            redirect("/users/signin");
		}

		$user_data = $this->User->get_user_by_email($user_info);

        if($user_data == NULL){
			$this->session->set_flashdata("login_error", "The email or password is incorrect");
            redirect("/users/signin");
		}

		 $encrypted_password = md5($password . '' . $user_data['salt']);

		 if($user_data['password'] === $encrypted_password){

        	$user = array(
               'user_email' => $user_data['email'],
               'user_first_name' => $user_data['first_name'],
               'user_last_name' => $user_data['last_name'],
               'is_logged_in' => true,
               'user_level' => $user_data['level'],
               'user_id' => $user_data['id']
            );

        	$this->session->set_userdata($user);

        	$this->load->view('show');
        } else {
      
			$this->session->set_flashdata("login_error", "The email address or password is incorrect.");
            redirect("/users/signin");
		}


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}





	public function create_new_user()
	{

		$this->load->model('User');

		$user_info=$this->input->post();

		$this->load->library("form_validation");
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required|matches[password]');
		
		if($this->form_validation->run() === FALSE)
		{
		     $this->session->set_flashdata("login_error", "Please complete the new user form.");
            redirect("/users/new");
		}

		$user_email = $this->User->get_user_by_email($user_info);

		if($user_email != NULL){
			$this->session->set_flashdata("login_error", "There is already and account associated with this email address");
            redirect("/users/new");
		} else {


			

			$password = $user_info['password'];
			

			$salt = bin2hex(openssl_random_pseudo_bytes(22));

			$encrypted_password = md5($password . '' . $salt);

			$this->User->add($user_info, $salt, $encrypted_password);

		}
		

		// var_dump($this->User->add($user_info, $salt, $encrypted_password)); die();

		$this->load->view('dashboard');

	}

	public function edit()
	{
		$this->load->model('User');

		$id = $this->session->userdata('user_id');

		$user_data = $this->User->get_user_by_id($id);

		$this->load->view('edit', array('user_data' => $user_data));

		// $this->load->view('edit');
	}


	public function update_password()
	{
		$this->load->model('User');

		$user_info=$this->session->all_userdata();

		$this->load->library("form_validation");
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() === FALSE)
		{
		     $this->session->set_flashdata("login_error", "The passwords do not match or your password is not long enough");
            redirect("/users/edit");
		}

		$password = $this->input->post('password');
			

		$salt = bin2hex(openssl_random_pseudo_bytes(22));

		$encrypted_password = md5($password . '' . $salt);

		$id = $this->session->userdata('user_id');

		$this->User->update_password($id, $salt, $encrypted_password);

		$user_data = $this->User->get_user_by_id($id);

		$user = array(
               'user_email' => $user_data['email'],
               'user_first_name' => $user_data['first_name'],
               'user_last_name' => $user_data['last_name'],
               'is_logged_in' => true,
               'user_level' => $user_data['level'],
               'user_id' => $user_data['id']
            );

        	$this->session->set_userdata($user);

        	$this->session->set_flashdata("success", "Password successfully changed");

		$this->load->view('edit', array('user_data' => $user_data));

	}


	public function update_info()
	{
		$this->load->model('User');

		$user_info=$this->session->all_userdata();

		$this->load->library("form_validation");
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if($this->form_validation->run() === FALSE)
		{
		     $this->session->set_flashdata("login_error", "Please make sure all fields are filled");
            redirect("/users/edit");
		}

		$form_info = $this->input->post();

		$id = $this->session->userdata('user_id');

		$this->User->update_info($form_info, $id);

		$user_data = $this->User->get_user_by_id($id);

		$user = array(
               'user_email' => $user_data['email'],
               'user_first_name' => $user_data['first_name'],
               'user_last_name' => $user_data['last_name'],
               'is_logged_in' => true,
               'user_level' => $user_data['level'],
               'user_id' => $user_data['id']
            );

        	$this->session->set_userdata($user);

		$this->load->view('edit', array('user_data' => $user_data));
	}


	public function update_description()
	{
		$this->load->model('User');

		$user_info=$this->session->all_userdata();

		$description = $this->input->post('description');

		$id = $this->session->userdata('user_id');

		$this->User->update_description($description, $id);

		$user_data = $this->User->get_user_by_id($id);

		$user = array(
               'user_email' => $user_data['email'],
               'user_first_name' => $user_data['first_name'],
               'user_last_name' => $user_data['last_name'],
               'is_logged_in' => true,
               'user_level' => $user_data['level'],
               'user_id' => $user_data['id']
            );

        	$this->session->set_userdata($user);

		$this->load->view('edit', array('user_data' => $user_data));
	}





}