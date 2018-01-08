<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleryimagesmodel extends SB_Model 
{

	public $table = 'tb_gallary_images';
	public $primaryKey = 'gallary_image_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_gallary_images.* FROM tb_gallary_images   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_gallary_images.gallary_image_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
