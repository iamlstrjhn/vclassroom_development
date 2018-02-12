<?php


class Teacherlivechat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Videochat_model');
	}

	public function index () {
		if ($this->session->userdata('session')) 
		{
			$id = $this->session->userdata['session']['FacultyID'];
			$data['videochat'] = $this->Videochat_model->get_videochat($id);
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/livechat', $data);
			$this->load->view('dashboard_teacher/footer');
		}
		else 
		{
			redirect('Login');
		}
	}


	public function setlivechat(){
		if ($this->session->userdata('session')) 
		{
			
				$this->form_validation->set_rules('topic', 'VideochatTopic', 'required');
				$this->form_validation->set_rules('overview', 'VideochatOverview', 'required');
				$this->form_validation->set_rules('sched', 'VideochatSched', 'required');

				if($this->form_validation->run() ===FALSE)
				{
					$this->load->model('Videochat_model');
					$data['videochat'] = $this->Videochat_model->get_videochat();
					redirect('Teacherlivechat', $data);
				} 

				else
				{
					
					$data = array(
						'VideochatTopic'=>$this->input->post('topic'),
						'VideochatOverview'=>$this->input->post('overview'),
						'VideochatSched'=>$this->input->post('sched'),
						'VideochatUploader'=>$this->session->userdata['session']['FacultyID']
					);


					$this->Videochat_model->insert_video($data);
					redirect('Teacherlivechat');
				}


		}


		else
		{
			redirect('Login');
		}
	}

	public function updatelivechat(){
		if ($this->session->userdata('session')) 
		{
			
				$this->form_validation->set_rules('topic', 'VideochatTopic', 'required');
				$this->form_validation->set_rules('overview', 'VideochatOverview', 'required');
				$this->form_validation->set_rules('sched', 'VideochatSched', 'required');

				if($this->form_validation->run() ===FALSE)
				{
					$this->load->model('Videochat_model');
					$data['videochat'] = $this->Videochat_model->get_videochat();
					redirect('Teacherlivechat', $data);
				} 

				else
				{
					
					$data = array(
						'VideochatTopic'=>$this->input->post('topic'),
						'VideochatOverview'=>$this->input->post('overview'),
						'VideochatSched'=>$this->input->post('sched')
					);


					$this->Videochat_model->edit_video($id,$data);
					redirect('Teacherlivechat');
				}


		}


		else
		{
			redirect('Login');
		}
	}





}