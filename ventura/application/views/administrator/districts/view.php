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
            <li><a href="<?php echo site_url('administrator/districts') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	


                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Title</td>
                        <td><?php echo $row['districts_title']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Content</td>
                        <td><?php echo $row['districts_content']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Alias</td>
                        <td><?php echo $row['districts_alias']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Created</td>
                        <td> <?php echo Sb_controller::show_date($row['districts_created']); ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Updated</td>
                        <td><?php echo $row['districts_updated']; ?>  <?php echo Sb_controller::show_date($row['districts_updated']); ?></td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Status</td>
                        <td><?php echo $row['districts_status']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Access</td>
                        <td>
                        	<?php 
                        		$groupaccess=explode(',',$row['districts_access']);
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
                        <td width='30%' class='label-view text-right'>Districts Allow Guest</td>
                        <td><?php echo $row['districts_allow_guest']==1?"Yes":"No"; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Districts Template</td>
                        <td><?php echo $row['districts_template']; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
