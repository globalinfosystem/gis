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
            <li><a href="<?php echo site_url('administrator/sliders') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Title</td>
                        <td><?php echo $row['sliders_title']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Content</td>
                        <td><?php echo $row['sliders_content']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Alias</td>
                        <td><?php echo $row['sliders_alias']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Created</td>
                        <td> <?php echo Sb_controller::show_date($row['sliders_created']); ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Updated</td>
                        <td><?php echo Sb_controller::show_date($row['sliders_updated']); ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Status</td>
                        <td><?php echo $row['sliders_status']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Access</td>
                        <td> 	<?php 
                        		$groupaccess=explode(',',$row['sliders_access']);
													$member=array();
													foreach($groupaccess as $group)
													{
														$member[]=$get_group[$group];	
														
													}	
													echo implode(', ',$member);
                         ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Sliders Allow Guest</td>
                        <td><?php echo $row['sliders_allow_guest']==1?"Yes":"No";; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
