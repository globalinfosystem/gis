<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categorymodel extends SB_Model 
{

	public $table = 'tb_categories';
	public $primaryKey = 'category_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_categories.* FROM tb_categories   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_categories.category_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
