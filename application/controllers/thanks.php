<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thanks extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['content'] = $this->load->view('thanks', NULL, TRUE);
		$this->render('default', $data);	    
	}
}