<div class="ministers-blk">
<style>
.col-sm-7{padding:0px;}
.data-coach {
    background: #24a400 none repeat scroll 0 0;
    color: #fff !important;
    margin-top: 10px !important;
    padding: 3px !important;
}
.headingTitle{
cursor:pointer;
color:#fff;
width: 100%; text-align:left color: rgb(255, 255, 255); text-transform: uppercase; background: red none repeat scroll 0% 0%; font-size: 11px; font-weight: bold; padding: 3px; margin-top: 1px;
}
.hideTitle{display:none;}
</style>
<script>
function showhideTitle(id){
	$('.hideTitle').hide();
	$('#'+id).show();
	
}
</script>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">

            <?php if (CNF_EMP_GENERAL_INFO == 1): ?>
                <div class="title-bar orange-bar" style="text-transform: uppercase; font-size:24px;  height: 45px; padding: 5px;  text-transform: uppercase;">
                    <?php if (!empty($general_info['TypeOfEmployeeId']) && $general_info['TypeOfEmployeeId'] != 16) { ?>

                        <?php echo (!empty($general_info['TypeOfEmployeeId'])) ? $employeeTypes[$general_info['TypeOfEmployeeId']] : ''; ?>

                    <?php } else { ?>
                        <?php if (!empty($general_info['TypeOfEmployeeId'])) { ?>

                            <?php echo (!empty($general_info['TypeOfEmployeeId'])) ? $employeeTypes[$general_info['TypeOfEmployeeId']] . '-' . $caochdesignation[$general_info['CoachDesignationId']] . '-' . $coachgames[$general_info['CoachGameId']] : ''; ?>

                        <?php } ?>
                    <?php } ?>
                    , Haryana

                </div>
                <div class="profile-bg mini-profile pad15 clearfix" style="border:3px solid #f9d2b1 !important;">
					<div class="col-xs-12 col-sm-12 col-md-12"><h1 style=" background: #24a400 none repeat scroll 0 0; color: #fff !important;  font-size: 18px;  padding: 10px;"><?php //echo (!empty($general_info['Title'])) ? $titles[$general_info['Title']] : ''; ?> <?php echo (!empty($general_info['FirstName'])) ? $general_info['FirstName'] : ''; ?> <?php echo (!empty($general_info['LastName'])) ? $general_info['LastName'] : ''; ?></h1></div>
                    <div class="col-xs-12 col-sm-3 col-md-3"><img src="http://hrmsdemo.gravitasoft.com/Attachements/GeneralInfodp/<?php echo!empty($general_info['Path']) ? $general_info['Path'] : 'noimg.png'; ?>" width="270" height="270" alt="Sports Minister"  class="thumbnail" /></div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="profile-text">
                            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:17px;">
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Father’s Name</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['FatherName'])) ? $general_info['FatherName'] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Designation</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <?php if (!empty($general_info['TypeOfEmployeeId']) && $general_info['TypeOfEmployeeId'] != 16) { ?>
                                        <td valign="top"><?php echo (!empty($general_info['TypeOfEmployeeId'])) ? $employeeTypes[$general_info['TypeOfEmployeeId']] : ''; ?></td>
                                    <?php } else { ?>
                                        <?php if (!empty($general_info['TypeOfEmployeeId'])) { ?>
                                            <td valign="top"><?php echo (!empty($general_info['TypeOfEmployeeId'])) ? $employeeTypes[$general_info['TypeOfEmployeeId']] . '-' . $caochdesignation[$general_info['CoachDesignationId']] . '-' . $coachgames[$general_info['CoachGameId']] : ''; ?></td>
                                        <?php } ?>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Date of Birth</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['DateOfBirth'])) ? date('d-m-Y',strtotime($general_info['DateOfBirth'])) : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Mobile No</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['MobileNo'])) ? '+91'.$general_info['MobileNo'] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Email ID</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['Email'])) ? $general_info['Email'] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Category</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['Category'])) ? $categories[$general_info['Category']] : ''; ?></td>
                                </tr>
								 <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Aadhar Number</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['AadharCardNo'])) ? $categories[$general_info['AadharCardNo']] : '1234567890'; ?></td>
                                </tr>
								
								 <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Posting At</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"></td>
                                </tr>
								
								 <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Home District</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"></td>
                                </tr>
								
								 
								
							<!--<?php if (!empty($address_info)) { ?>
								<?php foreach ($address_info as $key => $value) { ?>
									<?php if (CNF_EMP_PERMANENT_ADDRESS == 1) { ?>
										<?php if (!empty($value['AddressType']) && $value['AddressType'] == 'P') { ?>
											<tr>
												<td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Permanent Address</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
												<td valign="top">
													<?php echo!empty($value['Address1']) ? $value['Address1'] : ''; ?>, <?php echo!empty($value['Address2']) ? $value['Address2'] : ''; ?>,
													<?php echo!empty($value['Tehsil']) ? $value['Tehsil'] : ''; ?>,<?php echo!empty($value['PoliceStation']) ? $value['PoliceStation'] : ''; ?>,
													<?php echo!empty($value['Country']) ? $value['Country'] : ''; ?>, 
													<?php echo!empty($value['StateId']) ? $states[$value['StateId']] : ''; ?>, 
													<?php echo!empty($value['DistrictId']) ? $districts[$value['DistrictId']] : ''; ?>, 
													<?php echo!empty($value['CityName']) ? $value['CityName'] : ''; ?>
												</td>
											</tr>
										<?php } ?>
									<?php } ?>
									<?php if (CNF_EMP_CORRESPONDANCE_ADDRESS == 1) { ?>
										<?php if (!empty($value['AddressType']) && $value['AddressType'] == 'C') { ?>		
											 <tr>
												<td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Correspondence Address</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
												<td valign="top">
													<?php echo!empty($value['Address1']) ? $value['Address1'] : ''; ?>, <?php echo!empty($value['Address2']) ? $value['Address2'] : ''; ?>,
													<?php echo!empty($value['Tehsil']) ? $value['Tehsil'] : ''; ?>,<?php echo!empty($value['PoliceStation']) ? $value['PoliceStation'] : ''; ?>,
													<?php echo!empty($value['Country']) ? $value['Country'] : ''; ?>, 
													<?php echo!empty($value['StateId']) ? $states[$value['StateId']] : ''; ?>, 
													<?php echo!empty($value['DistrictId']) ? $districts[$value['DistrictId']] : ''; ?>, 
													<?php echo!empty($value['CityName']) ? $value['CityName'] : ''; ?>
												</td>
											</tr>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							<?php } ?>-->
                            </table>
                        </div>
                    </div>
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div class="headingTitle" onclick="showhideTitle('fd')">Family Details</div>
						<div class="headingTitle" onclick="showhideTitle('pa')">Permanent Address</div>
						<div class="headingTitle" onclick="showhideTitle('ca')">Correspondence Address</div>
						<div class="headingTitle" onclick="showhideTitle('eq')">Educational Qualifications</div>
						<div class="headingTitle" onclick="showhideTitle('sq')">Sports Qualifications</div>
						<div class="headingTitle" onclick="showhideTitle('oq')">Other Qualification</div>
						<div class="headingTitle" onclick="showhideTitle('pd')">Posting Details</div>
						<div class="headingTitle" onclick="showhideTitle('promo')">Promotions</div>
						<div class="headingTitle" onclick="showhideTitle('sap')">Sports Achievements as a Player</div>
						<div class="headingTitle" onclick="showhideTitle('csc')">Classification / Status as Coach</div>
						<div class="headingTitle" onclick="showhideTitle('thc')">Training History Coach</div>
						<div class="headingTitle" onclick="showhideTitle('me')">Management Experience</div>
						<div class="headingTitle" onclick="showhideTitle('orwpu')">Other Research Works Published / Unpublished</div>
						<div class="headingTitle" onclick="showhideTitle('wqnirj')">Whether Qualified National / International Refree / Judge</div>
						<div class="headingTitle" onclick="showhideTitle('ft')">Foreign Tours</div>
						<div class="headingTitle" onclick="showhideTitle('ahr')">Awards / Honours Received</div>
						<div class="headingTitle" onclick="showhideTitle('ruja')">Refree / Umpire / Judges Assignments</div>
						<div class="headingTitle" onclick="showhideTitle('at')">Achievements of Trainees</div>
					</div>
                </div>
            <?php endif; ?>
			
            
                <?php if (!empty($family_info)) { ?>
				<div id="fd" class="hideTitle">
                    <h2  class="data-coach">Family Details</h2>
                    <table class="table table-bordered table-condensed table-responsive cf">
                        <thead class="cf">
                            <tr>
                                <th>Name</th>
                                <th>Relation</th>
                                <th class="numeric">Spouse</th>
                                <th class="numeric">Age</th>
                                <th class="numeric">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $familyCount = 1; ?>
                            <?php foreach ($family_info as $key => $value) { ?>
                                <tr class="datatable">
                                    <td data-title="Name"><?php echo!empty($value['Name']) ? $value['Name'] : ''; ?></td>
                                    <td data-title="Relation"><?php echo!empty($value['Relation']) ? $relations[$value['Relation']] : ''; ?></td>
                                    <td data-title="Spouse"><?php echo (!empty($value['WhetherInService']) && $value['WhetherInService'] == 1) ? 'Yes' : 'No'; ?></td>                                       
                                    <td data-title="Age"><?php echo!empty($value['Age']) ? $value['Age'] : ''; ?></td>
                                    <td data-title="Status"><?php echo (!empty($value['Status']) && $value['Status'] == 2) ? 'Independent' : 'Dependent'; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
				</div>
                <?php } ?>
            
			
            <?php if (!empty($address_info)) { ?>
                <?php foreach ($address_info as $key => $value) { ?>
                    <?php if (CNF_EMP_PERMANENT_ADDRESS == 1) { ?>
                        <?php if (!empty($value['AddressType']) && $value['AddressType'] == 'P') { ?>
                            <div id="pa" class="hideTitle">
                                <h2  class="data-coach">Permanent Address</h2>  
                                <div class="panel-body">
                                    <form method="get" class="form-horizontal bucket-form" novalidate="novalidate">
                                        <div class="">
                                            <div class="col-sm-5"> <div class="myform"><span class="mine">Address: </span> <?php echo!empty($value['Address1']) ? $value['Address1'] : ''; ?></div>
                                                <div class="myform"><?php echo!empty($value['Address2']) ? $value['Address2'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Tehsil: </span> <?php echo!empty($value['Tehsil']) ? $value['Tehsil'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Police Station:</span> <?php echo!empty($value['PoliceStation']) ? $value['PoliceStation'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Country: </span> <?php echo!empty($value['Country']) ? $value['Country'] : ''; ?></div>
                                            </div>
                                            <div class="col-sm-4"> 
                                                <div class="myform"><span class="mine">State: </span> <?php echo!empty($value['StateId']) ? $states[$value['StateId']] : ''; ?></div>
                                                <div class="myform"><span class="mine">District: </span> <?php echo!empty($value['DistrictId']) ? $districts[$value['DistrictId']] : ''; ?>
                                                </div>
                                                <div class="myform"><span class="mine">City: </span> <?php echo!empty($value['CityName']) ? $value['CityName'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Contact No(Landline): </span> <?php echo!empty($value['ContactNo']) ? $value['ContactNo'] : ''; ?></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <?php if (CNF_EMP_CORRESPONDANCE_ADDRESS == 1) { ?>
                        <?php if (!empty($value['AddressType']) && $value['AddressType'] == 'C') { ?>
                            <div id="ca" class="hideTitle">
                                <h2 class="data-coach">Correspondence Address</h2>  
                                <div class="panel-body">
                                    <form method="get" class="form-horizontal bucket-form" novalidate="novalidate">
                                        <div class="">
                                            <div class="col-sm-5"> <div class="myform"><span class="mine">Address: </span> <?php echo!empty($value['Address1']) ? $value['Address1'] : ''; ?></div>
                                                <div class="myform"><?php echo!empty($value['Address2']) ? $value['Address2'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Tehsil: </span> <?php echo!empty($value['Tehsil']) ? $value['Tehsil'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Police Station:</span> <?php echo!empty($value['PoliceStation']) ? $value['PoliceStation'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Country: </span> <?php echo!empty($value['Country']) ? $value['Country'] : ''; ?></div>
                                            </div>
                                            <div class="col-sm-4"> 
                                                <div class="myform"><span class="mine">State: </span> <?php echo!empty($value['StateId']) ? $states[$value['StateId']] : ''; ?></div>
                                                <div class="myform"><span class="mine">District: </span> <?php echo!empty($value['DistrictId']) ? $districts[$value['DistrictId']] : ''; ?>
                                                </div>
                                                <div class="myform"><span class="mine">City: </span> <?php echo!empty($value['CityName']) ? $value['CityName'] : ''; ?></div>
                                                <div class="myform"><span class="mine">Contact No(Landline): </span> <?php echo!empty($value['ContactNo']) ? $value['ContactNo'] : ''; ?></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            <?php if (CNF_EMP_EDUCATION_QUALIFICATION == 1) { ?>
                <?php if (!empty($education_info['E'])) { ?>
					<div id="eq" class="hideTitle">
						<h2 class="data-coach">Educational Qualifications</h2>
						<table class="table table-bordered table-condensed table-responsive cf">
							<thead class="cf">
								<tr>
									<th>Class</th>
									<th>School/College</th>
									<th class="numeric">Stream</th>
									<th class="numeric">Board/University</th>
									<th class="numeric">Year Of Passing</th>
									<th class="numeric">% Of Marks</th>

								</tr>
							</thead>
							<tbody>
								<?php foreach ($education_info['E'] as $key => $value) { ?>
									<tr>
										<td data-title="Class"><?php echo!empty($value['Class']) ? $value['Class'] : ''; ?></td>
										<td data-title="School/College"><?php echo!empty($value['School']) ? $value['School'] : ''; ?></td>
										<td data-title="Stream"><?php echo!empty($value['Stream']) ? $value['Stream'] : ''; ?></td>
										<td data-title="Board/University"><?php echo!empty($value['BoardUniversity']) ? $value['BoardUniversity'] : ''; ?></td>
										<td data-title="Year Of Passing"><?php echo!empty($value['YearofPassing']) ? $value['YearofPassing'] : ''; ?></td>
										<td data-title="% Of Marks"><?php echo!empty($value['PercentageOfMarks']) ? $value['PercentageOfMarks'] : ''; ?></td>
									</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
                <?php } ?>
            <?php } ?>
            <br/>
            <?php if (CNF_EMP_SPORTS_QUALIFICATION == 1) { ?>
                <?php if (!empty($education_info['S'])) { ?>
				<div id="sq" class="hideTitle">
                    <h2 class="data-coach">Sports Qualifications</h2>
                    <table class="table table-bordered table-condensed table-responsive cf">
                        <thead class="cf">
                            <tr>
                                <th>Class</th>
                                <th>School/College</th>
                                <th class="numeric">Stream</th>
                                <th class="numeric">Board/University</th>
                                <th class="numeric">Year Of Passing</th>
                                <th class="numeric">% Of Marks</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($education_info['S'] as $key => $value) { ?>       

                                <tr>
                                    <td data-title="Class"><?php echo!empty($value['Class']) ? $value['Class'] : ''; ?></td>
                                    <td data-title="School/College"><?php echo!empty($value['School']) ? $value['School'] : ''; ?></td>
                                    <td data-title="Stream"><?php echo!empty($value['Stream']) ? $value['Stream'] : ''; ?></td>
                                    <td data-title="Board/University"><?php echo!empty($value['BoardUniversity']) ? $value['BoardUniversity'] : ''; ?></td>
                                    <td data-title="Year Of Passing"><?php echo!empty($value['YearofPassing']) ? $value['YearofPassing'] : ''; ?></td>
                                    <td data-title="% Of Marks"><?php echo!empty($value['PercentageOfMarks']) ? $value['PercentageOfMarks'] : ''; ?></td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
				</div>
                <?php } ?>
            <?php } ?>
            <br>
            <?php if (CNF_EMP_OTHER_QUALIFICATION == 1) { ?>
                <?php if (!empty($education_info['O'])) { ?>
				<div id="oq" class="hideTitle">
                    <h2 class="data-coach">Other Qualification</h2>
                    <table class="table table-bordered table-condensed table-responsive cf">
                        <thead class="cf">
                            <tr>
                                <th>Class</th>
                                <th>School/College</th>
                                <th class="numeric">Stream</th>
                                <th class="numeric">Board/University</th>
                                <th class="numeric">Year Of Passing</th>
                                <th class="numeric">% Of Marks</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($education_info['O'] as $key => $value) { ?>
                                <tr>
                                    <td data-title="Class"><?php echo!empty($value['Class']) ? $value['Class'] : ''; ?></td>
                                    <td data-title="School/College"><?php echo!empty($value['School']) ? $value['School'] : ''; ?></td>
                                    <td data-title="Stream"><?php echo!empty($value['Stream']) ? $value['Stream'] : ''; ?></td>
                                    <td data-title="Board/University"><?php echo!empty($value['BoardUniversity']) ? $value['BoardUniversity'] : ''; ?></td>
                                    <td data-title="Year Of Passing"><?php echo!empty($value['YearofPassing']) ? $value['YearofPassing'] : ''; ?></td>
                                    <td data-title="% Of Marks"><?php echo!empty($value['PercentageOfMarks']) ? $value['PercentageOfMarks'] : ''; ?></td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
				</div>
                <?php } ?>
            <?php } ?>
            <?php if (!empty($sport_acheiver_info)) { ?>
			<div id="sap" class="hideTitle">
                <h2 class="data-coach">Sports Achievements as a Player</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Championship</th>
                            <th class="numeric">From Date</th>
                            <th class="numeric">To Date</th>
                            <th class="numeric">Venue</th>
                            <th class="numeric">Position</th>
                            <th class="numeric">National Camp Attended</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sport_acheiver_info as $key => $value) { ?>
                            <tr>
                                <td data-title="Championship"><?php echo!empty($value['Championship']) ? $value['Championship'] : ''; ?></td>
                                <td data-title="From Date"><?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?></td>
                                <td data-title="To Date"><?php echo!empty($value['ToDate']) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?></td>
                                <td data-title="Venue"><?php echo!empty($value['Venue']) ? $value['Venue'] : ''; ?></td>
                                <td data-title="Position"><?php echo!empty($value['Postion']) ? $value['Postion'] : ''; ?></td>
                                <td data-title="National Camp Attended"><?php echo!empty($value['NationalCampAttended']) ? $value['NationalCampAttended'] : ''; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>

            <?php if (!empty($posting_detail_info)) { ?>
			<div id="pd" class="hideTitle">
                <h2 class="data-coach">Posting Detail</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Place Of Posting</th>
                            <th class="numeric">District</th>
                            <th class="numeric">Post Code</th>
                            <th class="numeric">Staff Position</th>
                            <th class="numeric" style="text-align: center" colspan="2">Date of Posting</th>
                            <th class="numeric">Assignment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posting_detail_info as $key => $value) { ?>
                            <tr>
                                <td data-title="Place Of Posting"><?php echo!empty($value['PlaceOfPosting']) ? $value['PlaceOfPosting'] : ''; ?></td>
                                <td data-title="District"><?php echo!empty($value['DistrictId']) ? $districts[$value['DistrictId']] : ''; ?> </td>
                                <td data-title="Post Code"><?php echo (!empty($value['PostCode'])) ? $employeeTypes[$value['PostCode']] . '-' . $caochdesignation[$value['CoachDesignationId']] . '-' . $coachgames[$value['CoachGameId']] : ''; ?></td>
                                <td data-title="Staff Position"><?php echo!empty($value['StaffPositionId']) ? $staffposition[$value['StaffPositionId']] : ''; ?></td>
                                <td data-title="Date of Posting"><?php echo!empty($value['FromDatePosting']) ? date('d-m-Y',strtotime($value['FromDatePosting'])) : ''; ?></td>
                                <td data-title="Date of Posting"><?php echo!empty($value['ToDatePosting']) ? date('d-m-Y',strtotime($value['ToDatePosting'])) : ''; ?></td>
                                <td data-title="Assignment"><?php echo!empty($value['AssignmentId']) ? $assignment[$value['AssignmentId']] : ''; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
			</div>
            <?php } ?>

            <?php if (!empty($classification_status_info)) { ?>
			<div id="csc" class="hideTitle">
                <h2 class="data-coach">Classification/Status as Coach</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Panel</th>
                            <th class="numeric">Camp Taken</th>
                            <th class="numeric">From</th>
                            <th class="numeric">To</th>
                            <th class="numeric">Accompanied the team venue</th>
                            <th class="numeric">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($classification_status_info as $key => $value) { ?>
                            <tr>
                                <td data-title="Panel"><?php echo!empty($value['PanelId']) ? $panel[$value['PanelId']] : ''; ?></td>
                                <td data-title="Camp Taken"><?php echo!empty($value['CampTakenFileAttachedName']) ? $value['CampTakenFileAttachedName'] : ''; ?> </td>
                                <td data-title="From"><?php echo (!empty($value['DateFrom'])) ? date('d-m-Y',strtotime($value['DateFrom'])) : ''; ?></td>
                                <td data-title="To"><?php echo!empty($value['DateTo']) ? date('d-m-Y',strtotime($value['DateTo'])) : ''; ?></td>
                                <td data-title="Accompanied the team venue"><?php echo!empty($value['AccompaniedVenue']) ? $value['AccompaniedVenue'] : ''; ?></td>
                                <td data-title="Position"><?php echo!empty($value['PositionWon']) ? $value['PositionWon'] : ''; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
			</div>
            <?php } ?>

            <?php if (!empty($trainin_history_coach)) { ?>
			<div id="thc" class="hideTitle">
                <h2 class="data-coach">Training History Coach</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Name Of The Course</th>
                            <th class="numeric">From Date</th>
                            <th class="numeric">To Date</th>
                            <th class="numeric">Venue</th>
                            <th class="numeric">Remarks Viz.appreciation Letter</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trainin_history_coach as $key => $value) { ?>
                            <tr>
                                <td data-title="Name Of The Course"><?php echo!empty($value['CourseName']) ? $value['CourseName'] : ''; ?></td>
                                <td data-title="From Date">
                                    <?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?> </td>
                                <td data-title="To Date">
                                    <?php echo (!empty($value['ToDate'])) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?></td>
                                <td data-title="Venue">
                                    <?php echo!empty($value['Venue']) ? $value['Venue'] : ''; ?></td>
                                <td data-title="Remarks Viz.appreciation Letter">
                                    <?php echo!empty($value['RemarksVizAppreciationLetter']) ? $value['RemarksVizAppreciationLetter'] : ''; ?></td>                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
			</div>
            <?php } ?>

            <?php if (!empty($promotion)) { ?>
			<div id="promo" class="hideTitle">
                <h2 class="data-coach">Promotion</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Designation</th>
                            <th class="numeric">Date of Promotion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($promotion as $key => $value) { ?>
                            <tr>
                                <td data-title="Designation">
                                    <?php echo!empty($value['Designation']) ? $caochdesignation[$value['Designation']] : ''; ?>
                                </td>
                                <td data-title="Date of Promotion">
                                    <?php echo!empty($value['DateOfPromotion']) ? date('d-m-Y',strtotime($value['DateOfPromotion'])) : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>


            <?php if (!empty($managementExp)) { ?>
			<div id="me" class="hideTitle">
                <h2 class="data-coach">Management Experience</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Organizers</th>
                            <th class="numeric">Name of Event</th>

                            <th class="numeric">Venue</th>
                            <th class="numeric">From Date</th>
                            <th class="numeric">To Date</th>
                            <th class="numeric">Self Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($managementExp as $key => $value) { ?>
                            <tr>
                                <td data-title="Organizers">
                                    <?php echo!empty($value['Organizers']) ? $value['Organizers'] : ''; ?>
                                </td>
                                <td data-title="Name of Event">
                                    <?php echo!empty($value['NameOfEvent']) ? $value['NameOfEvent'] : ''; ?>
                                </td>
                                <td data-title="Venue">
                                    <?php echo!empty($value['Venue']) ? $value['Venue'] : ''; ?>
                                </td>
                                <td data-title="From Date">
                                    <?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?>
                                </td>
                                <td data-title="	To Date">
                                    <?php echo!empty($value['ToDate']) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?>
                                </td>
                                <td data-title="Self Status">
                                    <?php echo!empty($value['SelfStatus']) ? $value['SelfStatus'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>


            <?php if (!empty($foreignTour)) { ?>
			<div id="ft" class="hideTitle">
                <h2 class="data-coach">Foreign Tours</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">From Date</th>
                            <th class="numeric">To Date</th>
                            <th class="numeric">Country</th>
                            <th class="numeric">Tournament</th>
                            <th class="numeric">Achievements</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($foreignTour as $key => $value) { ?>
                            <tr>
                                <td data-title="From Date">
                                    <?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?>
                                </td>
                                <td data-title="To Date">
                                    <?php echo!empty($value['ToDate']) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?>
                                </td>
                                <td data-title="Country">
                                    <?php echo!empty($value['Country']) ? $value['Country'] : ''; ?>
                                </td>
                                <td data-title="Tournament">
                                    <?php echo!empty($value['Tournament']) ? $value['Tournament'] : ''; ?>
                                </td>
                                <td data-title="Achievements">
                                    <?php echo!empty($value['Achievements']) ? $value['Achievements'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>

            <?php if (!empty($OtherResearch)) { ?>
			<div id="orwpu" class="hideTitle">
                <h2 class="data-coach">Other Research Works Published/Unpublished</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Articles</th>
                            <th class="numeric">Books</th>
                            <th class="numeric">News Papers</th>
                            <th class="numeric">Magazine</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($foreignTour as $key => $value) { ?>
                            <tr>
                                <td data-title="Articles">
                                    <?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?>
                                </td>
                                <td data-title="Books">
                                    <?php echo!empty($value['ToDate']) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?>
                                </td>
                                <td data-title="News Papers">
                                    <?php echo!empty($value['Country']) ? $value['Country'] : ''; ?>
                                </td>
                                <td data-title="Magazine">
                                    <?php echo!empty($value['Tournament']) ? $value['Tournament'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>


            <?php if (!empty($AwardRecieved)) { ?>
			<div id="ahr" class="hideTitle">
                <h2 class="data-coach">Awards /Honours Received</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Name Of The Award</th>
                            <th class="numeric">Organization</th>
                            <th class="numeric">Venue</th>
                            <th class="numeric">PurposeOfAward</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($AwardRecieved as $key => $value) { ?>
                            <tr>
                                <td data-title="Name Of The Award">
                                    <?php echo!empty($value['NameOfAward']) ? $value['NameOfAward'] : ''; ?>
                                </td>
                                <td data-title="Organization">
                                    <?php echo!empty($value['Organization']) ? $value['Organization'] : ''; ?>
                                </td>
                                <td data-title="Venue">
                                    <?php echo!empty($value['Venue']) ? $value['Venue'] : ''; ?>
                                </td>
                                <td data-title="Purpose Of Award">
                                    <?php echo!empty($value['PurposeOfAward']) ? $value['PurposeOfAward'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>

            <?php if (!empty($refreeUmpireJudgeAssignment)) { ?>
			<div id="ruja" class="hideTitle">
                <h2 class="data-coach">Refree/Umpire / Judges Assignments</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Year</th>
                            <th class="numeric">Level</th>
                            <th class="numeric">Name Of The Championship</th>
                            <th class="numeric">Venue</th>
                            <th class="numeric">From Date</th>
                            <th class="numeric">To Date</th>
                            <th class="numeric">Category</th>
                            <th class="numeric">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($refreeUmpireJudgeAssignment as $key => $value) { ?>
                            <tr>
                                <td data-title="Year">
                                    <?php echo!empty($value['Year']) ? $value['Year'] : ''; ?>
                                </td>
                                <td data-title="Level">
                                    <?php echo!empty($value['LevelId']) ? $level[$value['LevelId']] : ''; ?>
                                </td>
                                <td data-title="Name Of The Championship">
                                    <?php echo!empty($value['NameOfChampionship']) ? $value['NameOfChampionship'] : ''; ?>
                                </td>
                                <td data-title="Venue">
                                    <?php echo!empty($value['Venue']) ? $value['Venue'] : ''; ?>
                                </td>
                                <td data-title="From Date">
                                    <?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?>
                                </td>
                                <td data-title="To Date">
                                    <?php echo!empty($value['ToDate']) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?>
                                </td>
                                <td data-title="Category">
                                    <?php echo!empty($value['Category']) ? $value['Category'] : ''; ?>
                                </td>
                                <td data-title="Remarks">
                                    <?php echo!empty($value['Remark']) ? $value['Remark'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>


            <?php if (!empty($qualifyRefreeJudge)) { ?>
			<div id="wqnirj" class="hideTitle">
                <h2 class="data-coach">Whether Qualified National/ International Refree/ Judge</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Level</th>
                            <th class="numeric">Name Of Course</th>
                            <th class="numeric">Previous Status</th>
                            <th class="numeric">Current Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($qualifyRefreeJudge as $key => $value) { ?>
                            <tr>
                                <td data-title="Level">
                                    <?php echo!empty($value['LevelStatusId']) ? $level[$value['LevelStatusId']] : ''; ?>
                                </td>
                                <td data-title="Name Of Course">
                                    <?php echo!empty($value['NameOfCourse']) ? $value['NameOfCourse'] : ''; ?>
                                </td>
                                <td data-title="Previous Status">
                                    <?php echo!empty($value['PreviousStatus']) ? $value['PreviousStatus'] : ''; ?>
                                </td>
                                <td data-title="Current Status">
                                    <?php echo!empty($value['CurrentStatus']) ? $value['CurrentStatus'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>


            <?php if (!empty($achievementOfTrainees)) { ?>
			<div id="at" class="hideTitle">
                <h2 class="data-coach">Achievements of Trainees</h2>
                <table class="table table-bordered table-condensed table-responsive cf">
                    <thead class="cf">
                        <tr>

                            <th class="numeric">Year</th>
                            <th class="numeric">Level</th>
                            <th class="numeric">Championship</th>
                            <th class="numeric">Venue</th>
                            <th class="numeric">From Date</th>
                            <th class="numeric">To Date</th>
                            <th class="numeric">Positionrainee</th>
                            <th class="numeric">Name Of Traninee</th>
                            <th class="numeric">Duration Coach</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($achievementOfTrainees as $key => $value) { ?>
                            <tr>
                                <td data-title="Year">
                                    <?php echo!empty($value['Year']) ? $value['Year'] : ''; ?>
                                </td>
                                <td data-title="Level">
                                    <?php echo!empty($value['LevelId']) ? $level[$value['LevelId']] : ''; ?>
                                </td>
                                <td data-title="Name Of The Championship">
                                    <?php echo!empty($value['Championship']) ? $value['Championship'] : ''; ?>
                                </td>
                                <td data-title="Venue">
                                    <?php echo!empty($value['Venue']) ? $value['Venue'] : ''; ?>
                                </td>
                                <td data-title="From Date">
                                    <?php echo!empty($value['FromDate']) ? date('d-m-Y',strtotime($value['FromDate'])) : ''; ?>
                                </td>
                                <td data-title="To Date">
                                    <?php echo!empty($value['ToDate']) ? date('d-m-Y',strtotime($value['ToDate'])) : ''; ?>
                                </td>
                                <td data-title="Positionrainee">
                                    <?php echo!empty($value['Positionrainee']) ? $value['Positionrainee'] : ''; ?>
                                </td>
                                <td data-title="NameOfTraninee">
                                    <?php echo!empty($value['NameOfTraninee']) ? $value['NameOfTraninee'] : ''; ?>
                                </td>
                                <td data-title="Duration Coach">
                                    <?php echo!empty($value['Duration_coach']) ? $value['Duration_coach'] : ''; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
            <?php } ?>
        </div>
    </div>  
</div>
