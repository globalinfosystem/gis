<?php $staffposition = SiteHelpers::getstaffposition();

 ?>
<div class="title-bar blue-bar">Employee Profile</div>
<div class="profile-bg emp-profile pad15 clearfix">
         
             <div class="col-xs-12 col-sm-3 col-md-3"><img <?php if(!empty($profiler_image)){?>src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $profiler_image; ?>" <?php }else{?>src="<?php echo base_url(); ?>uploads/profilerImage/^FA4B677277FD6D95B0007D76C14AABF4BF1D1FE2E46DEE0EC4^pimgpsh_fullsize_distr.jpg" <?php } ?> width="187" height="197" alt="Sports Minister"  class="img-responsive" /></div>
            <div class="col-xs-12 col-sm-9 col-md-9">
              <h1><?php echo!empty($profiler_name) ? $profiler_name : ''; ?></h1>
              <h2><?php echo!empty($profiler_occupation) ? $profiler_occupation : '--'; ?></h2>
              <h3><?php echo !empty($profiler_staff_position)?$staffposition[$profiler_staff_position]:'--';?></h3>
              
              <!--<div class="pro-social">
                <img src="images/fb-icon.png" alt="facebook" /> <img src="images/twitter-icon.png" alt="twitter" />
              </div>-->
            </div>
          </div>
          <div class="empl-profile">
            <h2>Full Details</h2>
          <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                  <tr>
                    <td><strong>Father’s Name:</strong></td>
                    <td><?php echo!empty($profiler_father_name) ? $profiler_father_name : ''; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Date of Birth:</strong></td>
                    <td><?php echo!empty($profiler_d_o_b) ? date('d M Y', strtotime($profiler_d_o_b)) : ''; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Nationality: </strong></td>
                    <td><?php echo!empty($profiler_nationality) ? $profiler_nationality : '--'; ?></td>
                  </tr>
                  <tr>
                    <td><strong>Educational Qualification</strong></td>
                    <td><?php echo!empty($profiler_education) ? $profiler_education : '--'; ?></td>
                  </tr>
                  <?php /*?><tr>
                    <td><strong>Technical Qualification</strong></td>
                    <td>Harvard Business School India Advisory Board</td>
                  </tr><?php */?>
                  <?php /*?><tr>
                    <td><strong>Posting</strong></td>
                    <td>Rohtak</td>
                  </tr><?php */?>
                  <tr>
                    <td><strong>Achievements</strong></td>
                    <td><?php echo !empty($profiler_achievement)?$profiler_achievement:'--'?></td>
                  </tr>
                  <?php /*?><tr>
                    <td><strong>Others </strong></td>
                    <td>Basketball Champion at National Level</td>
                  </tr><?php */?>
                 
                </table>
              </div>
          </div>