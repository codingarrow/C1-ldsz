<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Archives extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		
		if (!$this->redux_auth->logged_in())
		{
			redirect('account/login');		
		}
		else
		{
		    $profile = $this->redux_auth->profile();

            if ($profile->group != 'admin')
				redirect('account');		
		}
		
		$this->load->model('Registration_Model');
	}
    
	function index()
	{
        $this->add_top_js('jquery-ui-1.8.18.custom.min');
        $this->add_css('jquery-ui/jquery-ui-1.8.18.custom');
            
		$data['content'] = $this->load->view('admin/archives/index', NULL, TRUE);
		$this->render('admin', $data);			
	}

    function dates()
    {
	    $this->form_validation->set_rules('start', 'Start Date', 'required');
	    $this->form_validation->set_rules('end', 'End Date', 'required');
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
	    
	    if ($this->form_validation->run() == false)
	    {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>Fields are required.</div>');
            redirect('admin/archives');
        }
        else
        {
            $this->session->set_userdata('start', $this->input->post('start'));
            $this->session->set_userdata('end', $this->input->post('end'));
            redirect('admin/archives/page');
        }
    }
    
    function page()
    {
        $start = $this->session->userdata('start');
        $end = $this->session->userdata('end');
        
        if ($start && $end)
        {
            $this->add_top_js('jquery.tablesorter.min');
            $this->add_top_js('admin/table');
            $this->add_css('tablesorter');
            
            $this->config->load('admin_pagination');
            $config = $this->config->item('pagination');
            $config['total_rows'] = $this->Registration_Model->count_some_date($this->session->userdata('start'), $this->session->userdata('end'));
            $config['per_page'] = 30;
            $config['uri_segment'] = 4;
            $config['base_url'] = site_url('admin/archives/page/');

            $this->pagination->initialize($config);
            
            $data['registrations'] = $this->Registration_Model->get_some_date($config['per_page'], $this->uri->segment(4), $this->session->userdata('start'), $this->session->userdata('end'));    
            $data['content'] = $this->load->view('admin/archives/page', $data, TRUE);
            $this->render('admin', $data);	    
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>Fields are required.</div>');
            redirect('admin/archives');        
        }
    }
    
	function printer()
	{
        $start = $this->session->userdata('start');
        $end = $this->session->userdata('end');
        
        if ($start && $end)
        {
            $data['registrations'] = $this->Registration_Model->get_all_date($this->session->userdata('start'), $this->session->userdata('end'));
            $this->load->view('admin/archives/printer', $data);   
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>Fields are required.</div>');
            redirect('admin/archives');        
        }
	}	
    
    function export()
    {
        $start = $this->session->userdata('start');
        $end = $this->session->userdata('end');
        
        if ($start && $end)
        {
            if ($this->Registration_Model->count_all_date($this->session->userdata('start'), $this->session->userdata('end')))
            {
                $this->load->helper(array('excel', 'inflector'));
                to_excel($this->Registration_Model->get_all_export_date($this->session->userdata('start'), $this->session->userdata('end')), date('Y-m-d'));    
            }
            else
            {
                $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>No Data to Export.</div>');
                redirect('admin/archives');        
            }
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>Fields are required.</div>');
            redirect('admin/archives');        
        }
    }
}