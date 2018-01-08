<?php $galleriesImage = SiteHelpers::getGalleryImages($gallery_id); ?>
<?php $galleries = SiteHelpers::getGallery('image'); ?>


<ul class="photograph_nav  wow fadeInDown">
<?php $i = 0;?>
    <?php foreach ($galleriesImage as $key => $value) { ?>
		
        <?php foreach ($value as $keySub => $valueSub) { ?>
		<?php if(!empty($limit) && $limit == $i) { ?>
			<?php break;?>
		<?php } ?>
		<?php $getImagePageLink = $this->Page_model->get_pages_gallery_image_mapping($valueSub['gallary_image_id']);?>
		<?php if(!empty($getImagePageLink)) { ?> 
			<?php $getPageData = $this->Page_model->get_pages($getImagePageLink[$valueSub['gallary_image_id']]);?>
				<?php if(!empty($getPageData)) { ?>
					<li>
						<div class="photo_grid">
							<figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url() . 'uploads/galleryImages/' . $valueSub['gallary_image_path']; ?>" title="<a href='<?php echo base_url();?><?php echo $getPageData[$getImagePageLink[$valueSub['gallary_image_id']]]['alias'];?>' target='_blank'><?php echo $valueSub['gallary_image_title'];?></a>"> <img src="<?php echo base_url() . 'uploads/galleryImages/' . $valueSub['gallary_image_path']; ?>" alt="<?php echo $valueSub['gallary_image_path'];?>"/></a> </figure>
						</div>
					</li>
				<?php } else { ?> 
				<li>
					<div class="photo_grid">
						<figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url() . 'uploads/galleryImages/' . $valueSub['gallary_image_path']; ?>" title="<?php echo $valueSub['gallary_image_title'];?>"> <img src="<?php echo base_url() . 'uploads/galleryImages/' . $valueSub['gallary_image_path']; ?>" alt="<?php echo $valueSub['gallary_image_path'];?>"/></a> </figure>
					</div>
				</li>
				<?php } ?>
			<?php } else { ?> 
				<li>
					<div class="photo_grid">
						<figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url() . 'uploads/galleryImages/' . $valueSub['gallary_image_path']; ?>" title="<?php echo $valueSub['gallary_image_title'];?>"> <img src="<?php echo base_url() . 'uploads/galleryImages/' . $valueSub['gallary_image_path']; ?>" alt="<?php echo $valueSub['gallary_image_path'];?>"/></a> </figure>
					</div>
				</li>
			<?php } ?>
            
		<?php $i++;?>
        <?php } ?>
    <?php } ?>
</ul>
