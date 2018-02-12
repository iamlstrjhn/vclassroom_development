<?php



class Announcement_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}


	public function get_announcement($id){
		return $this->db
		->where('AnnouncementUploader', $id)
		->join('table_faculty','AnnouncementUploader=FacultyID','left')
		->order_by('AnnouncementDate','desc')	
		->get('table_announcements')->result_array();
	}


	public function get_announcement_prof($id){
		return $this->db
		->where('StudentID', $id)
		->join('table_faculty_load', 'table_student_load.FacultyLoadID=table_faculty_load.FacultyLoadID')
		->join('table_faculty', 'table_faculty_load.FacultyID=table_faculty.FacultyID')
		->join('table_announcements', 'table_faculty.FacultyID=table_announcements.AnnouncementUploader')
		->order_by('AnnouncementDate','desc')	
		->get('table_student_load')->result_array();

	}


	public function insert_announcement($data){
	$this->db->insert('table_announcements',$data);
	}

	public function edit_announcement($id,$data){
		$id = array('AnnouncementID'=> $this->input->post('id'));
		$this->db->where($id)->update('table_announcements',$data);
    	return true;
	}

}

