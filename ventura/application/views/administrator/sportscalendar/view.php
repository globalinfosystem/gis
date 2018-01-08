<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('administrator/sportscalendar') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Id</td>
						<td><?php echo $row['sports_activity_id'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Name</td>
						<td><?php echo $row['sports_activity_name'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Alias</td>
						<td><?php echo $row['sports_activity_alias'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Place</td>
						<td><?php echo $row['sports_activity_place'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity To Date</td>
						<td><?php echo $row['sports_activity_to_date'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity From Date</td>
						<td><?php echo $row['sports_activity_from_date'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Participants</td>
						<td><?php echo $row['sports_activity_participants'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity District</td>
						<td><?php echo $row['sports_activity_district'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Zone</td>
						<td><?php echo $row['sports_activity_zone'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Level</td>
						<td><?php echo $row['sports_activity_level'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Access</td>
						<td><?php echo $row['sports_activity_access'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Template</td>
						<td><?php echo $row['sports_activity_template'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Allow Guest</td>
						<td><?php echo $row['sports_activity_allow_guest'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Status</td>
						<td><?php echo $row['sports_activity_status'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Created Date</td>
						<td><?php echo $row['sports_activity_created_date'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sports Activity Updated Date</td>
						<td><?php echo $row['sports_activity_updated_date'] ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  