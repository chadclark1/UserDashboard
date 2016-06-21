<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Model {

	function get_all_messages_by_id($id){
		
		return $this->db->query( "SELECT * FROM messages WHERE users_id = ?", array($id)) ->result_array();

	}

	function add($id, $message){

		$query = "INSERT INTO messages (message, created_at, users_id) VALUES (?,?,?)";

		// var_dump($query); die();

		$values = array($message,date("Y-m-d H:i:s"), $id);

		// var_dump($query);
		// var_dump($values); die();

		return $this->db->query($query, $values);
	}


	// function get_all_comments_by_message_id($id){
	// 	return $this->db->query("SELECT * FROM messages LEFT JOIN comments ON messages.id=comments.messages_id WHERE messages_id = $id";) -> result_array();
	// }

	function get_all_messages(){
		return $this->db->query("SELECT * FROM messages") -> result_array();
	}


}