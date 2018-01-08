.<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/galleryvideos') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="error">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/galleryvideos/save/' . $row['gallary_video_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
            <div class="col-md-12">
                <fieldset>
                    <legend> Gallery Video</legend>
                    <div class="form-group  " >
                        <label for="Gallary Video Title" class=" control-label col-md-4 text-left"> Gallary Video Title <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['gallary_video_title']; ?>' name='gallary_video_title'  required /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 	

                    <div class="form-group " >
                        <label for="Stadiums Status" class=" control-label col-md-4 text-left">Gallery</label>
                        <div class="col-md-8">
                            <select name="gallery_id" class='form-control'>
                                <option value="0">--Select Gallery--</option>
                                <?php if (!empty($galleries)) { ?>
                                    <?php foreach ($galleries as $gallery): ?> 
                                        <option value="<?php echo $gallery['id']; ?>" <?php echo (!empty($gallery['id']) && $gallery['id'] == $row['gallery_id']) ? 'selected' : ''; ?>><?php echo $gallery['name']; ?></option>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </select>
                        </div> 
                    </div>


                    <div class="form-group  " >
                        <label for="Gallary Video Content" class=" control-label col-md-4 text-left"> Gallary Video Content </label>
                        <div class="col-md-8">
                            <textarea name='gallary_video_content' rows='2' id='editor' class='form-control markItUp '  
                                      ><?php echo $row['gallary_video_content']; ?></textarea> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 

                    <div class="form-group  " >
                        <label for="Gallery VIdeo Path" class=" control-label col-md-4 text-left"> Gallery Video Path </label>
                        <div class="col-md-8">
                            <input  type='file' name='gallery_video_path_custom' id='gallary_video_path' style='width:150px !important;'  />
                            <?php if (!empty($row['gallary_video_path'])) { ?>
                                <?php echo SiteHelpers::showUploadedFile($row['gallary_video_path'], '/uploads/galleryVideos/'); ?>
                            <?php } ?>
                            <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 


                    <div class="form-group  " >
                        <label for="Gallary Video Status" class=" control-label col-md-4 text-left"> Gallary Video Status <span class="asterix"> * </span></label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='gallary_video_status' value ='enable'  <?php if ($row['gallary_video_status'] == 'enable') echo 'checked="checked"'; ?> required > Enable </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='gallary_video_status' value ='disable'  <?php if ($row['gallary_video_status'] == 'disable') echo 'checked="checked"'; ?> required > Disable </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 	
                    <div class="form-group  " >
                        <label for="ipt" class="control-label col-md-4 text-left"> Permission </label>
                        <div class="col-md-8">
                            <?php foreach ($groups as $group): ?> 
                                <label class='checked checkbox-inline'>  					
                                    <input  type='checkbox' name='gallary_video_access[]'    value="<?php echo $group['id'] ?>"
                                    <?php if (!empty($row['gallary_video_access']) && in_array($group['id'], explode(',', $row['gallary_video_access']))) echo 'checked' ?>
                                            checked /> 
                                            <?php echo $group['name'] ?>
                                </label>  
                                <br />
                                <i> <small></small></i>
                            <?php endforeach; ?>	
                        </div>
                    </div>

                    <div class="form-group  " >
                        <label for="Gallary Video Url" class=" control-label col-md-4 text-left"> Gallary Video Url<span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['gallary_video_url']; ?>' name='gallary_video_url'  required parsley-type='url'  /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >

                        <label for="Gallary Video Allow Guest" class=" control-label col-md-4 text-left"> Gallary Video Allow Guest  <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <?php $gallary_video_allow_guest = explode(",", $row['gallary_video_allow_guest']); ?>

                            <label class='checked checkbox-inline'>   
                                <input type='radio' name='gallary_video_allow_guest[]' value ='1'   class='' 
                                <?php if (in_array('1', $gallary_video_allow_guest)) echo 'checked'; ?> 
                                       required /> Yes </label> 
                            <label class='checked checkbox-inline'>   
                                <input type='radio' name='gallary_video_allow_guest[]' value ='0'   class='' 
                                <?php if (in_array('0', $gallary_video_allow_guest)) echo 'checked'; ?> 
                                       required /> No </label> 
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">	
                <input type="hidden" name="gallary_video_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['gallary_video_id'])) ? $row['gallary_video_id'] : ''; ?>" />
                <input type="hidden" name="gallary_video_template" class="btn btn-info btn-sm" value="frontend" />
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/galleryvideos'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	

<script type="text/javascript">

    $(document).ready(function () {

    });


    $(function () {
        $("[name=gallary_video_title]").keyup(function ()
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
    $(function () {
        $("[name=gallary_video_url]").keyup(function ()
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