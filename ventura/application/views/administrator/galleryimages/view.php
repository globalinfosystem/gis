<?php
$get_group=SiteHelpers::getgroup();
?>
<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('administrator/galleryimages') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Title</td>
                        <td><?php echo $row['gallary_image_title']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Content</td>
                        <td><?php echo $row['gallary_image_content']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Path</td>
                        <td><?php echo $row['gallary_image_path']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Alias</td>
                        <td><?php echo $row['gallary_image_alias']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Created</td>
                        <td><?php echo Sb_controller::show_date($row['gallary_image_created']); ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Updated</td>
                        <td> <?php echo Sb_controller::show_date($row['gallary_image_updated']); ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Status</td>
                        <td><?php echo $row['gallary_image_status']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Access</td>
                        <td>
                        	<?php 
                        		$groupaccess=explode(',',$row['gallary_image_access']);
													$member=array();
													foreach($groupaccess as $group)
													{
														$member[]=$get_group[$group];	
														
													}	
													echo implode(', ',$member);
                         ?>
                        
                        
                        </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Allow Guest</td>
                        <td><?php echo $row['gallary_image_allow_guest']==1?"Yes":"No"; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Image Template</td>
                        <td><?php echo $row['gallary_image_template']; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
