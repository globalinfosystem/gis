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
                        <?php
						echo $msg;
						?>
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