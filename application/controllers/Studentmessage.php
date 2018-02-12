<?php


class Studentmessage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Subject_model');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$data['loads']= $this->Subject_model->get_student_load($this->session->userdata['flag']['StudentID']);
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/message', $data);
			$this->load->view('dashboard_student/footer');
		}
		else {
			redirect('Studentlogin');
		}
		
	}

	public function message($room){
		if ($this->session->userdata('flag')) {
			$data['name'] = $this->Chat_model->get_names($room);
			$data['id'] = $room;
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/chatsession',$data);
			$this->load->view('dashboard_student/footer');
		}
		else {
			$this->load->view('Studentlogin');
		}
	}


}