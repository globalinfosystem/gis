<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tendermodel extends SB_Model 
{

	public $table = 'tender';
	public $primaryKey = 'tender_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tender.* FROM tender   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tender.tender_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
