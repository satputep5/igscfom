<?php
class AdminLoginModel extends CI_Model{
    function __construct() {
		parent::__construct();
		$this->admin_table = 'fh_admin';
		$this->enquiry_table = 'fh_enquiry';
    }
    
    function verifyUser($uName,$uPassword){
        $sql = $this->db->where('fha_email',$uName)
                         ->where('fha_password',$uPassword)
                         ->get($this->admin_table);
		//$this->output->enable_profiler(true);
		//echo $this->db->last_query();die;
        if ( $sql->num_rows > 0 ) {
            // person has account with us
            return $sql->row_array();
        }
        return false;
    }
     
    function VerifyUserName($uName){
        $sql = $this->db->where('fha_email',$uName) 
                         ->get($this->admin_table);
		// $this->output->enable_profiler(true);
		//echo $this->db->last_query();die;
        if ( $sql->num_rows > 0 ) {
             // person has account with us
            return $sql->row();
        }
        return false;
    }
     
    function setAdminResetKey($uName,$data){
        $this->db->where('fha_email', $uName);
		$this->db->update($this->admin_table, $data);
         //$this->output->enable_profiler(true);
         //echo $this->db->last_query();die;   
    }
     
    function verifyAdminKey($key){
        $sql = $this->db->where('fha_reset_key',$key) 
                         ->get($this->admin_table);
        if ( $sql->num_rows > 0 ) {
             // person has account with us
            return true;
        }
        return false;
    }
    function resetNewPassword($key,$data){ 
        $this->db->where('fha_reset_key', $key);
		$this->db->update($this->admin_table, $data);
        // $this->output->enable_profiler(true);
	 	//echo $this->db->last_query();die; 
        $reset_data = array('fha_reset_key'=>'set');
		$this->db->update($this->admin_table, $reset_data);
    }
     
     /*
      * -- verify the current password
     */
    function validatePsw($uPsw, $uid){
     	$this->db->where('	fha_id',$uid);
     	$this->db->where('fha_password',$uPsw);
     	$sql = $this->db->get($this->admin_table);
//      	$this->output->enable_profiler(true);
//      	echo $this->db->last_query();die;
     	if($sql){
     		if($sql->num_rows()>0){
     			return true;
     		}
     		else{
     			return false;
     		}
     	}
     	else{
     		return false;
     	}
    }
	public function updatePassword($data,$username) {  
		
	
     	$this->db->where('fha_name', $username);
     	$this->db->update($this->admin_table, $data);
     	//$this->output->enable_profiler(true);
     	//echo $this->db->last_query();die;
		
    }
	function getAdminRecordByEmailId($username){
     	$this->db->select('fha_id,fha_name,fha_email,fha_password,fha_pwd_salt');
     	$this->db->where('fha_email', $username);
     	$query = $this->db->get($this->admin_table);
		//$this->output->enable_profiler(true);
    // 	echo $this->db->last_query();die; 
     	return $query->row_array();
    }
	function getEnquiry() {
		$this->db->select('*');
		$this->db->order_by('fhe_id','desc');
		$this->db->from($this->enquiry_table);	
		$query = $this->db->get();
		return $query->result_array();
	}
	
	function CheckEnquiryIdExists($id){
		$this->db->select('fhe_id');
		$this->db->where('fhe_id',$id);
		$query = $this->db->get($this->enquiry_table);
	
		if($query){
			if($query->num_rows()>0){
				return true;
			}
			else{

				return false;
			}
		}
		else{
			return false;
		}
	}
	
	function getEnquiryById($id){
		$this->db->select();
		$this->db->where("fhe_id",$id);
		$query = $this->db->get($this->enquiry_table);
		return $query->row_array();
	}
	
	function deleteEnquiry($id){
		$this->db->where("fhe_id",$id);
		$this->db->delete($this->enquiry_table);
	}
}
?>