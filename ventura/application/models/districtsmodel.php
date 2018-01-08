<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Districtsmodel extends SB_Model 
{

	public $table = 'tb_districts';
	public $primaryKey = 'districts_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_districts.* FROM tb_districts   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_districts.districts_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
