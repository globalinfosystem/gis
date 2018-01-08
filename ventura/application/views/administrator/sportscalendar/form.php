 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#from_date" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      changeYear: true,
      numberOfMonths: 1,
	  dateFormat: 'dd-mm-yy',
      onClose: function( selectedDate ) {
        $( "#to_date" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to_date" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
	  changeYear: true,
      numberOfMonths: 1,
	   dateFormat: 'dd-mm-yy',
      onClose: function( selectedDate ) {
        $( "#from_date" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>
<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('administrator/sportscalendar') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
		<?php echo $this->session->flashdata('message');?>
			<ul class="parsley-error-list">
				<?php echo $this->session->flashdata('errors');?>
			</ul>
		 <form action="<?php echo site_url('administrator/sportscalendar/save/'.$row['sports_activity_id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-12">
						<fieldset><legend> Sports Calendar</legend>
									
								  <div class="form-group  " >
									<label for="Activity Name" class=" control-label col-md-4 text-left"> Activity Name <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sports_activity_name'];?>' name='sports_activity_name'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" Place" class=" control-label col-md-4 text-left">  Place </label>
									<div class="col-md-8">
                                    <textarea  name='sports_activity_place' class='form-control markItUp'><?php echo $row['sports_activity_place'];?></textarea><br/> 
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" From Date" class=" control-label col-md-4 text-left">  From</label>
									<div class="col-md-8">
									  <input type='text' class='form-control' id='from_date' placeholder='' value='<?php echo !empty($row['sports_activity_from_date'])?date('d-m-y',strtotime($row['sports_activity_from_date'])):'';?>' name='sports_activity_from_date' required   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 	
                                  	  <div class="form-group  " >
									<label for=" To Date" class=" control-label col-md-4 text-left">  To</label>
									<div class="col-md-8">
									  <input type='text' class='form-control' id='to_date' placeholder='' value='<?php echo !empty($row['sports_activity_to_date'])?date('d-m-y',strtotime($row['sports_activity_to_date'])):'';?>' name='sports_activity_to_date' required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
											
								  <div class="form-group  " >
									<label for="Participants" class=" control-label col-md-4 text-left"> Participants </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sports_activity_participants'];?>' name='sports_activity_participants'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="District" class=" control-label col-md-4 text-left"> District </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sports_activity_district'];?>' name='sports_activity_district'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" Zone" class=" control-label col-md-4 text-left">  Zone </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sports_activity_zone'];?>' name='sports_activity_zone'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" Level" class=" control-label col-md-4 text-left">  Level </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sports_activity_level'];?>' name='sports_activity_level'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" Access" class=" control-label col-md-4 text-left">  Access </label>
									<div class="col-md-8">
									  <?php $sports_activity_access = explode(",",$row['sports_activity_access']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='sports_activity_access[]' value ='1'   class='' 
					<?php if(in_array('1',$sports_activity_access)) echo 'checked';?> 
					 /> asdasdas </label>  <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" Allow Guest" class=" control-label col-md-4 text-left">  Allow Guest </label>
									<div class="col-md-8">
									  
					<label class='radio radio-inline'>
					<input type='radio' name='sports_activity_allow_guest' value ='1'  <?php if($row['sports_activity_allow_guest'] == '1') echo 'checked="checked"';?> > Yes </label>
					<label class='radio radio-inline'>
					<input type='radio' name='sports_activity_allow_guest' value ='0'  <?php if($row['sports_activity_allow_guest'] == '0') echo 'checked="checked"';?> > No </label> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for=" Status" class=" control-label col-md-4 text-left">  Status </label>
									<div class="col-md-8">
									  
					<label class='radio radio-inline'>
					<input type='radio' name='sports_activity_status' value ='enable'  <?php if($row['sports_activity_status'] == 'enable') echo 'checked="checked"';?> > Enable </label>
					<label class='radio radio-inline'>
					<input type='radio' name='sports_activity_status' value ='disable'  <?php if($row['sports_activity_status'] == 'disable') echo 'checked="checked"';?> > Disable </label> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
                <input type="hidden" name="sports_activity_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['sports_activity_id'])) ? $row['sports_activity_id'] : ''; ?>" />
                <input type="hidden" name="sports_activity_template" class="btn btn-info btn-sm" value="frontend" />
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
			<a href="<?php echo site_url('administrator/sportscalendar');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>	
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 
 	 
});
</script>		 