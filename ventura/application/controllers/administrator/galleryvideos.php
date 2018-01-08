<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galleryvideos extends SB_Controller {

    protected $layout = "layouts/main";
    public $module = 'galleryvideos';
    public $per_page = '10';

    function __construct() {
        parent::__construct();

        $this->load->model('galleryvideosmodel');
        $this->model = $this->galleryvideosmodel;

        $this->info = $this->model->makeInfo($this->module);
        $this->access = $this->model->validAccess($this->info['id']);
        $this->data = array_merge($this->data, array(
            'pageTitle' => $this->info['title'],
            'pageNote' => $this->info['note'],
            'pageModule' => 'administrator/galleryvideos',
        ));

        if (!$this->session->userdata('logged_in'))
            redirect('user/login', 301);
    }

    function index() {
        if ($this->access['is_view'] == 0) {
            $this->session->set_flashdata('error', SiteHelpers::alert('error', 'Your are not allowed to access the page'));
            redirect('dashboard', 301);
        }

        // Filter sort and order for query 
        $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : 'gallary_video_id');
        $order = (!is_null($this->input->get('order', true)) ? $this->input->get('order', true) : 'asc');
        // End Filter sort and order for query 
        // Filter Search for query		
        $filter = (!is_null($this->input->get('search', true)) ? $this->buildSearch() : '');
        // End Filter Search for query 

        $page = max(1, (int) $this->input->get('page', 1));
        $params = array(
            'page' => $page,
            'limit' => ($this->input->get('rows', true) != '' ? filter_var($this->input->get('rows', true), FILTER_VALIDATE_INT) : $this->per_page ),
            'sort' => $sort,
            'order' => $order,
            'params' => $filter,
            'global' => (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
        );
        // Get Query 
        $results = $this->model->getRows($params);

        // Build pagination setting
        $page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;
        #$pagination = Paginator::make($results['rows'], $results['total'],$params['limit']);		
        $this->data['rowData'] = $results['rows'];
        // Build Pagination

        $pagination = $this->paginator(array(
            'total_rows' => $results['total'],
            'per_page' => $params['limit']
        ));
        $this->data['pagination'] = $pagination;
        // Row grid Number 
        $this->data['i'] = ($page * $params['limit']) - $params['limit'];
        // Grid Configuration 
        $this->data['tableGrid'] = $this->info['config']['grid'];
        $this->data['tableForm'] = $this->info['config']['forms'];
        $this->data['colspan'] = SiteHelpers::viewColSpan($this->info['config']['grid']);
        // Group users permission
        $this->data['access'] = $this->access;
        // Render into template

        $this->data['content'] = $this->load->view('administrator/galleryvideos/index', $this->data, true);

        $this->load->view('layouts/main', $this->data);
    }

    function show($id = null) {
        if ($this->access['is_detail'] == 0) {
            $this->session->set_flashdata('error', SiteHelpers::alert('error', 'Your are not allowed to access the page'));
            redirect('dashboard', 301);
        }

        $row = $this->model->getRow($id);
        if ($row) {
            $this->data['row'] = $row;
        } else {
            $this->data['row'] = $this->model->getColumnTable('tb_gallary_videos');
        }

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/galleryvideos/view', $this->data, true);
        $this->load->view('layouts/main', $this->data);
    }

    function add($id = null) {
        if ($id == '')
            if ($this->access['is_add'] == 0)
                redirect('dashboard', 301);

        if ($id != '')
            if ($this->access['is_edit'] == 0)
                redirect('dashboard', 301);

        $row = $this->model->getRow($id);
        if ($row) {
            $this->data['row'] = $row;
        } else {
            $this->data['row'] = $this->model->getColumnTable('tb_gallary_videos');
        }

        $groups = $this->db->get('tb_groups');
        $group = array();
        if ($groups->result_array()) {
            foreach ($groups->result_array() as $g) {
                $group_id = $g['group_id'];
                $a = (isset($access[$group_id]) && $access[$group_id] == 1 ? 1 : 0);
                $group[] = array('id' => $g['group_id'], 'name' => $g['name'], 'access' => $a);
            }
        }
        $this->data['groups'] = $group;


        $galleries = $this->db->get_where('tb_galleries', array('galleries_type' => 'video'));
        $gallery = array();
        if ($galleries->result_array()) {
            foreach ($galleries->result_array() as $g) {
                $gallery_id = $g['galleries_id'];
                $a = (isset($access[$gallery_id]) && $access[$gallery_id] == 1 ? 1 : 0);
                $gallery[] = array('id' => $g['galleries_id'], 'name' => $g['galleries_title'], 'access' => $a);
            }
        }
        $this->data['galleries'] = $gallery;

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/galleryvideos/form', $this->data, true);
        $this->load->view('layouts/main', $this->data);
    }

    function save() {

        $rules = $this->validateForm();

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $data = $this->validatePost();
			if(empty($_POST['gallary_video_id']))
			{
				$data['gallary_video_alias']=SiteHelpers::create_alias($this->input->get_post('gallary_video_title'));
				
			}	
        if ($this->input->get_post('gallary_video_title')) {
			 if ($this->input->get_post('gallary_video_id')) {
                    $valid_alias = SiteHelpers::get_unique_value_from_table('tb_gallary_videos', 'gallary_video_title', $this->input->get_post('gallary_video_title'), 'gallary_video_status', 'gallary_video_id', $this->input->get_post('gallary_video_id'));
					$data['gallary_video_updated']=date('Y-m-d h:i:s');
                } else {
                    $valid_alias = SiteHelpers::get_unique_value_from_table('tb_gallary_videos', 'gallary_video_title', $this->input->get_post('gallary_video_title'), 'gallary_video_status');
                }
				if ($valid_alias > 0) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Gallary Video Name should be unique"));
                    if ($this->input->get_post('gallary_video_id')):
                        redirect('administrator/galleryvideos/add/' . $this->input->get_post('gallary_video_id') . '');
                    else:
                        redirect('administrator/galleryvideos/add');
                    endif;
                }
                
            }
            if (!empty($_FILES['gallery_video_path_custom']['name'])) {
                $uploadHeaderImage = $this->do_upload('galleryVideos', 'gallery_video_path_custom', 'mp3');
                if ($uploadHeaderImage == 1 || $uploadHeaderImage == 2) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('errors', 'Your are not uploading wrong video file check audio type "mp3|3ga|flv"'));
                    redirect('administrator/galleryvideos/add/' . $this->input->get_post('gallary_video_id', true), 301);
                } else {
                    $data['gallary_video_path'] = $uploadHeaderImage['upload_data']['file_name'];
                }
            }
            $data['gallery_id'] = $this->input->get_post('gallery_id', true);
            $data['gallary_video_access'] = implode(',', $this->input->get_post('gallary_video_access', true));

            $ID = $this->model->insertRow($data, $this->input->get_post('gallary_video_id', true));
            // Input logs
            if ($this->input->get('gallary_video_id', true) == '') {
                $this->inputLogs("New Entry row with ID : $ID  , Has Been Save Successfull");
            } else {
                $this->inputLogs(" ID : $ID  , Has Been Changed Successfull");
            }
            SiteHelpers::removeCache();
            // Redirect after save	
            $this->session->set_flashdata('message', SiteHelpers::alert('success', " Data has been saved successfully !"));
            if ($this->input->post('apply')) {
                redirect('administrator/galleryvideos/add/' . $ID, 301);
            } else {
                redirect('administrator/galleryvideos', 301);
            }
        } else {
            $data = array(
                'message' => 'Ops , The following errors occurred',
                'errors' => validation_errors('<li>', '</li>')
            );
            $this->displayError($data);
        }
    }

    function destroy() {
        if ($this->access['is_remove'] == 0) {
            $this->session->set_flashdata('error', SiteHelpers::alert('error', 'Your are not allowed to access the page'));
            redirect('dashboard', 301);
        }

        $this->model->destroy($this->input->post('id', true));
        SiteHelpers::removeCache();
        $this->inputLogs("ID : " . implode(",", $this->input->post('id', true)) . "  , Has Been Removed Successfull");
        $this->session->set_flashdata('message', SiteHelpers::alert('success', "ID : " . implode(",", $this->input->post('id', true)) . "  , Has Been Removed Successfull"));
        Redirect('administrator/galleryvideos', 301);
    }

}
