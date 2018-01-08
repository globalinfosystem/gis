<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
 <script type='text/javascript' src='<?php echo base_url() ?>design/js/jquery.crypt.js'></script>
 <?php 
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 2){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
	$account = $this->Page_model->get_bankaccount_by_id($account_id);
 }
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 1){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
	$account = $this->Page_model->get_bankaccount_by_id($account_id);
 }
 ?>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Add Bank Account Details</span></h2>
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
							<input type="hidden" name="account_id" value="<?php if (!empty($account['account_id'])) { ?><?php echo $account['account_id']; ?><?php } ?>" />						
							 
                            <div id="admin_login">
                                <div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Name" name="account_name" id="account_name" autocomplete="off" class="form-control" value="<?php if (!empty($account['account_name'])) { ?><?php echo $account['account_name']; ?><?php } else { ?><?php echo set_value('account_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('account_name'); ?>
                                </div>

								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Bank's Name" name="account_bank_name" id="account_bank_name" autocomplete="off" class="form-control" value="<?php if (!empty($account['account_bank_name'])) { ?><?php echo $account['account_bank_name']; ?><?php } else { ?><?php echo set_value('account_bank_name'); ?><?php } ?>" /> 
                                    <?php echo form_error('account_bank_name'); ?>
                                </div>
								
								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Account Number" name="account_number" id="account_number" autocomplete="off" class="form-control" value="<?php if (!empty($account['account_number'])) { ?><?php echo $account['account_number']; ?><?php } else { ?><?php echo set_value('account_number'); ?><?php } ?>" /> 
                                    <?php echo form_error('account_number'); ?>
                                </div>
								
								<div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your bank IFSC Code" name="account_ifsc_code" id="account_ifsc_code" autocomplete="off" class="form-control" value="<?php if (!empty($account['account_ifsc_code'])) { ?><?php echo $account['account_ifsc_code']; ?><?php } else { ?><?php echo set_value('account_ifsc_code'); ?><?php } ?>" /> 
                                    <?php echo form_error('account_ifsc_code'); ?>
                                </div>
                            </div>
								<div class="form-group has-feedback">
									<?php $captchaCode = rand(10000,10000000);?>
									<input name="captcha" required="required" type="text" id="captcha" autocomplete="off" class="form-control input-sm" placeholder="please enter below text here" />  
									<br><i style="font-weight:bold; font-size:55px;" unselectable="on" class="unselectable"><?php echo $captchaCode; ?></i>
									<input type="hidden" name="captchatext" id="captchatext" readonly="readonly" value="<?php echo $captchaCode; ?>" style="border:none;" />
								</div>
								<button class="btn btn-primary ftbtn1" type="button" id="login_button">Submit</button>   
						</form>
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

<?php $this->load->view('layouts/'.CNF_THEME.'/footer'); ?>   