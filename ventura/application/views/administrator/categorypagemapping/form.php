<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('administrator/categorypagemapping') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
		<?php echo $this->session->flashdata('message');?>
			<ul class="parsley-error-list">
				<?php echo $this->session->flashdata('errors');?>
			</ul>
		 <form action="<?php echo site_url('administrator/categorypagemapping/save/'.$row['categorypage_id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
 <input type='text' class='form-control' placeholder='' value='<?php echo $row['categorypage_id'];?>' name='categorypage_id'  />
<div class="col-md-12">
						<fieldset><legend> Category Page Mapping</legend>
									
								  <div class="form-group  " >
									<label for="Category Id" class=" control-label col-md-4 text-left"> Category Id <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='category_id' rows='5' id='category_id' code='{$category_id}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Page Id" class=" control-label col-md-4 text-left"> Page Id <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='page_id' rows='5' id='page_id' code='{$page_id}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Categorypage Status" class=" control-label col-md-4 text-left"> Categorypage Status <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='categorypage_status' rows='5' id='categorypage_status' code='{$categorypage_status}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
			<a href="<?php echo site_url('administrator/categorypagemapping');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>	
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 

		$("#category_id").jCombo("<?php echo site_url('administrator/categorypagemapping/comboselect?filter=tb_categories:category_id:category_name') ?>",
		{  selected_value : '<?php echo $row["category_id"] ?>' });
		
		$("#page_id").jCombo("<?php echo site_url('administrator/categorypagemapping/comboselect?filter=tb_pages:pageID:title') ?>",
		{  selected_value : '<?php echo $row["page_id"] ?>' });
		
		$("#categorypage_status").jCombo("<?php echo site_url('administrator/categorypagemapping/comboselect?filter=tb_status:status_id:status_name') ?>",
		{  selected_value : '<?php echo $row["categorypage_status"] ?>' });
		 	 
});
</script>		 