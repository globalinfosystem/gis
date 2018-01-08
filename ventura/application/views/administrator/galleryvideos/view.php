<?php
$get_group=SiteHelpers::getgroup();
?>
<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('administrator/galleryvideos') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Title</td>
						<td><?php echo $row['gallary_video_title'] ;?> </td>
						
					</tr>
				
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Content</td>
						<td><?php echo $row['gallary_video_content'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Path</td>
						<td><?php echo $row['gallary_video_path'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Alias</td>
						<td><?php echo $row['gallary_video_alias'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Created</td>
						<td><?php echo Sb_controller::show_date($row['gallary_video_created']); ?>  </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Updated</td>
						<td><?php echo Sb_controller::show_date($row['gallary_video_updated']); ?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Status</td>
						<td><?php echo $row['gallary_video_status'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Access</td>
						<td> 
                        	<?php 
                        		$groupaccess=explode(',',$row['gallary_video_access']);
													$member=array();
													foreach($groupaccess as $group)
													{
														$member[]=$get_group[$group];	
														
													}	
													echo implode(', ',$member);
                         ?>
                        </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Url</td>
						<td><?php echo $row['gallary_video_url'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Allow Guest</td>
						<td><?php echo $row['gallary_video_allow_guest']==1?"Yes":"No";?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallary Video Template</td>
						<td><?php echo $row['gallary_video_template'] ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  