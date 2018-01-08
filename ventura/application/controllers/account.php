<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account extends SB_Controller {

    protected $_key = 'id';
    protected $_class = 'page';
    protected $layout = "layouts/main";

    function __construct() {
        parent::__construct();
        $this->layout = 'layouts/' . CNF_THEME . '/account/dashboard';
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->model('Page_model');

    }

	
    public function index() {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
        $this->load->view($this->layout, $data);
    }
	
    public function details() {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		 $this->layout = 'layouts/' . CNF_THEME . '/account/account';
        $this->load->view($this->layout, $data);
    }
	
	 public function makepayment() {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		 $this->layout = 'layouts/' . CNF_THEME . '/account/makepayment';
        $this->load->view($this->layout, $data);
    }
	
	////// associate
	 public function associate() {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		
		$this->load->helper('security');
        $this->load->model('Page_model');
		if($_POST)
		{
			//$insertedArray = array();
			
			//$insertedArray['']
			
			
		$getlastId = $this->Page_model->insertRegistration($_POST,$_POST['registration_id']);
				if($getlastId){
					$this->session->set_flashdata('success','Registration As Associate Done successfully');
					redirect('account/details', 'refresh');
				}else{
					$this->session->set_flashdata('error','Error in saving data');
					redirect('account/associate', 301);
				}
		}
		
		 $this->layout = 'layouts/' . CNF_THEME . '/account/associate';
        $this->load->view($this->layout, $data);
    }
	
	
	public function username() {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		$this->load->helper('security');
        $this->load->model('Page_model');
		$this->load->helper('form');
        if ($this->input->post()) {	
			$this->load->library('form_validation');
            $this->form_validation->set_rules('registration_username', 'Username ', 'trim|required|trim|xss_clean|edit_unique[tbl_registration.registration_username.'.$this->input->post('registration_id').']');
			$this->form_validation->set_rules('captcha', 'Captcha ', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
            if ($this->form_validation->run()) {
				$captcha = base64_decode(base64_decode(trim($this->input->post('captcha'))));
				$captchatext = base64_decode(base64_decode(trim($this->input->post('captchatext'))));
				if (trim($captcha) != trim($captchatext)) {
					$this->session->set_flashdata('error', 'Ops Something went wrong. Please check captcha!');
					redirect('account/details', 301);
					exit();
				}
				
				$getlastId = $this->Page_model->insertRegistration($_POST,$_POST['registration_id']);
				if($getlastId){
					$this->session->set_flashdata('success','Username update successfully');
					$getRegistrationData = $this->Page_model->get_registration_by_id($getlastId);
					$_SESSION['user'] =  $getRegistrationData;
					$_SESSION['acountType'] =  2;
					redirect('account/details', 'refresh');
				}else{
					$this->session->set_flashdata('error','Error in saving data');
					redirect('account/username', 301);
				}
			}
		
			
		}
		
		$this->layout = 'layouts/' . CNF_THEME . '/account/username';
        $this->load->view($this->layout, $data);
    }
	
	public function _check_password_exists($password)
	{
		  $this->load->model('Page_model');
		  $check_password = $this->Page_model->check_password($password,$_POST['registration_id']);
	  if ( ! $check_password )
	  {
		$this->form_validation->set_message('_check_password_exists', 'That password don\'t exist!');
		return FALSE;
	  }
	  else
	  {
		return TRUE;
	  }
	}
	
	public function changepassword() {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		$this->load->helper('security');
        $this->load->model('Page_model');
		$this->load->helper('form');
        if ($this->input->post()) {	
			$this->load->library('form_validation');
            $this->form_validation->set_rules('registration_password', 'Current Password ', 'trim|required|xss_clean|callback__check_password_exists');
			$this->form_validation->set_rules('registration_new_password', 'New Password ', 'trim|required|matches[registration_confirm_password]');
			$this->form_validation->set_rules('captcha', 'Captcha ', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
            if ($this->form_validation->run()) {
				$captcha = base64_decode(base64_decode(trim($this->input->post('captcha'))));
				$captchatext = base64_decode(base64_decode(trim($this->input->post('captchatext'))));
				if (trim($captcha) != trim($captchatext)) {
					$this->session->set_flashdata('error', 'Ops Something went wrong. Please check captcha!');
					redirect('account/details', 301);
					exit();
				}
				
				$updateArray = array();
				$updateArray['registration_password'] = $_POST['registration_password'];
				$updateArray['captcha'] = $_POST['captcha'];
				$updateArray['captchatext'] = $_POST['captchatext'];
				
				$getlastId = $this->Page_model->insertRegistration($updateArray,$_POST['registration_id']);
				if($getlastId){
					$this->session->set_flashdata('success','Password change successfully');
					$getRegistrationData = $this->Page_model->get_registration_by_id($getlastId);
					$_SESSION['user'] =  $getRegistrationData;
					$_SESSION['acountType'] =  2;
					redirect('account/details', 'refresh');
				}else{
					$this->session->set_flashdata('error','Error in saving data');
					redirect('account/username', 301);
				}
			}
		
			
		}
		
		$this->layout = 'layouts/' . CNF_THEME . '/account/changepassword';
        $this->load->view($this->layout, $data);
    }
	
	public function addbankaccount($account_id = null) {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		$this->load->helper('security');
        $this->load->model('Page_model');
        $data = array();
		if($account_id){
			$data['account_id'] = $account_id;
		}
        $this->load->helper('form');
        if ($this->input->post()) {
			
            $this->load->library('form_validation');
            $this->form_validation->set_rules('registration_id', 'Registration Unique Id ', 'trim|required');
			$this->form_validation->set_rules('account_name', 'Account Name  ', 'trim|required');
            $this->form_validation->set_rules('account_bank_name', 'Account Bank Name ', 'trim|required');
            $this->form_validation->set_rules('account_number', 'Account Number  ', 'trim|required');
            $this->form_validation->set_rules('account_ifsc_code', 'Account IFSC Code  ', 'trim|required');
			$this->form_validation->set_rules('captcha', 'Captcha ', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
            if ($this->form_validation->run()) {
				
				$captcha = base64_decode(base64_decode(trim($this->input->post('captcha'))));
				$captchatext = base64_decode(base64_decode(trim($this->input->post('captchatext'))));
				if (trim($captcha) != trim($captchatext)) {
					$this->session->set_flashdata('error', 'Ops Something went wrong. Please check captcha!');
					redirect('account/addbankaccount', 301);
					exit();
				}
			
				$getlastId = $this->Page_model->insertBankAccount($_POST,$_POST['account_id']);
				if($getlastId){
					$this->session->set_flashdata('success','Bank Account Add successfully');
					redirect('account/details', 'refresh');
				}else{
					$this->session->set_flashdata('error','Error in saving data');
					redirect('account/addbankaccount', 301);
				}
				
            }
           
        }
		 $this->layout = 'layouts/' . CNF_THEME . '/account/addbankaccount';
        $this->load->view($this->layout, $data);
    }
	
	////////// feedback
		public function feedback($feedback_id = null,$delete) {
        if (empty($_SESSION['user'])) {
            redirect('login','refresh');
        }
		$data = array();
		$this->load->helper('security');
        $this->load->model('Page_model');
        $data = array();
		if($delete)
		{
			$data['feedback_id'] = $feedback_id;
			$data['delete'] = $delete;

		}
		if($feedback_id){
			$data['feedback_id'] = $feedback_id;
		}
        $this->load->helper('form');
        if ($this->input->post()) {
			
            $this->load->library('form_validation');
            $this->form_validation->set_rules('registration_id', 'Registration Unique Id ', 'trim|required');
			$this->form_validation->set_rules('title', 'Title  ', 'trim|required');
            $this->form_validation->set_rules('description', 'Description ', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
            if ($this->form_validation->run()) {
				
			
				$getlastId = $this->Page_model->insertFeedBack($_POST,$_POST['feedback_id']);
				
				if (!empty($_FILES['file']['name'])) {
						$image_inserted_data = array();
						$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
						$this->load->library('upload');
						$destinationPath = "./uploads/feedback_files/";
						$config['upload_path'] = $destinationPath;
						$config['allowed_types'] = 'pdf|png|jpg|jpeg|gif';
						$config['file_name'] = time().rand(100000,10000000) . '.' . $ext;
						$this->upload->initialize($config);
						if ($this->upload->do_upload('file')) {
							$file_data = $this->upload->data();
							$image_inserted_data['file'] = $config['file_name'];
						}else{
							$this->upload->display_errors();
							$this->data['error'] = $this->upload->display_errors();
							$image_inserted_data['file'] = '';						
						}
						$this->Page_model->insertFeedBack($image_inserted_data,$getlastId);
					}
					
					
				if($getlastId){
					$this->session->set_flashdata('success','Feedback Add successfully');
					redirect('account/details', 'refresh');
				}else{
					$this->session->set_flashdata('error','Error in saving data');
					redirect('account/feedback', 301);
				}
				
            }
           
        }
		 $this->layout = 'layouts/' . CNF_THEME . '/account/feedback';
        $this->load->view($this->layout, $data);
    }

//////// end class
}
