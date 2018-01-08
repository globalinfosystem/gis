<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends SB_controller {

    protected $_key = 'id';
    protected $_class = 'page';
    protected $layout = "layouts/main";
    private $hatron;

    function __construct() {
        parent::__construct();
        $this->layout = 'layouts/' . CNF_THEME . '/registration';
        $this->load->library('session');
    }

    function index() {
        $this->load->helper('security');
       
        $this->load->model('Page_model');
       
       
		
        $data = array();
        $this->load->helper('form');
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('registration_name', 'Name ', 'trim|required');
			$this->form_validation->set_rules('registration_father_name', 'Father Name  ', 'trim|required');
            $this->form_validation->set_rules('registration_address', 'Address ', 'trim|required');
            $this->form_validation->set_rules('registration_mobile_no', 'Mobile No.  ', 'trim|required');
            $this->form_validation->set_rules('registration_email', 'Email  ', 'trim|required');
            $this->form_validation->set_rules('registration_dob', 'D.O.B ', 'trim|required');
            $this->form_validation->set_rules('registration_gender', 'Gender ', 'trim|required');
            $this->form_validation->set_rules('registration_join_for', 'Join For ', 'trim|required');
            $this->form_validation->set_rules('registration_amount', 'Amount  ', 'trim|required');
            $this->form_validation->set_rules('registration_membership', 'Membership ', 'trim|required');
			$this->form_validation->set_rules('captcha', 'Captcha ', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
            if ($this->form_validation->run()) {
				
				$captcha = base64_decode(base64_decode(trim($this->input->post('captcha'))));
				$captchatext = base64_decode(base64_decode(trim($this->input->post('captchatext'))));
				if (trim($captcha) != trim($captchatext)) {
					$this->session->set_flashdata('error', 'Ops Something went wrong. Please check captcha!');
					redirect('register', 301);
					exit();
				}
				
				
				if($getlastId = $this->Page_model->insertRegistration($_POST,$_POST['registration_id'])){
					$getRegistrationData = $this->Page_model->get_registration_by_id($getlastId);
				if(empty($_POST['registration_id'])) { 
				
					$EmailData = '<div style="font-size:18px;" >Dear '.$getRegistrationData['registration_name'].' </div>';
					$EmailData .= '<div style="font-size:18px;" ><b>"Ventura"</b> congratulates you for successful registration with <b>"Ventura"</b><br>please follow the link :- <a href="'.base_url().'login" title="Login Url"> Click Here to Login</a><br>
<b>Username :- </b> '.$getRegistrationData['registration_username'].'<br /><b>Password :- </b> '.$getRegistrationData['registration_password'].'<br /><b>URL :- </b> '.base_url().'login</div>';
					$EmailData .= '<div style="font-size:18px;" ><b>Santosh Pandey<br>Ventura</b></div>';
					$message ='<pre>'.$EmailData.'</pre>';                  
					$this->sentmail($getRegistrationData['registration_email'], $getRegistrationData['registration_name'], 'Ventura new registration', $message, null);
				} 
					if (!empty($_FILES['registration_pic']['name'])) {
						$image_inserted_data = array();
						$ext = pathinfo($_FILES['registration_pic']['name'], PATHINFO_EXTENSION);
						$this->load->library('upload');
						$destinationPath = "./uploads/registration_pics/";
						$config['upload_path'] = $destinationPath;
						$config['allowed_types'] = 'pdf|png|jpg|jpeg|gif';
						$config['file_name'] = time().rand(100000,10000000) . '.' . $ext;
						$this->upload->initialize($config);
						if ($this->upload->do_upload('registration_pic')) {
							$file_data = $this->upload->data();
							$image_inserted_data['registration_pic'] = $config['file_name'];
						}else{
							$this->upload->display_errors();
							$this->data['error'] = $this->upload->display_errors();
							$image_inserted_data['registration_pic'] = '';						
						}
						$this->Page_model->insertRegistration($image_inserted_data,$getlastId);
					}
					
					if (!empty($_FILES['registration_aadhar_card']['name'])) {
						$image_inserted_data = array();
						$ext = pathinfo($_FILES['registration_aadhar_card']['name'], PATHINFO_EXTENSION);
						$this->load->library('upload');
						$destinationPath = "./uploads/registration_aadhar/";
						$config['upload_path'] = $destinationPath;
						$config['allowed_types'] = 'pdf|png|jpg|jpeg|gif';
						$config['file_name'] = time().rand(100000,10000000) . '.' . $ext;
						$this->upload->initialize($config);
						if ($this->upload->do_upload('registration_aadhar_card')) {
							$file_data = $this->upload->data();
							$image_inserted_data['registration_aadhar_card'] = $config['file_name'];
						}else{
							$this->upload->display_errors();
							$this->data['error'] = $this->upload->display_errors();
							$image_inserted_data['registration_aadhar_card'] = '';						
						}
						$this->Page_model->insertRegistration($image_inserted_data,$getlastId);
					}
					
					$this->session->set_flashdata('success','Registration save successfully');
					$_SESSION['user'] =  $getRegistrationData;
					$_SESSION['acountType'] =  2;
					redirect('account/details', 'refresh');
			}else{
				$this->session->set_flashdata('error','Error in saving data');
				redirect('register');
			}
				
            }
            $data['error'] = 'Error Processing Login !!!';
        }
        $this->load->view($this->layout, $data);
    }

   
    function redirection($url) {
        return "<script>window.location.href={$url}</script>";
    }

}
