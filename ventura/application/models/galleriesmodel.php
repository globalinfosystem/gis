<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleriesmodel extends SB_Model 
{

	public $table = 'tb_galleries';
	public $primaryKey = 'galleries_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_galleries.* FROM tb_galleries   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_galleries.galleries_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
