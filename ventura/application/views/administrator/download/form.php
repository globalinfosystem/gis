<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('administrator/download') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
		<?php echo $this->session->flashdata('message');?>
			<ul class="parsley-error-list">
				<?php echo $this->session->flashdata('errors');?>
			</ul>
		 <form action="<?php echo site_url('administrator/download/save/'.$row['download_id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
 <input type='text' class='form-control' placeholder='' value='<?php echo $row['download_id'];?>' name='download_id'  />
<div class="col-md-12">
						<fieldset><legend> Download</legend>
									
								  <div class="form-group  " >
									<label for="Download Title" class=" control-label col-md-4 text-left"> Download Title <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['download_title'];?>' name='download_title'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Download Content" class=" control-label col-md-4 text-left"> Download Content <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['download_content'];?>' name='download_content'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Download Pdf" class=" control-label col-md-4 text-left"> Download Pdf <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input  type='file' name='download_pdf' id='download_pdf' <?php if($row['download_pdf'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['download_pdf'],'/uploads/document/') ;?>
				 <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Download Date" class=" control-label col-md-4 text-left"> Download Date <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo $row['download_date'];?>' name='download_date'
				style='width:150px !important;'	  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Download Status" class=" control-label col-md-4 text-left"> Download Status <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='download_status' rows='5' id='download_status' code='{$download_status}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
			<a href="<?php echo site_url('administrator/download');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>	
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 

		$("#download_status").jCombo("<?php echo site_url('administrator/download/comboselect?filter=tb_status:status_id:status_name') ?>",
		{  selected_value : '<?php echo $row["download_status"] ?>' });
		 	 
});
</script>		 