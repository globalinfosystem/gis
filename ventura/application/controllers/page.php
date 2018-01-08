<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends SB_controller {

    protected $_key = 'id';
    protected $_class = 'page';
    protected $layout = "layouts/main";
    private $hatron;

    function __construct() {
        parent::__construct();
        $this->layout = 'layouts/' . CNF_THEME . '/index';
       // $this->load->driver('cache');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->library('Datatables');
    }

    public function index($page = null) {
       // $this->output->cache(5);
        if (CNF_FRONT == 'false' && $this->uri->segment(1) == '') :
            redirect('dashboard', 301);
        endif;
        if ($page != null) :
            $this->load->model('Page_model');
            $row = $this->Page_model->get_page_result($page);
            $page_id = $row->pageID;
            $widgetsArray = array();
            $this->data['categories'] = $this->Page_model->getAllPageData('category_page_mapping', $page_id, $limit = 100, 'categorypage_status', 'categorypage_id');
            $this->data['gallerAudios'] = $this->Page_model->getAllPageData('galleryaudio_page_mapping', $page_id, $limit = 100, 'galleryaudio_page_status', 'galleryaudio_id');
            $this->data['galleryImages'] = $this->Page_model->getAllPageData('galleryimage_page_mapping', $page_id, $limit = 100, 'galleryimage_page_status', 'galleryimage_id');
            $this->data['galleryVideos'] = $this->Page_model->getAllPageData('galleryvideo_page_mapping', $page_id, $limit = 100, 'galleryvideo_page_status', 'galleryvideo_id');
            $this->data['gallery_id'] = $this->Page_model->getAllPageData('gallery_page_mapping', $page_id, $limit = 1, 'gallery_page_status', 'gallery_id');
            $this->data['sliderImages'] = $this->Page_model->getAllPageData('sliderimage_page_mapping', $page_id, $limit = 1, 'sliderimage_page_status', 'sliderimage_id');
            $this->data['slider_id'] = $this->Page_model->getAllPageData('slider_page_mapping', $page_id, $limit = 1, 'slider_page_status', 'slider_id');
            $this->data['widgets_ids'] = $this->Page_model->getAllPageData('widgets_page_mapping', $page_id, $limit = 100, 'widgets_page_status', 'widgets_id');

            if ($this->data['widgets_ids']) {
                foreach ($this->data['widgets_ids'] as $widgets) {
                    $widgetsArray[] = $widgets['widgets_id'];
                }
            }
            if (!empty($widgetsArray)) {
                $this->data['widgets_ids'] = implode(',', $widgetsArray);
            }

            if (count($row) >= 1) {

                $this->data['pageId'] = $row->pageID;
                $this->data['pageTitle'] = $row->title;
                $this->data['pageNote'] = $row->note;
                $this->data['pageAlias'] = $row->alias;
                $this->data['left_widget'] = $row->left_widget;
                $this->data['right_widget'] = $row->right_widget;
                $this->data['page_layout'] = $row->page_layout;
                $this->data['headerImage'] = $row->header_image;
                $this->data['featureImage'] = $row->feature_image;
                $this->data['breadcrumb'] = 'active';

                if ($row->access != '') {
                    $access = json_decode($row->access, true);
                } else {
                    $access = array();
                }

                if ($row->allow_guest != 1) {
                    $group_id = $this->session->userdata('gid');
                    $isValid = (isset($access[$group_id]) && $access[$group_id] == 1 ? 1 : 0 );
                    if ($isValid == 0) {
                        redirect('', 301);
                    }
                }

                if ($row->template == 'backend') {
                    $this->layout = "layouts/main";
                } else {

                    if (empty($row->page_layout) && $row->page_layout == 'NULL' || $row->page_layout == '') {
                        
                    }

                    if ($row->page_layout == 5) {
                        $this->layout = 'layouts/' . CNF_THEME . '/empty';
                    }
                    if ($row->page_layout == 1) {
                        $this->layout = 'layouts/' . CNF_THEME . '/onecolumn';
                    }
                    if ($row->page_layout == 2) {
                        $this->layout = 'layouts/' . CNF_THEME . '/twocolumnwithright';
                    }
                    if ($row->page_layout == 3) {
                        $this->layout = 'layouts/' . CNF_THEME . '/twocolumnwithleft';
                    }
                    if ($row->page_layout == 4) {
                        $this->layout = 'layouts/' . CNF_THEME . '/threecolumn';
                    }
                }

                $filename = "application/views/pages/" . $row->filename . ".php";

                if (file_exists($filename)) {
                    $page = $row->filename;
                } else {
                    redirect('', 301);
                }
            } else {
                redirect('', 301);
            }


        else :
            $page = 'home';
            $this->load->model('Page_model');
            $row = $this->Page_model->get_page_result($page);
            $page_id = $row->pageID;
            $this->data['categories'] = $this->Page_model->getAllPageData('category_page_mapping', $page_id, $limit = 100, 'categorypage_status', 'categorypage_id');
            $this->data['gallerAudios'] = $this->Page_model->getAllPageData('galleryaudio_page_mapping', $page_id, $limit = 100, 'galleryaudio_page_status', 'galleryaudio_id');
            $this->data['galleryImages'] = $this->Page_model->getAllPageData('galleryimage_page_mapping', $page_id, $limit = 100, 'galleryimage_page_status', 'galleryimage_id');
            $this->data['galleryVideos'] = $this->Page_model->getAllPageData('galleryvideo_page_mapping', $page_id, $limit = 100, 'galleryvideo_page_status', 'galleryvideo_id');
            $this->data['gallery_id'] = $this->Page_model->getAllPageData('gallery_page_mapping', $page_id, $limit = 1, 'gallery_page_status', 'gallery_id');
            $this->data['sliderImages'] = $this->Page_model->getAllPageData('sliderimage_page_mapping', $page_id, $limit = 1, 'sliderimage_page_status', 'sliderimage_id');
            $this->data['slider_id'] = $this->Page_model->getAllPageData('slider_page_mapping', $page_id, $limit = 1, 'slider_page_status', 'slider_id');
            $this->data['widgets_ids'] = $this->Page_model->getAllPageData('widgets_page_mapping', $page_id, $limit = 1, 'widgets_page_status', 'widgets_id');
            $this->data['pageId'] = $row->pageID;
            $this->data['pageTitle'] = $row->title;
            $this->data['pageNote'] = $row->note;
            $this->data['pageAlias'] = $row->alias;
            $this->data['left_widget'] = $row->left_widget;
            $this->data['right_widget'] = $row->right_widget;
            $this->data['page_layout'] = $row->page_layout;
            $this->data['headerImage'] = $row->header_image;
            $this->data['featureImage'] = $row->feature_image;

            $this->data['breadcrumb'] = 'inactive';
            if (trim($row->page_layout) == 5) {
                $this->layout = 'layouts/' . CNF_THEME . '/empty';
            }
            if (trim($row->page_layout) == 1) {
                $this->layout = 'layouts/' . CNF_THEME . '/onecolumn';
            }
            if (trim($row->page_layout) == 2) {
                $this->layout = 'layouts/' . CNF_THEME . '/twocolumnwithright';
            }
            if (trim($row->page_layout) == 3) {
                $this->layout = 'layouts/' . CNF_THEME . '/twocolumnwithleft';
            }
            if (trim($row->page_layout) == 4) {
                $this->layout = 'layouts/' . CNF_THEME . '/threecolumn';
            }
            if ($row->page_layout == 'NULL' || $row->page_layout == '') {
                
            }
        endif;
        $this->data['content'] = $this->load->view('pages/' . $page, $this->data, true);
        $this->load->view($this->layout, $this->data);
    }

    function submitcontact() {
        $rules = array(
            array('field' => 'name', 'label' => ' Please Fill Name', 'rules' => 'required'),
            array('field' => 'email', 'label' => 'email ', 'rules' => 'required|email'),
            array('field' => 'message', 'label' => 'message', 'rules' => 'required'),
        );


        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {

            $data = array(
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'subject' => 'New Form Submission',
                'notes' => $this->input->post('message', true)
            );
            $message = $this->load->view('emails/contact', $data, true);


            $to = CNF_EMAIL;
            $subject = 'New Form Submission';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: ' . $this->input->post('name', true) . ' <' . $this->input->post('sender', true) . '>' . "\r\n";

            $message = "Thank You , Your message has been sent !";
            $this->session->set_flashdata('message', SiteHelpers::alert('success', $message));
            redirect('contact-us', 301);
        } else {
            $message = "The following errors occurred";
            $this->session->set_flashdata(array(
                'message' => SiteHelpers::alert('error', $message),
                'errors' => validation_errors('<li>', '</li>')
            ));
            redirect('contact-us', 301);
        }
    }

    public function lang($lang) {

        $this->session->set_userdata('lang', $lang);
        redirect($_SERVER['HTTP_REFERER']);
    }

    function searchpage() {
        if ($this->input->is_ajax_request() && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $ResponceData = array();
            if (trim($this->input->post('keyword', TRUE))) {
                $a = trim($this->input->post('keyword'));
                $a = base64_decode(base64_decode($a));
                if (strlen($a) < 3) {

                    $ResponceData['error'] = "Minimum 3 Character use for search";
                    echo json_encode($ResponceData);
                    exit;
                } else {
                    $a = $this->security->xss_clean($a);
                    if (
                            strpos($a, '<script>') !== false ||
                            strpos($a, '<') !== false ||
                            strpos($a, '>') !== false ||
                            strpos($a, '</script>') !== false ||
                            strpos($a, '<?php') !== false ||
                            strpos($a, '<?') !== false ||
                            strpos($a, '<html>') !== false ||
                            strpos($a, '<head>') !== false ||
                            strpos($a, '<body>') !== false ||
                            strpos($a, '?>') !== false) {
                        $ResponceData['error'] = "malicious script not allow  search- " . $a . " Please try another search...";
                        echo json_encode($ResponceData);
                        exit;
                    } else {
                        $keyword = trim($this->input->post('keyword'));
                        if (empty($keyword)) {
                            $ResponceData['error'] = "String can not be empty Please try another search...";
                            echo json_encode($ResponceData);
                            exit;
                        } else {
                            $keyword = base64_decode(base64_decode($keyword));
                            $this->load->model('Page_model');
                            $data['success'] = $this->Page_model->get_search_result($keyword);
                            if (!empty($data['success'])):
                                echo json_encode($data);
                                exit;
                            else:
                                $ResponceData['error'] = "There are no data exist from search- " . $keyword . " Please try another search...";
                                echo json_encode($ResponceData);
                                exit;
                            endif;
                        }
                    }
                }
            }
        } else {
            $ResponceData['error'] = "No direct script access allowed";
            echo json_encode($ResponceData);
            exit;
        }
    }

    function popup($pageId, $tablename) {
        $pagefiles = SiteHelpers::pageFileInfo($pageId, $tablename);
        $this->load->view('layouts/' . CNF_THEME . '/page/popup', array('searchdata' => $pagefiles, 'tablename' => $tablename), false);
    }

    function theme($theme_name = null) {
        if (!empty($theme_name)) {
            $_SESSION['theme_name'] = $theme_name;
        } else {
            $_SESSION['theme_name'] = '';
        }
        $this->output->clear_all_cache();
        redirect($_SERVER['HTTP_REFERER']);
    }
	
	function state_by_country()
	{
		  $this->load->model('Page_model');
		   $states = $this->Page_model->get_state_by_country($_POST['country_id']);
		   foreach($states as $statesresult)
		   {
			   echo '<option value="'.$statesresult['state_id'].'">'.$statesresult['name'].'</option>'; 
			}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/page.php */ 