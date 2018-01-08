
<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
        <div class="page-title">
            <h3><?php echo $this->lang->line('core.m_blastemail'); ?> <small> Send Bulk Email </small></h3>
        </div>

        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('dashboard'); ?>"><?php echo $this->lang->line('core.m_dashboard'); ?> </a></li>
            <li><a href="<?php echo site_url('administrator/config'); ?>"><?php echo $this->lang->line('core.fr_config'); ?> </a></li>
            <li><a href="<?php echo site_url('administrator/config/email'); ?>"><?php echo $this->lang->line('core.t_emailtemplate'); ?> </a></li>	  		
        </ul>


    </div>

    <div class="page-content-wrapper m-t">  
        <?php echo $this->session->flashdata('message'); ?>	
        <div class="block-content">
            <ul class="nav nav-tabs" >
                <li><a href="<?php echo site_url('administrator/config'); ?>"><?php echo $this->lang->line('core.tab_siteinfo'); ?> </a></li>
                <li  class=""><a href="<?php echo site_url('administrator/config/email'); ?>" ><?php echo $this->lang->line('core.t_emailtemplate'); ?> </a></li>
                <li class="active" ><a href="<?php echo site_url('administrator/config/permission'); ?>" ><?php echo $this->lang->line('core.permission'); ?> </a></li>

            </ul>	
            <div class="tab-content">
                <div class="tab-pane active use-padding" id="info">	
                  
                    
                        <div class="col-sm-6">
                              <form class="form-vertical row" action="<?php echo site_url('administrator/config/postplayerpermission'); ?>" method="post">
                            <fieldset > <legend><?php echo $this->lang->line('core.playerpermission'); ?>  </legend>

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.playergeneralinfo'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="general_info" value="1"  <?php if (CNF_PLAYER_GENERAL_INFO == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> 
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="general_info" value="-1"  <?php if (CNF_PLAYER_GENERAL_INFO == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 
                                
                                
                                
                                 <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.familyinfo'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="family_info" value="1"  <?php if (CNF_PLAYER_FAMILY == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> 
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="family_info" value="-1"  <?php if (CNF_PLAYER_FAMILY == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.permanentaddress'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="permanent_address" value="1"  <?php if (CNF_PLAYER_PERMANENT_ADDRESS == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?>
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="permanent_address" value="-1"  <?php if (CNF_PLAYER_PERMANENT_ADDRESS == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.corsaddress'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="correspondance_Address" value="1"  <?php if (CNF_PLAYER_CORRESPONDANCE_ADDRESS == '1') echo 'checked'; ?> /><?php echo $this->lang->line('core.showyes'); ?>
                                    
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="correspondance_Address" value="-1"  <?php if (CNF_PLAYER_CORRESPONDANCE_ADDRESS == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.eduqualification'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="education_qua" value="1"  <?php if (CNF_PLAYER_EDUCATION_QUALIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="education_qua" value="-1"  <?php if (CNF_PLAYER_EDUCATION_QUALIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.sportsqualification'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="sport_qua" value="1" <?php if (CNF_PLAYER_SPORTS_QUALIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="sport_qua" value="-1" <?php if (CNF_PLAYER_SPORTS_QUALIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 



                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.otherqualification'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="other_qua" value="1"  <?php if (CNF_PLAYER_OTHER_QUALIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?>
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="other_qua" value="-1"   <?php if (CNF_PLAYER_OTHER_QUALIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 
                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.sportsachievement'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="sports_achievement" value="1"   <?php if (CNF_PLAYER_SPORTS_ACHIEVEMENT == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="sports_achievement" value="-1"  <?php if (CNF_PLAYER_SPORTS_ACHIEVEMENT == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.traininghistory'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="training_history" value="1"  <?php if (CNF_PLAYER_TRAINING_HISTORY == '1') echo 'checked'; ?> />  <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="training_history" value="-1"  <?php if (CNF_PLAYER_TRAINING_HISTORY == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.otherresearch'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="other_research" value="1"  <?php if (CNF_PLAYER_OTHER_RESEARCH == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="other_research" value="-1"  <?php if (CNF_PLAYER_OTHER_RESEARCH == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.awardrec'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="award" value="1"  <?php if (CNF_PLAYER_AWARD == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="award" value="-1"  <?php if (CNF_PLAYER_AWARD == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>



                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.traineeachmnt'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="trainee_achievement" value="1"  <?php if (CNF_PLAYER_TRAINEE_ACHIEVEMENT== '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="trainee_achievement" value="-1"  <?php if (CNF_PLAYER_TRAINEE_ACHIEVEMENT == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>

                                          
                     
                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.forntours'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="forign_tours" value="1"  <?php if (CNF_PLAYER_FOREIGN_TOUR == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="forign_tours" value="-1" <?php if (CNF_PLAYER_FOREIGN_TOUR == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								

                                
                                    </div>	

                                </div>
                                <div class="form-group">   
                                    <button class="btn btn-primary" type="submit"><?php echo $this->lang->line('core.sb_savechanges'); ?> </button>	 
                                </div>

                            </fieldset>

                              </form>
                        </div> 


                    <div class="col-sm-6">
                              <form class="form-vertical row" action="<?php echo site_url('administrator/config/postemployeepermission'); ?>" method="post">
                            <fieldset > <legend><?php echo $this->lang->line('core.employeepermission'); ?>  </legend>

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.playergeneralinfo'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_general_info" value="1"  <?php if (CNF_EMP_GENERAL_INFO == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> 
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_general_info" value="-1"  <?php if (CNF_EMP_GENERAL_INFO == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 
                                
                                
                                
                                 <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.familyinfo'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_family_info" value="1"  <?php if (CNF_EMP_FAMILY == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> 
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_family_info" value="-1"  <?php if (CNF_EMP_FAMILY == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.permanentaddress'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_permanent_address" value="1"  <?php if (CNF_EMP_PERMANENT_ADDRESS == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?>
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_permanent_address" value="-1"  <?php if (CNF_EMP_PERMANENT_ADDRESS == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.corsaddress'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_correspondance_Address" value="1"  <?php if (CNF_EMP_CORRESPONDANCE_ADDRESS == '1') echo 'checked'; ?> /><?php echo $this->lang->line('core.showyes'); ?>
                                    
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_correspondance_Address" value="-1"  <?php if (CNF_EMP_CORRESPONDANCE_ADDRESS == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.eduqualification'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_education_qua" value="1"  <?php if (CNF_EMP_EDUCATION_QUALIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_education_qua" value="-1"  <?php if (CNF_EMP_EDUCATION_QUALIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 

                                   <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.otherqualification'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_other_qua" value="1"  <?php if (CNF_PLAYER_OTHER_QUALIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?>
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_other_qua" value="-1"   <?php if (CNF_PLAYER_OTHER_QUALIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 
                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.sportsqualification'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_sport_qua" value="1" <?php if (CNF_EMP_SPORTS_QUALIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_sport_qua" value="-1" <?php if (CNF_EMP_SPORTS_QUALIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 



                            <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.empPosting'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_posting_details" value="1"  <?php if (CNF_EMP_POSTING == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?>
                                        </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_posting_details" value="-1"   <?php if (CNF_EMP_POSTING == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	
                                </div>
                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.sportsachievement'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_sports_achievement" value="1"   <?php if (CNF_EMP_SPORTS_ACHIEVEMENT == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_sports_achievement" value="-1"  <?php if (CNF_EMP_SPORTS_ACHIEVEMENT == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 
                                
                                
                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.empclassfication'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_classification" value="1"   <?php if (CNF_EMP_CLASSIFICATION == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_classification" value="-1"  <?php if (CNF_EMP_CLASSIFICATION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>

                                    <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.otherresearch'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_other_research" value="1"  <?php if (CNF_PLAYER_OTHER_RESEARCH == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_other_research" value="-1"  <?php if (CNF_PLAYER_OTHER_RESEARCH == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>
                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.traininghistory'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_training_history" value="1"  <?php if (CNF_EMP_HISTORY == '1') echo 'checked'; ?> />  <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_training_history" value="-1"  <?php if (CNF_EMP_HISTORY == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 
                                
                                 <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.promotion'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_promotion" value="1"  <?php if (CNF_EMP_PROMOTION == '1') echo 'checked'; ?> />  <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_promotion" value="-1"  <?php if (CNF_EMP_PROMOTION == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div> 


                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.empmanagement'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_management" value="1"  <?php if (CNF_EMP_MANAGEMENT == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_management" value="-1"  <?php if (CNF_EMP_MANAGEMENT == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>
                                
                                
                                  <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.forntours'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_forign_tours" value="1"  <?php if (CNF_EMP_FOREIGN_TOUR == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_forign_tours" value="-1" <?php if (CNF_EMP_FOREIGN_TOUR == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								

                                
                                    </div>	

                                </div>

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.awardrec'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_award" value="1"  <?php if (CNF_EMP_AWARD == '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_award" value="-1"  <?php if (CNF_EMP_AWARD == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>

                                  <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.empassignment'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_assignment" value="1"  <?php if (CNF_EMP_ASSIGNMENT== '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_assignment" value="-1"  <?php if (CNF_EMP_ASSIGNMENT == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>
                                
                                 <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.empjudge'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="emp_judge" value="1"  <?php if (CNF_EMP_JUDGE== '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="emp_judge" value="-1"  <?php if (CNF_EMP_JUDGE == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>

                                <div class="form-group">
                                    <label for="ipt" class=" control-label col-sm-5"><?php echo $this->lang->line('core.traineeachmnt'); ?> </label>	
                                    <div class="col-sm-7">

                                        <label class="radio">
                                            <input type="radio" name="trainee_achievement" value="1"  <?php if (CNF_EMP_TRAINEE_ACHIEVEMENT== '1') echo 'checked'; ?> /> <?php echo $this->lang->line('core.showyes'); ?> </label>

                                        <label class="radio">
                                            <input type="radio" name="trainee_achievement" value="-1"  <?php if (CNF_EMP_TRAINEE_ACHIEVEMENT == '-1') echo 'checked'; ?> /> 
                                            <?php echo $this->lang->line('core.showno'); ?>
                                        </label>								



                                    </div>	

                                </div>

                                          
                     
                              
                                <div class="form-group">   
                                    <button class="btn btn-primary" type="submit"><?php echo $this->lang->line('core.sb_savechanges'); ?> </button>	 
                                </div>

                            </fieldset>

                              </form>
                        </div> 
                
                </div>
            </div>
        </div>
    </div>





