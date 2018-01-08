<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sliderimagesmodel extends SB_Model 
{

	public $table = 'tb_slider_images';
	public $primaryKey = 'slider_image_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_slider_images.* FROM tb_slider_images   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_slider_images.slider_image_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
