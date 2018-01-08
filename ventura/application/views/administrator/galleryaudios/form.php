<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/galleryaudios') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="error">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/galleryaudios/save/' . $row['gallary_audio_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
            
            <div class="col-md-12">
                <fieldset>
                    <legend> Gallery Audio</legend>
                    <div class="form-group  " >
                        <label for="Gallary Audio Title" class=" control-label col-md-4 text-left"> Gallary Audio Title <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['gallary_audio_title']; ?>' name='gallary_audio_title'  required /> <br />
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
                        <label for="Gallary Audio Content" class=" control-label col-md-4 text-left"> Gallary Audio Content </label>
                        <div class="col-md-8">
                            <textarea name='gallary_audio_content' rows='2' id='editor' class='form-control markItUp '  
                                      ><?php echo $row['gallary_audio_content']; ?></textarea> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 	

                    <div class="form-group  " >
                        <label for="Gallery Audio Path" class=" control-label col-md-4 text-left"> Upload audio file </label>
                        <div class="col-md-8">
                            <input  type='file' name='gallery_audio_path_custom' id='gallary_audio_path' style='width:150px !important;'  <?php if ($row['gallary_audio_path'] == '') echo 'class="required"'; ?>/>
                            <?php if (!empty($row['gallary_audio_path'])) { ?>
                                <?php echo SiteHelpers::showUploadedFile($row['gallary_audio_path'], '/uploads/galleryAudios/'); ?>
                            <?php } ?>
                            <br />
                            <i> <small></small></i>
                        </div> 
                    </div>  

                     					
                    <div class="form-group  " >
                        <label for="Gallary Audio Status" class=" control-label col-md-4 text-left"> Gallary Audio Status <span class="asterix"> * </span></label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='gallary_audio_status' value ='enable'  <?php if ($row['gallary_audio_status'] == 'enable') echo 'checked="checked"'; ?> required > Enable </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='gallary_audio_status' value ='disable'  <?php if ($row['gallary_audio_status'] == 'disable') echo 'checked="checked"'; ?> required > Disable </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 

                    <div class="form-group  " >
                        <label for="ipt" class="control-label col-md-4 text-left"> Permission</label>
                        <div class="col-md-8">
                            <?php foreach ($groups as $group): ?> 
                                <label class='checked checkbox-inline'>  					
                                    <input  type='checkbox' name='gallary_audio_access[]'    value="<?php echo $group['id'] ?>"
                                    <?php if (!empty($row['gallary_audio_access']) && in_array($group['id'], explode(',', $row['gallary_audio_access']))) echo 'checked' ?>
                                            checked /> 
                                            <?php echo $group['name'] ?>
                                </label>  
                                <br />
                                <i> <small></small></i>
                            <?php endforeach; ?>	
                        </div>
                    </div>

                    <div class="form-group  " >
                        <label for="Gallary Audio Url" class=" control-label col-md-4 text-left"> Gallary Audio Url </label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['gallary_audio_url']; ?>' name='gallary_audio_url'   parsley-type='url'  /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Gallary Audio Allow Guest" class=" control-label col-md-4 text-left"> Gallary Audio Allow Guest <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                           
                            <?php $gallary_audio_allow_guest = explode(",", $row['gallary_audio_allow_guest']); ?>
                          
                            <label class='checked checkbox-inline'>   
                                <input type='radio' name='gallary_audio_allow_guest[]' value ='1'   class='' 
                                <?php if (in_array('1', $gallary_audio_allow_guest)) echo 'checked'; ?> 
                                      required /> Yes </label> 
						   <label class='checked checkbox-inline'>   
                                <input type='radio' name='gallary_audio_allow_guest[]' value ='0'   class='' 
                                <?php if (in_array('0', $gallary_audio_allow_guest)) echo 'checked'; ?> 
                                      required /> No </label> 
							<i> <small></small></i>
                        </div> 
                    </div> 					
                </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">	
                <input type="hidden" name="gallary_audio_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['gallary_audio_id'])) ? $row['gallary_audio_id'] : ''; ?>" />
                <input type="hidden" name="gallary_audio_template" class="btn btn-info btn-sm" value="frontend" />
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/galleryaudios'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });
	 $(function () {
        $("[name=gallary_video_title]").keyup(function ()
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
        $("[name=gallary_audio_url]").keyup(function ()
        {
            var yourInput = $(this).val();
            re = /[`~!@#$%^&*()+-=?;:'",<>\{\}\[\]\\\/]/gi;
            var isSplChar = re.test(yourInput);
            if (isSplChar)
            {
                var no_spl_char = yourInput.replace(/[`~!@#$%^&*()+-=?;:'",<>\{\}\[\]\\\/]/gi, '');
                $(this).val(no_spl_char);
            }
        });
		});
</script>		 