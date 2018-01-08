<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page_model extends SB_Model {

    function __construct() {
        parent::__construct();
    }

    function get_search_result($keyword) {
        $this->db->trans_start();
        $this->db->select('title, alias');
        $where = '(title LIKE "%' . trim($keyword) . '%" OR alias LIKE "%' . trim($keyword) . '%")';
        $this->db->where('status', 'enable');
        $this->db->where($where);
        $getResult = $this->db->get("tb_pages")->result_array();
        $this->db->trans_complete();
        return $getResult;
    }

    function get_page_result($pageID) {
        $this->db->trans_start();
        $this->db->where('alias', trim($pageID));
        $this->db->where('status', 'enable');
        $getResult = $this->db->get("tb_pages")->row();
        $this->db->trans_complete();
        return $getResult;
    }

    function get_sliderImages_result($is_slider) {
        $this->db->trans_start();
        $getResult = $this->db->get_where('tb_slider_images', array('slider_id' => $is_slider, 'slider_image_status' => 'enable'))->result_array();
        $this->db->trans_complete();
        return $getResult;
    }

    function getAllPageData($tablename, $page_id, $limit = 1, $statusfield, $returnIdField) {
        $this->db->trans_start();
        $this->db->select($returnIdField);
        $this->db->limit($limit);
        if ($limit == 1) {
            $getResult = $this->db->get_where($tablename, array('page_id' => $page_id, $statusfield => '1'))->row_array();
        } else {
            $getResult = $this->db->get_where($tablename, array('page_id' => $page_id, $statusfield => '1'))->result_array();
        }

        $this->db->trans_complete();
        if ($limit == 1 && $getResult) {
            return $getResult[$returnIdField];
        } else {
            return $getResult;
        }
        return $getResult;
    }

    function get_category($category_id = null) {
        $categories = array();
        $this->db->trans_start();
        if (!empty($category_id)) {
            $this->db->where('category_id', $category_id);
        }
        $getResult = $this->db->get_where('tb_categories', array('category_status' => '1'))->result_array();
        $this->db->trans_complete();
        if (!empty($getResult)) {
            foreach ($getResult as $results) {
                $categories[$results['category_id']] = $results['category_name'];
            }
        }
        return $categories;
    }

    function get_pages($pageID = null) {
        $pages = array();
        $this->db->trans_start();

        if (!empty($pageID)) {
            $this->db->where('pageID', $pageID);
        }
        $getResult = $this->db->get_where('tb_pages', array('status' => 'enable'))->result_array();
        $this->db->trans_complete();
        if (!empty($getResult)) {
            foreach ($getResult as $results) {
                $pages[$results['pageID']] = $results;
            }
        }
        return $pages;
    }

    function get_pages_category_mapping($category_id = null, $limit = 10) {
        $cat_pages = array();
        $this->db->trans_start();
        $this->db->limit($limit);
        if (!empty($category_id)) {
            $this->db->where('category_id', $category_id);
        }
        $getResult = $this->db->get_where('category_page_mapping', array('categorypage_status' => '1'))->result_array();

        $this->db->trans_complete();
        if (!empty($getResult)) {
            foreach ($getResult as $results) {
                $cat_pages[$results['category_id']][] = $results['page_id'];
            }
        }
        return $cat_pages;
    }

    function get_pages_gallery_image_mapping($image_id = null, $limit = 10) {
        $cat_pages = array();
        $this->db->trans_start();
        $this->db->limit($limit);
        if (!empty($image_id)) {
            $this->db->where('galleryimage_id', $image_id);
        }
        $getResult = $this->db->get_where('galleryimage_page_mapping', array('galleryimage_page_status' => '1'))->result_array();

        $this->db->trans_complete();
        if (!empty($getResult)) {
            foreach ($getResult as $results) {
                if (!empty($image_id)) {
                    $cat_pages[$results['galleryimage_id']] = $results['page_id'];
                } else {
                    $cat_pages[$results['galleryimage_id']][] = $results['page_id'];
                }
            }
        }
        return $cat_pages;
    }
    
    function get_all_tenders() {
        $pages = array();
        $this->db->trans_start();
        $getResult = $this->db->get_where('tender', array('tender_status' => '1'))->result_array();
        $this->db->trans_complete();
        return $getResult;
    }
    
    function get_all_downloads() {
        $pages = array();
        $this->db->trans_start();
        $getResult = $this->db->get_where('download', array('download_status' => '1'))->result_array();
        $this->db->trans_complete();
        return $getResult;
    }
	
	function insertRegistration($inserteddata = null,$registration_id){
		if(!empty($inserteddata)){
			if(!empty($registration_id)) {
				unset($inserteddata['captcha']);
				unset($inserteddata['captchatext']);
				$inserteddata['registration_updated'] = date('Y-m-d H:i:s');
				$this->db->trans_start();
				$this->db->where('registration_id', trim($registration_id));
				$getResult = $this->db->update("tbl_registration",$inserteddata);
				$this->db->trans_complete();
				return $registration_id;
			}
			unset($inserteddata['captcha']);
			unset($inserteddata['captchatext']);
			$inserteddata['registration_status'] = 1;
			$inserteddata['registration_username'] = preg_replace('/([^@]*).*/', '$1', $inserteddata['registration_email']).'_'.rand(999,99999);
			$inserteddata['registration_password'] = rand(999,99999);
			$inserteddata['registration_forced_change_password'] = 'yes';
			$inserteddata['registration_ip_address'] = $_SERVER['REMOTE_ADDR'];
			$inserteddata['registration_created'] = date('Y-m-d H:i:s');
			$this->db->trans_start();
			$getResult = $this->db->insert("tbl_registration",$inserteddata);
			$lastId = $this->db->insert_id();
			$this->db->trans_complete();
			return $lastId;
		}
	}
	
	function insertBankAccount($inserteddata = null,$registration_id){
		if(!empty($inserteddata)){
			if(!empty($registration_id)) {
				unset($inserteddata['captcha']);
				unset($inserteddata['captchatext']);
				$inserteddata['account_updated'] = date('Y-m-d H:i:s');
				$this->db->trans_start();
				$this->db->where('account_id', trim($registration_id));
				$getResult = $this->db->update("tbl_account",$inserteddata);
				$this->db->trans_complete();
				return $registration_id;
			}
			unset($inserteddata['captcha']);
			unset($inserteddata['captchatext']);
			$inserteddata['account_status'] = 1;
			$inserteddata['account_ip_address'] = $_SERVER['REMOTE_ADDR'];
			$inserteddata['account_created'] = date('Y-m-d H:i:s');
			$this->db->trans_start();
			$getResult = $this->db->insert("tbl_account",$inserteddata);
			$lastId = $this->db->insert_id();
			$this->db->trans_complete();
			return $lastId;
		}
	}
	
	function get_registration_by_id($registration_id) {
        $this->db->trans_start();
        $this->db->where('registration_id', trim($registration_id));
        $this->db->where('registration_status', '1');
        $getResult = $this->db->get("tbl_registration")->row_array();
        $this->db->trans_complete();
        return $getResult;
    }
	
	function get_bankaccount_by_registration_id($registration_id) {
        $this->db->trans_start();
        $this->db->where('registration_id', trim($registration_id));
        $this->db->where('account_status', '1');
        $getResult = $this->db->get("tbl_account")->result_array();
        $this->db->trans_complete();
        return $getResult;
    }
	function get_bankaccount_by_id($registration_id) {
        $this->db->trans_start();
        $this->db->where('account_id', trim($registration_id));
        $this->db->where('account_status', '1');
        $getResult = $this->db->get("tbl_account")->row_array();
        $this->db->trans_complete();
        return $getResult;
    }
	
	function check_password($registration_password,$registration_id) {
        $this->db->trans_start();
        $this->db->where('registration_id', trim($registration_id));
        $this->db->where('registration_password',trim($registration_password));
        $getResult = $this->db->get("tbl_registration")->row_array();
        $this->db->trans_complete();
        return $getResult;
    }
	
	function login($email = null, $password = null,$type = null){
		if(!empty($type) && $type == 1) {
			$this->db->where('registration_username', trim($email));
			$this->db->where('registration_password', trim($password));
			$this->db->where('registration_status', 1);
			$getResult = $this->db->get("tbl_registration")->row_array();
		}
		
		if(!empty($type) && $type == 2) {
			$this->db->where('registration_username', trim($email));
			$this->db->where('registration_password', trim($password));
			$this->db->where('registration_status', 1);
			$getResult = $this->db->get("tbl_registration")->row_array();
		}
		if(!empty($type) && $type == 3) {
			$this->db->where('registration_username', trim($email));
			$this->db->where('registration_password', trim($password));
			$this->db->where('registration_status', 1);
			$getResult = $this->db->get("tbl_registration")->row_array();
		}
		
		if(!empty($type) && $type == 4) {
			$this->db->where('registration_username', trim($email));
			$this->db->where('registration_password', trim($password));
			$this->db->where('registration_status', 1);
			$getResult = $this->db->get("tbl_registration")->row_array();
		}
		return $getResult;
	}
	
	////////// feedback
	function insertFeedBack($inserteddata = null,$feedback_id){
		if(!empty($inserteddata)){
			if(!empty($feedback_id)) {
				$inserteddata['date_added'] = date('Y-m-d H:i:s');
				$this->db->trans_start();
				$this->db->where('feedback_id', trim($feedback_id));
				$getResult = $this->db->update("tbl_feedback",$inserteddata);
				$this->db->trans_complete();
				return $feedback_id;
			}
			$inserteddata['feedback_status'] = 1;
			$inserteddata['date_added'] = date('Y-m-d H:i:s');
			$this->db->trans_start();
			$getResult = $this->db->insert("tbl_feedback",$inserteddata);
			$lastId = $this->db->insert_id();
			$this->db->trans_complete();
			return $lastId;
		}
	}
	
	function get_feedback_by_id($feedback_id) {
        $this->db->trans_start();
        $this->db->where('feedback_id', trim($feedback_id));
        $this->db->where('feedback_status', '1');
        $getResult = $this->db->get("tbl_feedback")->row_array();
        $this->db->trans_complete();
        return $getResult;
    }
	function get_feedback_by_registration_id($registration_id) {
        $this->db->trans_start();
        $this->db->where('registration_id', trim($registration_id));
        $this->db->where('feedback_status', '1');
        $getResult = $this->db->get("tbl_feedback")->result_array();
        $this->db->trans_complete();
        return $getResult;
    }
	function get_feedback_delete_by_id($feedback_id){
        $this->db->trans_start();
        $this->db->where('feedback_id',trim($feedback_id));
		$getResult = $this->db->delete("tbl_feedback");
        $this->db->trans_complete();
        return $getResult;
    }
	//////// forgot password
	function get_registrationdetail_email($email){
        $this->db->trans_start();
        $this->db->where('registration_email', trim($email));
        $getResult = $this->db->get("tbl_registration")->row_array();
        $this->db->trans_complete();
        return $getResult;
    }
	//////// country
	 function get_country()
	{
	    $this->db->trans_start();
        $getResult = $this->db->get("tbl_country")->result_array();
        $this->db->trans_complete();
        return $getResult;
	}
		 function get_country_by_id($country_id)
	{
	    $this->db->trans_start();
		$this->db->where('country_id', trim($country_id));
        $getResult = $this->db->get("tbl_country")->row_array();
        $this->db->trans_complete();
        return $getResult;
	}

	//////// state
	function get_state_by_country($country)
	{
	    $this->db->trans_start();
		$this->db->where('countryID', trim($country));
        $getResult = $this->db->get("tbl_states")->result_array();
		
        $this->db->trans_complete();
        return $getResult; 
	}


/////// end class
}
