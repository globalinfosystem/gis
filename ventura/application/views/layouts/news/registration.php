<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
<script type='text/javascript' src='<?php echo base_url() ?>design/js/jquery.crypt.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script>
  $(document).ready(function() {
    $("#registration_dob").datepicker({ dateFormat: "yy-mm-dd" });
    $("#registration_membership").datepicker({ dateFormat: "yy-mm-dd" });
  });
  </script>
 <?php 
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 2){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
 }
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 1){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
 }
 	$countryresult = $this->Page_model->get_country();

 ?>
 
<?php
   $username = preg_replace('/([^@]*).*/', '$1', $email);
?>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Ventura Secure Registration</span></h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  top-space" id="center">
                <div class="suggestions">       
                  
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
                                    <input type="text" required="required" placeholder="Enter Your Name" name="registration_name" id="registration_name" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_name'])) { ?><?php echo $registration['registration_name']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_name'); ?>
                                </div>

								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Father's Name" name="registration_father_name" id="registration_father_name" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_father_name'])) { ?><?php echo $registration['registration_father_name']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_father_name'); ?>
                                </div>

								<div class="form-group">   
									<textarea rows='5' cols='42' required="required" placeholder="Enter Your Address" name="registration_address" id="registration_address" class="form-control"><?php if (!empty($registration['registration_address'])) { ?><?php echo $registration['registration_address']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?></textarea>								
                                    <?php echo form_error('registration_address'); ?>
                                </div> 

								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Mobile No" name="registration_mobile_no" id="registration_mobile_no" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_mobile_no'])) { ?><?php echo $registration['registration_mobile_no']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_mobile_no'); ?>
                                </div> 

								<div class="form-group">          
                                    <input type="email" required="required" placeholder="Enter Your Email" name="registration_email" id="registration_email" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_email'])) { ?><?php echo $registration['registration_email']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_email'); ?>
                                </div> 
								
								
								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your D.O.B" name="registration_dob" id="registration_dob" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_dob'])) { ?><?php echo $registration['registration_dob']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_dob'); ?>
                                </div> 
								
								<div class="form-group">      
									<input <?php if (!empty($registration['registration_gender']) && $registration['registration_gender'] == 'male') { ?> <?php echo 'checked="checked"'; ?><?php } ?> type="radio" name="registration_gender" value="male" <?php echo set_radio('registration_gender', 'male'); ?> > Male 
									<input <?php if (!empty($registration['registration_gender']) && $registration['registration_gender'] == 'female') { ?> <?php echo 'checked="checked"'; ?><?php } ?> type="radio" name="registration_gender" value="female" <?php echo set_radio('registration_gender', 'male'); ?> > Female								
                                    <?php echo form_error('registration_gender'); ?>
                                </div> 
								
								<div class="form-group">          
                                   Photograph: <input type="file" name="registration_pic" id="registration_pic" accept="image/*">
								   <?php if(!empty($registration['registration_pic'])){ ?><img src="<?php echo base_url();?>uploads/registration_pics/<?php echo !empty($registration['registration_pic']) ? $registration['registration_pic'] : '-';?>" width="200px" height="200px"/><?php } ?>
                                </div> 
								
								<div class="form-group">          
                                   Aadhar Card: <input type="file" name="registration_aadhar_card" id="registration_aadhar_card" accept="image/*">
									<?php if(!empty($registration['registration_aadhar_card'])){ ?><img src="<?php echo base_url();?>uploads/registration_aadhar/<?php echo !empty($registration['registration_aadhar_card']) ? $registration['registration_aadhar_card'] : '-';?>" width="200px" height="200px"/><?php } ?>
								</div> 
								<script>
								function getState(val) {
									
									$.ajax({
									type: "POST",
									url: "<?php echo base_url(); ?>page/state_by_country",
									data:'country_id='+val+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',
									success: function(data){
										$("#state-list").html(data);
									}
									});
									
									
								}

								
								</script>
								<div class="frmDronpDown form-group">
									<select name="registration_country" id="country-list" class="demoInputBox form-control" onChange="getState(this.value);">
									<option value="">Select Country</option>
									<?php
									foreach($countryresult as $country)
									{
									?>
									<option value="<?php echo $country["country_id"]; ?>"><?php echo $country["country_name"]; ?></option>
									<?php
									}
									?>
									</select>
									 <?php echo form_error('registration_country'); ?>
								</div>
								<div class="form-group">
									<select name="registration_state" id="state-list" class="demoInputBox form-control">
									<option value="">Select State</option>
									</select> 
								</div>
								<div class="form-group">          
                                    <input type="text" placeholder="Enter City" name="registration_city" id="registration_city" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_city'])) { ?><?php echo $registration['registration_city']; ?><?php } else { ?><?php echo set_value('registration_city'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_city'); ?>
                                </div> 
								
								<div class="form-group">          
                                    <input type="text" placeholder="Enter Reference id" name="registration_reference_id" id="registration_reference_id" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_reference_id'])) { ?><?php echo $registration['registration_reference_id']; ?><?php } else { ?><?php echo set_value('registration_reference_id'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_reference_id'); ?>
                                </div> 
								
								
								<div class="form-group"> 
									<select name="registration_join_for" id="registration_join_for" class="form-control">
                                        <option value="">--I want to join for--</option>
                                        <option <?php if (!empty($registration['registration_join_for']) && $registration['registration_join_for'] == '12 months') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_join_for','12 months'); ?> <?php } ?> 	value="12 months">12 months</option>
                                        <option <?php if (!empty($registration['registration_join_for']) && $registration['registration_join_for'] == '16 months') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_join_for','16 months'); ?> <?php } ?>	value="16 months">16 months</option>
                                        <option <?php if (!empty($registration['registration_join_for']) && $registration['registration_join_for'] == '24 months') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_join_for','24 months'); ?> <?php } ?>	value="24 months">24 months</option>
                                        <option <?php if (!empty($registration['registration_join_for']) && $registration['registration_join_for'] == '30 months') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_join_for','30 months'); ?> <?php } ?>	value="30 months">30 months</option>
                                    </select>
                                    <?php echo form_error('registration_join_for'); ?>
                                </div> 
								
								<div class="form-group"> 
									<select name="registration_amount" id="registration_amount" class="form-control">
                                        <option value="">--With an amount of Rs.--</option>
                                        <option <?php if (!empty($registration['registration_amount']) && $registration['registration_amount'] == '1500') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_amount','1500'); ?> <?php } ?> value="1500">1500</option>
                                        <option <?php if (!empty($registration['registration_amount']) && $registration['registration_amount'] == '2000') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_amount','2000'); ?> <?php } ?> value="2000">2000</option>
                                        <option <?php if (!empty($registration['registration_amount']) && $registration['registration_amount'] == '3000') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_amount','3000'); ?> <?php } ?> value="3000">3000</option>
                                        <option <?php if (!empty($registration['registration_amount']) && $registration['registration_amount'] == '4000') { ?><?php echo 'selected="selected"'; ?><?php } else { ?><?php echo set_select('registration_amount','4000'); ?> <?php } ?> value="4000">4000</option>
                                    </select>
                                    <?php echo form_error('registration_amount'); ?>
                                </div> 
								
								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Membership Starts from" name="registration_membership" id="registration_membership" autocomplete="off" class="form-control" value="<?php if (!empty($registration['registration_membership'])) { ?> <?php echo $registration['registration_membership']; ?><?php } else { ?><?php echo set_value('registration_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('registration_membership'); ?>
                                </div> 
								
                            </div>
								<div class="form-group has-feedback">
									<?php $captchaCode = rand(10000,10000000);?>
									<input name="captcha" required="required" type="text" id="captcha" autocomplete="off" class="form-control input-sm" placeholder="please enter below text here" />  
									<br><i style="font-weight:bold; font-size:55px;" unselectable="on" class="unselectable"><?php echo $captchaCode; ?></i>
									<input type="hidden" name="captchatext" id="captchatext" readonly="readonly" value="<?php echo $captchaCode; ?>" style="border:none;" />
								</div>
								<button class="btn btn-primary ftbtn1" type="button" id="login_button">Register</button>   
						</form>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        $("#login_button").click(function () {
            var captchatext = $('#captchatext').val();
            var captcha = $('#captcha').val();
			
			if(captchatext){
				var enccaptcha = $().crypt({method: "b64enc", source: captcha});
				var captcha_data = $().crypt({method: "b64enc", source: enccaptcha});
				$('#captcha').val(captcha_data);
			}
			
			if(captcha){
				var enccaptchatext = $().crypt({method: "b64enc", source: captchatext});
				var captchatext_data = $().crypt({method: "b64enc", source: enccaptchatext});
				$('#captchatext').val(captchatext_data);
			}
            $('#login_form').submit();

        });
    });

</script>
<?php $this->load->view('layouts/news/footer'); ?>   