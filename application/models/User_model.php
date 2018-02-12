<?php


class User_model extends CI_Model
{
	
	public function register_user() {
		$this->load->database();
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->db->insert('table_user',$data);
		$x = $this->db->insert_id();

		$data = array(
			'Firstname' => $this->input->post('firstname'),
			'Lastname' => $this->input->post('lastname'),
			'Email' => $this->input->post('email'),
			'UserID'=>$x
		);
			return $this->db->insert('table_student', $data);
	}


	public function login_user($data) {
		$this->load->database();
		$result = $this->db->where($data)
				 ->join('table_student','table_user.UserID=table_student.UserID')
				 ->get('table_user');
		 if ($result->num_rows()==1) {

		 	var_dump($result);
		 	$result = $result->result_array();
		 	return $result[0];
		 } else {
		 	var_dump($result);
		 	// return false;
		 }
	}


}