<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class FrontModel extends CI_Model {
	/*
	 * -- Initialize the tables name in constructor
	*/
	public function __construct() {	
	
		$this->enquiry = "	fh_enquiry";	
		
		
	}
	function insertEnquiry($data) {	
		$this->db->insert($this->enquiry, $data);
		$id = $this->db->insert_id();
		// 		$this->output->enable_profiler(true);
		// 		echo $this->db->last_query(); die;
		return (isset($id)) ? $id : FALSE;
	}

}