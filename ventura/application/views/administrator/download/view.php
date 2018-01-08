<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('administrator/download') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>Document Title</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['download_title'],'download_title','1:download:download_title:download_title') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Document Content</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['download_content'],'download_content','1:download:download_content:download_content') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Document Pdf</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['download_pdf'],'download_pdf','1:download:download_pdf:download_pdf') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Download Date</td>
						<td><?php echo $row['download_date'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Download Status</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['download_status'],'download_status','1:tb_status:status_id:status_name') ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  