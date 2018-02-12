<?php


class Teacherschedules extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Announcement_model');
        $this->load->model('Subject_model');
	}

	public function index () {
		if ($this->session->userdata('session')) {
			$id = $this->session->userdata['session']['FacultyID'];
			$data['announcement'] = $this->Announcement_model->get_announcement($id);
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/schedules', $data);
			$this->load->view('dashboard_teacher/footer',$data);
		}
		else {
			redirect('Login');
		}
	}


	public function add_announcement(){

			if ($this->session->userdata('session')) 
			{

				$this->form_validation->set_rules('title', 'AnnouncementTitle', 'required');
				$this->form_validation->set_rules('content', 'AnnouncementContent', 'required');
				$this->form_validation->set_rules('sched', 'AnnouncementSched', 'required');

				if($this->form_validation->run() ===FALSE)
				{
					$this->load->model('Announcement_model');
					$data['announcement'] = $this->Announcement_model->get_announcement();
					redirect('Teacherschedules', $data);
				} 

				else
				{
					
					$data = array(
						'AnnouncementTitle'=>$this->input->post('title'),
						'AnnouncementContent'=>$this->input->post('content'),
						'AnnouncementSched'=>$this->input->post('sched'),
						'AnnouncementUploader'=>$this->session->userdata['session']['FacultyID']
					);


					$this->Announcement_model->insert_announcement($data);
					redirect('Teacherschedules');
				}
				
			}

			else
			{
				redirect('Login');
			}

		}


	public function update_announcement(){

			if ($this->session->userdata('session')) 
			{
				
				$this->form_validation->set_rules('title', 'AnnouncementTitle', 'required');
				$this->form_validation->set_rules('content', 'AnnouncementContent', 'required');
				$this->form_validation->set_rules('sched', 'AnnouncementSched', 'required');
				
				if($this->form_validation->run()===FALSE)
				{
					$this->load->model('Announcement_model');
					$data['announcement'] = $this->Announcement_model->get_announcement();
					redirect('Teacherschedules', $data);
				}

				else 
				{
					$data = array(
						'AnnouncementTitle'=>$this->input->post('title'),
						'AnnouncementContent'=>$this->input->post('content'),
						'AnnouncementSched'=>$this->input->post('sched')
					);
					$this->Announcement_model->edit_announcement($id,$data);
					redirect('Teacherschedules');
				
				}

			}

			else
			{
				redirect('Login');
			}


	}
	

}

