<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/sliders') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="error">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/sliders/save/' . $row['sliders_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


            <div class="col-md-12">
                <fieldset><legend> Sliders</legend>

                    <div class="form-group  " >
                        <label for="Sliders Title" class=" control-label col-md-4 text-left"> Sliders Title <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['sliders_title']; ?>' name='sliders_title'  required /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Sliders Content" class=" control-label col-md-4 text-left"> Sliders Content </label>
                        <div class="col-md-8">
                            <textarea name='sliders_content' rows='2' id='editor' class='form-control markItUp '  
                                      ><?php echo $row['sliders_content']; ?></textarea> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                     					
                    <div class="form-group  " >
                        <label for="Sliders Status" class=" control-label col-md-4 text-left"> Sliders Status<span class="asterix"> * </span> </label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='sliders_status' value ='enable' requred <?php if ($row['sliders_status'] == 'enable') echo 'checked="checked"'; ?> required > Enable </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='sliders_status' value ='disable' requred <?php if ($row['sliders_status'] == 'disable') echo 'checked="checked"'; ?> required > Disable </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="ipt" class="control-label col-md-4 text-left"> Permission </label>
                        <div class="col-md-8">
                            <?php foreach ($groups as $group): ?> 
                                <label class='checked checkbox-inline'>  					
                                    <input  type='checkbox' name='sliders_access[]'    value="<?php echo $group['id'] ?>"
                                    <?php if (!empty($row['sliders_access']) && in_array($group['id'], explode(',', $row['sliders_access']))) echo 'checked' ?>
                                            checked /> 
                                            <?php echo $group['name'] ?>
                                </label>  
                                <br />
                                <i> <small></small></i>
                            <?php endforeach; ?>	
                        </div>
                    </div>					
                    <div class="form-group  " >
                        <label for="Sliders Allow Guest" class=" control-label col-md-4 text-left"> Sliders Allow Guest<span class="asterix"> * </span> </label>
                        <div class="col-md-8">
                            <?php $sliders_allow_guest = explode(",", $row['sliders_allow_guest']); ?>
                           									   
									   <label class='checked checkbox-inline'>   
                                <input type='radio' name='sliders_allow_guest[]' value ='1'   class='' 
                                <?php if (in_array('1', $sliders_allow_guest)) echo 'checked'; ?> 
                                      required />Yes </label> 
                                      
                                      <label class='checked checkbox-inline'>   
                                <input type='radio' name='sliders_allow_guest[]' value ='0'   class='' 
                                <?php if (in_array('0', $sliders_allow_guest)) echo 'checked'; ?> 
                                      required /> No </label> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">
                 <input type="hidden" name="sliders_id" class="btn btn-info btn-sm" value="<?php echo (!empty($row['sliders_id']))?$row['sliders_id']:''; ?>" />
                <input type="hidden" name="sliders_template" class="btn btn-info btn-sm" value="frontend" />
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/sliders'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });
		 $(function () {
        $("[name=sliders_title]").keyup(function ()
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