<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
<script type='text/javascript' src='<?php echo base_url() ?>design/js/jquery.crypt.js'></script>
<link href="<?php echo base_url();?>design/themes/<?php echo CNF_THEME; ?>/checkboxcustom/skins/allf700.css?v=1.0.1" rel="stylesheet">
<script src="<?php echo base_url();?>design/themes/<?php echo CNF_THEME; ?>/checkboxcustom/icheckf700.js?v=1.0.1"></script>
<script>
$(document).ready(function(){
  $('.form_login input[type="radio"]').each(function(){
	var self = $(this),
	  label = self.next(),
	  label_text = label.text();
		label.remove();
		self.iCheck({
		checkboxClass: 'icheckbox_line-green',
		radioClass: 'iradio_line-green',
		insert: '<div class="icheck_line-icon"></div>' + label_text
	});
  });

});
</script>
<style>
*.unselectable {
   -moz-user-select: -moz-none;
   -khtml-user-select: none;
   -webkit-user-select: none;

   /*
     Introduced in IE 10.
     See http://ie.microsoft.com/testdrive/HTML5/msUserSelect/
   */
   -ms-user-select: none;
   user-select: none;
   
    font-family: Georgia;
    font-size: 55px;
    font-weight: bold;
    text-decoration: line-through;
	
}
.iradio_line-green{width: auto !important;}
</style>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Ventura Secure Login</span></h2>
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
                        <form method="post" id="login_form" class="form_login">   
							<input type="hidden" value="<?php echo $this->security->get_csrf_hash(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>">						
							 <div class="form-group">
                               <table id="" class="table table-bordered table-striped table-condensed table-responsive cf printTable">
								   <tr>
										
										<td>
											<input name="type" id="user" type="radio" <?php
											if (!empty($_POST) && !empty($_POST['type']) && $_POST['type'] == 2) {
												echo 'checked="checked"';
											}
											?>  value="2"  onclick="javascript:loginAuth(this.value)" />
											<label  for="user" onclick="javascript:loginAuth(2)">Member</label>
										</td>
										<td>
											<input name="type" id="user" type="radio" <?php
											if (!empty($_POST) && !empty($_POST['type']) && $_POST['type'] == 3) {
												echo 'checked="checked"';
											}
											?>  value="3"  onclick="javascript:loginAuth(this.value)" />
											<label  for="user" onclick="javascript:loginAuth(3)">Associate</label>
										</td>
									</tr>
								</table>
                            </div>
                            <div id="admin_login">
                                <div class="form-group">          
                                    <input type="text" placeholder="Username" name="username" id="username" autocomplete="off" class="form-control"> 
                                    <?php echo form_error('username'); ?>
                                </div> 
                                <div class="form-group">   
                                    <input placeholder="Password" name="admin_password" id="admin_login_password" autocomplete="off" type="password" class="form-control"> 
                                    <?php echo form_error('admin_password'); ?>
                                </div>   
                            </div>
								<div class="form-group has-feedback">
									<?php $captchaCode = rand(10000,10000000);?>
									<input name="captcha" required="required" type="text" id="captcha" autocomplete="off" class="form-control input-sm" placeholder="please enter below text here" />  
									<br><i style="font-weight:bold; font-size:55px;" unselectable="on" class="unselectable"><?php echo $captchaCode; ?></i>
									<input type="hidden" name="captchatext" id="captchatext" readonly="readonly" value="<?php echo $captchaCode; ?>" style="border:none;" />
								</div>
								<button class="btn btn-primary ftbtn1" type="button" id="login_button">Login</button>   
						</form>
                    </div>    
					            <div class="col-xs-12 col-sm-12 col-md-12">
									<a href="<?php echo base_url(); ?>forgot-password">Forgot Password (Click Here)</a>
									</div>

                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        $("#login_button").click(function () {
            var admin_login = $('#admin_login_password').val();
            var captchatext = $('#captchatext').val();
            var captcha = $('#captcha').val();
			
			if(admin_login){
				var encadmin_login_password = $().crypt({method: "b64enc", source: admin_login});
				var admin_login_password_data = $().crypt({method: "b64enc", source: encadmin_login_password});
				$('#admin_login_password').val(admin_login_password_data);
			}
			
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