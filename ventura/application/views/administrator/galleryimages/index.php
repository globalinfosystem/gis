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
            <?php if ($this->access['is_add'] == 1) : ?>
                <a href="<?php echo site_url('administrator/galleryimages/add') ?>" class="tips btn btn-xs btn-info"  title="<?php echo $this->lang->line('core.btn_new'); ?>">
                    <i class="fa fa-plus"></i>&nbsp;<?php echo $this->lang->line('core.btn_new'); ?> </a>
                <?php
            endif;
            if ($this->access['is_remove'] == 1) :
                ?>		
                <a href="javascript:void(0);"  onclick="SximoDelete();" class="tips btn btn-xs btn-danger" title="<?php echo $this->lang->line('core.btn_remove'); ?>">
                    <i class="fa fa-trash-o"></i>&nbsp;<?php echo $this->lang->line('core.btn_remove'); ?> </a>
                <?php
            endif;
           /* if ($this->access['is_excel'] == 1) :
                ?>	
                <a href="<?php echo site_url('administrator/galleryimages/download') ?>" class="tips btn btn-xs btn-default" title="<?php echo $this->lang->line('core.btn_download'); ?>">
                    <i class="fa fa-download"></i>&nbsp;<?php echo $this->lang->line('core.btn_download'); ?></a>
                <?php
            endif;*/
         /*   if ($this->session->userdata('gid') == 1) :
                ?>	
                <a href="<?php echo site_url('administrator/module/config/galleryimages') ?>" class="tips btn btn-xs btn-default"  title="<?php echo $this->lang->line('core.btn_config'); ?>">
                    <i class="fa fa-cog"></i>&nbsp;<?php echo $this->lang->line('core.btn_config'); ?></a>
            <?php endif;*/ ?>		

        </div>
        <?php echo $this->session->flashdata('message'); ?>
        <form action='<?php echo site_url('administrator/galleryimages/destroy') ?>' class='form-horizontal' id ='SximoTable' method="post" >
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" /> 
            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> <input type="checkbox" class="checkall" /></th>

                            <?php foreach ($tableGrid as $k => $t) : ?>
                                <?php if ($t['view'] == '1'): ?>
								<?php if($t['field']!='slider_id')
								{
								?>
                                    <th><?php echo $t['label'] ?></th>
									<?php } ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <th><?php echo $this->lang->line('core.btn_action'); ?></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr id="sximo-quick-search" >
                            <td> # </td>
                            <td> </td>
                            <?php foreach ($tableGrid as $t) : ?>
                                <?php if ($t['view'] == '1') : ?>
                                   						
                                        <?php
										if($t['field']!='slider_id')
								{			echo "<td>".SiteHelpers::transForm($t['field'], $tableForm)."</td>";
								 
								} ?>								
                                  
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <td style="width:50px;">
                                <input type="hidden"  value="Search">
                                <button type="button"  class=" do-quick-search btn btn-xs btn-info"><i class="fa fa-search"></i> </button></td>
                        </tr>			
                        <tr >
                            <?php foreach ($rowData as $i => $row) : ?>
                            <tr>
                                <td width="50"> <?php echo ($i + 1 + $page) ?> </td>
                                <td width="50"><input type="checkbox" class="ids" name="id[]" value="<?php echo $row->gallary_image_id ?>" />  </td>
                                <?php foreach ($tableGrid as $j => $field) : ?>
                                    <?php if ($field['view'] == '1'): ?>
                                        <td>
                                            <?php if ($field['attribute']['image']['active'] == '1'): ?>
                                                <?php echo SiteHelpers::showUploadedFile($row->$field['field'], $field['attribute']['image']['path']) ?>
                                            <?php else: ?>
                                                <?php
                                                $conn = (isset($field['conn']) ? $field['conn'] : array() );
												if($field['field']!='slider_id')
												{
                                                if($field['field']=='gallary_image_access')
												{
													$groupaccess=explode(',',$row->$field['field']);
													$member=array();
													foreach($groupaccess as $group)
													{
														$member[]=$get_group[$group];	
														
													}	
													echo implode(', ',$member);
												}
												else if($field['field'] == 'gallary_image_allow_guest'){
														if($row->$field['field']==1):
													echo $row->$field['field']='Yes';
														else:
														echo $row->$field['field']='No';
														endif;
												}
												else if($field['field'] == 'gallary_image_created')
												{
													echo Sb_controller::show_date($row->$field['field']);
													
												}
												else if($field['field'] == 'gallary_image_updated')
												{
					
													echo !empty($row->$field['field'])?Sb_controller::show_date($row->$field['field']):'';
													
												}
												else{
                                                echo SiteHelpers::gridDisplay($row->$field['field'], $field['field'], $conn);
												}
												}
												 ?>
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <td>
                                    <div class="btn-group">		
                                        <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"  aria-expanded="false">
                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                        </button>
                                        <ul  class="dropdown-menu  icons-left pull-right">					 	

                                            <?php if ($access['is_detail'] == 1) : ?>
                                                <li><a href="<?php echo site_url('administrator/galleryimages/show/' . $row->gallary_image_id) ?>"  class="tips "  title="view"><i class="fa  fa-search"></i> <?php echo $this->lang->line('core.btn_view'); ?> </a></li>
                                                <?php
                                            endif;
                                            if ($access['is_edit'] == 1) :
                                                ?>
                                                <li><a  href="<?php echo site_url('administrator/galleryimages/add/' . $row->gallary_image_id) ?>"  class="tips "  title="edit"> <i class="fa fa-edit"></i>  <?php echo $this->lang->line('core.btn_edit'); ?> </a> </li>
                                                <?php endif; ?>

                                        </ul>
                                    </div>					 

                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>
        </form>

        <?php echo $this->load->view('footer'); ?>
    </div>
</div>

<script>
    $(document).ready(function () {

        $('.do-quick-search').click(function () {
            $('#SximoTable').attr('action', '<?php echo site_url("administrator/galleryimages/multisearch"); ?>');
            $('#SximoTable').submit();
        });

    });
</script>