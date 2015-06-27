<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends MY_Controller {

	public function __construct()
    {
		parent::__construct();

		$this->load->model('Registration_Model');
	}

    function index()
    {
        if ($this->Registration_Model->count_all())
        {            
            $this->load->helper(array('excel', 'inflector', 'file'));
            
            $filename = date('Y-m-d');
            
            to_excel($this->Registration_Model->get_all_export(), $filename, TRUE);
            
            $this->load->library('email');

            $this->email->from('info@mongolia12g.com', 'mongolia12g.com');

            $this->email->to('jbpaginado@gmail.com');
            $this->email->to('Charlotte_Rogacion@dell.com');
            //$this->email->to('michaellouieloria@gmail.com', 'ivy@webdc.com.ph');
            
            $this->email->subject('Registrations for the Day');
            $this->email->message('Sent Registations for the Day - ' . date('l, F j, Y'));
            $this->email->attach("./xls/$filename.xls");
            $this->email->send();
        }
    }
}