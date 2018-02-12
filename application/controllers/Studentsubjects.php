<?php


class Studentsubjects extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->Model('Subject_model');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$data['loads']= $this->Subject_model->get_student_load($this->session->userdata['flag']['StudentID']);
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/studentsubjects',$data);
			$this->load->view('dashboard_student/footer');
		}
		else {
			redirect('Studentlogin');
		}
	}



}