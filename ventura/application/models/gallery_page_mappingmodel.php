<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_page_mappingmodel extends SB_Model 
{

	public $table = 'gallery_page_mapping';
	public $primaryKey = 'gallery_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT gallery_page_mapping.* FROM gallery_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE gallery_page_mapping.gallery_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
