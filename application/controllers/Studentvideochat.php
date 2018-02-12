<?php


class Studentvideochat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$id = $this->session->userdata['flag']['StudentID'];
			$data['videochat'] = $this->Videochat_model->get_videochat_faculty($id);
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/videochat', $data);
			$this->load->view('dashboard_student/footer');
		}

		else{
			redirect('Studentlogin');
		}
	}

}