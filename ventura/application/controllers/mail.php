<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mail extends SB_controller {

    protected $_key = 'id';
    protected $_class = 'profile';
    protected $layout = "layouts/main";

    function __construct() {
        parent::__construct();
		
        $this->layout = 'layouts/' . CNF_THEME . '/index';
    }

    public function sendmail($form_id) {
        if ($this->input->post()) {
            if ($this->input->post('to_mail'.$form_id)){

                $sentmail = Sb_controller::sentmail($this->input->post('email'.$form_id), $this->input->post('name'.$form_id), $this->input->post('subject'.$form_id), $this->input->post('message'.$form_id).'<br><br>'.$this->input->post('phone'.$form_id), $this->input->post('to_mail'.$form_id));

            }else{
                $sentmail = Sb_controller::sentmail($this->input->post('email'.$form_id), $this->input->post('name'.$form_id), $this->input->post('subject'.$form_id), $this->input->post('message'.$form_id).'<br><br>'.$this->input->post('phone'.$form_id));
            }


            if ($sentmail) {
		
                $insert_array = array(
                    'form_filled_ip_address' => $this->input->ip_address(),
                    'form_id' => $this->input->post('form_id'.$form_id),
                    'form_data' => serialize($this->input->post()),
                );
                if ($this->db->insert('tb_send_mail', $insert_array)) {
					die('1');
                } else {
                    die('Error in submiting data..');
                }
            } else {
                 die('Error in submiting data..');
            }
        }
    }

    public function lang($lang) {
        $this->session->set_userdata('lang', $lang);
        redirect($_SERVER['HTTP_REFERER']);
    }


     function publicsuggestion()
    {
       if($this->input->post())
       {
          
           
           if(SB_Controller::sentmail($this->input->post('email'),'user', 'Public Suggestions & Views', strip_tags($_POST['suggestion']), $to_mail = NULL))
             {
               
                echo 1;
                exit;
                                                  
              }
       else {

                echo 2;
                exit;

     }

}
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/page.php */ 