<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
 <script type='text/javascript' src='<?php echo base_url() ?>design/js/jquery.crypt.js'></script>
 <?php 
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 2){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
	$feedback = $this->Page_model->get_feedback_by_id($feedback_id);
 }
 if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 1){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
	$feedback = $this->Page_model->get_feedback_by_id($feedback_id);
 }
 if(isset($delete))
 { 
	 	$delfback = $this->Page_model->get_feedback_delete_by_id($feedback_id);
		if($delfback)
		{
			$url=base_url()."account";
			header("location:$url");
		}
 }
 ?>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Add Your Feedback</span></h2>
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
							<input type="hidden" name="feedback_id" value="<?php if (!empty($feedback['feedback_id'])) { ?><?php echo $feedback['feedback_id']; ?><?php } ?>" />						
							 
                            <div id="admin_login">
                                <div class="form-group">          
                                    <input type="text" required="required" placeholder="Enter Your Title" name="title" id="title" autocomplete="off" class="form-control" value="<?php if (!empty($feedback['title'])) { ?><?php echo $feedback['title']; ?><?php } else { ?><?php echo set_value('title'); ?><?php } ?>" /> 
                                    <?php echo form_error('title'); ?>
                                </div>

								<div class="form-group">          
                                    <textarea required="required" placeholder="Enter Your Description" name="description" id="description" autocomplete="off" class="form-control"><?php if (!empty($feedback['description'])) { ?><?php echo $feedback['description']; ?><?php } else { ?><?php echo set_value('description'); ?><?php } ?></textarea>
                                    <?php echo form_error('description'); ?>
                                </div>
								
								<div class="form-group">          
                                    <input type="file" placeholder="Enter Your Document(png/jpg/doc/docx/pdf)" name="file" id="file" autocomplete="off" class="form-control" />
									<?php if (!empty($feedback['file'])) { ?><?php echo $feedback['file']; ?><?php } else { ?><?php echo set_value('file'); ?><?php } ?>
                                </div>
								
								
                            </div>
								
								<button class="btn btn-primary ftbtn1" type="submit" id="login_button">Submit</button>   
						</form>
                    </div>
</div>
</div>
</div>
</section>

<?php $this->load->view('layouts/'.CNF_THEME.'/footer'); ?>   