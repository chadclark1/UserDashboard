<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Model {

	function get_all_comments(){
		
		return $this->db->query( "SELECT * FROM comments") ->result_array();

	}

	function add($comment, $user_id, $message_id){

		$query = "INSERT INTO comments (comment, created_at, users_id, messages_id) VALUES (?,?,?, ?)";

		// var_dump($query); die();

		$values = array($comment,date("Y-m-d H:i:s"), $user_id, $message_id);

		// var_dump($query);
		// var_dump($values); die();

		return $this->db->query($query, $values);
	}


}