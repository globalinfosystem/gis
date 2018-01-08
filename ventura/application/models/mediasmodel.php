<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mediasmodel extends SB_Model 
{

	public $table = 'tb_media_upload';
	public $primaryKey = 'media_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_media_upload.* FROM tb_media_upload   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_media_upload.media_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
