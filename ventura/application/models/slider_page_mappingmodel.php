<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Slider_page_mappingmodel extends SB_Model 
{

	public $table = 'slider_page_mapping';
	public $primaryKey = 'slider_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT slider_page_mapping.* FROM slider_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE slider_page_mapping.slider_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
