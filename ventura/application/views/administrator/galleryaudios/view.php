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
            <li><a href="<?php echo site_url('administrator/galleryaudios') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Title</td>
                        <td><?php echo $row['gallary_audio_title']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Content</td>
                        <td><?php echo $row['gallary_audio_content']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Path</td>
                        <td><?php echo $row['gallary_audio_path']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Alias</td>
                        <td><?php echo $row['gallary_audio_alias']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Created</td>
                        <td><?php echo Sb_controller::show_date($row['gallary_audio_created']); ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Updated</td>
                        <td><?php echo Sb_controller::show_date($row['gallary_audio_updated']); ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Status</td>
                        <td><?php echo $row['gallary_audio_status']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Access</td>
                        <td> 
                        	<?php 
                        		$groupaccess=explode(',',$row['gallary_audio_access']);
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
                        <td width='30%' class='label-view text-right'>Gallary Audio Url</td>
                        <td><?php echo $row['gallary_audio_url']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Allow Guest</td>
                        <td><?php echo $row['gallary_audio_allow_guest']==1?"Yes":"No"; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Gallary Audio Template</td>
                        <td><?php echo $row['gallary_audio_template']; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
