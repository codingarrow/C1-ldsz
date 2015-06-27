<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends MY_Controller {

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
		//$config['base_url'] = site_url('admin/registrations/index/');
		$config['base_url'] = site_url('admin/banners/bannerlist/');
		
		$this->pagination->initialize($config);
		
		/*$data['print_run']= $this->Registration_Model->get_dropdown(); 
		$pid = $this->uri->segment(4);
		if(isset($pid) && !empty($pid))  
		{
			$data['products'] = $this->Registration_Model->get_some_product2($pid);
			$data['prodid'] = $pid;
		}
		else
		{
			$data['products'] = $this->Registration_Model->getallproducts();
		}*/
			//$data['products'] = $this->Registration_Model->get_some_products($config['per_page'], $this->uri->segment(4));
		//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
		//$data['registrations'] = $this->Membership_Model->get_all();
		$data['content'] = $this->load->view('admin/banners/bannerlist');
		//$data['content'] = $this->load->view('admin/banners/bannerlist', $data, TRUE);
		$this->render('admin', $data);		
		//$this->load->view('admin/products/productlist', $data);
		
	}
	
	function addbanner()
	{
	
		$this->form_validation->set_rules('banner_name', 'Product Name', 'required');
				
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
				
		if ($this->form_validation->run() == FALSE)
	    {			
			
			//$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
			//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
			$data['content'] = $this->load->view('admin/banners/index', $data, TRUE);
			$this->render('admin', $data);
	    }
	    else
	    {
			if ($this->input->post('upload_bannerimage'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/banners';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('banner_image'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $image_pic = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/banners/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 755;
                    $config['height'] = 370;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$image_pic = '';
			}
			
			
			$banner_name = $this->input->post('banner_name');
            $image_pic = $image_pic;                            
				
            
			$sql = "INSERT INTO tbl_banners(banner_name,filename,date_created) " .
				   "VALUES ('{$banner_name}','{$image_pic}', now())";
			$this->db->query($sql);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Banner Added</div>');
            redirect('admin/banners/bannerlist');	
		}
	
	}
	
	
	function edit()
	{
	
		$this->form_validation->set_rules('banner_name', 'Product Name', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		$oid = $this->uri->segment(4);	
		$data['print_category'] = $this->Registration_Model->get_dropcategory(); 
		
		if ($this->form_validation->run() == FALSE)
	    {			
			$data['banner'] = $this->Registration_Model->get_banner($oid);
			
			$this->load->view('admin/banners/edit', $data);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			//$this->render('admin', $data);
	    }
	    else
	    {
			
			if ($this->input->post('upload_bannerimage'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/banners';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('banner_image'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $image_pic = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/banners/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 755;
                    $config['height'] = 370;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
				$data = array(			
							'banner_name' => $this->input->post('banner_name'),
							'filename' => $image_pic
                        );
			}
			else
			{
				//$image_pic = '';
				$data = array(			
							'banner_name' => $this->input->post('banner_name')
                        );
				
			}
			
			$banid = $this->input->post('banid');
			
            //echo "the value is:" . $this->uri->segment(4);
			$this->Registration_Model->updateBanner($banid, $data);
			
			/*$prodid = $this->input->post('prodid');
			$product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
			$price = $this->input->post('price');

			$sql = "UPDATE tbl_products set product_name = '{$product_name}' ,product_description = '{$product_description}' ,price = '{$price}' 
				    WHERE ProductID =  '{$prodid}'";
			$this->db->query($sql);*/
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Product Updated</div>');
            redirect('admin/banners/bannerlist');		
		
			//$this->load->view('admin/memberlist/index');
		}
	
	
	}
	
	
	function bannerlist()
	{
        $this->add_top_js('jquery.tablesorter.min');
        $this->add_top_js('admin/table');
        $this->add_css('tablesorter');
        
        $this->config->load('admin_pagination');
        $config = $this->config->item('pagination');
		$config['total_rows'] = $this->Registration_Model->count_some();
		$config['per_page'] = 30;
		$config['uri_segment'] = 4;
		//$config['base_url'] = site_url('admin/registrations/index/');
		$config['base_url'] = site_url('admin/banners/bannerlist/');
		
		$this->pagination->initialize($config);
		
		$pid = $this->uri->segment(4);
		
		$data['banners'] = $this->Registration_Model->getallbanners();
		
		
		//$data['categories'] = $this->Registration_Model->getallcategories();
		//$data['content'] = $this->load->view('admin/products/productlist', $data, TRUE);
		//$this->render('admin', $data);		
		$this->load->view('admin/banners/bannerlist', $data);
		
	}
	
		
	

	function deleteBanner($bid)
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		$this->session->set_flashdata('deleteBanner', $bid);
		$data['delBanner'] = $bid;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		$this->load->view('admin/banners/delete_banner', $data);
	}

	// --------------------------------------------------------------------

	function delete_banner_confirmed()
	{
		$b_id = (int) $this->session->flashdata('deleteBanner');

		if ($this->Registration_Model->deleteBanner($b_id))
		{
			$this->session->set_flashdata('message', 'Banner deleted');
			redirect('admin/banners/bannerlist');
		}
		else
		{
			$this->session->set_flashdata('message', 'Error in deleting Banner');
			redirect('admin/banners/bannerlist');
		}
	}
	
	
	
	

}