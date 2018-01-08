<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('administrator/category') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered" >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>Category Id</td>
						<td><?php echo $row['category_id'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Category Status</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['category_status'],'category_status','1:tb_status:status_id:status_name') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Category Name</td>
						<td><?php echo $row['category_name'] ;?> </td>
						
					</tr>
				
				</tbody>	
			</table>    
		</div>
	</div>
	
</div>
	  