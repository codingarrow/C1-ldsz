<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		
	}

	function index()
	{
		$this->load->model('Registration_Model');
        //$this->load->view('home');
		//$data['content'] = $this->load->view('home', NULL, TRUE);
		//$this->render('default', $data);	    
		//redirect('admin/account/login');
		//$prodcat = $this->uri->segment(4);
		$data['cat_products'] = $this->Registration_Model->get_catproducts();
		$data['cat_services'] = $this->Registration_Model->get_catservices();
		$data['cat_bpacks'] = $this->Registration_Model->get_catbusiness();
		$data['banners'] = $this->Registration_Model->getallbanners();
		//$data['msg'] = "hello world";
		$this->load->view('home', $data);
	}
}