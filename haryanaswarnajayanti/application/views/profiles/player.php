<?php $coach_name=SiteHelpers::get_table_in_id_as_key('tb_coach_profile','coach_status','coach_name','coach_id');
?>
    <div class="title-bar green-bar">Player's Profile</div>
    <div class="profile-bg aw-profile pad15 clearfix">
	<?php if(!empty($player_fb_link)): ?>
        <div class="like-box"><a href="<?php echo $player_fb_link;?>"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></a></div>
		<?php endif; ?>
	   <div class="col-xs-12 col-sm-3 col-md-3">
            <?php if (!empty($player_image)) { ?>
                <img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $player_image; ?>" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } else { ?>
                <img src="<?php echo base_url() ?>uploads/profilerImage/no-user.png" width="187" height="197" alt="no image"  class="img-responsive" />
            <?php } ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <h1><?php echo!empty($player_name) ? $player_name : ''; ?></h1>
            <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
					<?php if(!empty($player_dob)):?>
					<tr>
						<td><?php if(!empty($player_dob) && !empty($player_birth_place)){ ?> Date & Place of Birth<?php }elseif(!empty($player_dob)){?>Date of Birth<?php }else{?>Place of Birth<?php } ?></td>
						<td><?php if(!empty($player_dob) && !empty($player_birth_place)){ echo date('d M Y',strtotime($player_dob)).', '.$player_birth_place;}elseif(!empty($player_dob)){echo date('d M Y',strtotime($player_dob));}else{echo $player_birth_place;}?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_age)):?>
					<tr>
						<td>Age</td>
						<td><?php echo $player_age; ?> years</td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_height)):?>
					<tr>
						<td>Height</td>
						<td><?php echo $player_height; ?> cms</td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_occupation)):?>
					<tr>
						<td>Occupation</td>
						<td><?php echo $player_occupation; ?></td>
					</tr>
					<?php endif; ?>
					
					<?php if(!empty($player_father_name)):?>
					<tr>
						<td>Father's Name</td>
						<td><?php echo $player_father_name; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_spouse)):?>
					<tr>
						<td>Spouse</td>
						<td><?php echo $player_spouse; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_education)):?>
					<tr>
						<td>Education</td>
						<td><?php echo $player_education; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_coach_name)):?>
					<tr>
						<td>Coach Name</td>
						<td><?php echo $coach_name[$player_coach_name]; ?></td>
					</tr>
					<?php endif; ?>
					<?php if(!empty($player_nationality)):?>
					<tr>
						<td>Nationality</td>
						<td><?php echo $player_nationality; ?></td>
					</tr>
					<?php endif; ?>
					
					
					
                </table>
            </div>
        </div>
    </div>
    <div class="all-profile">
       
    </div>
 
    
