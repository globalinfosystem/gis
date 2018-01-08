<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Slidersmodel extends SB_Model 
{

	public $table = 'tb_sliders';
	public $primaryKey = 'sliders_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_sliders.* FROM tb_sliders   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_sliders.sliders_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
