		 <?php $this->load->model('Page_model'); ?>
<section id="contentSection">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  top-space" id="center">
                <div class="suggestions">       
                     <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success">
                                    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php } ?>
					<div class="share-blk registration"> 
						 <div class="page_collapsible" id="body-section1"><div class="textUpper"> My Person Infomation </div></div>
						<div class="main-box">
					
						 <div class="collapse-box">
								<a class="btn btn-primary ftbtn1" target="_blank" href="<?php echo base_url();?>registrationdetails" title="Print Details">Print Application Form</a>
								<a class="btn btn-primary ftbtn1" target="_blank" href="<?php echo base_url();?>register" title="Print Details">Edit Application Form</a>
							</div>
						 <table id="" class="table table-bordered table-striped table-condensed table-responsive">
						 <tr>
							 
							<td rowspan="4">
								<?php if(!empty($registration['registration_pic'])){ ?>
									Photograph 
									<img src="<?php echo base_url();?>uploads/registration_pics/<?php echo !empty($registration['registration_pic']) ? $registration['registration_pic'] : '-';?>" width="100px" height="100px"/>
								<?php } ?>
								<br>
								<?php if(!empty($registration['registration_aadhar_card'])){ ?>
									Aadhar Card
									<img src="<?php echo base_url();?>uploads/registration_aadhar/<?php echo !empty($registration['registration_aadhar_card']) ? $registration['registration_aadhar_card'] : '-';?>" width="100px" height="100px"/>
								<?php } ?>
							</td>
							
							<td>
								<label>Name : </label>
                                <span><?php if (!empty($registration['registration_name'])) { ?> <?php echo $registration['registration_name']; ?><?php } ?></span>
							</td>
							<td>
								<label>Email : </label>
                                <span><?php if (!empty($registration['registration_email'])) { ?> <?php echo $registration['registration_email']; ?><?php } ?></span>
							</td>
							<td>
								  <label>Mobile Number: </label>
                                <span><?php if (!empty($registration['registration_mobile_no'])) { ?> <?php echo $registration['registration_mobile_no']; ?><?php } ?></span>
							</td>
							<?php if (!empty($registration['registration_dob'])) { ?>
							<td>
								 <label>Date Of Birth: </label>
                                <span> <?php echo date('Y-m-d',strtotime($registration['registration_dob'])); ?></span>
							</td>
							<?php } ?>
						 </tr>
						
						 <tr>
							
							 <?php if (!empty($registration['registration_address'])) { ?>
							<td>
								 <label>Address : </label>
                                <span> <?php echo $registration['registration_address']; ?></span>
							</td>
							<?php } ?>
							
							<?php if (!empty($registration['registration_gender'])) { ?>
							<td>
								<label>Gender  : </label>
                                <span> <?php echo $registration['registration_gender']; ?></span>
							</td>
							<?php } ?>
							<?php if (!empty($registration['registration_join_for'])) { ?> 
							<td>
							 <label>I want to join for: </label>
                                <span><?php echo $registration['registration_join_for']; ?></span>
							</td>
							<?php } ?>
							
							<?php if (!empty($registration['registration_membership'])) { ?>
							<td>
								<label>Membership Starts from.: </label>
                                <span> <?php echo $registration['registration_membership']; ?></span>
							</td>
							<?php } ?>
						 </tr>
						 </tr>
						
						 <tr>
							<?php if (!empty($registration['registration_father_name'])) { ?> 
							<td>
								 <label>Father's Name : </label>
                                <span><?php echo $registration['registration_father_name']; ?></span>
							</td>
							<?php } ?>
							<?php if (!empty($registration['registration_city'])) { ?> 
							<td>
							 <label>City: </label>
                                <span><?php echo $registration['registration_city']; ?></span>
							</td>
							<?php } ?>
							
							<?php if (!empty($registration['registration_state'])) {
							$stateresult = $this->Page_model->get_state_by_country($registration['registration_country']); 

								?>
							<td>
								<label>State: </label>
                                <span> <?php echo $stateresult['registration_state']; ?></span>
							</td>
							<?php } ?>
							<?php if (!empty($registration['registration_country'])) {
								 $countryresult = $this->Page_model->get_country_by_id($registration['registration_country']); 

								?>
							<td>
								<label>Country: </label>
                                <span> <?php echo $countryresult['registration_country']; ?></span>
							</td> 
							<?php } ?>
						 </tr>
							
						 </table>
						 </div>
						 
						 
						<div class="page_collapsible" id="body-section1"><div class="textUpper"> My Bank Account Details </div></div>
						<div class="main-box">
							<div class="collapse-box">
							
								<a style="float: right;" class="addbutton btn btn-primary ftbtn1" href="<?php echo base_url();?>account/addbankaccount" title="Account Details"> Add Account </a>
							</div>
							<table id="address" class="table table-bordered table-striped table-condensed table-responsive cf printTable">
								<thead>
									<tr>
										
										<th style="width: 12%;">Name</th>
										<th style="width: 12%;">Bank Name</th>
										<th style="width: 12%;">A/C Number</th>
										<th style="width: 12%;">IFSC Code</th>
										<th style="width: 12%;">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $getAccountDetails = $this->Page_model->get_bankaccount_by_registration_id($registration['registration_id']);?>
									<?php $i = 1;?>
									<?php foreach ($getAccountDetails as $key => $value) { ?>
										<tr <?php if ($i % 2 == 0) { ?> class="odd"<?php } else { ?>class="even"<?php } ?>>                           
											<td><?php echo!empty($value['account_name']) ? strtoupper($value['account_name']) : ''; ?> <?php echo!empty($value['applicationform_lastname']) ? strtoupper($value['applicationform_lastname']) : ''; ?></td>
											<td><?php echo!empty($value['account_bank_name']) ? strtoupper($value['account_bank_name']) : ''; ?></td>
											<td><?php echo!empty($value['account_number']) ? strtoupper($value['account_number']) : ''; ?></td>
											<td><?php echo!empty($value['account_ifsc_code']) ? strtoupper($value['account_ifsc_code']) : ''; ?></td>
											
											<td>
												<a  class="addbutton" href="<?php echo base_url();?>account/addbankaccount/<?php echo $value['account_id'];?>" title="Account Details"> Edit </a>
											</td>
										</tr>
										<?php $i++;?>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
						
						<div class="page_collapsible" id="body-section1"><div class="textUpper"> I have also registered as an associate </div></div>
						<div class="main-box">
							<table id="" class="table table-bordered table-striped table-condensed table-responsive">
								<tr>
									<td>
										<?php if($registration['registration_is_associate'] == 1){ ?>
										My Account as an Associate : <strong>Yes </strong>
										<?php } ?>
											<?php if($registration['registration_is_associate'] == 0){ ?>
										My Account as an Associate : <strong>No </strong>
										<?php } ?>
									</td>
								</tr>
								<?php if($registration['registration_is_associate'] == 1){ ?>
								<tr>
									<td>
										<?php if(!empty($registration['registration_is_associate_qualification'])){ ?>
										Qualification : <strong><?php echo $registration['registration_is_associate_qualification'];?> </strong>
										<?php } ?>
									</td>
								</tr>
								
								<tr>
									<td>
										<?php if(!empty($registration['registration_is_associate_exp'])){ ?>
										Exp. : <strong><?php echo $registration['registration_is_associate_exp'];?> </strong>
										<?php } ?>
									</td>
								</tr>
								<?php } ?>
						</table>
						</div>
						
							<div class="page_collapsible" id="body-section1"><div class="textUpper"> Feedback / Suggestions </div></div>
						<div class="main-box">
							<table id="address" class="table table-bordered table-striped table-condensed table-responsive cf printTable">
								<thead>
									<tr>
										
										<th style="width: 12%;">Title</th>
										<th style="width: 12%;">Description</th>
										<th style="width: 12%;">File</th>
										<th style="width: 12%;">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $getFeedBackDetails = $this->Page_model->get_feedback_by_registration_id($registration['registration_id']);?>
									<?php $i = 1;?>
									<?php foreach ($getFeedBackDetails as $key => $value) { ?>
										<tr <?php if ($i % 2 == 0) { ?> class="odd"<?php } else { ?>class="even"<?php } ?>>                           
											<td><?php echo!empty($value['title']) ? strtoupper($value['title']) : ''; ?></td>
											<td><?php echo!empty($value['description']) ? strtoupper($value['description']) : ''; ?></td>
											<td><?php if(!empty($value['file'])!=""){ echo "<a href='".base_url()."uploads/feedback_files/".$value['file']."' target='_blank'>Click here to see file</a>"; } ?></td>
											<td>
												<a  class="addbutton" href="<?php echo base_url();?>account/feedback/<?php echo $value['feedback_id'];?>" title="Feedback Details"> Edit </a>/<a  class="addbutton" href="<?php echo base_url();?>account/feedback/<?php echo $value['feedback_id'];?>/delete" title="Feedback Details"  onclick="return confirm('Are you sure you want to delete this feedback?');">Delete</a>
											</td>
										</tr>
										<?php $i++;?>
									<?php } ?>
								</tbody>
							</table>
						</div>
						
                    </div>      
                </div>
            </div>
        </div>
    </section>


