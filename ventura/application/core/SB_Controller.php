<?php

//if (!defined('BASEPATH')) exit('No direct script access allowed');

class SB_Controller extends CI_Controller {

    var $data = array();

    function __construct() {
        parent::__construct();
        session_start();
		$this->visiter_counter();
        $_SESSION['loginSession'] = 'Yes';

        if ($this->session->userdata('lang') == '') {
            $this->session->set_userdata('lang', 'en');
            $this->load->language('core', 'en');
        } else {
            $this->load->language('core', $this->session->userdata('lang'));
        }
        $this->data['content'] = 'Welcome to Haryana Sports Builder';
        $this->data['page'] = $this->input->get('page', true);

        // init for upload library
        $upload_config = array();
        $this->load->library('upload', $upload_config);

        $imagelib_config = array();
        $this->load->library('image_lib', $imagelib_config);
    }

    function download() {

        $info = $this->model->makeInfo($this->module);
        $results = $this->model->getRows(array());
        $fields = $info['config']['grid'];
        $rows = $results['rows'];
        $content = $this->data['pageTitle'];
        $content .= '<table border="1">';
        $content .= '<tr>';
        foreach ($fields as $f) {
            if ($f['download'] == '1')
                $content .= '<th style="background:#f9f9f9;">' . $f['label'] . '</th>';
        }
        $content .= '</tr>';

        foreach ($rows as $row) {
            $content .= '<tr>';
            foreach ($fields as $f) {
                if ($f['download'] == '1'):
                    $conn = (isset($f['conn']) ? $f['conn'] : array() );
                    $content .= '<td>' . SiteHelpers::gridDisplay($row->$f['field'], $f['field'], $conn) . '</td>';
                endif;
            }
            $content .= '</tr>';
        }
        $content .= '</table>';

        @header('Content-Type: application/ms-excel');
        @header('Content-Length: ' . strlen($content));
        @header('Content-disposition: inline; filename="' . $title . ' ' . date("d/m/Y") . '.xls"');

        echo $content;
        exit;
    }

    function search() {
        $keyword = $this->module;
        if (!is_null($this->input->get('keyword', true))) {
            $keyword = 'administrator/' . $this->module . '?search=' . str_replace(' ', '_', $this->input->get('keyword', true));
        }
        return redirect($keyword);
    }

    function multisearch() {
        //echo '<pre>';print_r($_POST);echo '</pre>';exit;
        $post = $_POST;
        $items = '';
        foreach ($post as $item => $val):
            if ($_POST[$item] != '' and $item != '_token' and $item != 'md' && $item != 'id'):
                $items .= $item . ':' . trim($val) . '|';
            endif;

        endforeach;
        redirect('administrator/' . $this->module . '?search=' . substr($items, 0, strlen($items) - 1));
    }

    function filter() {
        $module = $this->module;
        $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : '');
        $order = (!is_null($this->input->get('order', true)) ? $this->input->get('order', true) : '');
        $rows = (!is_null($this->input->get('rows', true)) ? $this->input->get('rows', true) : '');
        $md = (!is_null($this->input->get('md', true)) ? $this->input->get('md', true) : '');

        $filter = '?';
        if ($sort != '')
            $filter .= '&sort=' . $sort;
        if ($order != '')
            $filter .= '&order=' . $order;
        if ($rows != '')
            $filter .= '&rows=' . $rows;
        if ($md != '')
            $filter .= '&md=' . $md;



