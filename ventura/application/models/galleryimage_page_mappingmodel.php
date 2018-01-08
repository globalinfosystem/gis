<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleryimage_page_mappingmodel extends SB_Model 
{

	public $table = 'galleryimage_page_mapping';
	public $primaryKey = 'galleryimage_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT galleryimage_page_mapping.* FROM galleryimage_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE galleryimage_page_mapping.galleryimage_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
