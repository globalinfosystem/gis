<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
 <script type='text/javascript' src='<?php echo base_url() ?>design/js/jquery.crypt.js'></script>
 <?php 
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 2){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
 }
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 1){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
 }
 ?>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Register As Associate</span></h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  top-space" id="center">

					<div class="share-blk"> 
                        <div id="suggestionsuccessfull">
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form enctype="multipart/form-data" method="post"  id="login_form" class="form_login">  
							<input type="hidden" value="<?php echo $this->security->get_csrf_hash(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>">						
								<input type="hidden" name="registration_id" value="<?php if (!empty($registration['registration_id'])) { ?><?php echo $registration['registration_id']; ?><?php } ?>" />						
							 
                            <div id="admin_login">
								<div class="form-group">  
									<h4>Do you want to register as an associate?</h4>        
                                </div>
								<div id="myRadioGroup">
									Yes <input type="radio" name="registration_is_associate" <?php if ($registration['registration_is_associate']== 1) { echo 'checked="checked"'; } ?> value="1"   />
									No <input type="radio" name="registration_is_associate" <?php if ($registration['registration_is_associate']== 0) { echo 'checked="checked"'; } ?> value="0"  />
									
									<div id="associate1" class="desc">
										 <div class="form-group">          
											<input type="text"  placeholder="Enter Your Qualification" name="registration_is_associate_qualification" id="registration_is_associate_qualification" autocomplete="off" class="form-control" value="<?php if (!empty($registration['qualification'])) { echo $registration['registration_is_associate_qualification']; } else { echo set_value('registration_is_associate_qualification'); } ?>" /> 
											<?php echo form_error('registration_is_associate_qualification'); ?>
										</div>

										<div class="form-group">          
											<input type="text" placeholder="Enter Your Experience" name="registration_is_associate_exp" id="registration_is_associate_exp" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_is_associate_exp'])) { echo $registration['registration_is_associate_exp']; } else { echo set_value('registration_is_associate_exp'); } ?>" /> 
											<?php echo form_error('registration_is_associate_exp'); ?>
										</div>
									</div>
									<div id="associate0" class="desc" style="display: none;">
										
									</div>
								</div>
								<script>
									$(document).ready(function() {
										$("input[name$='associate']").click(function() {
											var test = $(this).val();

											$("div.desc").hide();
											$("#associate" + test).show();
										});
									});
								</script>


                               
								
								
                            </div>
								
								<button class="btn btn-primary ftbtn1" type="submit" id="login_button">Submit</button>   
						</form>
                    </div>
</div>
</div>
</div>
</section>


<?php $this->load->view('layouts/'.CNF_THEME.'/footer'); ?>   