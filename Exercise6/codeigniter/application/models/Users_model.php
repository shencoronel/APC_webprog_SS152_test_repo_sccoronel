<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_users(){
		$query = $this->db->get('users');
		return $query->result();
	}

	public function insert_users_to_db($data){
		return $this->db->insert('users', $data);
	}

	public function getById($user_id){
		$query = $this->db->get_where('users', array('user_id' => $user_id));
		return $query->row_array();
	}

	public function show_users(){
		$query = $this->db->get('users');
		$query_result = $query->result();
		return $query_result;
	}
// Function To Fetch Selected Student Record
	public function show_users_id($data){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
// Update Query For Selected Student
	public function update_users_id1($id,$data){
		$this->db->where('user_id', $id);
		$this->db->update('users', $data);
	}

	public function delete_a_user($user_id){
		$this->db->where('users.user_id', $user_id);
		return $this->db->delete('users');
	}
}

?>