<div class="ministers-blk">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="row">
        <div class="title-bar orange-bar">Hon’ble Sports &amp; Youth Affairs Minister</div>
        <div class="profile-bg mini-profile pad15 clearfix">
          <div class="like-box"><div style="float:left;"><a class="fb-share-button" data-href="https://www.facebook.com/HaryanaAthletics" data-layout="button_count"></a></div>
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
          <div class="col-xs-12 col-sm-3 col-md-3"><img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $profiler_image; ?>" width="288" height="215" alt="Sports Minister"  class="img-responsive" /></div>
          <div class="col-xs-12 col-sm-9 col-md-9">
            <h1>Profile of Hon’ble Minister <?php echo $profiler_name ? $profiler_name : ''; ?></h1>
            <div class="profile-text">
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td valign="top"><strong>Father’s Name:</strong></td>
                  <td valign="top"><?php echo!empty($profiler_father_name) ? $profiler_father_name : '--'; ?></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Date of Birth:</strong></td>
                  <td valign="top"><?php echo!empty($profiler_d_o_b) ? date('d M Y', strtotime($profiler_d_o_b)) : ''; ?></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Education: </strong></td>
                  <td valign="top"><?php echo!empty($profiler_education) ? $profiler_education : '--'; ?></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Political Party:</strong></td>
                  <td valign="top"><?php echo!empty($profiler_political_party) ? $profiler_political_party : '--'; ?></td>
                </tr>
                <tr>
                  <td valign="top"><strong>Residence:</strong></td>
                  <td valign="top"><?php echo!empty($profiler_address) ? $profiler_address : '--'; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div>
          <h2>Personal life</h2>
          <p><?php echo!empty($profiler_life) ? $profiler_life : '--'; ?></p>
          <h2>Education</h2>
          <p><?php echo!empty($profiler_education_brief) ? $profiler_education_brief : '--'; ?> </p>
          <div class="greydiv">
            <h2>Political career</h2>
            <p><?php echo!empty($profiler_career) ? $profiler_career : '--'; ?></p>
          </div>
          <h2>Cabinet Minister of Haryana</h2>
          <p><?php echo!empty($profiler_bio) ? $profiler_bio : '--'; ?></p>
          <h2>Family</h2>
          <p><?php echo!empty($profiler_bio) ? $profiler_bio : '--'; ?></p>
        </div>
      </div>
    </div>
  </div>

