<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends MY_Controller {

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
	
		$this->add_top_js('jquery-ui-1.8.18.custom.min');
        $this->add_css('jquery-ui/jquery-ui-1.8.18.custom');
		
		//echo "hello world";
		$data['memID'] = $this->input->post('pID');
		//echo "hello world";
		//$data['print_run']= $this->Registration_Model->get_dropdown(); 
		$this->load->view('admin/orders/index', $data);
	}
	
	function addorders()
	{
	
		$this->form_validation->set_rules('orderdate', 'Order Date', 'required');
		$this->form_validation->set_rules('recipientname', 'Recipient Name', 'required');
		$this->form_validation->set_rules('recipientaddress1', 'Recipient Address', 'required');
		$this->form_validation->set_rules('salesagentname', 'Sales Agent Name', 'required');
		//$this->form_validation->set_rules('date_paid', 'Date Paid', 'required');
		$this->form_validation->set_rules('amount_paid', 'Amount Paid', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		if ($this->form_validation->run() == FALSE)
	    {			
			
			//$data['registrations'] = $this->Registration_Model->get_some($config['per_page'], $this->uri->segment(4));
			//$data['content'] = $this->load->view('admin/registrations/index', $data, TRUE);
			$data['content'] = $this->load->view('admin/orders/index', $data);
			//$this->render('admin', $data);
	    }
	    else
	    {
			$memID = $this->input->post('memID');
			//$pID = $this->input->post('dropdown');
			//date( "d/m/y", $row['date'] )			
            $orderdate = $this->input->post('orderdate');
            $recipientname = $this->input->post('recipientname');
            $recipientaddress1 = $this->input->post('recipientaddress1');
			$recipientaddress2 = $this->input->post('recipientaddress2');
			$recipientcity = $this->input->post('recipientcity');
			$recipientcountry = $this->input->post('recipientcountry');
			$recipientprovince = $this->input->post('recipientprovince');
			$recipientlandline = $this->input->post('recipientlandline');
			$recipientmobile = $this->input->post('recipientmobile');
			$recipientmessage = $this->input->post('recipientmessage');
			$product_ordered = $this->input->post('productordered');
			$notes = $this->input->post('notes');
			$salesagentname = $this->input->post('salesagentname');
			$amountpaid = $this->input->post('amount_paid');
                            
            
			$sql = "INSERT INTO tbl_orderdetails(orderDate,member_ID,RecipientName,RecipientAddress1,RecipientAddress2,RecipientCity,RecipientProvince,RecipientCountry,RecipientLandline,RecipientMobile,RecipientMessage,Notes,SalesAgentName,ProductOrdered,AmtPaid) " .
				   "VALUES ('{$orderdate}', '{$memID}', '{$recipientname}', '{$recipientaddress1}', '{$recipientaddress2}', '{$recipientcity}', '{$recipientprovince}', '{$recipientcountry}', '{$recipientlandline}', '{$recipientmobile}', '{$recipientmessage}', '{$notes}', '{$salesagentname}', '{$product_ordered}','{$amountpaid}')";
			$this->db->query($sql);
			
			$this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Order Added</div>');
            //redirect('admin/products');	
			redirect('admin/members/profile/' . $memID);
		}
	
	}
	
	
	function edit()
	{
	
		$ordid = $this->uri->segment(4);
		$this->form_validation->set_rules('orderdate', 'Order Date', 'required');
		$this->form_validation->set_rules('recipientname', 'Recipient Name', 'required');
		$this->form_validation->set_rules('recipientaddress1', 'Recipient Address', 'required');
		$this->form_validation->set_rules('salesagentname', 'Sales Agent Name', 'required');
		//$this->form_validation->set_rules('date_paid', 'Date Paid', 'required');
		$this->form_validation->set_rules('amount_paid', 'Amount Paid', 'required');
		
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">x</a>', '</div>');
		
		if ($this->form_validation->run() == FALSE)
	    {			
			$data['order'] = $this->Registration_Model->get_order($ordid);
			$data['print_run']= $this->Registration_Model->get_dropdown();
			
			$this->load->view('admin/orders/edit', $data);
			//$data['content'] = $this->load->view('admin/members/edit', $data, TRUE);
			//$this->render('admin', $data);
	    }
	    else
	    {
			$ordid = $this->input->post('ordid');
			//$ordid = $this->uri->segment(4);
			$memID = $this->input->post('memID');
			/*$data = array(			
							'orderDate' => $this->input->post('orderdate'),
                            'RecipientName' => $this->input->post('recipientname'),
							'RecipientAddress1' => $this->input->post('recipientaddress'),
							'RecipientAddress2' => $this->input->post('recipientaddress2'),
							'RecipientCity' => $this->input->post('recipientcity'),
							'RecipientCountry' => $this->input->post('recipientcountry'),
							'RecipientProvince' => $this->input->post('recipientprovince'),
							'RecipientLandline' => $this->input->post('recipientlandline'),
							'RecipientMobile' => $this->input->post('recipientmobile'),
							'RecipientMessage' => $this->input->post('recipientmessage'),
							'Notes' => $this->input->post('notes'),
							'SalesAgentName' => $this->input->post('salesagentname'),
							//'ProductID' => $this->input->post('dropdown'),
							//'DatePaid' => $this->input->post('date_paid'),
							'AmtPaid' => $this->input->post('amount_paid')
                        );*/
            //echo "the value is:" . $this->uri->segment(4);
			
			$orderdate = $this->input->post('orderdate');
            $recipientname = $this->input->post('recipientname');
            $recipientaddress1 = $this->input->post('recipientaddress1');
			$recipientaddress2 = $this->input->post('recipientaddress2');
			$recipientcity = $this->input->post('recipientcity');
			$recipientcountry = $this->input->post('recipientcountry');
			$recipientprovince = $this->input->post('recipientprovince');
			$recipientlandline = $this->input->post('recipientlandline');
			$recipientmobile = $this->input->post('recipientmobile');
			$recipientmessage = $this->input->post('recipientmessage');
			$product_ordered = $this->input->post('productordered');
			$notes = $this->input->post('notes');
			$salesagentname = $this->input->post('salesagentname');
			$amountpaid = $this->input->post('amount_paid');
			
			//$this->Registration_Model->updateOrder($orderID, $data);
			
			/*$prodid = $this->input->post('prodid');
			$product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
			$price = $this->input->post('price');

			$sql = "UPDATE tbl_products set product_name = '{$product_name}' ,product_description = '{$product_description}' ,price = '{$price}' 
				    WHERE ProductID =  '{$prodid}'";
			$this->db->query($sql);*/
			
			
			$sql = "UPDATE tbl_orderdetails set orderDate = '{$orderdate}' ,member_ID = '{$memID}' ,RecipientName = '{$recipientname}' ,RecipientAddress1 = '{$recipientaddress1}' ,RecipientAddress2 = '{$recipientaddress2}' ,RecipientCity = '{$recipientcity}' ,RecipientProvince = '{$recipientprovince}' ,RecipientCountry = '{$recipientcountry}' ,RecipientLandline = '{$recipientlandline}' ,RecipientMobile = '{$recipientmobile}' ,RecipientMessage = '{$recipientmessage}' ,Notes = '{$notes}' ,SalesAgentName = '{$salesagentname}', ProductOrdered = '{$product_ordered}', AmtPaid = '{$amountpaid}'
				    WHERE orderID =  '{$ordid}'";
			$this->db->query($sql);
			
            $this->session->set_flashdata('message', '<div class="alert alert-success"><a class="close" data-dismiss="alert">x</a>Order Updated</div>');
            redirect('admin/members/profile/' . $memID);
			//redirect('admin/memberlist');		
		
			//$this->load->view('admin/memberlist/index');
		}
	
	}
	
	
	function profile()
	{
	
		$ordid = $this->uri->segment(4);
		//echo "the value is: " . $ordid;
		$data['orderdetails'] = $this->Registration_Model->get_order_detail($ordid);
		//var_dump($data);
		$this->load->view('admin/orders/profile', $data);
	
	}
	
	
	// --------------------------------------------------------------------

	function delete($ord_id)
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		$this->session->set_flashdata('deleteOrder', $ord_id);
		$data['delOrder'] = $ord_id;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		$this->load->view('admin/orders/delete', $data);
	}

	// --------------------------------------------------------------------

	function delete_confirmed()
	{
		$o_id = (int) $this->session->flashdata('deleteOrder');

		if ($this->Registration_Model->deleteOrder($o_id))
		{
			$this->session->set_flashdata('message', 'Order deleted');
			redirect('admin/memberlist/');
		}
		else
		{
			$this->session->set_flashdata('message', 'Error in deleting Order');
			redirect('admin/memberlist/');
		}
	}
	
	// --------------------------------------------------------------------
	
	function add_item()
	{
		// get number of invoices for when we ask if they are sure they want to remove this client
		//$data['numInvoices'] = $this->Registration_model->countClientInvoices($client_id);

		$this->session->set_flashdata('deleteOrder', $ord_id);
		$data['delOrder'] = $ord_id;

		//$data['page_title'] = $this->lang->line('clients_delete_client');
		$this->load->view('admin/orders/add_item', $data);
	}

	// --------------------------------------------------------------------
	
	function invoice()
	{
	
		$ordid = $this->uri->segment(4);
		//echo "the value is: " . $ordid;
		$data['orderdetails'] = $this->Registration_Model->get_order_detail($ordid);
		$data['ccnum_qry'] = $this->Registration_Model->get_mem_ccnum($ordid);
		//var_dump($data);
		$this->load->view('admin/orders/invoice', $data);
	
	}
	
	// --------------------------------------------------------------------
	
	function send_invoice()
	{
		$card_type = $this->input->post('cctype');
		$name_card = $this->input->post('name_card');
		$cc_encrypt = $this->input->post('cc_encrypt');
		$amtpaid = $this->input->post('amtpaid');
		$orderdate = $this->input->post('orderdate');
		$ordid = $this->input->post('ordid');
		$billingaddress1 = $this->input->post('billingaddress1');
		$billingaddress2 = $this->input->post('billingaddress2');
		$billingcity = $this->input->post('billingcity');
		$billingstate = $this->input->post('billingstate');
		$billing_zip = $this->input->post('billing_zip');
		$billingcountry = $this->input->post('billingcountry');
		$recipientname = $this->input->post('recipientname');
		$recipientlandline = $this->input->post('recipientlandline');
		$recipientmobile = $this->input->post('recipientmobile');
		$recipientaddress1 = $this->input->post('recipientaddress1');
		$recipientaddress2 = $this->input->post('recipientaddress2');
		$recipientcity = $this->input->post('recipientcity');
		$recipientprovince = $this->input->post('recipientprovince');
		$recipientcountry = $this->input->post('recipientcountry');
		$productordered = $this->input->post('productordered');
		$status = $this->input->post('status');
		$member_email = $this->input->post('member_email');
		
		if(isset($status) && !empty($status) && $status == 1)
		{
		
			$to = "ivy@salesrain.com";
			
			$subject = 'Sales Rain Plaza Payment/Order Confirmation';
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html\r\n";
			$headers .= 'From: info@salesrain.com' ."\r\n";
		
			$message = '<table width="100%">
					<tr><td colspan="2"><strong><font size="5">Payment/Order Confirmation from Sales Rain Plaza</strong></td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td colspan="2"><strong><font size="4">IMPORTANT</td></tr>
					<tr><td colspan="2">Your ' . $card_type . ' ' . $name_on_card . ' | ' . $cc_encrypt . ' account has been successfully charged for your order."; ?></td></tr>
					<tr><td colspan="2">Order Amount:  USD <strong>' . $amtpaid . '</strong></td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td colspan="2">The products/services you have ordered will be directly supplied and invoiced by <strong>Sales Rain Plaza</strong>.<br>Thank you for your order!</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td colspan="2"><strong><font size="5">Order details</strong></td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td><strong>Order date: </strong></td><td>' . $orderdate . '</td></tr>
					<tr><td><strong>Order number: </strong></td><td>' .  $ordid . '</td></tr>
					<tr><td><strong>Charge Total:</strong></td><td>' . $amtpaid . '</td></tr>
					<tr><td><strong>Method of Payment</strong></td><td>' . $card_type . '</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td><strong>Cardholder Name: </strong></td><td>' . $name_card . '</td></tr>
					<tr><td><strong>Cardholder Address 1: </strong></td><td>' . $billingaddress1 . '</td></tr>
					<tr><td><strong>Cardholder Address 2: </strong></td><td>' . $billingaddress2 . '</td></tr>
					<tr><td><strong>Cardholder City: </strong></td><td>' . $billingcity . '</td></tr>
					<tr><td><strong>Cardholder State: </strong></td><td>' . $billing_state . '</td></tr>
					<tr><td><strong>Cardholder Zip: </strong></td><td>' . $billing_zip . '</td></tr>
					<tr><td><strong>Cardholder Country: </strong></td><td>' . $billingcountry . '</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td><strong>Name: </strong></td><td>' . $recipientname . '</td></tr>
					<tr><td><strong>Landline: </strong></td><td>' . $recipientlandline . '</td></tr>
					<tr><td><strong>Mobile: </strong></td><td>' . $recipientmobile . '</td></tr>
					<tr><td><strong>Delivery Address: </strong></td><td>' . $recipientaddress1 . " " . $recipientaddress2 . " " . $recipientcity . " " . $recipientprovince . " " . $recipientcountry . '</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td colspan="2"><strong>Product items:</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td><strong>Order: </strong></td><td>' . $productordered . '</td></tr>
					<tr><td><strong>Quantity: </strong></td><td>1</td></tr>
					<tr><td><strong>Price: </strong></td><td> USD ' . $amtpaid . '</td></tr>
				</table>';
			
			mail($to, $subject, $message, $headers);
			
		}
		
		
	
		$ordid = $this->uri->segment(4);
		//echo "the value is: " . $ordid;
		$data['orderdetails'] = $this->Registration_Model->get_order_detail($ordid);
		$data['ccnum_qry'] = $this->Registration_Model->get_mem_ccnum($ordid);
		//var_dump($data);
		$this->load->view('admin/orders/invoice', $data);
	
	}
	

}