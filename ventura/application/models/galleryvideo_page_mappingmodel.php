<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleryvideo_page_mappingmodel extends SB_Model 
{

	public $table = 'galleryvideo_page_mapping';
	public $primaryKey = 'galleryvideo_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT galleryvideo_page_mapping.* FROM galleryvideo_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE galleryvideo_page_mapping.galleryvideo_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
