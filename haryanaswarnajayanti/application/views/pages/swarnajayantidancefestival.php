<?php if (!empty($_SESSION) && !empty($_SESSION['lang']) && ($_SESSION['lang'] == '2')) { ?>
	<div class="row">  <div class="col-xs-12 col-sm-12 col-md-12"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() . 'administrator/themes/mango/booklets/vision_and_ideas_cofee_table_book/hindi/37.png'; ?>" width="100%" height="100%"></a></div> </div>
<?php } else { ?>
	<div class="row">  <div class="col-xs-12 col-sm-12 col-md-12"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() . 'administrator/themes/mango/booklets/vision_and_ideas_cofee_table_book/english/37.png'; ?>" width="100%" height="100%"></a> </div></div>
<?php } ?>