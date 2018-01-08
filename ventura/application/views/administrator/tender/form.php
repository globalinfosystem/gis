<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('administrator/tender') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
		<?php echo $this->session->flashdata('message');?>
			<ul class="parsley-error-list">
				<?php echo $this->session->flashdata('errors');?>
			</ul>
		 <form action="<?php echo site_url('administrator/tender/save/'.$row['tender_id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
<input type='text' class='form-control' placeholder='' value='<?php echo $row['tender_id'];?>' name='tender_id'  />
<div class="col-md-12">
						<fieldset><legend> tender</legend>
									
								  <div class="form-group  " >
									<label for="Tender Subject" class=" control-label col-md-4 text-left"> Tender Subject <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tender_subject'];?>' name='tender_subject'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Date Notice" class=" control-label col-md-4 text-left"> Tender Date Notice <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo $row['tender_date_notice'];?>' name='tender_date_notice'
				style='width:150px !important;'	  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Notice" class=" control-label col-md-4 text-left"> Tender Notice </label>
									<div class="col-md-8">
									  <input  type='file' name='tender_notice' id='tender_notice' <?php if($row['tender_notice'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['tender_notice'],'uploads/tender') ;?>
				 <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Detiled Notice" class=" control-label col-md-4 text-left"> Tender Detiled Notice </label>
									<div class="col-md-8">
									  <input  type='file' name='tender_Detiled_notice' id='tender_Detiled_notice' <?php if($row['tender_Detiled_notice'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['tender_Detiled_notice'],'uploads/tender') ;?>
				 <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Corrigendum" class=" control-label col-md-4 text-left"> Tender Corrigendum </label>
									<div class="col-md-8">
									  <input  type='file' name='tender_corrigendum' id='tender_corrigendum' <?php if($row['tender_corrigendum'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['tender_corrigendum'],'uploads/tender') ;?>
				 <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Timesubmission" class=" control-label col-md-4 text-left"> Tender Timesubmission <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['tender_timesubmission'];?>' name='tender_timesubmission'
				style='width:150px !important;'	  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Lastdate" class=" control-label col-md-4 text-left"> Tender Lastdate <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo $row['tender_lastdate'];?>' name='tender_lastdate'
				style='width:150px !important;'	  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tender Status" class=" control-label col-md-4 text-left"> Tender Status <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='tender_status' rows='5' id='tender_status' code='{$tender_status}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
			<a href="<?php echo site_url('administrator/tender');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>	
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 

		$("#tender_status").jCombo("<?php echo site_url('administrator/tender/comboselect?filter=tb_status:status_id:status_name') ?>",
		{  selected_value : '<?php echo $row["tender_status"] ?>' });
		 	 
});
</script>		 