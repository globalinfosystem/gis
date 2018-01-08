<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categorypagemappingmodel extends SB_Model 
{

	public $table = 'category_page_mapping';
	public $primaryKey = 'categorypage_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT category_page_mapping.* FROM category_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE category_page_mapping.categorypage_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
