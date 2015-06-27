<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
	}
    
	function index()
	{
		redirect('account/login');
	}

	function login()
	{
	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
	    
	    if ($this->form_validation->run() == false)
	    {
            $data['content'] = $this->load->view('account/login', null, true);
            $this->render('account', $data); 
	    }
	    else
	    {
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');
	        
	        $login = $this->redux_auth->login($username, $password);
		    $profile = $this->redux_auth->profile();
			
			//var_dump($profile);
			//$profiles = $this->redux_auth->profile();
			
			/*foreach($profiles->result() as $row)
			{
				$group_name = $row->group;
			}
			
			$this->session->set_userdata('group', $group_name);*/
			
			if ($login)
			{			
				//echo "hellow";
				//$groups = $this->redux_auth->get_groupname($username);
				$sql = "SELECT * FROM users WHERE username = '$username'";
				$query = $this->db->query($sql);
				
				foreach($query->result() as $qry)
				{
					$groupid = $qry->group_id;
					$uname = $qry->username;
				}
			
				$credentials = array('groupid' => $groupid, 'uname' => $uname);
				$this->session->set_userdata($credentials);
				//$this->session->set_userdata('group', $groupid);
		
				redirect('admin');
			}
			else
			{
	            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>Invalid Login.</div>');
	            redirect('account/login');			
			}
	    }
	}
	
	function logout()
	{
		$this->redux_auth->logout();
		redirect('account/login');
	}	
}