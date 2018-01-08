<?php

class Pages extends SB_Controller {

    protected $layout = "layouts.main";
    public $module = 'pages';
    public $per_page = '1000';

    public function __construct() {
        parent::__construct();

        $this->load->model('administrator/pagesmodel');
        $this->model = $this->pagesmodel;

        $this->info = $this->model->makeInfo($this->module);
        $this->access = $this->model->validAccess($this->info['id']);
        $this->data = array_merge($this->data, array(
            'pageTitle' => $this->info['title'],
            'pageNote' => $this->info['note'],
            'pageModule' => 'administrator/pages',
        ));
        if (!$this->session->userdata('logged_in'))
            redirect('user/login', 301);
    }

    function index() {

        // Filter sort and order for query 
        $sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : '');
        $order = (!is_null($this->input->get('order', true)) ? $this->input->get('order', true) : 'asc');
        // End Filter sort and order for query 
        // Filter Search for query		
        $filter = (!is_null($this->input->get('search', true)) ? $this->buildSearch() : '');
        // End Filter Search for query 


        $page = max(1, (int) $this->input->get('page', 1));
        $params = array(
            'page' => $page,
            'limit' => (($this->input->get('rows', true)) ? filter_var($this->input->get('rows', true), FILTER_VALIDATE_INT) : $this->per_page ),
            'sort' => $sort,
            'order' => $order,
            'params' => $filter,
                //'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
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
        ));
        
         $this->data['pagination'] = $pagination;

        // Row grid Number 
        $this->data['i'] = ($page * $params['limit']) - $params['limit'];
        // Grid Configuration 
        $this->data['tableGrid'] = $this->info['config']['grid'];
        $this->data['tableForm'] = $this->info['config']['forms'];
        $this->data['access'] = $this->access;


        $this->data['content'] = $this->load->view('administrator/pages/index', $this->data, true);

        $this->load->view('layouts/main', $this->data);
    }

    function add($id = null) {

        if ($this->access['is_view'] == 0)
            redirect('', 301);

        $row = $this->model->getRow($id);
        if ($row) {
            $this->data['row'] = (array) $row;
        } else {
            $this->data['row'] = $this->model->getColumnTable('tb_pages');
        }

        if ($id == '') {
            $this->data['content'] = '';
        } else {

            if ($row['pageID'] == 1) {
                $filename = "application/views/pages/home.php";
                $this->data['content'] = file_get_contents($filename);
            } else {

                $filename = "application/views/pages/" . $row['filename'] . ".php";
                if (file_exists($filename)) {
                    $this->data['content'] = file_get_contents($filename);
                } else {
                    $this->data['content'] = '';
                }
            }
        }
        if ($this->data['row']['access'] != '') {
            $access = json_decode($this->data['row']['access'], true);
        } else {
            $access = array();
        }
        $groups = $this->db->get('tb_groups');
        $group = array();
        foreach ($groups->result_array() as $g) {
            $group_id = $g['group_id'];
            $a = (isset($access[$group_id]) && $access[$group_id] == 1 ? 1 : 0);
            $group[] = array('id' => $g['group_id'], 'name' => $g['name'], 'access' => $a);
        }

        $this->data['groups'] = $group;

        $this->data['id'] = $id;
        $this->data['content'] = $this->load->view('administrator/pages/form', $this->data, true);
        $this->load->view('layouts/main', $this->data);
    }

    function save($id = 0) {

        $rules = array(
            array('field' => 'title', 'label' => 'Title', 'rules' => 'required'),
            array('field' => 'alias', 'label' => 'Label ', 'rules' => 'required'),
        );
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {

            $content = $this->input->post('content');
            $content = str_replace('<--?', '<?', $content);
            $content = str_replace('?-->', '?>', $content);
            /*$content = '<section id="contentSection"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12">'.$content.'</div></div></section>'; */
            $data = $this->validatePost('tb_pages');
            $filename = strtolower($this->input->post('filename'));

            if ($this->input->post('pageID') == 1) {
                $filename = "application/views/pages/home.php";
            } else {

                $filename = "application/views/pages/" . $filename . ".php";
            }
            $fp = fopen($filename, "wp");
            fwrite($fp, $content);
            fclose($fp);

            SiteHelpers::removeCache();
            $groups = $this->db->get('tb_groups');
            $access = array();
            foreach ($groups->result() as $group) {
                $access[$group->group_id] = (isset($_POST['group_id'][$group->group_id]) ? '1' : '0');
            }
            $data['access'] = json_encode($access);
            $data['allow_guest'] = (isset($_POST['allow_guest']) ? '1' : '0');
            $data['template'] = $this->input->post('template', true);
           
            $data['page_layout'] = $this->input->post('page_layout');
            $data['short_content'] = $this->input->post('short_content');

            if (!empty($_FILES['header_image']['name'])) {
                $uploadHeaderImage = $this->do_upload('headerImage', 'header_image', 'gif|jpg|png|jpeg');
                if ($uploadHeaderImage == 1 || $uploadHeaderImage == 2) {
                    
                } else {
                    $data['header_image'] = $uploadHeaderImage['upload_data']['file_name'];
                }
            }
            if (!empty($_FILES['feature_image']['name'])) {
                $uploadfeatureImage = $this->do_upload('featureImage', 'feature_image', 'gif|jpg|png|jpeg');
                if ($uploadfeatureImage == 1 || $uploadfeatureImage == 2) {
                    
                } else {
                    $data['feature_image'] = $uploadfeatureImage['upload_data']['file_name'];
                }
            }
            
            if($this->input->post('pageID')){
                $data['updated'] = date('Y-m-d H:i:s');
            } else {
                $data['created'] = date('Y-m-d H:i:s');
            }

            $ID = $this->model->insertRow($data, $this->input->post('pageID'));

            self::createRouters();
            $this->session->set_flashdata('message', SiteHelpers::alert('success', 'Your page has been changed succesfuly'));
            if ($this->input->post('apply')) {
                redirect('administrator/pages/add/' . $ID, 301);
            } else {
                redirect('administrator/pages', 301);
            }
        } else {
            $this->session->set_flashdata('message', SiteHelpers::alert('error', 'Ops Something went wrong !'));
            redirect('administrator/pages');
        }
    }

    public function destroy() {

        if ($this->access['is_remove'] == 0)
            redirect('', 301);




        $ids = $_POST['id'];
        for ($i = 0; $i < count($ids); $i++) {
            $row = $this->db->get_where('tb_pages', array('pageID' => $ids[$i]));
            $filename = "./application/views/pages/" . $row->filename . ".php";
            if (file_exists($filename) && $row->filename != '') {
                unlink($filename);
            }
        }


        // delete multipe rows 
        $data = $this->model->destroy($this->input->post('id'));
        self::createRouters();
        SiteHelpers::removeCache();
        $this->session->set_flashdata('message', SiteHelpers::alert('success', 'Successfully deleted row!'));
        redirect('administrator/pages', 301);
    }

    function createRouters() {
        $rows = $this->db->get('tb_pages')->result();
        $val = "<?php \n";
        foreach ($rows as $row) {
            $val .= '$route["' . $row->alias . '"] = "page/index/' . $row->alias . '";' . "\n";
        }
        $val .= "?>";

        $filename = 'application/config/pageroutes.php';
        $fp = fopen($filename, "wp");
        fwrite($fp, $val);
        fclose($fp);
        return true;
    }

}
