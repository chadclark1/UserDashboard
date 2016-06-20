<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {


	function add($user_info, $salt, $encrypted_password){

		$query = "INSERT INTO users (email, password, salt, first_name, last_name, created_at) VALUES (?,?,?,?,?,?)";

		$values = array($user_info['email'], $encrypted_password, $salt, $user_info['first_name'], $user_info['last_name'], date("Y-m-d H:i:s"));

		// var_dump($query);
		// var_dump($values); die();

		return $this->db->query($query, $values);
	}

	function get_user_by_email($user_info){
		
		return $this->db->query( "SELECT * FROM users WHERE email = ?", array($user_info)) ->row_array();

	}

	function get_user_by_id($id){
		
		return $this->db->query( "SELECT * FROM users WHERE id = ?", array($id)) ->row_array();

	}

	function show_users(){
		
		return $this->db->query( "SELECT * FROM users")->result_array();

	}

	function update_password($id, $salt, $encrypted_password){
		return $this->db->query("UPDATE users SET password=?,salt=?,updated_at=? WHERE id=?", array($encrypted_password, $salt, date("Y-m-d H:i:s"), $id));
	}

	function update_info($form_info, $id){

		// $query = "UPDATE users SET (first_name, last_name, updated_at) WHERE ? VALUES (?,?,?)";

		// $values = array($form_info['first_name'], $form_info['last_name'], $form_info['email'], date("Y-m-d H:i:s"), $id);

		return $this->db->query("UPDATE users SET first_name=?,last_name=?,email=?,updated_at=? WHERE id=?", array($form_info['first_name'], $form_info['last_name'], $form_info['email'], date("Y-m-d H:i:s"), $id));
	}

	function update_description($description, $id){

		return $this->db->query("UPDATE users SET description=?,updated_at=? WHERE id=?", array($description, date("Y-m-d H:i:s"), $id));
	}

	function delete($id){
		return $this->db->query("DELETE FROM users WHERE id = $id");
	}


}

