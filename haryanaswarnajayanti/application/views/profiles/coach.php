<?php 
	$districts=SiteHelpers::getDistricts();
	 $games=SiteHelpers::getGames();
?>
    <div class="title-bar green-bar">Coach's Profile</div>
    <div class="profile-bg aw-profile pad15 clearfix">
	<?php if(!empty($coach_fb_link)): ?>
        <div class="like-box"><a href="<?php echo $coach_fb_link;?>"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></a></div>
		<?php endif; ?>
	   <div class="col-xs-12 col-sm-3 col-md-3">
            <?php if (!empty($coach_image)) { ?>
                <img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $coach_image; ?>" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } else { ?>
                <img src="<?php echo base_url() ?>uploads/profilerImage/no-user.png" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <h1><?php echo!empty($coach_name) ? $coach_name : ''; ?></h1>
            <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
					<?php if(!empty($coach_district)):?>
					<tr>
						<td>Posted at District</td>
						<td><?php echo $districts[$coach_district]; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($coach_game)):?>
					<tr>
						<td>Game of Specialization</td>
						<td><?php echo  $games[$coach_game]; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($coach_father_name)):?>
					<tr>
						<td>Father's Name</td>
						<td><?php echo  $coach_father_name; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($coach_birth_date)):?>
					<tr>
						<td><?php if(!empty($coach_birth_date) && !empty($coach_birth_place)){ ?> Date & Place of Birth<?php }elseif(!empty($coach_birth_date)){?>Date of Birth<?php }else{?>Place of Birth<?php } ?></td>
						<td><?php if(!empty($coach_birth_date) && !empty($coach_birth_place)){ echo date('d M Y',strtotime($coach_birth_date)).', '.$coach_birth_place;}elseif(!empty($coach_birth_date)){echo date('d M Y',strtotime($coach_birth_date));}else{echo $coach_birth_place;}?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($coach_present_home_address)):?>
					<tr>
						<td>Present Home Address</td>
						<td><?php echo  $coach_present_home_address; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($coach_permanent_home_address)):?>
					<tr>
						<td>Permanent Home Address</td>
						<td><?php echo  $coach_permanent_home_address; ?></td>
					</tr>
					<?php endif; ?>
						<?php if(!empty($coach_phone_no)):?>
					<tr>
						<td>Phone Number</td>
						<td><?php echo  $coach_phone_no; ?></td>
					</tr>
					<?php endif; ?>
						<?php if(!empty($coach_mobile_no)):?>
					<tr>
						<td>Mobile Number</td>
						<td><?php echo  $coach_mobile_no; ?></td>
					</tr>
					<?php endif; ?>
                </table>
            </div>
        </div>
    </div>
    <div class="all-profile">
       
    </div>
 
    
