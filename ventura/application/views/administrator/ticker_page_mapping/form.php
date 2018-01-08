<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('administrator/ticker_page_mapping') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
		<?php echo $this->session->flashdata('message');?>
			<ul class="parsley-error-list">
				<?php echo $this->session->flashdata('errors');?>
			</ul>
		 <form action="<?php echo site_url('administrator/ticker_page_mapping/save/'.$row['ticker_page_id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

<div class="col-md-12">
						<fieldset><legend> Ticker_page_mapping</legend>
									
								  <div class="form-group  " >
									<label for="Ticker Id" class=" control-label col-md-4 text-left"> Ticker Id <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='ticker_id' rows='5' id='ticker_id' code='{$ticker_id}' 
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
									<label for="Ticker Page Status" class=" control-label col-md-4 text-left"> Ticker Page Status <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='ticker_page_status' rows='5' id='ticker_page_status' code='{$ticker_page_status}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
			<a href="<?php echo site_url('administrator/ticker_page_mapping');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>	
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 

		$("#ticker_id").jCombo("<?php echo site_url('administrator/ticker_page_mapping/comboselect?filter=tb_ticker:ticker_id:ticker_title') ?>",
		{  selected_value : '<?php echo $row["ticker_id"] ?>' });
		
		$("#page_id").jCombo("<?php echo site_url('administrator/ticker_page_mapping/comboselect?filter=tb_pages:pageID:title') ?>",
		{  selected_value : '<?php echo $row["page_id"] ?>' });
		
		$("#ticker_page_status").jCombo("<?php echo site_url('administrator/ticker_page_mapping/comboselect?filter=tb_status:status_id:status_name') ?>",
		{  selected_value : '<?php echo $row["ticker_page_status"] ?>' });
		 	 
});
</script>		 