<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrations extends MY_Controller {

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
        $this->add_top_js('jquery.tablesorter.min');
        $this->add_top_js('admin/table');
        $this->add_css('tablesorter');
        
        $this->config->load('admin_pagination');
        $config = $this->config->item('pagination');
		$config['total_rows'] = $this->Registration_Model->count_some();
		$config['per_page'] = 30;
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url('admin/registrations/index/');

		$this->pagination->initialize($config);
		
		$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
		$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
		$this->render('admin', $data);			
	}

	function printer()
	{
		$data['registrations'] = $this->Registration_Model->get_all();
		$this->load->view('admin/registrations/printer', $data);
	}	
    
    function export()
    {
        if ($this->Registration_Model->count_all())
        {
            $this->load->helper(array('excel', 'inflector'));
            to_excel($this->Registration_Model->get_all_export(), date('Y-m-d'));    
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>No Data to Export.</div>');
            redirect('admin/registrations');        
        }
    }
}