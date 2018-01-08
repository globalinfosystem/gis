<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('administrator/galleries') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Detail </li>
        </ul>
    </div>  

    <div class="page-content-wrapper m-t">   

        <div class="table-responsive">
            <table class="table table-striped table-bordered" >
                <tbody>	

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Title</td>
                        <td><?php echo $row['galleries_title']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Content</td>
                        <td><?php echo $row['galleries_content']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Alias</td>
                        <td><?php echo $row['galleries_alias']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Created</td>
                        <td><?php echo $row['galleries_created']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Updated</td>
                        <td><?php echo $row['galleries_updated']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Status</td>
                        <td><?php echo $row['galleries_status']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Access</td>
                        <td><?php echo $row['galleries_access']; ?> </td>

                    </tr>

                    <tr>
                        <td width='30%' class='label-view text-right'>Galleries Allow Guest</td>
                        <td><?php echo $row['galleries_allow_guest']; ?> </td>

                    </tr>

                </tbody>	
            </table>    
        </div>
    </div>

</div>
