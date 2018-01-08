<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sliders extends SB_Controller {

    protected $layout = "layouts/main";
    public $module = 'sliders';
    public $per_page = '10';

    function __construct() {
        parent::__construct();

        $this->load->model('slidersmodel');
        $this->model = $this->slidersmodel;

        $this->info = $this->model->makeInfo($this->module);
        $this->access = $this->model->validAccess($this->info['id']);
        $this->data = array_merge($this->data, array(
            'pageTitle' => $this->info['title'],
            'pageNote' => $this->info['note'],
            'pageModule' => 'administrator/sliders',
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
        $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : 'sliders_id');
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

        $this->data['content'] = $this->load->view('administrator/sliders/index', $this->data, true);

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
            $this->data['row'] = $this->model->getColumnTable('tb_sliders');
        }

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/sliders/view', $this->data, true);
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
            $this->data['row'] = $this->model->getColumnTable('tb_sliders');
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

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/sliders/form', $this->data, true);
        $this->load->view('layouts/main', $this->data);
    }

    function save() {

        $rules = $this->validateForm();

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $data = $this->validatePost();
  
            
            
             if (!empty($_POST['sliders_title'])) {
                $a = $_POST['sliders_title'];
                if (strpos($_POST['sliders_title'], '<script>') !== false || strpos($a, '</script>') !== false || strpos($a, '<?') !== false || strpos($a, '<?php') !== false || strpos($a, '?>') !== false) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Slider Title not allow malicious script"));
                    if ($this->input->get_post('sliders_id')):
                        redirect('administrator/sliders/add/' . $this->input->get_post('sliders_id') . '');
                    else:
                        redirect('administrator/sliders/add');
                    endif;
                }
            }
            
            
            
             if (!empty($_POST['sliders_content'])) {
                $a = $_POST['sliders_content'];
                if (strpos($_POST['sliders_content'], '<script>') !== false || strpos($a, '</script>') !== false || strpos($a, '<?') !== false || strpos($a, '<?php') !== false || strpos($a, '?>') !== false) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Slider Content not allow malicious script"));
                    if ($this->input->get_post('sliders_id')):
                        redirect('administrator/sliders/add/' . $this->input->get_post('sliders_id') . '');
                    else:
                        redirect('administrator/sliders/add');
                    endif;
                }
            }
            
            
        
            
            
			if ($this->input->get_post('sliders_title')) {
			 if ($this->input->get_post('sliders_id')) {
                    $valid_alias = SiteHelpers::get_unique_value_from_table('tb_sliders', 'sliders_title', $this->input->get_post('sliders_title'), 'sliders_status', 'sliders_id', $this->input->get_post('sliders_id'));
					} else {
                    $valid_alias = SiteHelpers::get_unique_value_from_table('tb_sliders', 'sliders_title', $this->input->get_post('sliders_title'), 'sliders_status');
                }
				if ($valid_alias > 0) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Sliders Name should be unique"));
                    if ($this->input->get_post('sliders_id')):
                        redirect('administrator/sliders/add/' . $this->input->get_post('sliders_id') . '');
                    else:
                        redirect('administrator/sliders/add');
                    endif;
                }
                
            }
			if(empty($_POST['sliders_id']))
			{
				$data['sliders_alias']=SiteHelpers::create_alias($this->input->get_post('sliders_title'));
				
			}
			if($this->input->post('sliders_id'))
			{
				$data['sliders_updated']=date('Y-m-d h:i:s');	
			}
            $ID = $this->model->insertRow($data, $this->input->get_post('sliders_id', true));
            // Input logs
            if ($this->input->get('sliders_id', true) == '') {
                $this->inputLogs("New Entry row with ID : $ID  , Has Been Save Successfull");
            } else {
                $this->inputLogs(" ID : $ID  , Has Been Changed Successfull");
            }
            SiteHelpers::removeCache();
            // Redirect after save	
            $this->session->set_flashdata('message', SiteHelpers::alert('success', " Data has been saved successfully !"));
            if ($this->input->post('apply')) {
                redirect('administrator/sliders/add/' . $ID, 301);
            } else {
                redirect('administrator/sliders', 301);
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
        Redirect('administrator/sliders', 301);
    }

}
