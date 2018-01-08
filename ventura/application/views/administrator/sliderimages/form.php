<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/sliderimages') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="error">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/sliderimages/save/' . $row['slider_image_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


            <div class="col-md-12">
                <fieldset><legend> Silder Images</legend>

                    <div class="form-group  " >
                        <label for="Slider Image Title" class=" control-label col-md-4 text-left"> Slider Image Title <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['slider_image_title']; ?>' name='slider_image_title'  required /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Slider Image Content" class=" control-label col-md-4 text-left"> Slider Image Content<span class="asterix"> * </span> </label>
                        <div class="col-md-8">
                            <textarea name='slider_image_content' rows='2' id='editor' class='form-control markItUp '  
                                      required><?php echo $row['slider_image_content']; ?></textarea> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 	

                    <div class="form-group " >
                        <label for="Stadiums Status" class=" control-label col-md-4 text-left">Sliders</label>
                        <div class="col-md-8">

                            <select name="slider_id" class='form-control'>
                                <option value="0">--Select Slider--</option>
                                <?php if (!empty($sliders)) { ?>
                                    <?php foreach ($sliders as $slider): ?> 
                                        <option value="<?php echo $slider['id']; ?>" <?php echo (!empty($slider['id']) && $slider['id'] == $row['slider_id']) ? 'selected' : ''; ?>><?php echo $slider['name']; ?></option>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </select>
                        </div> 
                    </div> 

                    <div class="form-group  " >
                        <label for="Slider Image Path" class=" control-label col-md-4 text-left"> Slider Image Path </label>
                        <div class="col-md-8">
                            <input  type='file' name='slider_image_path_custom' id='slider_image_path' style='width:150px !important;'  />
                            <?php if (!empty($row['slider_image_path'])) { ?>
                                <?php echo SiteHelpers::showUploadedFile($row['slider_image_path'], '/uploads/sliderImages/'); ?>
                            <?php } ?>
                            <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 

                    <div class="form-group  " >
                        <label for="Slider Image Alias" class=" control-label col-md-4 text-left"> Slider Image Alias<span class="asterix"> * </span> </label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['slider_image_alias']; ?>' name='slider_image_alias'  required /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Slider Image Status" class=" control-label col-md-4 text-left"> Slider Image Status<span class="asterk">*</span> </label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='slider_image_status' value ='enable' requred <?php if ($row['slider_image_status'] == 'enable') echo 'checked="checked"'; ?> required> Enable </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='slider_image_status' value ='disable' requred <?php if ($row['slider_image_status'] == 'disable') echo 'checked="checked"'; ?> requireds> Disable </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					


                    <div class="form-group  " >
                        <label for="ipt" class="control-label col-md-4 text-left"> Permission </label>
                        <div class="col-md-8">
                            <?php foreach ($groups as $group): ?> 
                                <label class='checked checkbox-inline'>  					
                                    <input  type='checkbox' name='slider_image_access[]'    value="<?php echo $group['id'] ?>"
                                    <?php if (!empty($row['slider_image_access']) && in_array($group['id'], explode(',', $row['slider_image_access']))) echo 'checked' ?>
                                            checked /> 
                                            <?php echo $group['name'] ?>
                                </label>  
                                <br />
                                <i> <small></small></i>
                            <?php endforeach; ?>	
                        </div>
                    </div>

                    <div class="form-group  " >
                        <label for="Slider Image Allow Guest" class=" control-label col-md-4 text-left"> Slider Image Allow Guest<span class="asterk">*</span> </label>
                        <div class="col-md-8">
                            <?php $slider_image_allow_guest = explode(",", $row['slider_image_allow_guest']); ?>
                            <label class='checked checkbox-inline'>   
                                <input type='radio' name='slider_image_allow_guest[]' value ='1'   class='' 
                                <?php if (in_array('1', $slider_image_allow_guest)) echo 'checked'; ?> 
                                      required />Yes </label> 
                                      
                                      <label class='checked checkbox-inline'>   
                                <input type='radio' name='slider_image_allow_guest[]' value ='0'   class='' 
                                <?php if (in_array('0', $slider_image_allow_guest)) echo 'checked'; ?> 
                                      required /> No </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">
                <input type="hidden" name="slider_image_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['slider_image_id'])) ? $row['slider_image_id'] : ''; ?>" />
                <input type="hidden" name="slider_image_template" class="btn btn-info btn-sm" value="frontend" />
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />		
                <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/sliderimages'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });
		 $(function () {
        $("[name=slider_image_title]").keyup(function ()
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
        $("[name=slider_image_alias]").keyup(function ()
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