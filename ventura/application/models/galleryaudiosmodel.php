<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleryaudiosmodel extends SB_Model 
{

	public $table = 'tb_gallary_audios';
	public $primaryKey = 'gallary_audio_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT tb_gallary_audios.* FROM tb_gallary_audios   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE tb_gallary_audios.gallary_audio_id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>
