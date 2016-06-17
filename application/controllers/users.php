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

	public function register()
	{

		$this->load->model('User');

		$user_info=$this->input->post();

		$user = array(
               'user_email' => $user_info['email'],
               'user_first_name' => $user_info['first_name'],
               'user_last_name' => $user_info['last_name'],
               'is_logged_in' => true
            );

			

		$password = $user_info['password'];
		

		$salt = bin2hex(openssl_random_pseudo_bytes(22));

		$encrypted_password = md5($password . '' . $salt);

		$this->User->add($user_info, $salt, $encrypted_password);

		// var_dump($this->User->add($user_info, $salt, $encrypted_password)); die();

		$this->load->view('show');

	}


}