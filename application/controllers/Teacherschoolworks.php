<?php


class Teacherschoolworks extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
        $this->load->helper('url');
        $this->load->Model('Schoolworks_model');
        $this->load->model('Subject_model');


	}

	public function index () 
	{
		if ($this->session->userdata('session')) 
		{

			$id= $this->session->userdata['session']['UserID'];
			$data['loads'] = $this->Subject_model->get_load(
                                        array('FacultyID'=>$this->session->userdata['session']['FacultyID'])
                                        );
                        $filter = $this->input->get('filter');
			$data['upload_data'] = $this->Schoolworks_model->getcontent($filter,$id);
			$this->load->view('dashboard_teacher/header', $data);
			$this->load->view('dashboard_teacher/schoolworks', $data);
			$this->load->view('dashboard_teacher/footer', $data);
		}
		else
		 {
			$this->load->view('Login/login');
		}
	}


	public function post_content () {

		$this->form_validation->set_rules('content', 'SchoolWorksContent', 'required');
			if($this->form_validation->run() === FALSE){
			redirect('Teacherschoolworks');
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
                                        'SchoolWorksUploader'=>$this->session->userdata['session']['UserID']
                                );

                                $this->Schoolworks_model->create_content($data);
        			redirect('Teacherschoolworks', $data);
                        }

			}

	}

	public function edit_content(){

			$this->form_validation->set_rules('content', 'SchoolWorksContent', 'required');
			if($this->form_validation->run() === FALSE){
				redirect('Teacherschoolworks');
			} 
			else
                        {

				$config['upload_path']              = './uploads/';
                                $config['allowed_types']            = 'docx|xlsx|pdf|jpg|png|rar|pptx';
                                $config['max_size']                 = 0;
                                $config['max_filename']             = 0;
                                $config['max_filename_increment']   = FALSE;
                                $config['remove_spaces'] 	    =  TRUE;
                                
                                $this->load->library('upload',$config);
                                $this->upload->initialize($config);

                        if ( !$this->upload->do_upload())
                        {
                                $error = array('error' => $this->upload->display_errors());
                                redirect('Teacherschoolworks');
                        }
                        else
                        {
                                $data = array(
                                	'SchoolWorksLoad'=>$this->input->post('load'),
                                	'SchoolWorksContent'=>$this->input->post('content'),
                                	'SchoolWorksFile'=>$_FILES['userfile']['name'],
                                        'SchoolWorksUploader'=>$this->session->userdata['session']['UserID']
                                );
                                $this->Schoolworks_model->editcontent($id,$data);
        			redirect('Teacherschoolworks');
                        }

        		}

	       }

        /*public function delete-*/



}