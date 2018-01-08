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
			<li><a href="<?php echo site_url('administrator/medias') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
		
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Name</td>
						<td><?php echo $row['media_name'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Alias</td>
						<td><?php echo $row['media_alias'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Path</td>
						<td><?php echo $row['media_path'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Created Date</td>
						<td><?php echo Sb_controller::show_date($row['media_created_date']); ?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Updated Date</td>
						<td><?php echo Sb_controller::show_date($row['media_updated_date']); ?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Access</td>
						<td>
                        	<?php 
                        		$groupaccess=explode(',',$row['media_access']);
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
						<td width='30%' class='label-view text-right'>Meida Template</td>
						<td><?php echo $row['meida_template'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Status</td>
						<td><?php echo $row['media_status'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Media Guest</td>
						<td><?php echo $row['media_guest']==1?"Yes":"No"; ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  