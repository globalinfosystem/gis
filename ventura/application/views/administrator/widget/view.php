<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('administrator/widget') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	

                    <tr>
                        <td width='30%' class='label-view text-right'>Widget Name</td>
                        <td><?php echo $row['widget_name']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Widget Position</td>
                        <td><?php echo $row['widget_position']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Widget Text</td>
                        <td><?php echo $row['widget_text']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Widget Lang</td>
                        <td><?php echo $row['widget_lang']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Widget Active</td>
                        <td><?php echo $row['widget_active']==1?"Yes":"No"; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Widget Ordering</td>
                        <td><?php echo $row['widget_ordering']; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