        return redirect('administrator/' . $module . $filter);
    }

    function infoFieldSearch() {
        $info = $this->model->makeInfo($this->module);
        $forms = $info['config']['forms'];
        $data = array();
        foreach ($forms as $f) {
            if ($f['search'] == 1)
                if ($f['alias'] != '') {
                    $data[] = array('id' => $f['alias'] . "." . $f['field']);
                }
        }
        return $data;
    }

    function buildSearch() {
        $keywords = '';
        $fields = '';
        $param = '';
        $allowsearch = $this->info['config']['forms'];
        foreach ($allowsearch as $as)
            $arr[$as['field']] = $as;
        if ($this->input->get('search', true) != '') {
            $type = explode("|", $this->input->get('search', true));
            if (count($type) >= 1) {
                foreach ($type as $t) {
                    $keys = explode(":", $t);

                    if (in_array($keys[0], array_keys($arr))):
                        if ($arr[$keys[0]]['type'] == 'select' || $arr[$keys[0]]['type'] == 'radio') {
                            $param .= " AND " . $arr[$keys[0]]['alias'] . "." . $keys[0] . " = '" . $keys[1] . "' ";
                        } else {
                            $param .= " AND " . $arr[$keys[0]]['alias'] . "." . $keys[0] . " REGEXP '" . $keys[1] . "' ";
                        }
                    endif;
                }
            }
        }
        return $param;
    }

    function comboselect() {
        $param = explode(':', $this->input->get('filter', true));
        $rows = $this->model->getComboselect($param);
        $items = array();

        $fields = explode("|", $param[2]);

        foreach ($rows as $row) {
            $value = "";
            foreach ($fields as $item => $val) {
                if ($val != "")
                    $value .= $row->$val . " ";
            }
            $items[] = array($row->$param['1'], $value);
        }

        echo json_encode($items);
    }

    function combotable() {
        $rows = $this->model->getTableList($this->db->database);

        $items = array();
        foreach ($rows as $row) {
            $items[] = array($row, $row);
        }

        echo json_encode($items);
    }

    function combotablefield() {
        $items = array();
        $table = $this->input->get('table', true);
        if ($table != '') {
            $rows = $this->model->getTableField($this->input->get('table', true));
            foreach ($rows as $row)
                $items[] = array($row, $row);
        }
        echo json_encode($items);
    }

    function validateListError($rules) {
        $errMsg = $this->lang->line('core.note_error');
        $errMsg .= '<hr /> <ul>';
        foreach ($rules as $key => $val) {
            $errMsg .= '<li>' . $key . ' : ' . $val[0] . '</li>';
        }
        $errMsg .= '</li>';
        return $errMsg;
    }

    function validateForm() {
        $forms = $this->info['config']['forms'];
        $rules = array();
        foreach ($forms as $form) {
            if ($form['required'] == '' || $form['required'] != '0') {
                $rules[] = array('field' => $form['field'], 'label' => $form['label'], 'rules' => 'required');
            } elseif ($form['required'] == 'alpa') {
                $rules[] = array('field' => $form['field'], 'label' => $form['label'], 'rules' => 'required|alpha');
            } elseif ($form['required'] == 'alpa_num') {
                $rules[] = array('field' => $form['field'], 'label' => $form['label'], 'rules' => 'required|alpha_numeric');
            } elseif ($form['required'] == 'alpa_dash') {
                $rules[] = array('field' => $form['field'], 'label' => $form['label'], 'rules' => 'required|alpha_dash');
            } elseif ($form['required'] == 'email') {
                $rules[] = array('field' => $form['field'], 'label' => $form['label'], 'rules' => 'required|valid_email');
            } elseif ($form['required'] == 'numeric') {
                $rules[] = array('field' => $form['field'], 'label' => $form['label'], 'rules' => 'required|numeric');
            } else {
                
            }
        }

        //echo '<pre>';print_r($rules);echo '<pre>';exit;
        return $rules;
    }

    function validatePost($table = '') {
        $str = $this->info['config']['forms'];
        $data = array();

        foreach ($str as $f) {
            $field = $f['field'];
            if ($f['view'] == 1) {

                if (!is_null($this->input->get($field, true))) {
                    $data[$field] = $this->input->get($field, true);
                }

                switch ($f['type']) {
                    case 'textarea_editor':
                    case 'textarea':
                        $content = $this->input->get_post($field) ? $this->input->get_post($field) : '';
                        $data[$field] = $content;

                        break;

                    case 'file' :
                        $this->load->library('upload');
                        echo $destinationPath = "." . $f['option']['path_to_upload'];

                        $config['upload_path'] = $destinationPath;
                        $config['allowed_types'] = 'gif|jpg|png';

                        $this->upload->initialize($config);
                        if ($this->upload->do_upload($field)) {
                            $file_data = $this->upload->data();
                            $filename = $file_data['file_name'];
                            $extension = $file_data['file_ext']; //if you need extension of the file


                            if ($f['option']['resize_width'] != '0' && $f['option']['resize_width'] != '') {
                                if ($f['option']['resize_height'] == 0) {
                                    $f['option']['resize_height'] = $f['option']['resize_width'];
                                }

                                $origFile = $destinationPath . '/' . $filename;
                                SiteHelpers::cropImage($f['option']['resize_width'], $f['option']['resize_height'], $orgFile, $extension, $orgFile);
                            }

                            $data[$field] = $filename;
                        } else {
                            unset($data[$field]);
                        }

                        break;

                    case 'checkbox' :
                        if (!is_null($this->input->get($field, true))) {
                            $data[$field] = implode(",", $this->input->get_post($field, true));
                        }

                        break;

                    case 'date' :
                        $data[$field] = date("Y-m-d", strtotime($this->input->get_post($field, true)));
                        break;

                    case 'select' :
                        if (isset($f['option']['is_multiple']) && $f['option']['is_multiple'] == 1) {
                            $data[$field] = implode(",", $this->input->get_post($field, true));
                        } else {
                            $data[$field] = $this->input->get_post($field, true);
                        }
                        break;

                    case 'text' :
                    default:
                        $data[$field] = $this->input->get_post($field, true);
                        break;
                }
            }
        }
        $global = (isset($this->access['is_global']) ? $this->access['is_global'] : 0 );
        if ($global == 0)
            $data['entry_by'] = $this->session->userdata('uid');

        return $data;
    }

    function validAccess($methode) {

        if ($this->model->validAccess($methode, $this->info['id']) == false) {
            $this->session->setflashdata('message', SiteHelpers::alert('error', ' Your are not allowed to access the page '));
            return redirect('home');
        }
    }

    function inputLogs($note = NULL) {
        $data = array(
            'module' => $this->uri->segment(1),
            'task' => $this->uri->segment(2),
            'user_id' => $this->session->userdata('uid'),
            'ipaddress' => $this->input->ip_address(),
            'note' => $note
        );
        $this->db->insert('tb_logs', $data);
        ;
    }

    function paginator($options = array()) {

        $keepLive = '';
        $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : '');
        $order = (!is_null($this->input->get('order', true)) ? $this->input->get('order', true) : '');
        $rows = (!is_null($this->input->get('rows', true)) ? $this->input->get('rows', true) : '');
        $search = (!is_null($this->input->get('search', true)) ? $this->input->get('search', true) : '');

        $appends = array();
        if ($sort != '')
            $keepLive .='&sort=' . $sort;
        if ($order != '')
            $keepLive .='&order=' . $order;
        if ($rows != '')
            $keepLive .='&rows=' . $rows;
        if ($search != '')
            $keepLive .='&search=' . $search;

        $toptions = array_replace_recursive(array(
            'base_url' => site_url('administrator/' . $this->module) . '?' . $keepLive,
            'total_rows' => 0,
            'per_page' => $this->per_page,
                ), $options);
        $this->pagination->initialize($toptions);

        return $this->pagination->create_links();
    }

    function displayError($data) {
        $this->load->view('layouts/errors', $data);
    }

    function do_upload($folder_name, $file_name, $allowed_types = 'mp3|mp4|jpg|png|gif|pdf|doc|docx|xls|jpeg|bmp|zip|rar|xlsx|rtf|txt') {
        $config['upload_path'] = './uploads/' . $folder_name;
        $config['allowed_types'] = $allowed_types;
        $config['max_size'] = '10000000';
        $config['overwrite'] = false;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if (!is_dir($config['upload_path']))
            return 1;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($file_name)) {
            return $this->upload->display_errors();
        } else {
            return array('upload_data' => $this->upload->data());
        }
    }

    function get_media($file, $height, $width, $align) {
        if ($file) {
            if (strpos($file, '.jpg') != false || strpos($file, '.png') != false || strpos($file, '.gif') != false || strpos($file, '.jpeg') != false) {
                return "<img src='" . base_url() . "uploads/media/" . $file . "' class='img-responsive' height='" . $height . "' width='" . $width . "' align='" . $align . "' />";
            }
            if (strpos($file, '.mp4') != false) {

                return "<video width='" . $width . "' height='" . $height . "' src='" . base_url() . "uploads/media/" . $file . "' align='" . $align . "' type='video/mp4'
	id='player1' poster='" . base_url() . "uploads/media/echo-hereweare.jpg' 
	controls='controls' preload='none'></video>";
            }
            if (strpos($file, '.mp3') != false) {

                return "<audio id='player2' src='" . base_url() . "uploads/media/" . $file . "' type='audio/mp3' align='" . $align . "' controls='controls'>		
						</audio>";
            }
        }
    }

    function get_url($file, $height, $width, $align) {
        if ($file) {
            return "
					<iframe src='" . $file . "' width='" . $width . "' height='" . $height . "' align='" . $align . "' frameborder='0'></iframe>
			";
        }
    }

    function get_form($form_id) {
        if ($form_id) {
            $field_data = $this->db->query('select * from tb_form_field where field_form_id="' . $form_id . '" and 	field_status="enable" order by field_order asc')->result_array();
            $form_data = $this->db->get_where('tb_forms', array('form_status' => 'enable', 'form_id' => $form_id))->row_array();
            $return_data = '';
            if ($form_data) {

                $form_class = !empty($form_data['form_class']) ? "class='form-horizontal " . $form_data['form_class'] . "'" : "class='form-horizontal'";
                $form_id = !empty($form_data['form_ids']) ? "id='" . $form_data['form_ids'] . "'" : '';
                $form_action = "action='" . base_url() . $form_data['form_action'] . "'";
                $post = "method='post'";
                $return_data.="";
                //$return_data. = "<form " . $form_class . " " . $form_id . " ".$form_action." ".$post." >";
                $return_data.="<form " . $form_class . " " . $form_id . " " . $form_action . " " . $post . ">";
                $return_data.="<input type='hidden' name='" . $this->security->get_csrf_token_name() . "' value='" . $this->security->get_csrf_hash() . "' " . $class . "  />";
                $count_textarea_editor = 0;
                if ($field_data) {
                    if ($form_data['form_post'] == 1):
                        $return_data.="<div id='message" . trim($form_data['form_ids']) . "' style='background: green none repeat scroll 0 0; border: 1px solid #c1c1c1;  color: #fff; font-size: 18px; margin-bottom: 20px; margin-left: 0; padding: 10px;display:none;'></div>";
                    endif;
                    foreach ($field_data as $value) {
                        $class = !empty($value['field_class']) ? "class='" . $value['field_class'] . "'" : '';
                        $id = !empty($value['fiel_id_type']) ? "id='" . $value['fiel_id_type'] . "'" : '';
                        $required = (!empty($value['field_required']) && $value['field_required'] == 1) ? "required" : '';
                        $field_value = !empty($value['field_value']) ? "value='" . $value['field_value'] . "'" : '';
                        if ($value['field_type'] == 1) {
                            $return_data.="<div class='form-group'>";
                            $return_data.="<label class='control-label col-sm-2' for='" . $value['field_name'] . "'>" . $value['field_label'] . "</label>";
                            $return_data.="<div class='col-sm-10'>";
                            $return_data.="<input type='text' name='" . $value['field_name'] . "' " . $class . " " . $id . " " . $required . " " . $field_value . " />";
                            $return_data.="</div>";
                            $return_data.="</div>";
                        }
                        if ($value['field_type'] == 3) {
                            $field_value = '';
                            $field_value = !empty($value['field_value']) ? $value['field_value'] : '';
                            $return_data.="<div class='form-group'>";
                            $return_data.="<label class='control-label col-sm-2' for='" . $value['field_name'] . "'>" . $value['field_label'] . "</label>";
                            $return_data.="<div class='col-sm-10'>";
                            $return_data.="<textarea name='" . $value['field_name'] . "' " . $class . " " . $id . " " . $required . " rows='5' >" . $field_value . "</textarea>";
                            $return_data.="</div>";
                            $return_data.="</div>";
                        }
                        if ($value['field_type'] == 4) {
                            $class = '';
                            $class = !empty($value['field_class']) ? "class='ckeditor " . $value['field_class'] . "'" : "class='ckeditor'";
                            $field_value = '';
                            $field_value = !empty($value['field_value']) ? $value['field_value'] : '';
                            $return_data.="<div class='form-group'>";
                            $return_data.="<label class='control-label col-sm-2' for='" . $value['field_name'] . "'>" . $value['field_label'] . "</label>";
                            $return_data.="<div class='col-sm-10'>";

                            $return_data.="<textarea name='" . $value['field_name'] . "' " . $class . " " . $id . " " . $required . " rows='5' >" . $field_value . "</textarea>";
                            $return_data.="</div>";
                            $return_data.="</div>";
                            $count_textarea_editor++;
                        }
                        if ($value['field_type'] == 9) {
                            $return_data.="<input type='hidden' name='" . $value['field_name'] . "' " . $class . " " . $id . " " . $required . " " . $field_value . " />";
                        }


                        if ($value['field_type'] == 10) {
                            $return_data.="<div class='form-group'>";
                            $return_data.="<label class='control-label col-sm-2' for='" . $value['field_name'] . "'>" . $value['field_label'] . "</label>";
                            $return_data.="<div class='col-sm-10'>";

                            $return_data.="<input type='submit' name='" . $value['field_name'] . "' " . $class . " " . $id . " " . $required . " " . $field_value . " />";
                            $return_data.="</div>";
                            $return_data.="</div>";
                        }
                        if ($value['field_type'] == 11) {

                            $return_data.="<div class='form-group'>";
                            $return_data.="<label class='control-label col-sm-2' for='" . $value['field_name'] . "'>" . $value['field_label'] . "</label>";
                            $return_data.="<div class='col-sm-10'>";

                            $return_data.=$value['field_label'] . "<input type='button' name='" . $value['field_name'] . "' " . $class . " " . $id . " " . $required . " " . $field_value . " />";
                            $return_data.="</div>";
                            $return_data.="</div>";
                        }
                    }

                    $return_data.="</form>";

                    if ($count_textarea_editor > 0) {
                        $return_data.='<script type="text/javascript" src="' . base_url() . 'administrator/ckeditor/ckeditor.js"></script>';
                    }
                    if ($form_data['form_post'] == 1):
                        $return_data.= "<script type='text/javascript'>
                                        
                                         $('#" . trim($form_data['form_ids']) . "').submit(function (event) {
                                                 $('html, body').animate({ scrollTop: 0 }, 'slow');
                                                event.preventDefault();
                                                var formData = $(this).serialize();
                                                call_page_loader(1);
                                                $.ajax({
                                                    type: $(this).attr('method'),
                                                    url: $(this).attr('action'),
                                                    data: formData,
                                                    success: function (data) {
                                                    if($.trim(data) == 1){
                                                    $('#message" . trim($form_data['form_ids']) . "').show();
                                                        $('#message" . trim($form_data['form_ids']) . "').html('Thanks for connecting with us. We will contact you shortly');
                                                             call_page_loader(2);
                                                                $('#" . trim($form_data['form_ids']) . " input[type=text]').val('');
                                                                $('#" . trim($form_data['form_ids']) . " textarea').html('');
                                                                $('#" . trim($form_data['form_ids']) . " textarea').val('');
                                                                $('#" . trim($form_data['form_ids']) . " select').val('');
                                                              $('html, body').animate({
                                                                    scrollTop: $('#message" . trim($form_data['form_ids']) . "').offset().top
                                                                }, 2000);
                                                              $('#message" . trim($form_data['form_ids']) . "').fadeOut(10000); 
                                                    }else{
                                                     $('#message" . trim($form_data['form_ids']) . "').show();
                                                        $('#message" . trim($form_data['form_ids']) . "').html(data);
                                                             call_page_loader(2);
                                                              $('html, body').animate({
                                                                    scrollTop: $('#message" . trim($form_data['form_ids']) . "').offset().top
                                                                }, 2000);
                                                                $('#message" . trim($form_data['form_ids']) . "').fadeOut(10000); 
                                                    }
                                                    },
                                                    error: function(){
                                                        alert('error in ajax form submission');
                                                        }
                                                });

                                        return false;
                                        });
					</script>";

                    endif;
                    return $return_data;
                } else {

                    return $return_data;
                }
            }
        }
    }

     function sentmail($email, $name, $subject, $message,$attach = null) {
        $this->load->library('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.haryanasahityasangam.org',
            'smtp_port' => 25,
            'smtp_user' => 'noreply@haryanasahityasangam.org',
            'smtp_pass' => 'utsav2017',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $config['newline'] = "\r\n";
        $config['validation'] = TRUE;
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");
        $this->email->from('contact@gissoft.net', 'Ventura');
        if ($email):
            $this->email->to(trim($email), $name);
            $this->email->cc('contact@gissoft.net');
            $this->email->bcc('contact@gissoft.net');
        else:
            $this->email->to('contact@gissoft.net');
        endif;
        $this->email->subject($subject);
        $this->email->message($message);
		if($attach){
			$this->email->attach($attach);
		}
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    function show_date($date) {
        if ($date == '') {
            return '';
        } else if ($date == '0000-00-00 00:00:00') {
            return '';
        } else if ($date == 'NULL') {
            
        } else {
            return date('d-M-Y', strtotime($date));
        }
    }

    function staff_position() {
        $this->hatron = $this->load->database('hatron', TRUE);
        $this->load->model('Hatrondb_model');
        $data = $this->Hatrondb_model->get_all_staffposition();
        // $data=array('a','b','c','d');
        return $this->hatron->last_query();
    }
	
	function visiter_counter() {
		$getData = $this->db->get_where('visitors',array('pagelinks' => trim($_SERVER['REQUEST_URI'])))->row_array();
		if(!empty($getData)){
				$this->db->where('pagelinks',trim($_SERVER['REQUEST_URI']));
				$this->db->update('visitors',array('counter' => ($getData['counter'] + 1)));
		}else {
			$this->db->insert('visitors',array('counter' => 1,'pagelinks' => trim($_SERVER['REQUEST_URI'])));
		}
		
	}
	
	

    function encodekey() {
        $msg = rand(1000, 10000);

        $encrypted_string = $this->encrypt->encode($msg);
        return $encrypted_string;
    }

}

?>