<?php $ticker = SiteHelpers::getTickers(); ?>

<?php $getmapping = $this->Page_model->get_pages_category_mapping('5'); ?>
<?php $getAllpages = $this->Page_model->get_pages(); ?>

<?php /*?><div class="col-xs-12 col-sm-12 col-md-12 box_ancher_color">
      <div id="wrapper">
	<div id="container">
		<div class="row">
			 <div class="latest_newsarea"> <span>Latest News</span> <?php foreach ($getmapping[5] as $value) { ?>
                        <?php if (!empty($getAllpages[$value])) { ?>
						<marquee><a style="color:#42f442;" class="media-left"> <?php echo $getAllpages[$value]['title']; ?></a></marquee>
						 <?php } ?>
                    <?php } ?></div>
		</div>
		
	</div>		
	<!--container ends here--> 
	
</div>
    </div><?php */?>
