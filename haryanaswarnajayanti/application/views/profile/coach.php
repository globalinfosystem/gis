
    <div class="title-bar green-bar">Coach's Profile</div>
    <div class="profile-bg aw-profile pad15 clearfix">
        <div class="like-box"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <?php if (!empty($profiler_image)) { ?>
                <img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $profiler_image; ?>" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } else { ?>
                <img src="<?php echo base_url() ?>uploads/profilerImage/no-user.png" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <h1><?php echo!empty($profiler_name) ? $profiler_name : ''; ?></h1>
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
                        <td><strong>Height:</strong></td>
                        <td><?php echo!empty($profiler_height) ? $profiler_height : '--'; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Occupation:</strong></td>
                        <td><?php echo!empty($profiler_occupation) ? $profiler_occupation : '--'; ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <div class="all-profile">
        <h2>Biography</h2>
        <p><?php echo!empty($profiler_bio) ? $profiler_bio : '--'; ?></p>
        <h2>Career</h2>
        <p><?php echo!empty($profiler_career) ? $profiler_career : '--'; ?></p>
    	<h2>Achievements</h2>
        <p><?php echo !empty($achivement_data)?$achivement_data:'--'; ?></p>    
    </div>
 
    
