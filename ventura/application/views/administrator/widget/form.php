<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
            <li><a href="<?php echo site_url('administrator/widget') ?>"><?php echo $pageTitle ?></a></li>
            <li class="active"> Form </li>
        </ul>  	  
    </div>

    <div class="page-content-wrapper m-t">
        <?php echo $this->session->flashdata('message'); ?>
        <ul class="parsley-error-list">
            <?php echo $this->session->flashdata('errors'); ?>
        </ul>
        <form action="<?php echo site_url('administrator/widget/save/' . $row['widget_id']); ?>" class='form-horizontal' 
              parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


            <div class="col-md-12">
                <fieldset><legend> All widgets</legend>

                    <div class="form-group hidethis " style="display:none;">
                        <label for="Widget Id" class=" control-label col-md-4 text-left"> Widget Id </label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['widget_id']; ?>' name='widget_id'   /> <br />
                            <i> <small>Widget ID</small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Widget Name" class=" control-label col-md-4 text-left"> Widget Name <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['widget_name']; ?>' name='widget_name'  required /> <br />
                            <i> <small>Widget Title</small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Widget Position" class=" control-label col-md-4 text-left"> Widget Position <span class="asterix"> * </span></label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_position' value ='top' requred <?php if ($row['widget_position'] == 'top') echo 'checked="checked"'; ?> > Top </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_position' value ='bottom' requred <?php if ($row['widget_position'] == 'bottom') echo 'checked="checked"'; ?> > Bottom </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_position' value ='left' requred <?php if ($row['widget_position'] == 'left') echo 'checked="checked"'; ?> > Left </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_position' value ='right' requred <?php if ($row['widget_position'] == 'right') echo 'checked="checked"'; ?> > Right </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_position' value ='content' requred <?php if ($row['widget_position'] == 'content') echo 'checked="checked"'; ?> > Content </label> <br />
                            <i> <small>Widget Positions</small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Widget Text" class=" control-label col-md-4 text-left"> Widget Text <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <textarea name='widget_text' rows='2' id='editor' class='form-control markItUp '  
                                      required ><?php echo $row['widget_text']; ?></textarea> <br />
                            <i> <small>Widget Description</small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Widget Active" class=" control-label col-md-4 text-left"> Widget Active </label>
                        <div class="col-md-8">

                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_active' value ='1'  <?php if ($row['widget_active'] == '1') echo 'checked="checked"'; ?> > Active </label>
                            <label class='radio radio-inline'>
                                <input type='radio' name='widget_active' value ='0'  <?php if ($row['widget_active'] == '0') echo 'checked="checked"'; ?> > Deactive </label> <br />
                            <i> <small>Widget Status</small></i>
                        </div> 
                    </div> 					
                    <div class="form-group  " >
                        <label for="Widget Ordering" class=" control-label col-md-4 text-left"> Widget Ordering <span class="asterix"> * </span></label>
                        <div class="col-md-8">
                            <input type='text' class='form-control' placeholder='' value='<?php echo $row['widget_ordering']; ?>' name='widget_ordering'  required parsley-type='number'  /> <br />
                            <i> <small></small></i>
                        </div> 
                    </div> </fieldset>
            </div>



            <div style="clear:both"></div>	

            <div class="toolbar-line text-center">	
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.btn_submit'); ?>" />
                <a href="<?php echo site_url('administrator/widget'); ?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.btn_cancel'); ?> </a>
            </div>

        </form>

    </div>	
</div>	
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });
	$(function () {
                $("[name=widget_name]").keyup(function ()
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
                
                
                
                
                   $("[name=widget_ordering]").keyup(function ()
                {
                    var yourInput = $(this).val();
                    re = /[`<\>(\)]/gi;
                    var isSplChar = re.test(yourInput);
                    if (isSplChar)
                    {
                        var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
                        $(this).val(no_spl_char);
                    }
                });
            });
</script>		 