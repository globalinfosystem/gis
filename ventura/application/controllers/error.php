<?php 
class Error extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
        $this->header = 'layouts/' . CNF_THEME . '/header';
        $this->footer = 'layouts/' . CNF_THEME . '/footer';
        $this->load->view($this->header);
   
        $this->load->view('error/index',$data);
        $this->load->view($this->footer);
        
    } 
} 
?> 