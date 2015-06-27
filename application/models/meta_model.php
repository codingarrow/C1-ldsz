<?php

class Meta_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	function get_some($offset, $row)
	{		
		$this->db->from('meta');
		$this->db->where_in('group_id', array('2', '3'));
		$this->db->join('users', 'users.id = meta.user_id');
		$this->db->order_by('last_name, first_name');
		$this->db->limit($offset, $row);

		return $this->db->get()->result_array();		
	}
	
	function count_some()
	{		
		$this->db->from('meta');
		$this->db->where('group_id', 2);
		$this->db->join('users', 'users.id = meta.user_id');
		$this->db->order_by('last_name, first_name');

		return $this->db->count_all_results();
	}
	
	function get_meta_user($id)
	{		
		$this->db->from('meta');
		$this->db->where('users.id', $id);
		$this->db->join('users', 'users.id = meta.user_id');

		return $this->db->get()->row_array();
	}
	
	function get_meta_user_member()
	{		
		$this->db->from('meta');
		$this->db->join('users', 'users.id = meta.user_id');
		$this->db->order_by('last_name, first_name');
		
		return $this->db->get()->result_array();
	}
	
	function get_all()
	{
		$this->db->order_by('last_name, first_name');
		return $this->db->from('meta')->get()->result_array();
	}
	
	function get($id)
	{
		return $this->db->from('meta')->where('id', $id)->get()->row_array();
	}
		
	function update($id, $data)
	{
		$this->db->where('user_id', $id);
		$this->db->update('meta', $data); 
	}
}