<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chat_model extends CI_Model {
function __construct()
	{
		parent::__construct();
		$this->load->database();
		// $this->db->db_debug = FALSE;
	}
	
	function get_messages($data,$ordata){
		$result = $this->db->where($data)
		->or_where($ordata)
		->get('message_log')->result_array();
		return $result;
	}
	
	function send_message($data){
		$this->db->insert('message_log',$data);
		return true;
	}

	function get_name($id){

		$data = array(
			'UserID'=>$id
		);
		$result = $this->db->where($data)->get('table_user')->row_array();
		if ($result['type']=='student') {
				$result = $this->db->where('UserID',$id)->get('table_student')->row_array();
				$name = $result['Firstname'].' '.$result['Lastname'];
				return $name;
		}
		else{	
			$result = $this->db->where('UserID',$id)->get('table_faculty')->row_array();
				$name = $result['Firstname'].' '.$result['Lastname'];
				return $name;
		}

	}

	/*this part is for the student side*/






	function get_names($id){

		$data = array(
			'UserID'=>$id
		);
		$result = $this->db->where($data)->get('table_user')->row_array();
		if ($result['type']=='faculty') {
				$result = $this->db->where('UserID',$id)->get('table_faculty')->row_array();
				$name = $result['Firstname'].' '.$result['Lastname'];
				return $name;
		}
		else{	
			$result = $this->db->where('UserID',$id)->get('table_student')->row_array();
				$name = $result['Firstname'].' '.$result['Lastname'];
				return $name;
		}

	}




	/*end of the student side*/


	function get_student_list ($id){

		$result =  $this->db
						->where('table_faculty_load.FacultyID', $id)
						->join('table_student_load','table_student_load.StudentID=table_student.StudentID')
						->join('table_faculty_load','table_faculty_load.FacultyLoadID=table_student_load.FacultyLoadID')
						->group_by('table_student.StudentID')
						->get('table_student')->result_array();
						return $result;
	}


	
	/*function trigger_finder($data){
		$triggers = $this->db->select('trigger_keyword')->get('message_trigger')->result_array();
		$triggers = ($triggers);
		$data = explode(" ", $data);
		$log = array();
		foreach ($triggers as $trigger) {
			if(in_array($trigger['trigger_keyword'], $data)){
				$log[].= $trigger['trigger_keyword'];
			}
		}
		if (empty($log)) {
			return FALSE;
		}
		else{
			return $log;
		}	
	}

	function create_report($data){

		foreach ($data as $keyword) {
			$message = "Keyword ".$keyword." has been triggered in session no. ".$this->session->userdata['chat_room']['room'];
			$this->db->insert('notification',array('notification_message'=>$message));
		}
	}*/


}