<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ticker_page_mappingmodel extends SB_Model 
{

	public $table = 'ticker_page_mapping';
	public $primaryKey = 'ticker_page_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT ticker_page_mapping.* FROM ticker_page_mapping   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE ticker_page_mapping.ticker_page_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
