<?php


class Teachersubjects extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Subject_model');

	}

	public function index () {
		if ($this->session->userdata('session')) {
			$data['subjects'] = $this->Subject_model->get_subject();
			$data['loads'] = $this->Subject_model->get_load(array('FacultyID'=>$this->session->userdata['session']['FacultyID']));
			$data['addstudent'] = $this->Subject_model->get_student();	
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/subjects', $data);
			$this->load->view('dashboard_teacher/footer',$data);
		}
		else {
			redirect('Login');
		}
		
	}


	public function add_load(){

		if ($this->session->userdata('session')) {
			
				$this->form_validation->set_rules('daycode', 'dayCode', 'required');
				$this->form_validation->set_rules('timestart', 'timeStart', 'required');
				$this->form_validation->set_rules('timeend', 'timeEnd', 'required');

				if($this->form_validation==FALSE){
					$this->load->view('dashboard_teacher/header');
					$this->load->view('dashboard_teacher/subjects', $data);
					$this->load->view('dashboard_teacher/footer',$data);

				} 
				else{
					$this->Subject_model->create_load();
					redirect('Teachersubjects',$data);
				}
		}

		else{
			redirect('Login');
		}

			
		}
		

	public function view_students($load){

		if ($this->session->userdata('session')) {
			
				$xx = array(
							'SchoolWorksLoad' => $load
							);
				$data['load_details'] = $this->Subject_model->get_load_details($load);
				$data['load_students'] = $this->Subject_model->get_load_students($load);
				$data['addstudent'] = $this->Subject_model->get_student();
				$data['uploaded_file'] = $this->Subject_model->get_upload($xx);	
				$this->load->view('dashboard_teacher/header');
				$this->load->view('dashboard_teacher/subject_view_students', $data);
				$this->load->view('dashboard_teacher/footer', $data);
		}

		else {
			redirect('Login');
		}

	}


	public function save(){

		if ($this->session->userdata('session')) {
			
			$this->load->database();
			echo "<pre>";
			print_r($this->input->post('student'));
			echo "</pre>";


			$load = $this->input->post('faculty_load');
			$students = $this->input->post('student');

			foreach ($students as $student) {
				$data = array(
					'StudentID' =>	 $student,
					'FacultyLoadID' => $load
				);

				$this->db->insert('table_student_load',$data);
			}

		}

		else {
			redirect('Login');
		}

		
	}


}


?>