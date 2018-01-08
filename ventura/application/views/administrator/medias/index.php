  <?php usort($tableGrid, "SiteHelpers::_sort"); ?>
  <?php $get_group=SiteHelpers::getgroup();?>
  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
      </div>

      <ul class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
        <li class="active"><?php echo $pageTitle ?></li>
      </ul>

    </div>


	<div class="page-content-wrapper m-t">
    <div class="toolbar-line ">		
		<?php if($this->access['is_add'] ==1) : ?>
		<a href="<?php echo site_url('administrator/medias/add') ?>" class="tips btn btn-xs btn-info"  title="<?php echo $this->lang->line('core.btn_new'); ?>">
		<i class="fa fa-plus"></i>&nbsp;<?php echo $this->lang->line('core.btn_new'); ?> </a>
		<?php endif;
		if($this->access['is_remove'] ==1) : ?>		
		<a href="javascript:void(0);"  onclick="SximoDelete();" class="tips btn btn-xs btn-danger" title="<?php echo $this->lang->line('core.btn_remove'); ?>">
		<i class="fa fa-trash-o"></i>&nbsp;<?php echo $this->lang->line('core.btn_remove'); ?> </a>
		<?php endif;
		/*if($this->access['is_excel'] ==1) : ?>	
		<a href="<?php echo site_url('administrator/medias/download') ?>" class="tips btn btn-xs btn-default" title="<?php echo $this->lang->line('core.btn_download'); ?>">
		<i class="fa fa-download"></i>&nbsp;<?php echo $this->lang->line('core.btn_download'); ?></a>
		<?php endif;*/
		/*if($this->session->userdata('gid') ==1) : ?>	
		<a href="<?php echo site_url('sximo/module/config/medias') ?>" class="tips btn btn-xs btn-default"  title="<?php echo $this->lang->line('core.btn_config'); ?>">
		<i class="fa fa-cog"></i>&nbsp;<?php echo $this->lang->line('core.btn_config'); ?></a>
		<?php endif;*/ ?>		

	</div>
	<?php echo $this->session->flashdata('message');?>
	 <form action='<?php echo site_url('administrator/medias/destroy') ?>' class='form-horizontal' id ='SximoTable' method="post" >
	 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" /> 
             <div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th> No </th>
				<th> <input type="checkbox" class="checkall" /></th>

				<?php foreach ($tableGrid as $k => $t) : ?>
					<?php if($t['view'] =='1'): ?>
                    <?php if($t['field']!='media_id')
								{
								?>
						<th><?php echo $t['label'] ?></th>
                        <?php } ?>
					<?php endif; ?>
				<?php endforeach; ?>
                <th>Short Code</th>
				<th><?php echo $this->lang->line('core.btn_action'); ?></th>
			  </tr>
        </thead>

        <tbody>
			<tr id="sximo-quick-search">
				<td> # </td>
				<td> </td>
				<?php foreach ($tableGrid as $t) :?>
					<?php if($t['view'] =='1') :?>
                    <?php if($t['field']!='media_id')
								{
									
								?>
					<td>						
                    	
						<?php 
												
												
												if($t['field']=='media_guest')
									{
										
										echo "<select name='media_guest' class='form-control' data-parsley-required='true'><option value=''> -- Select  -- </option><option value='1'> Yes </option> <option value='0'> No </option> </select>";
										
										
									}
									else
									{
													echo SiteHelpers::transForm($t['field'] , $tableForm) ;
													
									}
												
						?>								
					</td>
                    
                    <?php } ?>
					<?php endif;?>
				<?php endforeach;?>
                
				<td style="width:50px;">
				<input type="hidden"  value="Search">
				<button type="button"  class=" do-quick-search btn btn-xs btn-info"><i class="fa fa-search"></i> </button></td>
                <td>&nbsp;</td>
			  </tr>			
			<tr >
			<?php foreach ( $rowData as $i => $row ) : ?>
                <tr>
					<td width="50"> <?php echo ($i+1+$page) ?> </td>
					<td width="50"><input type="checkbox" class="ids" name="id[]" value="<?php echo $row->media_id ?>" />  </td>
				 <?php foreach ( $tableGrid as $j => $field ) : ?>
					 <?php if($field['view'] =='1'): ?>
                     <?php if($field['field']!='media_id'){?>
					 <td>
					 	<?php if($field['attribute']['image']['active'] =='1'): ?>
							<?php echo SiteHelpers::showUploadedFile($row->$field['field'] , $field['attribute']['image']['path'] ) ?>
						<?php else: ?>
							<?php 
							$conn = (isset($field['conn']) ? $field['conn'] : array() ) ;
							if($field['field']=='media_access')
												{
													$groupaccess=explode(',',$row->$field['field']);
													$member=array();
													foreach($groupaccess as $group)
													{
														$member[]=$get_group[$group];	
														
													}	
													echo implode(', ',$member);
												}
												else if($field['field'] == 'media_guest'){
														if($row->$field['field']==1):
													echo $row->$field['field']='Yes';
														else:
														echo $row->$field['field']='No';
														endif;
												}
												 else if($field['field'] == 'media_created_date')
												{
													echo Sb_controller::show_date($row->$field['field']);
													
												}
												else if($field['field'] == 'media_updated_date')
												{
					
													echo !empty($row->$field['field'])?Sb_controller::show_date($row->$field['field']):'';
													
												}
												else{
                                                echo SiteHelpers::gridDisplay($row->$field['field'], $field['field'], $conn);
												}
							?>
						<?php endif; ?>
					 </td>
                     <?php } ?>
					 <?php endif; ?>
				 <?php endforeach; ?>
				    <td><?php if($row->media_url){echo "&lt;?php &nbsp; echo Sb_controller::get_url('".$row->media_url."','200','200','auto') ?&gt;"; }else{echo "&lt;?php &nbsp; echo Sb_controller::get_media('".$row->media_path."','200','200','auto') ?&gt;"; } ?></td>
                  
                 <td>
                 
					 <div class="btn-group">		
						<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"  aria-expanded="false">
						<i class="fa fa-cog"></i> <span class="caret"></span>
						</button>
						<ul  class="dropdown-menu  icons-left pull-right">					 	

					 	<?php if($access['is_detail'] ==1) : ?>
						<li><a href="<?php echo site_url('administrator/medias/show/'.$row->media_id)?>"  class="tips "  title="view"><i class="fa  fa-search"></i> <?php echo $this->lang->line('core.btn_view'); ?> </a></li>
						<?php endif;
						if($access['is_edit'] ==1) : ?>
						<li><a  href="<?php echo site_url('administrator/medias/add/'.$row->media_id)?>"  class="tips "  title="edit"> <i class="fa fa-edit"></i>  <?php echo $this->lang->line('core.btn_edit'); ?> </a> </li>
						<?php endif;?>
												
						</ul>
					</div>					 
					</td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>
	</div>
	</form>
	
	<?php echo $this->load->view('footer');?>
	</div>
</div>

<script>
$(document).ready(function(){

	$('.do-quick-search').click(function(){
		$('#SximoTable').attr('action','<?php echo site_url("administrator/medias/multisearch");?>');
		$('#SximoTable').submit();
	});
	
});	
</script>
