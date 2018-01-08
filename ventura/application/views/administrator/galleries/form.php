<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/galleries') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="error">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/galleries/save/' . $row['galleries_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 
            <div class="col-md-12">
                <fieldset><legend> Gallery</legend>

                    <div class="form-group  " >
                        <label for="Galleries Title" class=" control-label col-md-4 text-left"> Galleries Title <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['galleries_title']; ?>' name='galleries_title'  required /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 	
                     <div class="form-group  " >
                        <label for="Galleries Type" class=" control-label col-md-4 text-left"> Galleries Type <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                        
                            <select name="galleries_type"  class='form-control' required >
                                <option value="">Select Gallery Type</option>
                                <option value="image" <?php if(!empty($row['galleries_type']) && $row['galleries_type']=='image'){echo "selected='selected'";} ?> >Photo</option>
                                <option value="video" <?php if(!empty($row['galleries_type']) && $row['galleries_type']=='video'){echo "selected='selected'";}?> >Video</option>
                                <option value="audio"  <?php if(!empty($row['galleries_type']) && $row['galleries_type']=='audio'){echo "selected='selected'";} ?> >Audio</option>
                            </select>
                          <br />
                            <i> <small></small></i>
                        </div> 
                    </div>
                    <div class="form-group  " >
                        <label for="Galleries Content" class=" control-label col-md-4 text-left"> Galleries Content </label>
                        <div class="col-md-8">
                            <textarea name='galleries_content' rows='2' id='editor' class='form-control markItUp '  
                                      ><?php echo $row['galleries_content']; ?></textarea> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 	
                    <div class="form-group  " >
                        <label for="Galleries Status" class=" control-label col-md-4 text-left"> Galleries Status<span class="asterix"> * </span> </label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='galleries_status' value ='enable'  <?php if ($row['galleries_status'] == 'enable') echo 'checked="checked"'; ?> required > Enable </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='galleries_status' value ='disable'  <?php if ($row['galleries_status'] == 'disable') echo 'checked="checked"'; ?> required > Disable </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					

                    <div class="form-group  " >
                        <label for="ipt" class="control-label col-md-4 text-left"> Permission<span class="asterix"> * </span> </label>
                        <div class="col-md-8">
                            <?php foreach ($groups as $group): ?> 
                                <label class='checked checkbox-inline'>  					
                                    <input  type='checkbox' name='galleries_access[]'    value="<?php echo $group['id'] ?>"
                                    <?php if (!empty($row['galleries_access']) && in_array($group['id'], explode(',', $row['galleries_access']))) echo 'checked' ?>
                                            required/> 
                                            <?php echo $group['name'] ?>
                                </label>  
                                <br />
                                <i> <small></small></i>
                            <?php endforeach; ?>	
                        </div>
                    </div>

                    <div class="form-group  " >
                        <label for="Galleries Allow Guest" class=" control-label col-md-4 text-left">Allow Guest<span class="asterix"> * </span>  </label>
                        <div class="col-md-8">
                            <?php $galleries_allow_guest = explode(",", $row['galleries_allow_guest']); ?>
                            <label class='checked checkbox-inline'>   
                                <input type='radio' name='galleries_allow_guest[]' value ='1'   class='' 
                                <?php if (in_array('1', $galleries_allow_guest)) echo 'checked'; ?> 
                                      required />Yes </label> 
                                      
                                      <label class='checked checkbox-inline'>   
                                <input type='radio' name='galleries_allow_guest[]' value ='0'   class='' 
                                <?php if (in_array('0', $galleries_allow_guest)) echo 'checked'; ?> 
                                      required /> No </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">	

                <input type="hidden" name="galleries_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['galleries_id'])) ? $row['galleries_id'] : ''; ?>" />
                <input type="hidden" name="galleries_template" class="btn btn-info btn-sm" value="frontend" />
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />               
			   <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/galleries'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });
  $(function () {
        $("[name=galleries_title]").keyup(function ()
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
</script>		 