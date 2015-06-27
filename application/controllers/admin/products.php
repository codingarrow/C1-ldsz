<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

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
		$config['base_url'] = site_url('admin/products/productlist/');
		
		$this->pagination->initialize($config);
		
		$data['print_run']= $this->Registration_Model->get_dropdown(); 
		$pid = $this->uri->segment(4);
		if(isset($pid) && !empty($pid))  
		{
			$data['products'] = $this->Registration_Model->get_some_product2($pid);
			$data['prodid'] = $pid;
		}
		else
		{
			$data['products'] = $this->Registration_Model->getallproducts();
		}
			//$data['products'] = $this->Registration_Model->get_some_products($config['per_page'], $this->uri->segment(4));
		//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
		//$data['registrations'] = $this->Membership_Model->get_all();
		$data['content'] = $this->load->view('admin/products/productlist', $data, TRUE);
		$this->render('admin', $data);		
		//$this->load->view('admin/products/productlist', $data);
		
	}
	
	function addproduct()
	{
	
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('product_description', 'Product Description', 'required');
		$this->form_validation->set_rules('member_price', 'Member Price', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		$pid = $this->uri->segment(4);
		
		if(isset($pid) && !empty($pid))
		{
			$data['prodid'] = $pid;
		}
		$data['print_category'] = $this->Registration_Model->get_dropcategory(); 
		
		if ($this->form_validation->run() == FALSE)
	    {			
			
			//$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
			//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
			$data['content'] = $this->load->view('admin/products/index', $data, TRUE);
			$this->render('admin', $data);
	    }
	    else
	    {
			
			
			//for gallery thumbnail pic
			
			if ($this->input->post('upload_gallerypicthumbnail'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('gallerypic_thumbnail'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $gallery_pic = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$gallery_pic = '';
			}
			
			
			//for inner pic actual
			
			if ($this->input->post('upload_innerpicactual'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_actual'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpicactual = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 300;
                    $config['height'] = 450;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpicactual = '';
			}
			
			//for inner pic zoom
			
			if ($this->input->post('upload_innerpiczoom'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_zoom'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpiczoom = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpiczoom = '';
			}
			
			
			//for gallerypic sale
						
			if ($this->input->post('upload_gallerypicsale'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('gallerypic_sale'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $gallerypicsale = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$gallerypicsale = '';
			}
			
			
			//for innerpic actual sale
			
			if ($this->input->post('upload_innerpicactualsale'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_actual_sale'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpicactualsale = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 300;
                    $config['height'] = 450;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpicactualsale = '';
			}
			
			
			//for innerpic zoom sale   
			
			if ($this->input->post('upload_innerpiczoomsale'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_zoom_sale'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpiczoomsale = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpiczoomsale = '';
			}
			
			
					
            $product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
			if(isset($pid) && !empty($pid))
			{
				$product_category = $this->input->post('product_category');
			}
			else
			{
				$product_category = $pid;
			}
            $regular_price = $this->input->post('regular_price');
			$member_price = $this->input->post('member_price');
			$original_price = $this->input->post('original_price');
                            
            
			$sql = "INSERT INTO tbl_products(product_category,product_name,product_description,regular_price,member_price,original_price) " .
				   "VALUES ('{$product_category}','{$product_name}', '{$product_description}', '{$regular_price}', '{$member_price}', '{$original_price}')";
			$this->db->query($sql);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Product Registered</div>');
            redirect('admin/products');	
		}
	
	}
	
	
	function edit()
	{
	
		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('product_description', 'Product Description', 'required');
		$this->form_validation->set_rules('member_price', 'Member Price', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		$oid = $this->uri->segment(4);	
		$data['print_category'] = $this->Registration_Model->get_dropcategory(); 
		
		if ($this->form_validation->run() == FALSE)
	    {			
			$data['product'] = $this->Registration_Model->get_product($oid);
			
			$this->load->view('admin/products/edit', $data);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			//$this->render('admin', $data);
	    }
	    else
	    {
			
			
			
			//for gallery thumbnail pic
			
			if ($this->input->post('upload_gallerypicthumbnail'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('gallerypic_thumbnail'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $gallery_pic = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$gallery_pic = '';
			}
			
			
			//for inner pic actual
			
			if ($this->input->post('upload_innerpicactual'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_actual'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpicactual = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 300;
                    $config['height'] = 450;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpicactual = '';
			}
			
			//for inner pic zoom
			
			if ($this->input->post('upload_innerpiczoom'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_zoom'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpiczoom = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpiczoom = '';
			}
			
			
			//for gallerypic sale
						
			if ($this->input->post('upload_gallerypicsale'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('gallerypic_sale'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $gallerypicsale = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$gallerypicsale = '';
			}
			
			
			//for innerpic actual sale
			
			if ($this->input->post('upload_innerpicactualsale'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_actual_sale'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpicactualsale = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 300;
                    $config['height'] = 450;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpicactualsale = '';
			}
			
			
			//for innerpic zoom sale   
			
			if ($this->input->post('upload_innerpiczoomsale'))
            {
            
				$config_upload_thumbnail['upload_path'] = './uploads/products';
                $config_upload_thumbnail['allowed_types'] = 'gif|jpg|png';
                $config_upload_thumbnail['encrypt_name'] = TRUE;
                
                $this->load->library('upload');
                $this->upload->initialize($config_upload_thumbnail);
                
                if (!$this->upload->do_upload('innerpic_zoom_sale'))
                {
                    $data['message'] = $this->upload->display_errors('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');               
                }
                else
                {
                    $file = $this->upload->data();
                    $innerpiczoomsale = $file['file_name'];
                    $file_name = $file['file_name'];     
 
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = 'uploads/products/' . $file_name;
                    //$config['new_image'] = 'uploads/thumbnail/' . $file_name;
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 180;
                    $config['height'] = 250;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();                        
                }
			}else
			{
				$innerpiczoomsale = '';
			}
			
			$prodid = $this->input->post('prodid');
			$data = array(			
							'product_category' => $this->input->post('product_category'),
							'product_name' => $this->input->post('product_name'),
                            'product_description' => $this->input->post('product_description'),
							'regular_price' => $this->input->post('regular_price'),
							'member_price' => $this->input->post('member_price'),
							'original_price' => $this->input->post('original_price'),
							'gallerypic_thumbnail' => $this->input->post('gallerypic_thumbnail'),
							'innerpic_actual' => $this->input->post('innerpic_actual'),
							'innerpic_zoom' => $this->input->post('innerpic_zoom'),
							'gallerypic_sale' => $this->input->post('gallerypic_sale'),
							'innerpic_actual_sale' => $this->input->post('innerpic_actual_sale'),
							'innerpic_zoom_sale' => $this->input->post('innerpic_zoom_sale')
							
                        );
            //echo "the value is:" . $this->uri->segment(4);
			$this->Registration_Model->updateProduct($prodid, $data);
			
			/*$prodid = $this->input->post('prodid');
			$product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
			$price = $this->input->post('price');

			$sql = "UPDATE tbl_products set product_name = '{$product_name}' ,product_description = '{$product_description}' ,price = '{$price}' 
				    WHERE ProductID =  '{$prodid}'";
			$this->db->query($sql);*/
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Product Updated</div>');
            redirect('admin/products/edit');		
		
			//$this->load->view('admin/memberlist/index');
		}
	
	
	}
	
	
	// --------------------------------------------------------------------

	function delete($prod_id)
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		//$this->session->set_flashdata('deleteProduct', $prod_id);
		//$data['delProduct'] = $prod_id;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		//$this->load->view('admin/products/delete', $data);
		
		if ($this->uri->segment(4))
		{	
			$id = $this->uri->segment(4);
			
			$this->Registration_Model->deleteProduct($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Product was successfully deleted.</div>');
		}		
		
		redirect('admin/products/productlist');

		
		
	}

	// --------------------------------------------------------------------

	function delete_confirmed()
	{
		$p_id = (int) $this->session->flashdata('deleteProduct');

		if ($this->Registration_Model->deleteProduct($p_id))
		{
			$this->session->set_flashdata('message', 'Product deleted');
			redirect('admin/products/');
		}
		else
		{
			$this->session->set_flashdata('message', 'Error in deleting Product');
			redirect('admin/products/');
		}
	}
	
	
	
	function productlist()
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
		$config['base_url'] = site_url('admin/products/productlist/');
		
		$this->pagination->initialize($config);
		
		$pid = $this->uri->segment(4);
		
		if(isset($pid) && !empty($pid))
		{
			$data['products'] = $this->Registration_Model->get_some_product2($pid);
			//$this->session->set_userdata('pid', $pid);
			$data['prodid'] = $pid;
		}
		else
		{
			$data['products'] = $this->Registration_Model->getallproducts();
		}
		
		
		//$data['categories'] = $this->Registration_Model->getallcategories();
		//$data['content'] = $this->load->view('admin/products/productlist', $data, TRUE);
		//$this->render('admin', $data);		
		$this->load->view('admin/products/productlist', $data);
		
	}
	
	// ----  MODULES FOR MAINTENANCE OF CATEGORIES
	
	function categorylist()
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
		$config['base_url'] = site_url('admin/products/productlist/');
		
		$this->pagination->initialize($config);
	
		$data['categories'] = $this->Registration_Model->getallcategories();
		$data['content'] = $this->load->view('admin/products/categorylist', $data, TRUE);
		$this->render('admin', $data);		

		
	}
	
	
	function addcategory()
	{
	
		$this->form_validation->set_rules('category_name', 'Category Name', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		$data['print_parentcategory'] = $this->Registration_Model->get_parentdrop(); 
		
		if ($this->form_validation->run() == FALSE)
	    {			
			
			//$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
			//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
			$data['content'] = $this->load->view('admin/products/add_category', $data, TRUE);
			$this->render('admin', $data);
	    }
	    else
	    {
							
            $category_name = $this->input->post('category_name');           
			$parent =  $this->input->post('parent_category');                           
            
			$sql = "INSERT INTO tbl_products_categories(category_name,parent) " .
				   "VALUES ('{$category_name}','{$parent}')";
			$this->db->query($sql);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Category Registered</div>');
            redirect('admin/products/categorylist');	
		}
	
	}
	
	
	function editcategory()
	{
	
		$oid = $this->uri->segment(4);
		$this->form_validation->set_rules('category_name', 'Category Name', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		$data['print_parentcategory'] = $this->Registration_Model->get_parentdrop(); 
		
		if ($this->form_validation->run() == FALSE)
	    {			
			$data['category'] = $this->Registration_Model->get_category($oid);
			
			$this->load->view('admin/products/edit_category', $data);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			//$this->render('admin', $data);
	    }
	    else
	    {
			$catid = $this->input->post('catid');
			$data = array(			
							'category_name' => $this->input->post('category_name')
                        );
            //echo "the value is:" . $this->uri->segment(4);
			$this->Registration_Model->updateCategory($catid, $data);
			
			/*$prodid = $this->input->post('prodid');
			$product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
			$price = $this->input->post('price');

			$sql = "UPDATE tbl_products set product_name = '{$product_name}' ,product_description = '{$product_description}' ,price = '{$price}' 
				    WHERE ProductID =  '{$prodid}'";
			$this->db->query($sql);*/
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Category Updated</div>');
            redirect('admin/products/categorylist');		
		
			//$this->load->view('admin/memberlist/index');
		}
	}
	
	

	function deleteCategory($cat_id)
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		$this->session->set_flashdata('deleteCategory', $cat_id);
		$data['delCategory'] = $cat_id;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		$this->load->view('admin/products/delete_category', $data);
	}

	// --------------------------------------------------------------------

	function delete_category_confirmed()
	{
		$c_id = (int) $this->session->flashdata('deleteCategory');

		if ($this->Registration_Model->deleteCategory($c_id))
		{
			$this->session->set_flashdata('message', 'Category deleted');
			redirect('admin/products/categorylist');
		}
		else
		{
			$this->session->set_flashdata('message', 'Error in deleting Category');
			redirect('admin/products/categorylist');
		}
	}
	
	
	
	

}