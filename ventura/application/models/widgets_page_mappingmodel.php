<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Widgets_page_mappingmodel extends SB_Model 
{

	public $table = 'widgets_page_mapping';
	public $primaryKey = 'widgets_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT widgets_page_mapping.* FROM widgets_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE widgets_page_mapping.widgets_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
