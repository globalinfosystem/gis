<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('administrator/tender') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>Tender Subject</td>
						<td><?php echo $row['tender_subject'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Date Notice</td>
						<td><?php echo $row['tender_date_notice'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Notice</td>
						<td><?php echo $row['tender_notice'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Detiled Notice</td>
						<td><?php echo SiteHelpers::showUploadedFile($row['tender_Detiled_notice'],'uploads/tender') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Corrigendum</td>
						<td><?php echo SiteHelpers::showUploadedFile($row['tender_corrigendum'],'uploads/tender') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Timesubmission</td>
						<td><?php echo $row['tender_timesubmission'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Lastdate</td>
						<td><?php echo $row['tender_lastdate'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tender Status</td>
						<td><?php echo $row['tender_status'] ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  