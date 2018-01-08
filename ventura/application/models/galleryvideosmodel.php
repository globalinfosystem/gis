<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleryvideosmodel extends SB_Model 
{

	public $table = 'tb_gallary_videos';
	public $primaryKey = 'gallary_video_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_gallary_videos.* FROM tb_gallary_videos   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_gallary_videos.gallary_video_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
