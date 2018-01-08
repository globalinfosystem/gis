<div style="width:padding:10px;;">
 <form class="form-vertical" action="<?php echo site_url('administrator/module/saveConn/'.$module_name);?>" method="post">	
 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
	<div id="result"></div>
<div class="padding-lg">

	<div class="form-group">	
		<label> Table </label>
		<select name="db" id="db"  class="ext form-control" required ></select>	
	</div>	
	<div class="form-group">	
		<label> Key  </label>
		<select name="key" id="key"  class="ext form-control" required disabled="disabled"></select>	
	</div>	
	<div class="form-group">	
		<label> Display as </label>
			<br /><br />

			
			<select name="display[]"  class="ext " id="lookup_value1"  
			style="width:30%; padding:5px; border:solid 1px #ddd; "></select> 
		
			<select name="display[]"  class="ext " id="lookup_value2" 
			style="width:30%;  padding:5px; border:solid 1px #ddd;"></select> 
			
			<select name="display[]"  class="ext " id="lookup_value3"  
			style="width:30%;  padding:5px; border:solid 1px #ddd;"></select>

	</div>	
	<div class="form-group">
			<input type="hidden" name="module_id" value="<?php echo $row->module_id ;?>" />
			<input type="hidden" name="field_id" value="<?php echo $field_id ;?>" />
			<input type="hidden" name="alias" value="<?php echo $alias ;?>" />
			<button type="submit" class="btn btn-primary" id="saveLayout"> Save Connection </button>
	
	 </div>	 			 
</div>
</form>

</div>

<script>
$(document).ready(function(){
			
	$("#db").jCombo("<?php echo site_url('administrator/module/combotable/') ;?>",
	{ selected_value : "<?php echo $f['db'] ;?>" });

	
	<?php $display = explode("|", $f['display']); ?>

	$("#key").jCombo("<?php echo site_url('administrator/module/combotablefield') ;?>?table=",
	{ selected_value : "<?php echo $f['key'] ;?>", parent: "#db", initial_text : ' Primary Key' });		
	$("#lookup_value1").jCombo("<?php echo site_url('administrator/module/combotablefield') ;?>?table=",
	{ selected_value : "<?php echo (isset($display[0]) ? $display[0] : '');?>", parent: "#db",   initial_text : ' Display Text 1'});
	$("#lookup_value2").jCombo("<?php echo site_url('administrator/module/combotablefield') ;?>?table=",
	{ selected_value : "<?php echo (isset($display[1]) ? $display[1] : '');?>", parent: "#db",   initial_text : ' Display Text 2'});
	$("#lookup_value3").jCombo("<?php echo site_url('administrator/module/combotablefield') ;?>?table=",
	{ selected_value : "<?php echo (isset($display[2]) ? $display[2] : '');?>", parent: "#db",   initial_text : ' Display Text 3'});	
});	
</script>	


