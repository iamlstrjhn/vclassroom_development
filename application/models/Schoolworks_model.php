<?php 

class Schoolworks_model extends CI_Model {

	function __construct(){
		$this->load->database();
	}


	public function getcontent ($filter="", $id) {
		
		if ($filter!="") {
			return $this->db
			->where('SubjectDescription', $filter)
			->where('SchoolWorksUploader', $id)
			->join('table_faculty_load','SchoolWorksLoad=FacultyLoadID')
			->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
			->order_by('SchoolWorksDate','desc')
			->get('table_post_schoolworks')->result_array();
			}

		else 	
		{
			return $this->db
			->where('SchoolWorksUploader', $id)
			->join('table_faculty_load','SchoolWorksLoad=FacultyLoadID')
			->join('table_subjects','table_faculty_load.SubjectsID=table_subjects.SubjectsID')
			->order_by('SchoolWorksDate','desc')
			->get('table_post_schoolworks')->result_array();
			}

		
	}

	public function getcontent_fromfaculty($id){
			return $this->db
			->where('StudentID', $id)
			->join('table_faculty_load', 'table_student_load.FacultyLoadID=table_faculty_load.FacultyLoadID')
			->join('table_subjects', 'table_faculty_load.SubjectsID=table_subjects.SubjectsID')
			->join('table_post_schoolworks','table_faculty_load.FacultyLoadID=table_post_schoolworks.SchoolWorksLoad')
			->get('table_student_load')->result_array();
	}

	public function create_content($data) {
		 $this->db->insert('table_post_schoolworks', $data);
	}


	public function editcontent($id,$data){
		$id = array('SchoolworksID'=> $this->input->post('id'));
		$this->db->where($id)->update('table_post_schoolworks',$data);
    	return true;
	}


	/*this portion is for the student part*/


	public function getrequirements($id){
		return $this->db
		->where('SchoolWorksUploader',$id)
		->join('table_faculty_load', 'SchoolWorksLoad=FacultyLoadID')
		->join('table_subjects', 'table_faculty_load.SubjectsID=table_subjects.SubjectsID')
		->get('table_post_schoolworks')->result_array();	
	}






}