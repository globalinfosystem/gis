 <script type='text/javascript' src='<?php echo base_url() ?>design/js/jquery.crypt.js'></script>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Forgot Password</span></h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  top-space" id="center">

					<div class="share-blk"> 
                        <div id="suggestionsuccessfull">
							<?php
								if(isset($_GET['e']) && $_GET['e']=="no"){ ?>
								<div class="alert alert-danger">
                                    <strong>Error! This emailID donot exists.</strong> <?php echo $this->session->flashdata('error'); ?>
                                </div>
								<?php }
								elseif(isset($_GET['e']) && $_GET['e']=="yes"){ ?>
								<div class="alert alert-success">
                                    <strong>Thankyou for contacting us, please check your mail.</strong> <?php echo $this->session->flashdata('error'); ?>
                                </div>
								<?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form action="<?php echo base_url(); ?>login/forgot" enctype="multipart/form-data" method="post"  id="login_form" class="form_login">   
							<input type="hidden" value="<?php echo $this->security->get_csrf_hash(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>">						
							 
                            <div id="admin_login">
                                <div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Email" name="email" id="email" autocomplete="off" class="form-control" value="" /> 
                                    <?php echo form_error('email'); ?>
                                </div>
								(You will receive an mail with password after submitting your email id to access your account)
                            </div>
								
								<button class="btn btn-primary ftbtn1" type="submit" id="login_button">Submit</button>   
						</form>
                    </div>
</div>
</div>
</div>
</section>