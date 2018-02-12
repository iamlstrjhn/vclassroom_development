<?php 

class Profile_model extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function getprofile($id){
		return $this->db
				->where('UserID', $id)
				->get('table_faculty')->result_array();
	}

	public function edit_profile($id,$data){
		$id = array('FacultyID'=> $this->input->post('id'));
		$this->db->where($id)->update('table_faculty',$data);
    	return true;
	}


	public function get_student_profile($id){
		return $this->db
					->where('UserID', $id)
					->get('table_student')->result_array();
	}

	public function edit_student_profile($id,$data){
		$id = array('StudentID' => $this->input->post('id'));
		$this->db->where($id)->update('table_student', $data);
		return true;
	}

}