<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends SB_controller {

    protected $_key = 'id';
    protected $_class = 'page';
    protected $layout = "layouts/main";
    private $hatron;

   function __construct() {
        parent::__construct();
       $this->layout = 'layouts/' . CNF_THEME . '/login';
        $this->load->library('session');
		$this->load->model('Page_model');
    }

    function index() {
        $this->load->helper('security');
        if (!empty($_SESSION['user'])) {
            redirect('account');
        }

        $data = array();
        $this->load->helper('form');
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('type', 'Select user type want to login ', 'required');
			$this->form_validation->set_rules('username', 'Username ', 'trim|required');
            $this->form_validation->set_rules('admin_password', 'Password ', 'trim|required');
			$this->form_validation->set_rules('captcha', 'Captcha ', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
            if ($this->form_validation->run()) {
				
				$captcha = base64_decode(base64_decode(trim($this->input->post('captcha'))));
				$captchatext = base64_decode(base64_decode(trim($this->input->post('captchatext'))));
				if (trim($captcha) != trim($captchatext)) {
					$this->session->set_flashdata('error', 'Ops Something went wrong. Please check captcha!');
					 $this->session->set_flashdata('type', $_POST['type']);
					redirect('login', 301);
					exit();
				}
			
                if (!empty($_POST['type']) && $_POST['type'] == 1) {
					 $user_details_array = $this->Page_model->login(trim($this->input->post('username')), base64_decode(base64_decode(trim($this->input->post('admin_password')))), $this->input->post('type'));
                    if (!empty($user_details_array)) {
                        $_SESSION['user'] =  $user_details_array;
                        $_SESSION['acountType'] =  $_POST['type'];
						 redirect('account', 'refresh');
                    } else {
                        $this->session->set_flashdata('error', 'Error in Admin Login <br/>Wrong Username and password !!!');
                        $this->session->set_flashdata('type', '1');
                        redirect('login');
                    }
				}
                if (!empty($_POST['type']) && $_POST['type'] == 2) {
                    $user_details_array = $this->Page_model->login(trim($this->input->post('username')), base64_decode(base64_decode(trim($this->input->post('admin_password')))), $this->input->post('type'));
                    if (!empty($user_details_array)) {
                        $_SESSION['user'] =  $user_details_array;
                        $_SESSION['acountType'] =  $_POST['type'];
                         redirect('account', 'refresh');
                    } else {
                        $this->session->set_flashdata('error', 'Error in Admin Login <br/>Wrong Username and password !!!');
                        $this->session->set_flashdata('type', '2');
                        redirect('login');
                    }
                }
				if (!empty($_POST['type']) && $_POST['type'] == 3) {
                    $user_details_array = $this->Page_model->login(trim($this->input->post('username')), base64_decode(base64_decode(trim($this->input->post('admin_password')))), $this->input->post('type'));
                    if (!empty($user_details_array)) {
                        $_SESSION['user'] =  $user_details_array;
                        $_SESSION['acountType'] =  $_POST['type'];
                         redirect('account', 'refresh');
                    } else {
                        $this->session->set_flashdata('error', 'Error in Admin Login <br/>Wrong Username and password !!!');
                        $this->session->set_flashdata('type', '3');
                        redirect('login');
                    }
                }
				
				
				if (!empty($_POST['type']) && $_POST['type'] == 4) {
                    $user_details_array = $this->Page_model->login(trim($this->input->post('username')), base64_decode(base64_decode(trim($this->input->post('admin_password')))), $this->input->post('type'));
                    if (!empty($user_details_array)) {
                        $_SESSION['user'] =  $user_details_array;
                        $_SESSION['acountType'] =  $_POST['type'];
                         redirect('account', 'refresh');
                    } else {
                        $this->session->set_flashdata('error', 'Error in Admin Login <br/>Wrong Username and password !!!');
                        $this->session->set_flashdata('type', '4');
                        redirect('login');
                    }
                }
            }
            $data['error'] = 'Error Processing Login !!!';
        }

        $this->load->view($this->layout, $data);
    }

    function logout() {
        session_destroy();
        redirect('login', 'refresh');
    }

    function logoutApp() {
        redirect('http://hrmsdemo.gravitasoft.com/Login/emplogout');
    }

    function adminlogout() {
        $this->session->unset_userdata('admin');
        redirect('auth/adminlogin', 'refresh');
    }

    function redirection($url) {
        return "<script>window.location.href={$url}</script>";
    }
	
	////// forgot password 
	function forgot()
	{
		$getRegistrationData = $this->Page_model->get_registrationdetail_email($_POST['email']);
				if(empty($getRegistrationData))
				{
					redirect('forgot-password?e=no', 'refresh');
				}
				else
				{
					$EmailData = '<div style="font-size:18px;" >Dear Registrant, </div>';
					$EmailData .= '
						<div style="font-size:18px;" ><b>"Ventura"</b> welcomes you to our website.<br />please follow the link :- <a href="'.base_url().'login" title="Login Url"> Click Here to Login</a><br>
<b>Your username and password is as follows : </b><br />
<b>Username :- </b> '.$getRegistrationData['registration_username'].'<br />
<b>Password :- </b> '.$getRegistrationData['registration_password'].'<br />
<b>URL :- </b> '.base_url().'login</p><br />';
					$EmailData .= '<div style="font-size:18px;" ><b>Thanks and regards,<br>Ventura</b></div>';
					
					$message ='<pre>'.$EmailData.'</pre>';                  
				
					$this->sentmail($getRegistrationData['registration_email'], $getRegistrationData['registration_name'], 'Ventura Forgot Password', $message, null);
					redirect('forgot-password?e=yes', 'refresh');

				}
				
	}

}
