<?php $meta_data=SiteHelpers::get_meta_data('ministerprofile',$minister_id); ?>
<div class="ministers-blk">
     <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="row">
        <div class="title-bar orange-bar">Hon’ble Sports &amp; Youth Affairs Minister</div>
        <div class="profile-bg mini-profile pad15 clearfix">
          <div class="like-box">
          <div style="float:left;"><a class="fb-share-button" data-href="https://www.facebook.com/HaryanaAthletics" data-layout="button_count"></a></div>
          <div style="float:left; margin-top:4px; margin-left:15px;"><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/anilvijmantri"></a></div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</a><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script></div>
          <div class="col-xs-12 col-sm-3 col-md-3"><img <?php if(!empty($minister_image)){?>src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $minister_image; ?>" <?php } else{?>src="<?php echo base_url(); ?>uploads/profilerImage/^FA4B677277FD6D95B0007D76C14AABF4BF1D1FE2E46DEE0EC4^pimgpsh_fullsize_distr.jpg"<?php } ?> width="288" height="215" alt="Sports Minister"  class="img-responsive" /></div>
          <div class="col-xs-12 col-sm-9 col-md-9">
            <h1>Profile of Hon’ble Minister <?php echo $minister_name ? $minister_name : ''; ?></h1>
            <div class="profile-text">
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
                <?php if(!empty($minister_father)):?>
                <tr>
                  <td valign="top"><strong>Father’s Name:</strong></td>
                  <td valign="top"><?php echo $minister_father; ?></td>
                </tr>
                <?php endif; ?>
                <?php if(!empty($d_o_b)): ?>
                <tr>
                  <td valign="top"><strong>Date of Birth:</strong></td>
                  <td valign="top"><?php echo date('d M Y', strtotime($d_o_b)); ?></td>
                </tr>
                <?php endif; ?>
                <?php if(!empty($minister_education)): ?>
                <tr>
                  <td valign="top"><strong>Education: </strong></td>
                  <td valign="top"><?php echo $minister_education; ?></td>
                </tr>
                <?php endif;?>
                <?php if(!empty($political_party)): ?>
                <tr>
                  <td valign="top"><strong>Political Party:</strong></td>
                  <td valign="top"><?php echo $political_party; ?></td>
                </tr>
                <?php endif; ?>
                <?php if(!empty($minister_residence)): ?>
                <tr>
                  <td valign="top"><strong>Residence:</strong></td>
                  <td valign="top"><?php echo $minister_residence; ?></td>
                </tr>
                <?php endif; ?>
              </table>
            </div>
          </div>
        </div>
        <?php if(!empty($meta_data)){

			?>
        <div>
       			 <?php if(!empty($meta_data['minister_personel_life'])){?>
          			<h2>Personal life</h2>
                    <p><?php echo $meta_data['minister_personel_life'];?></p>
                    <?php } ?>
                    	 <?php if(!empty($meta_data['minister_education_in_brief'])){?>
          			<h2>Education</h2>
                    <p><?php echo $meta_data['minister_education_in_brief'];?></p>
                    <?php } ?>
                    <?php if(!empty($meta_data['minister_career'])){?>
          			<h2>Career</h2>
                    <p><?php echo $meta_data['minister_career'];?></p>
                    <?php } ?>
                    <?php if(!empty($meta_data['minister_cabinet'])){?>
          			<h2>Cabinet Minister of Haryana</h2>
                    <p><?php echo $meta_data['minister_cabinet'];?></p>
                    <?php } ?>
                    <?php if(!empty($meta_data['minister_family'])){?>
          			<h2>Family</h2>
                    <p><?php echo $meta_data['minister_family'];?></p>
                    <?php } ?>

        </div>
        <?php } ?>
      </div>
    </div>  
</div>
