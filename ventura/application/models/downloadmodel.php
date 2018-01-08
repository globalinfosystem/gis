<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Downloadmodel extends SB_Model 
{

	public $table = 'download';
	public $primaryKey = 'download_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT download.* FROM download   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE download.download_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
