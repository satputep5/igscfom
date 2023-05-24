<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminLoginController extends CI_Controller {
	/**
	 * --intialize the classes
	 **/
	function __construct() {
		parent::__construct();

		/* if($this->session->userdata('username') == FALSE) {

		redirect('sa-login');// no session established, kick back to login page
		} */
		$this->load->library('form_validation');
		$this->load->library("EnCryptDeCrypt");
		$this->load->model('AdminLoginModel');
		$this->load->library('email');		
		$this->load->library('PasswordEncryptDecrypt');	
	}		
	
	function login(){	
		$data['main_content'] = 'admin/login';
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');

		if ( $this->form_validation->run() !== false) {			
			if( $this->input->post('token') == $this->input->post('token1')){	
			
				$alogin = $this->AdminLoginModel->getAdminRecordByEmailId($this->input->post('uname'));
				
				if(!empty($alogin)){
				
					if( $this->passwordencryptdecrypt->verify_password($alogin['fha_password'],$this->input->post('pwd'),$alogin['fha_pwd_salt'])){ 						
						$sess = array("logincurdata" => array(
							"aname" => $alogin['fha_name'],							
							"aEmailid" => $this->encryptdecrypt->enCrypt($alogin['fha_email']),
							"aid" => $this->encryptdecrypt->enCrypt($alogin['fha_id'])
							));	
						
						$this->session->set_userdata($sess) ;						
						
						redirect("manage-enquiry/");
						exit();
					}else{ 
						$this->session->set_flashdata('error', "Invalid Email-Id or Password, please check for capslock, numlock, etc.");
						redirect('login');
						exit();
					}	
				}
				else{
					$this->session->set_flashdata('error', "Invalid Email-Id or Password, please check for capslock, numlock, etc.");
					redirect('login');
					exit();
				}
			}
			else {			
				$this->session->set_flashdata('error', "Error in login");
				redirect('login');
				exit();
			}
		}
		else{
			$data['token'] = md5(uniqid(mt_rand(), true));
			$this->session->set_userdata('token',$data['token']);
			$data['validation_message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
			$data['validation_success']= ( $this->session->flashdata('message') )? $this->session->flashdata('message') : "";
			$this->load->view('admin/login', $data);	
		}
	}

	function logout(){		
		/* $this->session->sess_destroy();
		$this->session->sess_create();
		$this->session->set_flashdata('message', "You have been logged out successfully");
		$data['message'] = $this->session->flashdata('message');
		redirect('login');		 */
		//echo $this->session->userdata('token'); echo"<br>";
		//echo $this->input->get('token'); die;
		if( $this->input->get('token') == $this->session->userdata('token')){
			$this->session->sess_destroy();
			$this->session->sess_create();
            $this->session->set_flashdata('message', "You have been logged out successfully");
			$data['message'] = $this->session->flashdata('message');
            redirect('login');
       } else{
			if( $this->session->userdata('logincurdata') == FALSE ){
                redirect('login');// no session established, kick back to login page
            }
            else{
                redirect('login');
            }
       }
	}
	
	/*
	 * -- change the password
	*/
	function changePassword() {
		if($this->session->userdata('logincurdata') == FALSE){
			redirect('login/');// no session established, kick back to login page
		}
		$data['main_content'] = 'admin/change-password';
		$this->form_validation->set_rules('current_password', 'current password', 'required');
		$this->form_validation->set_rules('new_password', 'new password', 'required|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('confirm_password', 'confirm password', 'required|min_length[8]|max_length[20]');
		
		$this->passwordencryptdecrypt->password_creation($this->input->post('new_password'));
    	$newPwd = $this->passwordencryptdecrypt->__getHashPassword();
    	$newPwdSalt = $this->passwordencryptdecrypt->__getSalt();
		
		$res = $this->AdminLoginModel->getAdminRecordByEmailId($this->encryptdecrypt->deCrypt($this->session->userdata('logincurdata')['aEmailid']));
		//echo  $this->input->post('token');
		//echo "<br>".$this->session->userdata('token');
		//var_dump($res);
		//If form_validation return true then execute below block
		if ( $this->form_validation->run() == true && $this->input->post('token') == $this->session->userdata('token1') ) {
			
			if ( $this->passwordencryptdecrypt->verify_password($res['fha_password'],$this->input->post('current_password'),$res['fha_pwd_salt'])) {
				
				if ( strlen($this->input->post('new_password')) >= 8 ) {
					
					if ( $this->input->post('new_password') == $this->input->post('confirm_password') ) {							
						$pswInfo = array(
								'fha_password' => $newPwd,
								'fha_pwd_salt' => $newPwdSalt
						);
						
						$this->AdminLoginModel->updatePassword($pswInfo,($this->session->userdata('logincurdata')['aname']));
						$this->session->set_flashdata('message', "Your new password has been changed successfully.");
						redirect('change-password');
					} else {
						$this->session->set_flashdata('error', "The new password and confirm password do not match");
						redirect('change-password');
					}
				}else {
					$this->session->set_flashdata('error', "Enter the new password minimum 8 characters");
					redirect('change-password');
				}
			}else {
				$this->session->set_flashdata('error', "current password is incorrect");
				redirect('change-password');
			}
		}else {
			$data['validation_message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
			$data['validation_success']= ( $this->session->flashdata('message') )? $this->session->flashdata('message') : "";
			$data['token'] = md5(uniqid(mt_rand(), true));
			$this->session->set_userdata('token1',$data['token']);
			$this->load->view('admin/incls/layout', $data);
		}
	}
	
	function forgotPassword(){
		
		$this->form_validation->set_rules('uname', 'Username', 'required');
		if ($this->form_validation->run() !== false) {

			if( $this->input->post('token') == $this->session->userdata('token')){
				$res = $this->AdminLoginModel->verifyUserName($this->input->post('uname'));
				
				if ( $res !== false ) {
					$uname = $this->input->post('uname');
					$receipt= md5(uniqid(mt_rand(), true));
					$data = array(
							'a_reset_key' =>  $receipt,
					);
					
					$this->AdminLoginModel->setAdminResetKey($uname,$data);
					$config['mailtype'] ='html';
					$config['charset'] ='utf-8';
					$this->email->initialize($config);
					$this->messageBody  ="Hello Admin,<br/>
							Click the link below to reset the password.<br/>
							<a href=".$this->config->item("domain")."resetpwd/?key=".$receipt.">".$this->config->item("domain")."resetpwd</a>
									<br/><br/>Regards,<br/>".$this->config->item("site_email_from")."";
							//echo $this->messageBody;   die;
							
					$this->email->from($this->config->item("site_admin_email"));
					$this->email->to($uname);
					$this->email->subject('Admin Password Recovery');
					$this->email->message($this->messageBody);
					
					if ( ! $this->email->send()){
						$this->session->set_flashdata('error', "Email not sent due to some error. Please try again!");
						redirect('forgotpwd');
					}else{
						$this->session->set_flashdata('message', "The reset password link has been sent to your email address.");
						redirect('forgotpwd');
					}
					//echo $this->email->profiler();
					//echo $this->email->print_debugger();
				} else {
					$this->session->set_flashdata('error', "Email-Id is not valid!");
					redirect('forgotpwd');
				}
			}
		}
		else{
			$data['validation_message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
			$data['validation_success']= ( $this->session->flashdata('message') )? $this->session->flashdata('message') : "";
			$data['token'] = md5(uniqid(mt_rand(), true));
			$this->session->set_userdata('token',$data['token']);
			$this->load->view('admin/forgot_password', $data);
		}
			
	}
	
	function resetPassword() {

		if($this->input->post('key') && $this->input->get('key')) {
			redirect('login');
		} else {
			if($this->input->get('key')){
				$key = $this->input->get('key');
			}
			else if($this->input->post('key')){
				$key = $this->input->post('key');
			}
			$data['key'] = $key;
		}
		$data['reset_msg'] = "";
		
		if($this->AdminLoginModel->verifyAdminKey($key)) {
	
			$this->form_validation->set_rules('new_password', 'new password', 'required|min_length[8]|max_length[20]');
			$this->form_validation->set_rules('confirm_password', 'confirm password', 'required|min_length[8]|max_length[20]');
			
			$this->passwordencryptdecrypt->password_creation($this->input->post('new_password'));
			$newPwd = $this->passwordencryptdecrypt->__getHashPassword();
			$newPwdSalt = $this->passwordencryptdecrypt->__getSalt();
			
			if ($this->form_validation->run() !== false) {
			
				if( $this->input->post('token') == $this->session->userdata('token')){
					
					if ( strlen($this->input->post('new_password')) >= 8 ) {
						
						if ( $this->input->post('new_password') == $this->input->post('confirm_password') ) {
							
							$data = array (								
								'fha_password' => $newPwd,
								'fha_pwd_salt' => $newPwdSalt
							);							
							$this->AdminLoginModel->resetNewPassword($key,$data);
							$this->session->set_flashdata('message', "Your new password has been changed successfully.");
							redirect('login');
						} else {
							$this->session->set_flashdata('error', "The new password and confirm password does not match");
							redirect('resetpwd');
						}
					} else {
						$this->session->set_flashdata('error', "Enter the new password minimum 8 characters");
						redirect('resetpwd');
					}
				}
			}
			else{ 
				$data['validation_message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
				$data['token'] = md5(uniqid(mt_rand(), true));
				$this->session->set_userdata('token',$data['token']);
				$this->load->view('admin/reset-password', $data);
			}
		}
		else{  
			$data['reset_msg'] = "Reset Link Expired";
			$this->load->view('admin/reset-password', $data);
		}
	}
	function manageEnquiry() {
	
		if($this->session->userdata('logincurdata') == FALSE){
			redirect('login/');// no session established, kick back to login page
		}	
		
		$data['main_content'] = 'admin/manage-enquiry-list';
		$data['enquirylist'] = $this->AdminLoginModel->getEnquiry();	
		
	
			$data['token'] = md5(uniqid(time()));
			$this->session->set_userdata("token1", $data['token']);
			$data['success_message'] = $this->session->flashdata('msg')?$this->session->flashdata('msg'):"";
			$data['validation_message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
			//$data['validation_message'] = (validation_errors() ? validation_errors() : "");
			$this->load->view('admin/incls/layout', $data);
		
	}
	
	function deleteEnquiry($id="") {
	
		if($this->session->userdata('logincurdata') == FALSE){
			redirect('login/');// no session established, kick back to login page
		}	
		
		 $data['id'] = $id;
		$id = $this->encryptdecrypt->deCrypt($id);
		
		if ( $this->input->get('token') == $this->session->userdata('token1')) {
			echo "hii";
			if ($id != "") {
				//check the id is present in the db
				if($this->AdminLoginModel->CheckEnquiryIdExists($id)) {
					
						$this->AdminLoginModel->deleteEnquiry($id);						
						$this->session->set_flashdata('msg',"Enquiry deleted Successfully.");
						//echo json_encode(array("status"=>1));
						redirect("manage-enquiry");
						exit();
				}else{
					redirect("manage-enquiry");
					exit();
				}
			}	
		}
	}
	
}