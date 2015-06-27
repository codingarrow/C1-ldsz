<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Memberlist extends MY_Controller {

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
		//$this->load->model('Membership_Model');
	
        $this->add_top_js('jquery.tablesorter.min');
        $this->add_top_js('admin/table');
        $this->add_css('tablesorter');
        
        $this->config->load('admin_pagination');
        $config = $this->config->item('pagination');
		$config['total_rows'] = $this->Registration_Model->count_some();
		$config['per_page'] = 1000;
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url('admin/memberlist/index/');

		$this->pagination->initialize($config);
		
		$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
		$data['registrations'] = $this->Registration_Model->get_some();
		//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
		//$data['registrations'] = $this->Membership_Model->get_all();
		$data['count'] = $this->Registration_Model->count_members();
		$data['count2'] = $this->Registration_Model->count_nonmembers();
		$data['content'] = $this->load->view('admin/memberlist/index', $data, TRUE);
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
	
	
	function search()
	{
		$search_firstname = $this->input->post('search_firstname');
		$search_lastname = $this->input->post('search_lastname');
		$search_email = $this->input->post('search_email');
		$search_phone = $this->input->post('search_phone');
		$search_ccdnum = $this->input->post('search_ccdnum');
		
		
		if(!empty($search_firstname) && empty($search_lastname) && empty($search_email) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getfirstname($search_firstname);
		}
		elseif(!empty($search_lastname) && empty($search_firstname) && empty($search_email) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getlastname($search_lastname);
		}
		elseif(!empty($search_email) && empty($search_lastname) && empty($search_firstname) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemail($search_email);
		}
		elseif(!empty($search_phone) && empty($search_lastname) && empty($search_firstname) && empty($search_email) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getphone($search_phone);
		}
		elseif(!empty($search_ccdnum) && empty($search_lastname) && empty($search_firstname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Registration_Model->getmemberccdnum($search_ccdnum);
		}
		elseif(!empty($search_firstname) && !empty($search_ccdnum) && empty($search_lastname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Registration_Model->getccdnumfname($search_firstname,$search_ccdnum);
		}
		elseif(!empty($search_lastname) && !empty($search_ccdnum) && empty($search_firstname) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Registration_Model->getccdnumlname($search_lastname,$search_ccdnum);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_ccdnum) && empty($search_email) && empty($search_phone))
		{
			$data['searches'] = $this->Registration_Model->getccdnumname($search_firstname,$search_lastname,$search_ccdnum);
		}
		elseif(!empty($search_email) && !empty($search_ccdnum) && empty($search_lastname) && empty($search_firstname) && empty($search_phone))
		{
			$data['searches'] = $this->Registration_Model->getccdemail($search_email,$search_ccdnum);
		}
		elseif(!empty($search_phone) && !empty($search_ccdnum) && empty($search_lastname) && empty($search_firstname) && empty($search_email))
		{
			$data['searches'] = $this->Registration_Model->getccdphone($search_phone,$search_ccdnum);
		}
		elseif(!empty($search_email) && !empty($search_phone) && !empty($search_ccdnum) && empty($search_lastname) && empty($search_firstname))
		{
			$data['searches'] = $this->Registration_Model->getccdemailphone($search_email,$search_phone,$search_ccdnum);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && empty($search_email) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getname($search_firstname,$search_lastname);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_phone) && empty($search_email) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getnamephone($search_firstname,$search_lastname,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_email) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemailname($search_firstname,$search_lastname,$search_email);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_email) && !empty($search_phone) && !empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getallsearch($search_firstname,$search_lastname,$search_email,$search_phone,$search_ccdnum);
		}
		elseif(!empty($search_firstname) && !empty($search_email) && empty($search_lastname) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemailfname($search_firstname,$search_email);
		}
		elseif(!empty($search_lastname) && !empty($search_email) && empty($search_firstname) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemaillast($search_lastname,$search_email);
		}
		elseif(!empty($search_firstname) && !empty($search_phone) && empty($search_lastname) && empty($search_email) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getphonefname($search_firstname,$search_phone);
		}
		elseif(!empty($search_lastname) && !empty($search_phone) && empty($search_firstname) && empty($search_email) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getphonelast($search_lastname,$search_phone);
		}
		elseif(!empty($search_email) && !empty($search_phone) && empty($search_lastname) && empty($search_firstname) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemailphone($search_email,$search_phone);
		}
		elseif(!empty($search_lastname) && !empty($search_email) && !empty($search_phone) && empty($search_firstname) && empty($search_email) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemailphonelname($search_lastname,$search_email,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_email) && !empty($search_phone) && empty($search_lastname) && empty($search_firstname) && empty($search_email) && empty($search_phone) && empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getemailphonefname($search_firstname,$search_email,$search_phone);
		}
		elseif(!empty($search_firstname) && !empty($search_lastname) && !empty($search_email) && !empty($search_phone) && !empty($search_ccdnum))
		{
			$data['searches'] = $this->Registration_Model->getallmember();
		}
		$this->load->view('admin/memberlist/search', $data);
	}	
	
}