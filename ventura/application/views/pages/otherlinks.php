<section id="contentSection">
    <div class="single_post_content_services">
        <h2><span>Other Links</span></h2>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- <div class="col-xs-12 col-sm-12 col-md-8 nopadding"> -->
                <div class="single_sidebar wow fadeInDown">
                    <?php $menus = SiteHelpers::menus('otherlinks'); ?>
                   
                       
                            <?php
                            $external = '';
                            if (!empty($_SERVER['PATH_INFO'])) {
                                $external = base_url() . substr($_SERVER['PATH_INFO'], 1, 100);
                            }
                            ?>
                            <?php foreach ($menus as $menu) : ?>
                               <div class="title-bar green-bar">
                                   <a <?php if ($menu['menu_type'] == 'external') : ?>
                                                href="<?php echo $menu['url']; ?>" target="_blank" 
                                            <?php else : ?>
                                                href="<?php echo site_url($menu['module']); ?>" target="_blank" 
                                            <?php endif; ?>><?php echo $menu['menu_name']; ?>	
                                        </a>
                               </div>



                            <?php endforeach; ?>
                       
                   
                </div>
           <!-- </div>
            <div class="col-xs-12 col-sm-12 col-md-4 nopadding">
               
                    <div class="share-blk">
                        <div class="text-center">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.7878970845663!2d76.83281701467403!3d30.69624328164983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f934f3cfcced3%3A0x622a1a0c6130faa7!2sHareda+Office!5e0!3m2!1sen!2sin!4v1490166820265" width="260" height="160" frameborder="0" style="border:0" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
               
            </div> -->
        </div>
    </div>

</section>