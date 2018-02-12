<?php


class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url','form');
        $this->load->Model('Faculty_model');
	}

	public function index () {

		if ($this->session->userdata('session')) {
			redirect('Teacherdashboard');
		}
		else {
			$this->load->view('Login/login');
		}
	}

	

	public function register() {
			
					$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
					$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
					$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
					$this->form_validation->set_rules('username', 'username', 'trim|required');
					$this->form_validation->set_rules('password', 'Password', 'trim|required');
					$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
					
					if ($this->form_validation->run() === FALSE) 
					{
						$this->load->view('Login/register');
					}

				else 
				{
					
					$this->Faculty_model->register_user();
					redirect('Login');
				}
	
	}


	public function login_acct() {
					
					$this->form_validation->set_rules('username', 'Username','trim|required');
					$this->form_validation->set_rules('password', 'Password','trim|required');

					if ($this->form_validation->run() == FALSE) {
						redirect('Login');
					} 
					else {

						$data = array(
							'username'=>$this->input->post('username'),
							'password'=>md5($this->input->post('password'))

						);
						if($result = $this->Faculty_model->login_user($data)){
					
								$this->session->set_userdata('session', $result);
								$this->session->set_flashdata('success','Data inserted!');
								redirect('Teacherdashboard');
							
						}
						else {
							
							redirect('Login');
						}
					}

	}

	public function logout_acct()
	 {
	   $this->session->unset_userdata('session');
	   session_destroy();
	   redirect('Login');
	 }


}