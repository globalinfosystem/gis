<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleryaudio_page_mappingmodel extends SB_Model 
{

	public $table = 'galleryaudio_page_mapping';
	public $primaryKey = 'galleryaudio_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT galleryaudio_page_mapping.* FROM galleryaudio_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE galleryaudio_page_mapping.galleryaudio_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
