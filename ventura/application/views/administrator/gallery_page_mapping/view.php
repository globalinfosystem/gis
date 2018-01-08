<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('administrator/gallery_page_mapping') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>Gallery Page Id</td>
						<td><?php echo $row['gallery_page_id'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallery Id</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['gallery_id'],'gallery_id','1:tb_galleries:galleries_id:galleries_title') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Page Id</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['page_id'],'page_id','1:tb_pages:pageID:title') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Gallery Page Status</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['gallery_page_status'],'gallery_page_status','1:tb_status:status_id:status_name') ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  