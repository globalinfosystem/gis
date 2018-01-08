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
        <h2><span>Make Payment</span></h2>
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
                        <form enctype="multipart/form-data" action="<?php echo $action; ?>" method="post"  name="payuForm" id="payuForm" class="form_login">   
							<input type="hidden" value="<?php echo $this->security->get_csrf_hash(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>">						
							<input type="hidden" name="registration_id" value="<?php if (!empty($registration['registration_id'])) { ?><?php echo $registration['registration_id']; ?><?php } ?>" />						
							<input type="hidden" name="account_id" value="<?php if (!empty($account['account_id'])) { ?><?php echo $account['account_id']; ?><?php } ?>" />						
							  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                            <div id="admin_login">
                                <div class="form-group">          
                                    <input type="text"  name="firstname" id="registration_name" autocomplete="off" 
									class="form-control" value="<?php if (!empty($registration_name)) { ?><?php echo $registration_name; ?><?php } ?>" readonly /> 
                                    </div>

							<div class="form-group">          
                                    <input type="email"   name="email" id="email" autocomplete="off" 
									class="form-control" value="<?php if (!empty($registration_email)) { ?>
									<?php echo $registration_email; ?><?php }?>"
                  </div>
				  <div class="form-group">          
                                    <input type="text"   name="phone" id="phone" autocomplete="off" 
									class="form-control" value="<?php if (!empty($registration_mobile_no)) { ?>
									<?php echo trim($registration_mobile_no); ?><?php }?>"
                  </div>
				 <div class="form-group">          
                                    
						<input name="amount" type="number" value="<?php echo $totalCost; ?>" class="form-control" readonly />			
									
                  </div>
				  <input type="hidden" name="productinfo" value="testing"/>
				  <input type="hidden" name="surl" value="<?php echo $SUCCESS_URL; ?>" />
    <input type="hidden" name="furl" value="<?php echo  $FAIL_URL?>"/>
    <input type="hidden" name="service_provider" value="Global Info Systems"/>
								
								
								
								
                            </div>
								
								<button class="btn btn-primary ftbtn1" type="submit" id="login_button">Submit</button>   
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