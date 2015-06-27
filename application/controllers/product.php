<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Registration_Model');
	}

	function index()
	{
        //$this->load->view('home');	    
		//redirect('admin/account/login');
		$data['categories'] = $this->Registration_Model->getallcategories();
		//$data['content'] = $this->load->view('product', $data);
		//$this->render('default', $data);
		$this->load->view('product', $data);
	}
	
	function productlist()
	{
        //$this->load->view('home');	    
		//redirect('admin/account/login');
		$prodcat = $this->uri->segment(3);
		//$data['categories'] = $this->Registration_Model->getallcategories();
		$data['cat_products'] = $this->Registration_Model->get_catproducts();
		$data['cat_services'] = $this->Registration_Model->get_catservices();
		$data['cat_bpacks'] = $this->Registration_Model->get_catbusiness();
		$data['products'] = $this->Registration_Model->get_products($prodcat);
		$data['prodcatname'] = $prodcat;
		//$data['content'] = $this->load->view('product', $data);
		//$this->render('default', $data);
		$this->load->view('product', $data);
	}
	
	function product_info()
	{
        //$this->load->view('home');	    
		//redirect('admin/account/login');
		$prodid = $this->uri->segment(3);
		//$data['categories'] = $this->Registration_Model->getallcategories();
		$data['cat_products'] = $this->Registration_Model->get_catproducts();
		$data['cat_services'] = $this->Registration_Model->get_catservices();
		$data['cat_bpacks'] = $this->Registration_Model->get_catbusiness();
		$data['product'] = $this->Registration_Model->get_product_info($prodid);
		//$data['content'] = $this->load->view('product', $data);
		//$this->render('default', $data);
		$this->load->view('product_info', $data);
	}
}