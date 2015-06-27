<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leads extends MY_Controller {

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
				
		//$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		//$this->form_validation->set_rules('firstname', 'First Name', 'required');
		/*$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phonenumber1', 'Phone Number', 'required');*/
				
	    //$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		$addlead = $this->input->post('addlead');
		
		if(isset($addlead) && !empty($addlead))
		{
                 $firstname = $this->input->post('firstname');
                 $lastname = $this->input->post('lastname');
                 $signupdate = $this->input->post('signupdate');
                 $company = $this->input->post('company');
				 $address = $this->input->post('address');
				 $apartment_num = $this->input->post('apartment_num');
                 $country = $this->input->post('country');
                 $city = $this->input->post('city');
				 $state_province = $this->input->post('state_province');
                 $zip = $this->input->post('zip');
                 $home_phone = $this->input->post('home_phone');
				 $work_phone = $this->input->post('work_phone');
				 $mobile_phone = $this->input->post('mobile_phone');
				 $email = $this->input->post('email');
				 $website = $this->input->post('website');
				 $ethnicity = $this->input->post('ethnicity');
				 $language = $this->input->post('language');
				 $lead_type = $this->input->post('lead_type');
				 $lead_source = $this->input->post('lead_source');
				 $timezone = $this->input->post('timezone');
				 $lead_quality = $this->input->post('lead_quality');
							            
			$sql = "INSERT INTO tbl_leads(first_name,last_name,company,address,apartment_num,city,state_province,zip,home_phone,work_phone,mobile_phone,country,email,website,ethnicity,language,lead_type,lead_source,timezone,lead_quality,date_encoded) " .
				   "VALUES ('{$firstname}', '{$lastname}', '{$company}', '{$address}', '{$apartment_num}', '{$city}', '{$state_province}', '{$zip}', '{$home_phone}', '{$work_phone}', '{$mobile_phone}', '{$country}', '{$email}', '{$website}', 
				    '{$ethnicity}', '{$language}', '{$lead_type}', '{$lead_source}', '{$timezone}', '{$lead_quality}', '{$signupdate}')";
			$this->db->query($sql);
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Leads Registered</div>');
            redirect('admin/leadslist');		
		
			//$this->load->view('admin/memberlist/index');
		}
		else
		{
			$data['company'] = $this->input->post('company');
			$data['address'] = $this->input->post('address');
			$data['apartment_num'] = $this->input->post('apartment_num');
			$data['website'] = $this->input->post('website');
			$data['home_phone'] = $this->input->post('home_phone');
			$data['work_phone'] = $this->input->post('work_phone');
			$data['mobile_phone'] = $this->input->post('mobile_phone');
			$data['email'] = $this->input->post('email');
			$data['ethnicity'] = $this->input->post('ethnicity');
			$data['language'] = $this->input->post('language');
			$data['lead_type'] = $this->input->post('lead_type');
			$data['$lead_source'] = $this->input->post('lead_source');
			$data['timezone'] = $this->input->post('timezone');
			$data['lead_quality'] = $this->input->post('lead_quality');
			
			
			//$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
			$data['print_country'] = $this->Leads_Model->get_dropcountry();
			$data['print_language'] = $this->Leads_Model->get_droplanguage();
			$data['print_timezone'] = $this->Leads_Model->get_droptimezone();
			$data['content'] = $this->load->view('admin/leads/index', $data, TRUE);
			$this->render('admin', $data);
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
		
		$lid = $this->uri->segment(4);
		
		//$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		//$this->form_validation->set_rules('firstname', 'First Name', 'required');
		/*$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phonenumber1', 'Phone Number', 'required');*/
		
	    //$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		//if ($this->form_validation->run() == FALSE)
	    //{			
	    //}
	    //else
	    //{
		
		$editlead = $this->input->post('editlead');
		
		if(isset($editlead) && !empty($editlead))
		{
		
			     $leadid = $this->input->post('leadid');
			
			  	 $firstname = $this->input->post('firstname');
                 $lastname = $this->input->post('lastname');
                 $signupdate = $this->input->post('signupdate');
                 $company = $this->input->post('company');
				 $address = $this->input->post('address');
				 $apartment_num = $this->input->post('apartment_num');
                 $country = $this->input->post('country');
                 $city = $this->input->post('city');
				 $state_province = $this->input->post('state_province');
                 $zip = $this->input->post('zip');
                 $home_phone = $this->input->post('home_phone');
				 $work_phone = $this->input->post('work_phone');
				 $mobile_phone = $this->input->post('mobile_phone');
				 $email = $this->input->post('email');
				 $website = $this->input->post('website');
				 $ethnicity = $this->input->post('ethnicity');
				 $language = $this->input->post('language');
				 $lead_type = $this->input->post('lead_type');
				 $lead_source = $this->input->post('lead_source');
				 $timezone = $this->input->post('timezone');
				 $lead_quality = $this->input->post('lead_quality');
				 
			
			$sql = "UPDATE tbl_leads set first_name = '{$lastname}' ,last_name = '{$firstname}' ,company = '{$member_company}' ,address = '{$address}' ,apartment_num = '{$apartment_num}' , country = '{$country}' ,city  = '{$city}' ,state_province = '{$state_province}' ,zip = '{$zip}' ,home_phone = '{$home_phone}' ,work_phone = '{$work_phone}' ,mobile_phone = '{$mobile_phone}' ,email = '{$email}' ,website = '{$website}' ,ethnicity = '{$ethnicity}' ,language = '{$language}' ,timezone = '{$timezone}' 
,lead_type = '{$lead_type}' ,lead_source = '{$lead_source}' ,lead_quality = '{$lead_quality}' ,date_encoded = '{$signupdate}' WHERE id =  '{$leadid}'";
			$this->db->query($sql);
			
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Lead Detail Updated</div>');
            redirect('admin/leadslist');		
		
			//$this->load->view('admin/memberlist/index');
		}
		else
		{
			$data['lead'] = $this->Leads_Model->get_leads_info($lid);
			
			/*$data['country'] = $this->input->post('country');
			$data['language'] = $this->input->post('language');
			$data['timezone'] = $this->input->post('timezone');*/
			
			$data['print_country'] = $this->Leads_Model->get_dropcountry();
			$data['print_language'] = $this->Leads_Model->get_droplanguage();
			$data['print_timezone'] = $this->Leads_Model->get_droptimezone();
			
			$data['content'] = $this->load->view('admin/leads/edit', $data, TRUE);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			$this->render('admin', $data);
		}
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
            to_excel($this->Leads_Model->get_all_export(), date('Y-m-d'));    
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>No Data to Export.</div>');
            redirect('admin/leadslist');        
        }
    }
	
	function exportedToCSV()
    {
        /*$this->load->dbutil();
        $delimiter = ";";
        $newline = "\r\n";
        $result = $this->db->query($this->session->userdata('lastQuery'));
             
        $this->load->view('exportedToCsv', array('csv'=> $this->dbutil->csv_from_result($result, $delimiter, $newline)));*/
	
		if ($this->Leads_Model->count_all())
        {
            $this->load->dbutil();
			$this->load->helper('download');
			
			$query = $this->db->query("SELECT * FROM tbl_leads");
			$data = $this->dbutil->csv_from_result($query, ';');
			
			force_download('result.csv', $data);    
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>No Data to Export.</div>');
            redirect('admin/leadslist');        
        }
	
        
    }  
	
	function readExcel()
	{
		
		//if ($this->Leads_Model->count_all())
        //{
        /*  $this->load->library('CSVReader');
			$result = $this->csvreader->parse_file('uploads/result.csv');

			$data['csvData'] =  $result;
			$this->load->view('admin/leads/view_csv', $data); */
        //}
        /*else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>No Data to Export.</div>');
            redirect('admin/leadslist');        
        }*/
		
		$this->load->library('CSVReader');
    
        $filePath = './csv/result.csv';
      
        $data['csvData'] = $this->csvreader->parse_file($filePath);
 
        $this->load->view('admin/leads/view_csv', $data);
		
		
         
	}
	
	function importDB()
	{
		//echo "hello";
	
		$fupload = $this->input->post('fupload');

		//echo $fupload;
		
	    //if(!isset($fupload) && empty($fupload))
		//{
			
			//$data['content'] = $this->load->view('admin/leads/importDB', $data, TRUE);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			//$this->render('admin', $data);
		
		//}
		//else
		if(isset($fupload) && !empty($fupload))
		{
		
			if ($this->input->post('chk_fileupload'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads';
                $config_upload_thumbnail['allowed_types'] = 'xls|xlsx';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('fileupload'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    /*$file = $this->upload->data();
                    $gallery_pic = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();*/
					
					$file = $this->upload->data();
                    //$gallery_pic = $file['file_name'];
                    $file_name = $file['file_name'];
					
					$filepath = './uploads/' . $file_name;
					//load library phpExcel
					$this->load->library("Excel");
					//here i used microsoft excel 2007
					$objReader = PHPExcel_IOFactory::createReader('Excel2007');		
					//set to read only
					$objReader->setReadDataOnly(true);
					//load excel file
					$objPHPExcel = $objReader->load($filepath);
					$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
					$highestRow = $objWorksheet->getHighestRow(); 
					//load model
					//$this->load->model("Leads");
					//loop from first data until last data
					
					for($i=2; $i<=$highestRow; $i++)
					{
					   $first_name = $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();
					   $last_name = $objWorksheet->getCellByColumnAndRow(1,$i)->getValue();
					   $company = $objWorksheet->getCellByColumnAndRow(2,$i)->getValue();
					   $address = $objWorksheet->getCellByColumnAndRow(3,$i)->getValue();
					   $apartment_num = $objWorksheet->getCellByColumnAndRow(4,$i)->getValue();
					   $city = $objWorksheet->getCellByColumnAndRow(5,$i)->getValue();
					   $state_province = $objWorksheet->getCellByColumnAndRow(6,$i)->getValue();
					   $zip = $objWorksheet->getCellByColumnAndRow(7,$i)->getValue();
					   $home_phone = $objWorksheet->getCellByColumnAndRow(8,$i)->getValue();
					   $work_phone = $objWorksheet->getCellByColumnAndRow(9,$i)->getValue();
					   $mobile_phone = $objWorksheet->getCellByColumnAndRow(10,$i)->getValue();
					   $country = $objWorksheet->getCellByColumnAndRow(11,$i)->getValue();
					   $email = $objWorksheet->getCellByColumnAndRow(12,$i)->getValue();
					   $website = $objWorksheet->getCellByColumnAndRow(13,$i)->getValue();
					   $ethnicity = $objWorksheet->getCellByColumnAndRow(14,$i)->getValue();
					   $language = $objWorksheet->getCellByColumnAndRow(15,$i)->getValue();
					   $lead_type = $objWorksheet->getCellByColumnAndRow(16,$i)->getValue();
					   $lead_source = $objWorksheet->getCellByColumnAndRow(17,$i)->getValue();
					   $timezone = $objWorksheet->getCellByColumnAndRow(18,$i)->getValue();
					   $lead_quality = $objWorksheet->getCellByColumnAndRow(19,$i)->getValue();
					   $date_encoded = $objWorksheet->getCellByColumnAndRow(20,$i)->getValue();
					   
						$sql = "INSERT INTO tbl_leads(first_name,last_name,company,address,apartment_num,city,state_province,zip,home_phone,work_phone,mobile_phone,country,email,website,ethnicity,language,lead_type,lead_source,timezone,lead_quality,date_encoded) " .
							   "VALUES ('{$first_name}', '{$last_name}', '{$company}', '{$address}', '{$apartment_num}', '{$city}', '{$state_province}', '{$zip}', '{$home_phone}', '{$work_phone}', '{$mobile_phone}', '{$country}', '{$email}', '{$website}', 
								'{$ethnicity}', '{$language}', '{$lead_type}', '{$lead_source}', '{$timezone}', '{$lead_quality}', '{$date_encoded}')";
						$this->db->query($sql);
					}
					
					redirect('admin/leadslist');        
					
					
                }
			}
			/*else
			{
				echo "hello world";
			}*/
			
		}
		else
		{

			$data['content'] = $this->load->view('admin/leads/importDB', $data, TRUE);
			$this->render('admin', $data);
			
		
		}
	}
	
	
	function profile()
	{
	
		$leadid = $this->uri->segment(4);
		$data['lead'] = $this->Leads_Model->get_leads_info($leadid);
		$data['content'] = $this->load->view('admin/leads/profile', $data, TRUE);
		$this->render('admin', $data);
	
	}
	
	
	// --------------------------------------------------------------------

	function delete($mem_id)
	{
		/*$this->session->set_flashdata('deleteOrder', $mem_id);
		$data['deleteOrder'] = $mem_id;
		$this->load->view('admin/members/delete', $data);*/
		
		if ($this->uri->segment(4))
		{	
			$id = $this->uri->segment(4);
			
			$this->Leads_Model->deleteLead($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Lead was successfully deleted.</div>');
		}		
		
		redirect('admin/leadslist');
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