<?php


class Teachermessage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Subject_model');
		$this->load->model('Chat_model');
	}

	public function index () {
		if ($this->session->userdata('session')) {
			$id = $this->session->userdata['session']['FacultyID'];
			$data['get_student_list'] = $this->Chat_model->get_student_list($id);
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/messages', $data);
			$this->load->view('dashboard_teacher/footer', $data);
		}
		else {
			$this->load->view('Login/login');
		}
	}

	public function message($room){
		if ($this->session->userdata('session')) {
			$data['name'] = $this->Chat_model->get_name($room);
			$data['id'] = $room;
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/chatsession',$data);
			$this->load->view('dashboard_teacher/footer');
		}
		else {
			$this->load->view('Login/login');
		}

	}

}