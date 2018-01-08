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
            <li><a href="<?php echo site_url('administrator/sliderimages') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Title</td>
                        <td><?php echo $row['slider_image_title']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Content</td>
                        <td><?php echo $row['slider_image_content']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Path</td>
                        <td><?php echo $row['slider_image_path']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Alias</td>
                        <td><?php echo $row['slider_image_alias']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Created date</td>
                        <td><?php echo Sb_controller::show_date($row['slider_image_created']); ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Updated date</td>
                        <td><?php echo Sb_controller::show_date($row['slider_image_updated']); ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Status</td>
                        <td><?php echo $row['slider_image_status']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Access</td>
                        <td> <?php 
                        		$groupaccess=explode(',',$row['slider_image_access']);
													$member=array();
													foreach($groupaccess as $group)
													{
														$member[]=$get_group[$group];	
														
													}	
													echo implode(', ',$member);
                         ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Slider Image Allow Guest</td>
                        <td><?php echo $row['slider_image_allow_guest']; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
