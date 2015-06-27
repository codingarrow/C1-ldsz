<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leadslist extends MY_Controller {

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
		
		$this->load->model('Leads_Model');
	}
    
	function index()
	{
		//$this->load->model('Membership_Model');
	
        /*$this->add_top_js('jquery.tablesorter.min');
        $this->add_top_js('admin/table');
        $this->add_css('tablesorter');
        
        $this->config->load('admin_pagination');
        $config = $this->config->item('pagination');
		$config['total_rows'] = $this->Leads_Model->count_some();
		$config['per_page'] = 1000;
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url('admin/leadslist/index/');*/

		//$this->pagination->initialize($config);

		$data['count'] = $this->Leads_Model->count_leads();
		$data['leads'] = $this->Leads_Model->get_leads();
		$data['content'] = $this->load->view('admin/leadslist/index', $data, TRUE);
		$this->render('admin', $data);			
	}

	function printer()
	{
		$data['registrations'] = $this->Registration_Model->get_all();
		$this->load->view('admin/registrations/printer', $data);
	}	
    
    function export()
    {
        if ($this->Leads_Model->count_all())
        {
            $this->load->helper(array('excel', 'inflector'));
            to_excel($this->Leads_Model->get_all_export(), '');    
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>No Data to Export.</div>');
            redirect('admin/registrations');        
        }
    }
	
	
	function search()
	{
		$search_firstname = $this->input->post('search_firstname');
		$search_lastname = $this->input->post('search_lastname');
		$search_email = $this->input->post('search_email');
		$search_phone = $this->input->post('search_phone');
		//$search_ccdnum = $this->input->post('search_ccdnum');
		
		
		if(!empty($search_firstname) && empty($search_lastname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getfirstname($search_firstname);
		}
		elseif(!empty($search_lastname) && empty($search_firstname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getlastname($search_lastname);
		}
		elseif(!empty($search_email) && empty($search_lastname) && empty($search_firstname) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getemail($search_email);
		}
		elseif(!empty($search_phone) && empty($search_lastname) && empty($search_firstname) && empty($search_email))
		{
			$data['searches'] = $this->Leads_Model->getphone($search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getname($search_firstname,$search_lastname);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_phone) && empty($search_email))
		{
			$data['searches'] = $this->Leads_Model->getnamephone($search_firstname,$search_lastname,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getemailname($search_firstname,$search_lastname,$search_email);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_email) && !empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getallsearch($search_firstname,$search_lastname,$search_email,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_email) && empty($search_lastname) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getemailfname($search_firstname,$search_email);
		}
		elseif(!empty($search_lastname) && !empty($search_email) && empty($search_firstname) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getemaillast($search_lastname,$search_email);
		}
		elseif(!empty($search_firstname) && !empty($search_phone) && empty($search_lastname) && empty($search_email))
		{
			$data['searches'] = $this->Leads_Model->getphonefname($search_firstname,$search_phone);
		}
		elseif(!empty($search_lastname) && !empty($search_phone) && empty($search_firstname) && empty($search_email))
		{
			$data['searches'] = $this->Leads_Model->getphonelast($search_lastname,$search_phone);
		}
		elseif(!empty($search_email) && !empty($search_phone) && empty($search_lastname) && empty($search_firstname))
		{
			$data['searches'] = $this->Leads_Model->getemailphone($search_email,$search_phone);
		}
		elseif(!empty($search_lastname) && !empty($search_email) && !empty($search_phone) && empty($search_firstname) && empty($search_email))
		{
			$data['searches'] = $this->Leads_Model->getemailphonelname($search_lastname,$search_email,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_email) && !empty($search_phone) && empty($search_lastname) && empty($search_firstname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getemailphonefname($search_firstname,$search_email,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_email) && !empty($search_phone))
		{
			$data['searches'] = $this->Leads_Model->getallmember();
		}
		$this->load->view('admin/leadslist/search', $data);
	}	
	
}