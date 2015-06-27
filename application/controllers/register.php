<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {

	function __construct()
	{
		parent::__construct();
        
        $this->load->model('Registration_Model');        
	}

	function index()
	{
	    $this->form_validation->set_rules('company_name', 'Company Name', 'required');
	    $this->form_validation->set_rules('industry', 'Industry', 'required');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email');
        $this->form_validation->set_rules('office_number', 'Office Number', 'required');
        $this->form_validation->set_rules('mobile_number', 'Mobile Number');
        $this->form_validation->set_rules('contact', 'Accept', 'required');
	    $this->form_validation->set_error_delimiters('<p style="color:white">', '</p>');
	    
	    if ($this->form_validation->run() == false)
	    {
            $this->add_top_js('jquery');
            $this->add_top_js('jquery-ui-1.8.18.custom.min');
            $this->add_css('jquery-ui/jquery-ui-1.8.18.custom');
        
            $data['content'] = $this->load->view('register', NULL, TRUE);
            $this->render('default', $data);
	    }
	    else
	    {
            $data = array(
                            'company_name' => $this->input->post('company_name'),
                            'industry' => $this->input->post('industry'),
                            'first_name' => $this->input->post('first_name'),
                            'last_name' => $this->input->post('last_name'),
                            'designation' => $this->input->post('designation'),
                            'email' => $this->input->post('email'),
                            'office_number' => $this->input->post('office_number'),
                            'mobile_number' => $this->input->post('mobile_number'),
                            'subscription' => $this->input->post('subscription'),
                            'date_created' => date('Y-m-d')
                        );
                            
            $this->Registration_Model->insert($data);
                    
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Registered</div>');
            redirect('thank-you');			
	    }
	}
    
	public function check_email($email)
	{
	    $check = $this->Registration_Model->check($email);
	    
	    if ($check)
	    {
	        $this->form_validation->set_message('check_email', 'The Email "'.$email.'" already exists.');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}    
}