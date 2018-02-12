<?php


	class Subject_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_subject() {
		
		return $this->db->get('table_subjects')->result_array();
	}

	public function get_student(){
		return $this->db->get('table_student')->result_array();
	}

	public function create_load(){

		$data = array(
				'FacultyID'=>$this->session->userdata['session']['FacultyID'],
				'SubjectsID' => $this->input->post('subject'),
				'timeStart' => $this->input->post('timestart'),
				'timeEnd' => $this->input->post('timeend'),
				'dayCode' => $this->input->post('daycode')
				);

		return $this->db->insert('table_faculty_load', $data);	
		}
		
	public function get_load($data){
		
		return $this->db->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
			 ->get('table_faculty_load')->result_array();
		}



	public function get_student_load($data){
		return $this->db->where('StudentID',$data)
						->join('table_faculty_load','table_student_load.FacultyLoadID=table_faculty_load.FacultyLoadID')
						->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
						->join('table_faculty','table_faculty_load.FacultyID=table_faculty.FacultyID')
			 			->get('table_student_load')->result_array();
		}

	public function get_load_details($load){

		$result= $this->db->where('FacultyLoadID',$load)
						->join('table_subjects', 'table_faculty_load.SubjectsID=table_subjects.SubjectsID')
						->get('table_faculty_load')->result_array();
						return $result[0];
	}

	public function get_load_students($load){

		return	$this->db->where('FacultyLoadID', $load)
						->join('table_student', 'table_student_load.StudentID=table_student.StudentID')
						->get('table_student_load')->result_array();
	}


	public function get_upload($xx){
		return $this->db->where($xx)
		->join('table_user', 'SchoolWorksUploader=UserID')
		->join('table_student', 'table_user.UserID=table_student.UserID')
		->join('table_faculty_load','SchoolWorksLoad=FacultyLoadID')
		->get('table_post_schoolworks')->result_array();
	}

	public function get_requirements() {
	return $this->db->join('table_user', 'SchoolWorksUploader=UserID')
					->join('table_student', 'table_user.UserID=table_student.UserID')
					->join('table_faculty_load','SchoolWorksLoad=FacultyLoadID')
					->get('table_post_schoolworks')->result_array();

	}

	/*this part is for the count part shitness*/

	public function count_subjects($id){
		return $this->db->where('StudentID', $id)
						->get('table_student_load')->num_rows();
	}

	public function get_activities($id){
			return $this->db
			->where('FacultyID',$id)
			->get('table_faculty_load')->num_rows();
	}

	public function count_teachers($data){
		return $this->db
			->where('StudentID', $data)
						->join('table_faculty_load','table_student_load.FacultyLoadID=table_faculty_load.FacultyLoadID')
						->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
						->join('table_faculty','table_faculty_load.FacultyID=table_faculty.FacultyID')
			->get('table_student_load')->num_rows();
	}		

}