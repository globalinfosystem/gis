<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/medias') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="error">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/medias/save/' . $row['media_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data"> 


            <div class="col-md-12">
                <fieldset><legend> Media Uploads</legend>

                    <div class="form-group  " >
                        <label for="Media Name" class=" control-label col-md-4 text-left"> Media Name <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['media_name']; ?>' name='media_name'  required /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                     					
                    <div class="form-group  " >
                        <label for="Upload Media" class=" control-label col-md-4 text-left">Media Upload </label>
                        <div class="col-md-8">
                            <input  type='file' name='media_path' id='media_path' <?php if ($row['media_path'] == '') echo 'class="required"'; ?> style='width:150px !important;'  />
                            <?php if (!empty($row['media_path'])) { ?>                  
                                <?php echo SiteHelpers::showUploadedFile($row['media_path'], 'uploads/media/'); ?>
                            <?php } ?>
                            <br />
                            <i> <small>You can upload mp3, mp4, jpg, png, gif</small></i>
                        </div> 
                    </div> 	
                    <div class="form-group">
                        <div class="col-md-8 text-right">OR</div>
                    </div>                      
                    <div class="form-group  " >

                        <label for="Media Name" class=" control-label col-md-4 text-left">Paste Url</label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['media_url']; ?>' name='media_url' /> <br />
                            <i> <small>paste only src here</small></i>
                        </div> 
                    </div>	


                    <div class="form-group  " >
                        <label for="Who Can View this page?" class="control-label col-md-4 text-left"> Permission </label>
                        <div class="col-md-8">
                            <?php foreach ($groups as $group): ?> 
                                <label class='checked checkbox-inline'>  					
                                    <input  type='checkbox' name='media_access[]'    value="<?php echo $group['id'] ?>"
                                    <?php if (!empty($row['media_access']) && in_array($group['id'], explode(',', $row['media_access']))) echo 'checked' ?>
                                            checked /> 
                                            <?php echo $group['name'] ?>
                                </label>  
                                <br />
                                <i> <small></small></i>
                            <?php endforeach; ?>	
                        </div>
                    </div>

                    <div class="form-group  " >
                        <label for="Media Status" class=" control-label col-md-4 text-left"> Media Status<span class="asterix"> * </span> </label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='media_status' value ='enable' requred <?php if ($row['media_status'] == 'enable') echo 'checked="checked"'; ?> required> Enable </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='media_status' value ='disable' requred <?php if ($row['media_status'] == 'disable') echo 'checked="checked"'; ?> required> Disable </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Allow Guest" class=" control-label col-md-4 text-left"> Allow Guest<span class="asterix"> * </span> </label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='media_guest' value ='1' requred <?php if ($row['media_guest'] == '1') echo 'checked="checked"'; ?> required> Yes </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='media_guest' value ='0' requred <?php if ($row['media_guest'] == '0') echo 'checked="checked"'; ?> required> No </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">		
                <input type="hidden" name="media_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['media_id'])) ? $row['media_id'] : ''; ?>" />
                <input type="hidden" name="meida_template" class="btn btn-info btn-sm" value="frontend" />
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/medias'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });
	 $(function () {
        $("[name=media_name]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
		});
				$(function () {
        $("[name=media_url]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[<>\>]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[<>\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
		});
</script>		 