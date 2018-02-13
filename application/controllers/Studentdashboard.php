<?php


class Studentdashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Schoolworks_model');
        $this->load->model('Subject_model');
	}

	public function index () {
		if ($this->session->userdata('flag')) {
			$data['loads']= $this->Subject_model->get_student_load($this->session->userdata['flag']['StudentID']);
			$id = $this->session->userdata['flag']['UserID'];
			$data['insert_data'] = $this->Schoolworks_model->getrequirements($id);
			$data['count_activities'] =$this->Subject_model->get_activities($this->session->userdata['flag']['StudentID']);
			$data['count_registered_subjects'] = $this->Subject_model->count_subjects($this->session->userdata['flag']['StudentID']);
			$data['count_teachers']= $this->Subject_model->count_teachers($this->session->userdata['flag']['StudentID']);
			$this->load->view('dashboard_student/header', $data);
			$this->load->view('dashboard_student/dashboard_menu', $data);
			$this->load->view('dashboard_student/footer');
		}
		
		else {
			redirect('Studentlogin');
		}
	
	}


	public function upload_requirements(){

			if ($this->session->userdata('flag')) 
			{

				$this->form_validation->set_rules('content', 'SchoolWorksContent', 'required');

				if($this->form_validation->run() === FALSE)
				{
				redirect('Studentdashboard');
				} 

				else
	            {
						$config['upload_path']          = './uploads/';
		                $config['allowed_types']        = 'docx|xlsx|pdf|jpg|png|rar|pptx';
		                $config['max_size']             = 0;
		                $config['max_filename']         = 0;
		                $config['max_filename_increment'] = FALSE;
		                $config['remove_spaces'] 	    = TRUE;
		                
				        $this->load->library('upload',$config);
				        $this->upload->initialize($config);

				              	if ( !$this->upload->do_upload())
				                {
				                  $error = array('error' => $this->upload->display_errors());
				                  var_dump($error);
				                }


				                else
				                {
				                    $data = array(
				                      	'SchoolWorksLoad'=>$this->input->post('load'),
				                       	'SchoolWorksContent'=>$this->input->post('content'),
				                        'SchoolWorksFile'=>$_FILES['userfile']['name'],
				                        'SchoolWorksUploader'=>$this->session->userdata['flag']['UserID']
				                        );

				                        $this->Schoolworks_model->create_content($data);
				                        redirect('Studentdashboard');
				                }

				}

			}

			else
			{
				redirect('Studentlogin');
			}

		
	}



			public function edit_content(){

				$this->form_validation->set_rules('content', 'SchoolWorksContent', 'required');
				if($this->form_validation->run() === FALSE)
				{
					redirect('Studentdashboard');
				} 
				else
	                {

	        				$config['upload_path']              = './uploads/';
	                        $config['allowed_types']            = 'docx|xlsx|pdf|jpg|png|rar|pptx';
	                        $config['max_size']                 = 0;
	                        $config['max_filename']             = 0;
	                        $config['max_filename_increment']   = FALSE;
	                        $config['remove_spaces'] 	   		=  TRUE;
	                                        
	                        $this->load->library('upload',$config);
	                        $this->upload->initialize($config);

	                        	if ( !$this->upload->do_upload())
	                               {
	                                  	$error = array('error' => $this->upload->display_errors());
	                                    redirect('Studentdashboard');
	                                }
	                                        
	                             else
	                                 {
	                                     $data = array(
	                                          	'SchoolWorksLoad'=>$this->input->post('load'),
	                                             'SchoolWorksContent'=>$this->input->post('content'),
	                                             'SchoolWorksFile'=>$_FILES['userfile']['name'],
	                                             'SchoolWorksUploader'=>$this->session->userdata['flag']['UserID']
	                                                );
	                                    $this->Schoolworks_model->edit_student_content($id,$data);
	                        			redirect('Studentdashboard');
	                                  }

	                }

	       }


}