<?php


class Studentprofile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Profile_model');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$id = $this->session->userdata['flag']['UserID'];
			$data['profile'] = $this->Profile_model->get_student_profile($id);
			$this->load->view('dashboard_student/header');
			$this->load->view('dashboard_student/profile', $data);
			$this->load->view('dashboard_student/footer');
		}
		else {
			redirect('Studentlogin');
		}
		
	}


	public function update_profile(){

			if ($this->session->userdata('flag')) 
			{
				
			$this->form_validation->set_rules('firstname', 'Firstname', 'required');
			$this->form_validation->set_rules('middlename', 'Middlename', 'required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'required');
			$this->form_validation->set_rules('course', 'Course', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('contact', 'contact', 'required');

			if($this->form_validation->run()===FALSE)
			{
				$this->load->model('Profile_model');
				$data['profile'] = $this->Profile_model->getprofile(array('StudentID'=>$this->session->userdata['flag']['StudentID']));
				redirect('Studentprofile', $data);
			}

			else {
					$data = array(
						'Firstname'=>$this->input->post('firstname'),
						'Middlename'=>$this->input->post('middlename'),
						'Lastname'=>$this->input->post('lastname'),
						'Course'=>$this->input->post('course'),
						'Email'=>$this->input->post('email'),
						'Address'=>$this->input->post('address'),
						'Contact'=>$this->input->post('contact')

					);
					$this->Profile_model->edit_student_profile($id,$data);
					redirect('Studentprofile');
			
				}
			}

			else
			{
				redirect('Studentlogin');
			}

	}


}