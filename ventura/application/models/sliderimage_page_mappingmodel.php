<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sliderimage_page_mappingmodel extends SB_Model 
{

	public $table = 'sliderimage_page_mapping';
	public $primaryKey = 'sliderimage_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT sliderimage_page_mapping.* FROM sliderimage_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE sliderimage_page_mapping.sliderimage_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
