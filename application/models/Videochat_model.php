<?php


class Videochat_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_videochat($id){
		return $this->db
		->where('VideochatUploader', $id)
		->join('table_faculty','table_videochat.VideochatUploader=table_faculty.FacultyID','left')
		->order_by('VideochatDate','DESC')	
		->get('table_videochat')->result_array();
	}


	public function get_videochat_faculty($id){
		return $this->db
			->where('StudentID', $id)
			->join('table_faculty_load', 'table_student_load.FacultyLoadID=table_faculty_load.FacultyLoadID')
			->join('table_faculty', 'table_faculty_load.FacultyID=table_faculty.FacultyID')
			->join('table_videochat', 'table_faculty.FacultyID=table_videochat.VideochatUploader')
			->order_by('VideochatDate','asc')
			->get('table_student_load')->result_array();


	}

	public function insert_video($data){
		return $this->db->insert('table_videochat', $data);
	}

	public function edit_video($id,$data){
		$id = array('VideochatID'=> $this->input->post('id'));
		$this->db->where($id)->update('table_videochat',$data);
    	return true;
	}

}