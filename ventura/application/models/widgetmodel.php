<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Widgetmodel extends SB_Model 
{

	public $table = 'tb_widgets';
	public $primaryKey = 'widget_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_widgets.* FROM tb_widgets   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_widgets.widget_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
