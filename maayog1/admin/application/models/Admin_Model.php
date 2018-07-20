<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model{
function __construct() {
	parent::__construct();
}

	public function all_users() {
	  $this->db->select('*');
	  $this->db->from('form');
	  $result = $this->db->get();
	  return $result->result();
	}
	public function registerUser() {
		$data = array(
		"FullName" => $this->input->post('FirstName').' '.$this->input->post('LastName'),
		"FirstName" => $this->input->post('FirstName'),
		"LastName" => $this->input->post('LastName'),
		"EmailAddress" => $this->input->post('EmailAddress'),
		"MobileNumber" => $this->input->post('MobileNumber'),
		"Password" => $this->input->post('Password'),
		"CreatedBy" => $this->input->post('EmailAddress'),
		"CreatedOn" => date('Y-m-d: H:i:s'),
		"Status" => 1,
		"MarkAsDelete" => 0,
		);
		
	  $query = $this->db->insert('registered_user',$data);
	  // echo $this->db->last_query(); die();
	  if($query){
		  return true;
	  }else{
		  return false;
	  }
	  
	} 
	public function check_user() {
		$where = array(
			"EmailAddress" => $this->input->post('EmailAddress'),
			"Status" => 1,
			"MarkAsDelete" => 0,
		);
		$query = $this->db->get_where('registered_user',$where);
		$count = $query->num_rows();
		
		if($count == 0){
			$isAvailable = True;
		}else{
			$isAvailable = False;
		}   
		echo json_encode(array('valid' => $isAvailable));
	}
	public function check_mail() {
		$where = array(
			"EmailAddress" => $this->input->post('EmailAddress'),
			"Status" => 1,
			"MarkAsDelete" => 0,
		);
		$query = $this->db->get_where('registered_user',$where);
		$count = $query->num_rows();
		
		if($count == 0){
			$isAvailable = False;
		}else{
			$isAvailable = True;
		}   
		echo json_encode(array('valid' => $isAvailable));
	}
	public function check_login() {
		$where = array(
			"EmailAddress" => $this->input->post('EmailAddress'),
			"Password" => $this->input->post('Password'),
			"Status" => 1,
			"MarkAsDelete" => 0,
		);
		$query = $this->db->get_where('registered_user',$where);
		$count = $query->num_rows();
		if($count == 1){
			$result = $query->row_array();
				$sess_data = array(
				"UserId" => $result['UserId'],
				"FirstName" => $result['FirstName'],
				"LastName" => $result['LastName'],
				"FullName" => $result['FullName'],
				"EmailAddress" => $result['EmailAddress']
			);
			// print_
			$this->session->set_userdata($sess_data);
			return true;
		}else{
			return false;
		}   
	}
}
?>