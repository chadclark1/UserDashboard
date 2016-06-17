<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {


	function add($user_info, $salt, $encrypted_password){

		$query = "INSERT INTO users (email, password, salt, first_name, last_name, created_at) VALUES (?,?,?,?,?,?)";

		$values = array($user_info['email'], $encrypted_password, $salt, $user_info['first_name'], $user_info['last_name'], date("Y-m-d H:i:s"));

		// var_dump($query);
		// var_dump($values); die();

		return $this->db->query($query, $values);
	}


}

