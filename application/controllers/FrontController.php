<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
	
		$this->load->library('form_validation');
		$this->load->model('FrontModel');
		$this->load->library("Encrypt");	
		$this->load->library('email');
		$this->load->library("EnCryptDeCrypt");
		$this->load->helper('security');
	}
function index() {

		$data['front_content'] = 'front/index';
		
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('lname', 'lname', 'required');
		$this->form_validation->set_rules('emailid', 'email', 'required');		
	   $this->form_validation->set_rules('contact_no', 'contact no', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('qualif', 'qualification', 'required');
	    $this->form_validation->set_rules('curreng', 'current engagement', 'required');
		if ($this->input->post('hmyears')!="") {
	    	$this->form_validation->set_rules('hmyears', 'how many years', 'required');
		}
        
		if ( $this->form_validation->run() == true ) {
			
			if ($this->input->post('token') == $this->session->userdata('token1')) {

                
                $formData = array("fhe_first_name" => $this->input->post('fname'),
        						"fhe_last_name" => $this->input->post('lname'),
        						"fhe_email_id" => $this->input->post('emailid'),
        						"fhe_contact" => $this->input->post('contact_no'),
        						"fhe_qualification" => $this->input->post('qualif'),
        						"fhe_currnt_engage" => $this->input->post('curreng'),
        						"fhe_how_many_years" => $this->input->post('hmyears')!="" ? $this->input->post('hmyears') : "",
        						"fhe_enq_date" => date('Y-m-d'),
        					);
							$this->FrontModel->insertEnquiry($formData);
							
				// send email to expert
				$config['mailtype'] ='html';
				$config['charset'] ='iso-8859-1';				
				$this->email->initialize($config);
			
				$to = array('igsc@indiraedu.com');
		//	$to = array('rupalilokhande126@gmail.com');
				$this->messageBody ="<table>
                        <tr> 
                            <td><strong>First Name</strong> :</td>
                            <td>".$this->input->post('fname')."</td>
                        </tr>
                        <tr> 
                            <td><strong>Last Name</strong> :</td>
                            <td>".$this->input->post('lname')."</td>
                        </tr>
                        <tr> 
                            <td><strong>Email Id</strong> :</td>
                            <td>".$this->input->post('emailid')."</td>
                        </tr>
                        <tr> 
                            <td><strong>Contact</strong> :</td>
                            <td>".$this->input->post('contact_no')."</td>
                        </tr>
						<tr> 
                            <td><strong>Qualification</strong> :</td>
                            <td>".$this->input->post('qualif')."</td>
                        </tr>
						<tr> 
                            <td><strong>Current Engagement</strong> :</td>
                            <td>".$this->input->post('curreng')."</td>
                        </tr>";
						
                        if($this->input->post('hmyears')!=""){
						$this->messageBody .="<tr> 
                            <td><strong>How Many Years</strong> :</td>
                            <td>".$this->input->post('hmyears')."</td>
                        </tr>";	
						}
                       $this->messageBody .="</table>
                        <br/>
                        ";			
				 
				$this->email->from($this->config->item("site_admin_email"),$this->config->item("site_email_from"));
				$this->email->reply_to($this->input->post('emailid'), $this->input->post('fname'));
				$this->email->to($to);							
				$this->email->subject('Enquiry from FOM Hochschule.');
				$this->email->message($this->messageBody);				
									
				if ( $this->email->send() ) {
					
					$config['mailtype'] ='html';
					$config['charset'] ='iso-8859-1';
					$this->email->initialize($config);
					$this->messageBody = "Dear Student,";
$this->messageBody .= "<br><br>Thank you for sending your interest in Masters Program at FOM University of Applied Sciences ( Germany ).<br><br>
We will send you on your email and through WhatsApp a detail information about the programs. <br><br>
 

One of the admission team member will call you to ensure you have received the detail information about the program.<br><br>
 

Stay Safe Stay Healthy.<br><br>

<strong>Best wishes<br><br>

IGSC- FOM Admission Office Team.</strong>";
					
					$this->email->from($this->config->item("site_admin_email"),$this->config->item("site_email_from"));
					 
					$this->email->to($this->input->post('emailid'));
					 
					$this->email->subject('Your Enquiry for Masters Program at FOM University of Applied Sciences ( Germany)');
					$this->email->message($this->messageBody);
					$this->email->send();
				
					//echo json_encode(array("msg" => "Your Enquiry has been submitted successfully.", "status" => 1));
					$this->session->set_flashdata('msg',"Your Enquiry has been submitted successfully.");
			redirect('index');
				exit();
				} else{
					 $this->session->set_flashdata('msg',"Your Enquiry is not sent. Please Try after some time");
					 redirect('index');
					 exit();
					//echo json_encode(array("msg" => "Your Enquiry is not sent. Please Try after some time.", "status" => 0));
				}
			}else{
			     $this->session->set_flashdata('msg',"Token does not match");
			     redirect('index');
					 exit();
				//echo "else if token does not match"; die;
			}		
		}else{
		    
			$data['meta_title'] = "FOM Hochschule";
			$data['meta_desc'] = "FOM Hochschule";
			$data['meta_keys'] = "FOM Hochschule, enquiry";
			$data['page_title'] = "index";
			
			$ctoken = md5(uniqid(time()));
			$data['token'] = $ctoken;
			
			$this->session->set_userdata('token1',$ctoken) ;
			$data['success_message'] = $this->session->flashdata('msg')?$this->session->flashdata('msg'):"";
			$data['validation_message'] = (validation_errors() ? validation_errors() : "");
			$this->load->view('front/incls/layout', $data);
		}
	}
	
	function error_page() {
		
		$data['front_content'] = 'front/404';	
		
		$data['meta_title'] = "FOM Hochschule";
		$data['meta_desc'] = "FOM Hochschule";
		$data['meta_keys'] = "FOM Hochschule";
		$data['page_title'] = "404 Error";
		
		$ctoken = md5(uniqid(time()));
		$data['token'] = $ctoken;
		$this->session->set_userdata('token',$ctoken) ;
		$this->load->view('front/incls/layout', $data);
	}
	
}