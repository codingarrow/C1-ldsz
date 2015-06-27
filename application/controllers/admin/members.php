<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends MY_Controller {

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
		
		$this->add_top_js('jquery-ui-1.8.18.custom.min');
        $this->add_css('jquery-ui/jquery-ui-1.8.18.custom');
		
        $this->add_css('tablesorter');
        
        $this->config->load('admin_pagination');
        $config = $this->config->item('pagination');
		//echo "hello world";
		$config['total_rows'] = $this->Registration_Model->count_some();
		
		$config['per_page'] = 30;
		$config['uri_segment'] = 4;
		$config['base_url'] = site_url('admin/members/index/');

		$this->pagination->initialize($config);
		
		$member_chk = $this->input->post('member_chk');
		
		$this->form_validation->set_rules('member_lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('member_firstname', 'First Name', 'required');
		//$this->form_validation->set_rules('member_company', 'Company', 'required');
		$this->form_validation->set_rules('member_address1', 'Address 1', 'required');
		$this->form_validation->set_rules('member_country', 'Country', 'required');
		$this->form_validation->set_rules('member_city', 'City', 'required');
		//$this->form_validation->set_rules('member_state', 'State', 'required');
		//$this->form_validation->set_rules('member_zip', 'Zipcode', 'required|callback_check_zip[member_country]');
		$this->form_validation->set_rules('member_zip', 'Zipcode', 'required');
		if($member_chk == 1)
		{
			$this->form_validation->set_rules('member_email', 'Email', 'required|valid_email|callback_check_email');
		}
		$this->form_validation->set_rules('member_phonenumber', 'Phone Number', 'required');
		$this->form_validation->set_rules('relationship_manager', 'Relationship Manager', 'required');
		$this->form_validation->set_rules('verified_by', 'Verified By', 'required');
		$this->form_validation->set_rules('member_chk','Is Member?', '');

		
		/*if($member_chk == 1)
		{
			$this->form_validation->set_rules('card_type', 'Card Type', 'required');
			$this->form_validation->set_rules('name_on_card', 'Name On Card', 'required');
			$this->form_validation->set_rules('cardnumber', 'Card Number', 'required|max_length[16]');
			$this->form_validation->set_rules('cvv', 'CVV', 'required');
		}*/
	
		$this->form_validation->set_rules('billing_address1', 'Billing Address 1', 'required');
		$this->form_validation->set_rules('billing_city', 'Billing City', 'required');
		$this->form_validation->set_rules('billing_country', 'Billing Country', 'required');
		//$this->form_validation->set_rules('billing_state', 'Billing State', 'required');
		$this->form_validation->set_rules('billing_zip', 'Billing Zip', 'required');
		
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		if ($this->form_validation->run() == FALSE)
	    {			
			
			$data['member_company'] = $this->input->post('member_company');
			$data['member_address2'] = $this->input->post('member_address2');
			$data['member_website'] = $this->input->post('member_website');
			$data['member_alternatephone'] = $this->input->post('member_alternatephone');
			$data['member_facebook'] = $this->input->post('member_facebook');
			$data['member_zip'] = $this->input->post('member_zip');
			$data['member_website'] = $this->input->post('member_website');
			$data['member_country'] = $this->input->post('member_country');
			
			
			$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
			$data['content'] = $this->load->view('admin/members/index', $data, TRUE);
			$this->render('admin', $data);
	    }
	    else
	    {
			
			//$data = array(			
                            $member_lastname = $this->input->post('member_lastname');
                            $member_firstname = $this->input->post('member_firstname');
                            $member_company = $this->input->post('member_company');
                            $member_address1 = $this->input->post('member_address1');
							$member_address2 = $this->input->post('member_address2');
                            $member_country = $this->input->post('member_country');
                            $member_city = $this->input->post('member_city');
							$us_state = $this->input->post('us_state');
							$ca_state = $this->input->post('ca_state');
							if(isset($us_state) || !empty($us_state))
							{
								$member_state = $us_state;
							}
							elseif(isset($ca_state) || !empty($ca_state))
							{
								$member_state = $ca_state;
							}
                            $member_zip = $this->input->post('member_zip');
                            $member_birthdate = $this->input->post('member_birthdate');
							$member_birthmonth = $this->input->post('member_birthmonth');
							$member_status = $this->input->post('member_status');
							$member_type = $this->input->post('member_type');
							$member_signupdate = $this->input->post('member_signupdate');
							$member_phonenumber = $this->input->post('member_phonenumber');
							$member_alternatephone = $this->input->post('member_alternatephone');
							$member_email = $this->input->post('member_email');
							$member_website = $this->input->post('member_website');
							$member_facebook = $this->input->post('member_facebook');
							$relationship_manager = $this->input->post('relationship_manager');
							$verified_by = $this->input->post('verified_by');
							$source = $this->input->post('source');
							$name_on_card = $this->input->post('name_on_card');
							$card_type = $this->input->post('card_type');
							$cardnumber = $this->input->post('cardnumber');
							$expiry_month = $this->input->post('expiry_month');
							$expiry_day = $this->input->post('expiry_year');
							$cvv = $this->input->post('cvv');
							$giftcardtype = $this->input->post('giftcardtype');
							$giftcardnumber = $this->input->post('giftcardnumber');
							$giftcvv = $this->input->post('giftcvv');
							$gift_expiry_month = $this->input->post('gift_expiry_month');
							$gift_expiry_year = $this->input->post('gift_expiry_year');
							$billing_address1 = $this->input->post('billing_address1');
							$billing_address2 = $this->input->post('billing_address2');
							$billing_country = $this->input->post('billing_country');
                            $billing_city = $this->input->post('billing_city');
                            $usbill_state = $this->input->post('usbill_state');
							$cabill_state = $this->input->post('cabill_state');
							if(isset($usbill_state) || !empty($usbill_state))
							{
								$billing_state = $usbill_state;
							}
							elseif(isset($cabill_state) || !empty($cabill_state))
							{
								$billing_state = $cabill_state;
							}
                            $billing_zip = $this->input->post('billing_zip');
							$member_chk = $this->input->post('member_chk');
							
            //            );
		    //var_dump($data);
            //echo "hello world";                 
            //this->Membership_Model->insert($data);
			//$this->db->insert('tbl_memberinfo', $data);
            
			$sql = "INSERT INTO tbl_memberinfo(member_lastname,member_firstname,member_company,member_address1,member_address2,member_country,member_city,member_state,member_zip, member_birthdate,member_birthmonth,member_status,member_type,member_signupdate,member_phonenumber,member_alternatephone,
			        member_email,member_website,member_facebook,relationship_manager,verified_by,source,name_on_card,card_type,cardnumber,expiry_month,expiry_day,cvv,giftcard_type,giftcard_number,giftcard_cvv,giftcard_exp_month,giftcard_exp_year,billing_address1,billing_address2,billing_city,billing_country,billing_state,billing_zip,is_member) " .
				   "VALUES ('{$member_lastname}', '{$member_firstname}', '{$member_company}', '{$member_address1}', '{$member_address2}', '{$member_country}', '{$member_city}', '{$member_state}', '{$member_zip}', '{$member_birthdate}', '{$member_birthmonth}', '{$member_status}', '{$member_type}', 
				    '{$member_signupdate}', '{$member_phonenumber}', '{$member_alternatephone}', '{$member_email}', '{$member_website}', '{$member_facebook}', '{$relationship_manager}', '{$verified_by}', '{$source}', '{$name_on_card}', '{$card_type}', AES_ENCRYPT('{$cardnumber}','12345'), '{$expiry_month}', '{$expiry_day}', '{$cvv}', '{$giftcardtype}', '{$giftcardnumber}', '{$giftcvv}', '{$gift_expiry_month}', '{$gift_expiry_year}', '{$billing_address1}', '{$billing_address2}', '{$billing_city}', 
					'{$billing_country}', '{$billing_state}', '{$billing_zip}' , '{$member_chk}')";
			$this->db->query($sql);
			
			if($member_chk == 1)
			{
				$memID = $member_firstname . $member_birthmonth . $member_birthdate;
				
				$sql2 = "Update tbl_memberinfo set member_id = '" . $memID . "' where ID = " . $this->db->insert_id();
				$this->db->query($sql2);
			}
			
			//$to = "ivy@salesrain.com";
			$to = $member_email;
			
			$subject = 'Sales Rain Gold Membership';
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html\r\n";
			$headers .= 'From: info@salesrain.com' ."\r\n";
			$message = 'Dear Mr/Ms. ' . $member_firstname . ' ' . $member_lastname . ', <br><br>
						Thank you for being part of our Sales Rain Gold Member Program.<br>
						As one of our prestigious Gold member, you will have special<br>
						member only discounts, access to special products, information, <br>
						and many other benefits.  To access these benefits, go to our <br>
						website <a href="http://www.salesrainplaza.com" target="_blank">www.salesrainplaza.com</a>; or speak to one of our friendly<br>
						relationship managers at 1-858-240-4079.<br><br>
						<strong>Your Memberhip ID is : ' . $memID . '</strong><br>
						Please quote this Gold member ID in all your communication with us.<br><br>
						Sales Rain is a Sales and Marketing International Call Center <br>
						Company. Founded in 2005 and Headquartered in Los Angeles, CA, <br>
						USA, Company has its operations in Philippines, India, Middle <br>
						East, and South America. Sales Rain is proud to announce is latest<br>
						product offering - Sales Rain Plaza. Through Sales Rain Plaza,<br>
						Filipinos abroad can send flowers, chocolates, electronics items,<br>
						cellphone loads and other items to their families and relatives in <br>
						their home country. Our highly experienced and talented management<br>
						team ensures the best quality of service at best prices to put <br>
						smiles in the lives of your families. Sometimes a small thing you <br>
						do, can mean everything in other person\'s life. And we make that<br>
						possible for you.  Your account has been charged a non refundable <br>
						gold member fee of $50 per year.  The membership will be renewed <br>
						every year unless cancelled..  We hope to provide you value in our <br>
						products and services.  Please check our website and your emails <br>
						on a regular basis for latest product offerings and promos.<br><br><br>
						Thank You!<br><br>
						Sales Rain Management Team';
				
			if($member_chk == 1)
			{
				mail($to, $subject, $message, $headers);
			}
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Member Registered</div>');
            redirect('admin/memberlist');		
		
			//$this->load->view('admin/memberlist/index');
		}
	}
	
	public function check_email($member_email)
	{
	    $check = $this->Registration_Model->check($member_email);
	    
	    if ($check)
	    {
	        $this->form_validation->set_message('check_email', 'The Email "'.$member_email.'" already exists.');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}
	
	
	public function check_zip($country, $member_zip)
	{
		if ($country == 'US')
		{
			//if((strlen($member_zip) > 5) && ($member_zip 
			//	$this->form_validation->set_message('check_zip', 'The %s field can not be the word "test"');
			//return FALSE;
			$this->form_validation->set_rules('member_zip', 'Zipcode', 'max_length[5]|numeric');
			return TRUE;
		}
		else if($country == 'Canada')
		{
			//return TRUE;
			$this->form_validation->set_rules('member_zip', 'Zipcode', 'max_length[6]|alpha_numeric');
			return TRUE;
		}
	}

	
	
	
	
	
	function edit()
	{
		
		$pid = $this->uri->segment(4);
		$member_chk = $this->input->post('member_chk');
		$data['ccnum_qry'] = $this->Registration_Model->get_member_ccnum($pid);
		
		$this->form_validation->set_rules('member_lastname', 'Last Name', '');
		$this->form_validation->set_rules('member_firstname', 'First Name', '');
		$this->form_validation->set_rules('member_company', 'Company', '');
		$this->form_validation->set_rules('member_address1', 'Address 1', '');
		$this->form_validation->set_rules('member_country', 'Country', '');
		$this->form_validation->set_rules('member_city', 'City', '');
		$this->form_validation->set_rules('member_state', 'State', '');
		$this->form_validation->set_rules('member_zip', 'Zipcode', '');
		$this->form_validation->set_rules('member_email', 'Email', '');
		$this->form_validation->set_rules('member_phonenumber', 'Phone Number', '');
		$this->form_validation->set_rules('relationship_manager', 'Relationship Manager', '');
		$this->form_validation->set_rules('verified_by', 'Verified By', '');
		/*if($member_chk == 1)
		{
			$this->form_validation->set_rules('name_on_card', 'Name On Card', 'required');
			$this->form_validation->set_rules('cardnumber', 'Card Number', 'required');
			$this->form_validation->set_rules('cvv', 'CVV', 'required');
		}*/
		$this->form_validation->set_rules('billing_address1', 'Billing Address 1', '');
		$this->form_validation->set_rules('billing_city', 'Billing City', '');
		$this->form_validation->set_rules('billing_country', 'Billing Country', '');
		$this->form_validation->set_rules('billing_state', 'Billing State', '');
		$this->form_validation->set_rules('billing_zip', 'Billing Zip', '');
		
		//$this->form_validation->set_rules('billing_address', 'Billing Address', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		if ($this->form_validation->run() == FALSE)
	    {			
			$data['member'] = $this->Registration_Model->get_profile($pid);
			
			$this->load->view('admin/members/edit', $data);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			//$this->render('admin', $data);
	    }
	    else
	    {
			$memid = $this->input->post('memid');
			//echo $memID;
			/*$data = array(			
                            'member_lastname' => $this->input->post('member_lastname'),
                            'member_firstname' => $this->input->post('member_firstname'),
							'member_company' => $this->input->post('member_company'),
                            'member_address' => $this->input->post('member_address'),
                            'member_country' => $this->input->post('member_country'),
                            'member_city' => $this->input->post('member_city'),
                            'member_state' => $member_state,
                            'member_zip' => $this->input->post('member_zip'),
                            'member_birthdate' => $this->input->post('member_birthdate'),
							'member_birthmonth' => $this->input->post('member_birthmonth'),
							'member_status' => $this->input->post('member_status'),
							'member_type' => $this->input->post('member_type'),
							'member_signupdate' => $this->input->post('member_signupdate'),
							'member_phonenumber' => $this->input->post('member_phonenumber'),
							'member_alternatephone' => $this->input->post('member_alternatephone'),
							'member_email' => $this->input->post('member_email'),
							'member_website' => $this->input->post('member_website'),
							'member_facebook' => $this->input->post('member_facebook'),
							'relationship_manager' => $this->input->post('relationship_manager'),
							'verified_by' => $this->input->post('verified_by'),
							'source' => $this->input->post('source'),
							'name_on_card' => $this->input->post('name_on_card'),
							'card_type' => $this->input->post('card_type'),
							'cardnumber' => $this->input->post('cardnumber'),
							'expiry_month' => $this->input->post('expiry_month'),
							'expiry_day' => $this->input->post('expiry_day'),
							'cvv' => $this->input->post('cvv'),
							'giftcard_number' => $this->input->post('giftcardnumber'),
							'giftcard_cvv' => $this->input->post('giftcvv'),
							'giftcard_exp_month' => $this->input->post('gift_expiry_month'),
							'giftcard_exp_month' => $this->input->post('gift_expiry_year'),
							'billing_address1' => $this->input->post('billing_address1'),
							'billing_address2' => $this->input->post('billing_address2'),
							'billing_city' => $this->input->post('billing_city'),
							'billing_country' => $this->input->post('billing_country'),
							'billing_state' => $this->input->post('billing_state'),
							'billing_zip' => $this->input->post('billing_zip')
                        );
			$this->Registration_Model->updateMember($memid, $data); */
			
			
			 $member_lastname = $this->input->post('member_lastname');
             $member_firstname = $this->input->post('member_firstname');
             $member_company = $this->input->post('member_company');
             $member_address1 = $this->input->post('member_address1');
			 $member_address2 = $this->input->post('member_address2');
             $member_country = $this->input->post('member_country');
             $member_city = $this->input->post('member_city');
			 $us_state = $this->input->post('us_state');
			 $ca_state = $this->input->post('ca_state');
			 if(isset($us_state) || !empty($us_state))
			 {
				$member_state = $us_state;
			 }
			 elseif(isset($ca_state) || !empty($ca_state))
			 {
				$member_state = $ca_state;
			 }
             $member_zip = $this->input->post('member_zip');
             $member_birthdate = $this->input->post('member_birthdate');
			 $member_birthmonth = $this->input->post('member_birthmonth');
			 $member_status = $this->input->post('member_status');
			 $member_type = $this->input->post('member_type');
			 $member_signupdate = $this->input->post('member_signupdate');
			 $member_phonenumber = $this->input->post('member_phonenumber');
			 $member_alternatephone = $this->input->post('member_alternatephone');
			 $member_email = $this->input->post('member_email');
			 $member_website = $this->input->post('member_website');
			 $member_facebook = $this->input->post('member_facebook');
			 $relationship_manager = $this->input->post('relationship_manager');
			 $verified_by = $this->input->post('verified_by');
			 $source = $this->input->post('source');
			 $name_on_card = $this->input->post('name_on_card');
			 $card_type = $this->input->post('card_type');
			 $cardnumber = $this->input->post('cardnumber');
			 $expiry_month = $this->input->post('expiry_month');
			 $expiry_day = $this->input->post('expiry_day');
			 $cvv = $this->input->post('cvv');
			 $giftcardtype = $this->input->post('giftcardtype');
			 $giftcardnumber = $this->input->post('giftcardnumber');
			 $giftcvv = $this->input->post('giftcvv');
			 $gift_expiry_month = $this->input->post('gift_expiry_month');
			 $gift_expiry_year = $this->input->post('gift_expiry_year');
			 $billing_address1 = $this->input->post('billing_address1');
			 $billing_address2 = $this->input->post('billing_address2');
			 $billing_country = $this->input->post('billing_country');
             $billing_city = $this->input->post('billing_city');
             $usbill_state = $this->input->post('usbill_state');
			 $cabill_state = $this->input->post('cabill_state');
			 if(isset($usbill_state) || !empty($usbill_state))
			 {
				$billing_state = $usbill_state;
			 }
			 elseif(isset($cabill_state) || !empty($cabill_state))
			 {
				$billing_state = $cabill_state;
			 }
             $billing_zip = $this->input->post('billing_zip');
			 $member_chk = $this->input->post('member_chk');
			 if($member_chk == 1)
			 {
				$member_chk = 1;
			 }
							
            //            );
		    //var_dump($data);
            //echo "hello world";                 
            //this->Membership_Model->insert($data);
			//$this->db->insert('tbl_memberinfo', $data);
			
			$sql = "UPDATE tbl_memberinfo set member_lastname = '{$member_lastname}' ,member_firstname = '{$member_firstname}' ,member_company = '{$member_company}' ,member_address1 = '{$member_address1}' ,member_address2 = '{$member_address2}' ,member_country = '{$member_country}' ,member_city  = '{$member_city}' ,member_state = '{$member_state}' ,member_zip = '{$member_zip}' ,member_birthdate = '{$member_birthdate}' ,member_birthmonth = '{$member_birthmonth}' ,member_status = '{$member_status}' ,member_type = '{$member_type}', member_signupdate = '{$member_signupdate}', member_phonenumber = '{$member_phonenumber}',
					member_alternatephone = '{$member_alternatephone}' ,member_email = '{$member_email}' ,member_website = '{$member_website}' ,member_facebook = '{$member_facebook}' ,relationship_manager = '{$relationship_manager}' ,verified_by = '{$verified_by}' ,source = '{$source}' ,name_on_card = '{$name_on_card}' ,card_type = '{$card_type}' ,cardnumber = AES_ENCRYPT('{$cardnumber}','12345') ,expiry_month = '{$expiry_month}' ,expiry_day = '{$expiry_day}' ,cvv = '{$cvv}' ,giftcard_type = '{$giftcardtype}' , giftcard_number = '{$giftcardnumber}' ,giftcard_cvv = '{$giftcvv}' ,giftcard_exp_month = '{$gift_expiry_month}' ,giftcard_exp_year = '{$gift_expiry_year}',
					billing_address1 = '{$billing_address1}' ,billing_address2 = '{$billing_address2}' ,billing_city = '{$billing_city}' ,billing_country = '{$billing_country}' ,billing_state = '{$billing_state}' ,billing_zip = '{$billing_zip}' ,is_member = '{$member_chk}' WHERE ID =  '{$memid}'";
			$this->db->query($sql);
			
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Member Detail Updated</div>');
            redirect('admin/memberlist');		
		
			//$this->load->view('admin/memberlist/index');
		}
	
	
	}
	
	
	function updateMemberID()
	{
		$memid = $this->input->post('memid');
		$member_firstname = $this->input->post('member_firstname');
		$member_birthdate = $this->input->post('member_birthdate');
		$member_birthmonth = $this->input->post('member_birthmonth');
		
		$mem_ID = $member_firstname . $member_birthmonth . $member_birthdate;
				
		$sql2 = "Update tbl_memberinfo set member_id = '" . $mem_ID . "' where ID = '" . $memid . "'";
		$this->db->query($sql2);
		
		$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Member ID Generated</div>');
        redirect('admin/memberlist');	
	
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
	
	function profile()
	{
	
		$pid = $this->uri->segment(4);
		//echo "the value is: " . $pid;
		$data['p_id'] = $pid;
		$data['orderdetails'] = $this->Registration_Model->get_orders($pid);
		$data['profile_qry'] = $this->Registration_Model->get_profile($pid);
		$data['ccnum_qry'] = $this->Registration_Model->get_member_ccnum($pid);
		$this->load->view('admin/members/profile', $data);
	
	}
	
	
	// --------------------------------------------------------------------

	function delete($mem_id)
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		$this->session->set_flashdata('deleteOrder', $mem_id);
		$data['deleteOrder'] = $mem_id;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		$this->load->view('admin/members/delete', $data);
	}

	// --------------------------------------------------------------------

	function delete_confirmed()
	{
		$mem_id = (int) $this->session->flashdata('deleteOrder');

		if ($this->Registration_Model->deleteMember($mem_id))
		{
			$this->session->set_flashdata('message', 'Member deleted');
			redirect('admin/memberlist/');
		}
		else
		{
			$this->session->set_flashdata('message', 'Error in deleting Member');
			redirect('admin/memberlist/');
		}
	}
	
	
}