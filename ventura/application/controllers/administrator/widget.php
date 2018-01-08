<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Widget extends SB_Controller {

    protected $layout = "layouts/main";
    public $module = 'widget';
    public $per_page = '10';

    function __construct() {
        parent::__construct();

        $this->load->model('widgetmodel');
        $this->model = $this->widgetmodel;

        $this->info = $this->model->makeInfo($this->module);
        $this->access = $this->model->validAccess($this->info['id']);
        $this->data = array_merge($this->data, array(
            'pageTitle' => $this->info['title'],
            'pageNote' => $this->info['note'],
            'pageModule' => 'administrator/widget',
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
        $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : 'widget_id');
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

        $this->data['content'] = $this->load->view('administrator/widget/index', $this->data, true);

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
            $this->data['row'] = $this->model->getColumnTable('tb_widgets');
        }

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/widget/view', $this->data, true);
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
            $this->data['row'] = $this->model->getColumnTable('tb_widgets');
        }

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/widget/form', $this->data, true);
        $this->load->view('layouts/main', $this->data);
    }

    function save() {

        $rules = $this->validateForm();

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $data = $this->validatePost();


            if (!empty($_POST['widget_name'])) {
                $a = $_POST['widget_name'];
                if (strpos($_POST['widget_name'], '<script>') !== false || strpos($a, '</script>') !== false || strpos($a, '<?') !== false || strpos($a, '<?php') !== false || strpos($a, '?>') !== false) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Widget name not allow malicious script"));
                    if ($this->input->get_post('widget_id')):
                        redirect('administrator/widget/add/' . $this->input->get_post('widget_id') . '');
                    else:
                        redirect('administrator/widget/add/');
                    endif;
                }
            }

            if (!empty($_POST['widget_text'])) {
                $a = $_POST['widget_text'];
                if (strpos($_POST['widget_text'], '<script>') !== false || strpos($a, '</script>') !== false || strpos($a, '<?') !== false || strpos($a, '<?php') !== false || strpos($a, '?>') !== false) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Widget content not allow malicious script"));
                    if ($this->input->get_post('widget_id')):
                        redirect('administrator/widget/add/' . $this->input->get_post('widget_id') . '');
                    else:
                        redirect('administrator/widget/add/');
                    endif;
                }
            }
            if (!empty($_POST['widget_ordering'])) {
                $a = $_POST['widget_ordering'];
                if (strpos($_POST['widget_ordering'], '<script>') !== false || strpos($a, '</script>') !== false || strpos($a, '<?') !== false || strpos($a, '<?php') !== false || strpos($a, '?>') !== false) {
                    $this->session->set_flashdata('errors', SiteHelpers::alert('error', "Widget ordering not allow malicious script"));
                    if ($this->input->get_post('widget_id')):
                        redirect('administrator/widget/add/' . $this->input->get_post('widget_id') . '');
                    else:
                        redirect('administrator/widget/add/');
                    endif;
                }
            }

            $ID = $this->model->insertRow($data, $this->input->get_post('widget_id', true));
            // Input logs
            if ($this->input->get('widget_id', true) == '') {
                $this->inputLogs("New Entry row with ID : $ID  , Has Been Save Successfull");
            } else {
                $this->inputLogs(" ID : $ID  , Has Been Changed Successfull");
            }
            SiteHelpers::removeCache();
            // Redirect after save	
            $this->session->set_flashdata('message', SiteHelpers::alert('success', " Data has been saved successfully !"));
            if ($this->input->post('apply')) {
                redirect('administrator/widget/add/' . $ID, 301);
            } else {
                redirect('administrator/widget', 301);
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


        if ($this->session->userdata('gid') == 1) {
            $this->model->destroy($this->input->post('id', true));
            SiteHelpers::removeCache();

            $this->inputLogs("ID : " . implode(",", $this->input->post('id', true)) . "  , Has Been Removed Successfull");
            $this->session->set_flashdata('message', SiteHelpers::alert('success', "ID : " . implode(",", $this->input->post('id', true)) . "  , Has Been Removed Successfull"));
            Redirect('administrator/widget', 301);
        } else {
             $this->session->set_flashdata('message', SiteHelpers::alert('error', 'Your do not have permission for this action'));
              Redirect('administrator/widget', 301);
        }




    }

}
