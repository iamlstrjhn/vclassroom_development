<?php


class Teacherdashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Subject_model');	
        $this->load->model('Schoolworks_model');
	}

	public function index () {	
		if ($this->session->userdata('session')) {
			$data['uploaded_file'] = $this->Subject_model->get_requirements();	
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/dashboard_menu',$data);
			$this->load->view('dashboard_teacher/footer');
		}
		else {
			$this->load->view('Login/login');
		}
		
	}

}