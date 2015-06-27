<?php

class Membership_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	/*function get_some($offset, $row)
	{		
		$this->db->from('registrations');
		$this->db->where('date_created', date('Y-m-d'));
		$this->db->order_by('company_name, last_name, first_name');
		$this->db->limit($offset, $row);

		return $this->db->get()->result_array();		
	}*/
	
	
	function get_all()
	{		
		//$this->db->from('tbl_memberinfo');
		//$this->db->where('date_created', date('Y-m-d'));
		$this->db->order_by('member_lastname');
		//$this->db->limit($offset, $row);

		//return $this->db->get()->result_array();		
		return $this->db->from('tbl_memberinfo')->get()->result_array();
	}
	
	/*function count_some()
	{		
		$this->db->from('registrations');
		$this->db->where('date_created', date('Y-m-d'));
		$this->db->order_by('company_name, last_name, first_name');

		return $this->db->count_all_results();
	}*/
    
	function count_some()
	{		
		$this->db->from('tbl_memberinfo');
		//$this->db->where('date_created', date('Y-m-d'));
		$this->db->order_by('member_lastname');

		return $this->db->count_all_results();
	}
	
	function count_all()
	{		
        $this->db->where('date_created', date('Y-m-d'));
		$this->db->from('registrations');

		return $this->db->count_all_results();
	}
    
	function get_all()
	{
		$this->db->where('date_created', date('Y-m-d'));
		$this->db->order_by('company_name, last_name, first_name');
		return $this->db->from('registrations')->get()->result_array();
	}

	function get_all_export()
	{
        return $this->db->where('date_created', date('Y-m-d'))->order_by('company_name, last_name, first_name')->get('registrations');
	}
	
    function get($id)
	{
		return $this->db->from('registrations')->where('id', $id)->get()->row_array();
	}
    
    function insert($data)
    {
		//echo "hello world";
        $this->db->insert('tbl_memberinfo', $data);
    }
    
	function check($email)
	{    
        $this->db->where('email', $email);
		$this->db->from('registrations');

		return $this->db->count_all_results();
	}
    
	function get_some_date($offset, $row, $start, $end)
	{		
		$this->db->from('registrations');
		$this->db->where("date_created BETWEEN '" . $start . "' AND '" . $end . "'");  
		$this->db->order_by('company_name, last_name, first_name');
		$this->db->limit($offset, $row);

		return $this->db->get()->result_array();		
	}
	
	function count_some_date($start, $end)
	{		
		$this->db->from('registrations');
		$this->db->where("date_created BETWEEN '" . $start . "' AND '" . $end . "'");  
		$this->db->order_by('company_name, last_name, first_name');

		return $this->db->count_all_results();
	}
    
	function count_all_date($start, $end)
	{		
        $this->db->where("date_created BETWEEN '" . $start . "' AND '" . $end . "'");  
		$this->db->from('registrations');

		return $this->db->count_all_results();
	}
    
	function get_all_date($start, $end)
	{
		$this->db->where("date_created BETWEEN '" . $start . "' AND '" . $end . "'");  
		$this->db->order_by('company_name, last_name, first_name');
		return $this->db->from('registrations')->get()->result_array();
	}

	function get_all_export_date($start, $end)
	{
        return $this->db->where("date_created BETWEEN '" . $start . "' AND '" . $end . "'")->order_by('company_name, last_name, first_name')->get('registrations');
	}
}