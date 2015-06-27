<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

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
				redirect('account/login');		
		}
		
		$this->load->model(array('Meta_Model', 'User_Model'));
	}
    
	function index()
	{
		$data['users'] = $this->User_Model->get_users();
		$this->load->view('admin/profile/index', $data);			
	}  
	
	
	function edituser()
	{
	
		if (!$this->input->post('old_password'))
		{
			$this->form_validation->set_rules('old_password', 'Old Password');
			$this->form_validation->set_rules('password', 'Password');
			$this->form_validation->set_rules('password', 'Retype Password', 'matches[retype_password]');
		}
		else
		{
			$this->form_validation->set_rules('old_password', 'Old Password', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password', 'Retype Password', 'required|matches[retype_password]');			
		}
			
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
	    
		$account = $this->redux_auth->profile();

	    if ($this->form_validation->run() == FALSE)
	    {	
			//echo "hello world";
			$data['user'] = $account;
			$data['content'] = $this->load->view('admin/profile/edituser', $data);
			//$this->render('admin', $data);
	    }
	    else
	    {
			if ($this->input->post('old_password'))
			{		
				$old = $this->input->post('old_password');
				$new = $this->input->post('password');
				
				$identity = $this->session->userdata($this->config->item('identity'));
				
				$change = $this->redux_auth->change_password($identity, $old, $new);
			
				if ($change)
				{
					$data = array(
									'username' => $this->input->post('username'),
									'email' => $this->input->post('email')
								);
									
					$this->User_Model->update($account->id, $data);
					
					$data = array(
									'first_name' => $this->input->post('first_name'),
									'last_name' => $this->input->post('last_name')
								);
									
					$this->Meta_Model->update($account->id, $data);
					
                    $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Profile was successfully edited.</div>');
					redirect('account/logout');
				}
				else
				{	
					$data['message'] = '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>Password Change Failed</div>';
					$data['user'] = $account;
					$data['content'] = $this->load->view('admin/profile/index', $data, TRUE);
					$this->render('admin', $data);
				}
			}
			else
			{
				$data = array(
								'username' => $this->input->post('username'),
								'email' => $this->input->post('email')
							);
								
				$this->User_Model->update($account->id, $data);
				
				$data = array(
								'first_name' => $this->input->post('first_name'),
								'last_name' => $this->input->post('last_name')
							);
								
				$this->Meta_Model->update($account->id, $data);
				
                $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Profile was successfully edited.</div>');
				redirect('admin/profile');
			}
	    }
	
	}
	
	function adduser()
	{
	
		/*if (!$this->input->post('old_password'))
		{
			$this->form_validation->set_rules('old_password', 'Old Password');
			$this->form_validation->set_rules('password', 'Password');
			$this->form_validation->set_rules('password', 'Retype Password', 'matches[retype_password]');
		}
		else
		{*/
			//$this->form_validation->set_rules('old_password', 'Old Password', 'required');		
		//}
			
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password', 'Retype Password', 'required|matches[retype_password]');	
	    
		$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		
		if ($this->form_validation->run() == FALSE)
	    {			
			//$data['user'] = $account;
			//$data['content'] = $this->load->view('admin/profile/edituser', $data, TRUE);
			//$this->render('admin', $data);
			$this->load->view('admin/profile/adduser');
	    }
	    else
	    {
		
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$group_id = $this->input->post('user_type');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));	
			//$password = $this->redux_auth->hash_password($password);
			
			$sql = "INSERT INTO users(group_id,username,password,email) " .
				   "VALUES ('{$group_id}', '{$username}', '{$password}', '{$email}')";
			$this->db->query($sql);
			
			$uid = $this->db->insert_id();
			echo $uid;
			
			$sql2 = "INSERT INTO meta(user_id,first_name,last_name) " .
				   "VALUES ('{$uid}', '{$first_name}', '{$last_name}')";
			$this->db->query($sql2);
			
			redirect('admin/profile');
			
	    }
	}
	
	
	public function check_email($email)
	{
	    $check = $this->User_Model->checkemail($email);
	    
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
	
	
	public function check_username($username)
	{
	    $check = $this->User_Model->checkusername($username);
	    
	    if ($check)
	    {
	        $this->form_validation->set_message('check_username', 'The Username "'.$username.'" already exists.');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}
	
	
	// --------------------------------------------------------------------

	function delete($user_id)
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		$this->session->set_flashdata('deleteUser', $user_id);
		$data['deleteUser'] = $user_id;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		$this->load->view('admin/profile/delete', $data);
	}

	// --------------------------------------------------------------------

	function delete_confirmed()
	{
		$user_id = (int) $this->session->flashdata('deleteUser');

		//echo $user_id;
		//echo ""
		
		if ($this->User_Model->deleteUser($user_id))
		{
			$this->session->set_flashdata('message', 'User deleted');
			//echo "hello world";
			redirect('admin/profile/');
		}
		else
		{
			$this->session->set_flashdata('message', 'Error in deleting User');
			//echo "hello";
			redirect('admin/profile/');
		}
	}
	
	
}