<?php $sliders = SiteHelpers::getSliderImages($slider_id); ?>
<div class="slick_slider">
    <?php foreach ($sliders as $key => $value) { ?>
        <?php if (!empty($value['slider_image_path'])) { ?>
            <div class="single_iteam"> <a href="<?php echo base_url();?>"> <img src="<?php echo base_url() . 'uploads/sliderImages/' . $value['slider_image_path']; ?>" alt=""></a>
                <div class="slider_article">
                    <?php if (!empty($value['slider_image_path'])) { ?>
                        <h2><a class="slider_tittle" href="<?php echo base_url();?>"><?php echo $value['slider_image_title'];?></a></h2>
                        <p><?php echo $value['slider_image_content'];?></p>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>