<?php


class Teacherchatsession extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Chat_model');
	}

	public function index () {
		if ($this->session->userdata('session')) {
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/chatsession');
			$this->load->view('dashboard_teacher/footer');
		}
		else {
			$this->load->view('Login/login');
		}
		
	}

	public function send_message($id){

		$receiver = $id;
		if ($this->session->userdata('session')) {
			$sender = $this->session->userdata['session']['UserID'];
		}
		else {
			$sender = $this->session->userdata['flag']['UserID'];
		}
		$message = $this->input->post('message');
		$data = array(
			'log_sender'	=>	$this->session->userdata['session']['UserID'],
			'log_receiver'=> $id,
			'log_message'	=>	$message,
			'log_dateCreated'=>	time()
		);
		$this->Chat_model->send_message($data);
		
	}


	public function get_messages($id){

		if ($this->session->userdata('session')) {

			$data = array(
				'log_sender'=>$this->session->userdata['session']['UserID'],
				'log_receiver'=>$id

			);
			$ordata = array(
					'log_receiver'=>$this->session->userdata['session']['UserID'],
					'log_sender'=>$id

			);

			$messages = $this->Chat_model->get_messages($data,$ordata);

			$string = null;
			if ($this->session->userdata('session')) {
				$me = $this->session->userdata['session']['UserID'];
			}
			else {
				$me = $this->session->userdata['flag']['UserID'];
			}
			foreach ($messages as $m) {
				if ($m['log_sender']==$me) {
					echo "<div class='message col s12'>
					<div class='card-for-chat-1  light-blue lighten-3'>
					<p>".$m['log_message']."</p>
					</div>
					</div>"; 
				}
				else{
					echo "<div class='message col s12'>
					<div class='card-for-chat-3 black-text grey lighten-2'>
					<p>".$m['log_message']."</p>
					</div>
					</div>";
				}
			}


		}
		
		elseif ($this->session->userdata('flag')) {

			$data = array(
				'log_sender'=>$this->session->userdata['flag']['UserID'],
				'log_receiver'=>$id

			);

			$messages = $this->Chat_model->get_messages($data);

			$string = null;
			foreach ($messages as $m) {
				if ($m['log_sender']==$this->session->userdata['session']['UserID']) {
					echo "<div class='message col s12'>
					<div class='card-for-chat-1  light-blue lighten-3'>
					<p>".$m['log_message']."</p>
					</div>
					</div>"; 
				}
				else{
					echo "<div class='message col s12'>
					<div class='card-for-chat-3 black-text grey lighten-2'>
					<p>".$m['log_message']."</p>
					</div>
					</div>";
				}

			}


		}

	}


	


}