<?php 

class Profile_model extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function getprofile($id){
		return $this->db
				->where('FacultyID', $id)
				->join('table_user','table_faculty.UserID=table_user.UserID')
				->get('table_faculty')->result_array();
	}

	public function edit_profile($id,$data){
		$id = array('FacultyID'=> $this->input->post('id'));
		$this->db->where($id)
		->update('table_faculty',$data);
    	return true;
	}


	public function edit_profile_photo($id,$data,$Photo){
		$data = array('Photo' => $Photo, );
		$this->db->where($id)->update('table_faculty',$data);
    	return true;
	}



	public function get_student_profile($id){
		return $this->db
					->where('StudentID', $id)
					->join('table_user', 'table_student.UserID=table_user.UserID')
					->get('table_student')->result_array();
	}

	public function edit_student_profile($id,$data){
		$id = array('StudentID' => $this->input->post('id'));
		$this->db->where($id)
		->update('table_student', $data);
		return true;
	}

		public function edit_student_photo($id,$data,$Photo){
		$data = array('Photo' => $Photo, );
		$id = array('StudentID'=> $this->input->post('id'),
					);
		$this->db->where($id)->update('table_student',$data);
    	return true;
	}

	public function get_student_account($id){
		return $this->db
					->where('UserID', $id)
					->get('table_user')->result_array();
	}

	public function update_student_password($id,$data){
		$this->db->where('UserID',$id)
				->update('table_user', $data);
				return true;
	}

	public function get_teacher_account($id){
		return $this->db
					->where('UserID', $id)
					->get('table_user')->result_array();
	}

	public function update_teacher_password($id,$data){
		$this->db->where('UserID',$id)
				->update('table_user', $data);
				return true;
	}


}