<?php


class Studentlogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url','form');
        $this->load->Model('User_model');
	}

	public function index () {

		if ($this->session->userdata('flag')) {
			redirect('Studentdashboard');
		}
		else {
			$this->load->view('StudentLogin/login');
		}
	}

	

	public function register () {

		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('idnumber', 'Studentnumber', 'trim|required');
		$this->form_validation->set_rules('type', 'type', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('StudentLogin/register');
		}

		else {

			$this->User_model->register_user();
			redirect('Studentlogin');
		}
		

	}


	public function login_acct() {
		$this->form_validation->set_rules('username', 'Username','trim|required');
		$this->form_validation->set_rules('password', 'Password','trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect('Studentlogin');
		} 
		else {
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));
				$data = array(

				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))

			);
				
			if($result = $this->User_model->login_user($data)) {
			$this->session->set_userdata('flag', $result);
					redirect('Studentdashboard');
				}
			
			else {
				redirect('Studentlogin');
			}
		}
	}

	public function logout_acct()
	 {
	   $this->session->unset_userdata('flag');
	   session_destroy();
	   redirect('Studentlogin');
	 }


}