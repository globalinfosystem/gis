<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
	function __construct() {
		$this->tableName = 'users';
		$this->primaryKey = 'id';
	}
	public function checkUser($data = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$data['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
			$userID = $prevResult['id'];
		}else{
			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert($this->tableName,$data);
			$userID = $this->db->insert_id();
		}

		return $userID?$userID:FALSE;
    }
	
	public function checkSocialUser($data = array()){
		$this->db->select('user_id');
		$this->db->from('user_social_record');
		$this->db->where(array('user_social_record_oauth_provider'=>$data['user_social_record_oauth_provider'],'user_social_record_oauth_uid'=>$data['user_social_record_oauth_uid']));
		$prevQuery = $this->db->get()->row_array();
		if(!empty($prevQuery)){
			$user_id = $prevQuery['user_id'];
			return $this->db->get_where('users',array('id' => $prevQuery['user_id']))->row_array();
		}else{
			return false;
		}
    }
	
	public function checkUserExist($UserData){
		
		$prevQuery = $this->db->get_where('users',array('email' => $UserData['email'],'first_name' => $UserData['first_name']))->row_array();
		if(!empty($prevQuery)){
			return $prevQuery;
		}else{
			return false;
		}
    }
	
	public function checkUserExistAfterPost($UserData){
		
		$prevQuery = $this->db->get_where('users',array('email' => $UserData['email'],'first_name' => $UserData['first_name'],'father_first_name' => $UserData['father_first_name'],'mother_first_name' => $UserData['mother_first_name']))->row_array();
		if(!empty($prevQuery)){
			return $prevQuery;
		}else{
			return false;
		}
    }
	
	public function login($Email = null, $password = null){
		$prevQuery = $this->db->get_where('users',array('username' => $Email,'password' => $password))->row_array();
		if(!empty($prevQuery)){
			return $prevQuery;
		}else{
			return false;
		}
    }
	
	public function insertUserData($data){
		$data['created'] = date("Y-m-d H:i:s");
		$data['modified'] = date("Y-m-d H:i:s");
		$insert = $this->db->insert($this->tableName,$data);
		$userID = $this->db->insert_id();	
		return $userID;
	}
	
	public function updateUserData($data,$user_id){
		$data['modified'] = date("Y-m-d H:i:s");
		$this->db->where('id',$user_id);
		$insert = $this->db->update($this->tableName,$data);
		$userID = $user_id;	
		return $userID;
	}
	
	public function getUserdataById($user_id = null){
		if(!empty($user_id)){
			return $this->db->get_where('users',array('id' => $user_id))->row_array();
		} else {
			return false;
		}
	}
	
	public function checkreferedCode($code = null){
		if(!empty($code)){
					$this->db->select('user_code');
			return 	$this->db->get_where('users',array('user_code' => $code))->row_array();
		} else {
			return false;
		}
	}
	
	public function insertUserSocialData($data){
		$data['user_social_record_created_date'] = date("Y-m-d H:i:s");
		$data['user_social_record_updated_date'] = date("Y-m-d H:i:s");
		$insert = $this->db->insert('user_social_record',$data);
		$userID = $this->db->insert_id();	
		return $userID;
	}
	
	
	
	public function InsertUpdateAddresses($data = array()){
		
		if(!empty($data['address_id'])){
			$update = $this->db->update('addresses',$data,array('address_id' => $data['address_id']));
			$address_id = $data['address_id'];
		}else{
			$insert = $this->db->insert('addresses',$data);
			$address_id = $this->db->insert_id();
		}

		return $address_id;
    }
	
	public function InsertUpdateEducations($data = array()){
		if(!empty($data['education_id'])){
			$update = $this->db->update('educations',$data,array('education_id' => $data['education_id']));
			$education_id = $data['education_id'];
		}else{
			$insert = $this->db->insert('educations',$data);
			$education_id = $this->db->insert_id();
		}
		return $education_id;
    }
	
	public function InsertUpdateOccupations($data = array()){
		if(!empty($data['occupation_id'])){
			$update = $this->db->update('occupations',$data,array('occupation_id' => $data['occupation_id']));
			$occupation_id = $data['occupation_id'];
		}else{
			$insert = $this->db->insert('occupations',$data);
			$occupation_id = $this->db->insert_id();
		}
		return $occupation_id;
    }
	
	public function InsertUpdateOthers($data = array()){
		if(!empty($data['other_id'])){
			$update = $this->db->update('others',$data,array('other_id' => $data['other_id']));
			$other_id = $data['other_id'];
		}else{
			$insert = $this->db->insert('others',$data);
			$other_id = $this->db->insert_id();
		}
		return $other_id;
    }
	
	public function getOtherdataByUserId($user_id = null){
		if(!empty($user_id)){
			return $this->db->get_where('others',array('user_id' => $user_id))->result_array();
		} else {
			return false;
		}
	}
	
	public function getAddressdataByUserId($user_id = null){
		if(!empty($user_id)){
			return $this->db->get_where('addresses',array('user_id' => $user_id))->result_array();
		} else {
			return false;
		}
	}
	
	public function getEduationdataByUserId($user_id = null){
		if(!empty($user_id)){
			return $this->db->get_where('educations',array('user_id' => $user_id))->result_array();
		} else {
			return false;
		}
	}
	
	public function getOccupationdataByUserId($user_id = null){
		if(!empty($user_id)){
			return $this->db->get_where('occupations',array('user_id' => $user_id))->result_array();
		} else {
			return false;
		}
	}
	
	public function getRoledataByUserId($user_id = null){
		$roleArray = array();
		if(!empty($user_id)){
			$getData = $this->db->get_where('roles',array('user_id' => $user_id))->result_array();
			foreach($getData as $roleData){
				$roleArray[$roleData['role']] = $roleData['role_id'];
			}
			return $roleArray;
		} else {
			return false;
		}
	}
		
	public function UpdatePassword($data = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('password'=>md5($data['opassword']),'id'=>$data['user_id']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$dataUpdate['password'] = md5($data['npassword']);
			$dataUpdate['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$dataUpdate,array('id'=>$data['user_id']));
			return true;
		}else{
			return false;
		}
    }
	
	public function deleteRoles($user_id = null){
		if(!empty($user_id)){
			$this->db->where('user_id',$user_id);
			$this->db->delete('roles');
			return true;
		}
		return false;
	}
	
	public function addRoles($rolesData){
		if(!empty($rolesData['user_id'])){
			foreach($rolesData['assign'] as $assign){
				$arrayAddress['user_id'] = $rolesData['user_id'];
				$arrayAddress['role'] = $assign;
				$arrayAddress['status'] = 1;
				$arrayAddress['ip'] = $_SERVER['REMOTE_ADDR'];
				$arrayAddress['created_by'] = $rolesData['user_id'];
				$this->db->insert('roles',$arrayAddress);
			}
			return true;
		}
		return false;
	}
	

	
}
