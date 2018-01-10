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
width: 100%; text-align:left color: rgb(255, 255, 255); text-transform: uppercase; background: red none repeat scroll 0% 0%; font-size: 11px; font-weight: bold; padding: 6px; margin-top: 1px;
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
            <div class="title-bar orange-bar" style="text-transform: uppercase; font-size:24px;  height: 45px; padding: 5px;  text-transform: uppercase;">Player's  Detail</div>
            <?php if (!empty($general_info)): ?>
                <div class="profile-bg mini-profile pad15 clearfix" style="border:3px solid #f9d2b1 !important;">
				<div class="col-xs-12 col-sm-12 col-md-12"><h1 style=" background: #24a400 none repeat scroll 0 0; color: #fff !important;  font-size: 18px;  padding: 10px;"><?php //echo (!empty($general_info['Title'])) ? $titles[$general_info['Title']] : ''; ?> <?php echo (!empty($general_info['FirstName'])) ? $general_info['FirstName'] : ''; ?> <?php echo (!empty($general_info['MiddleName'])) ? $general_info['MiddleName'] : ''; ?> <?php echo (!empty($general_info['LastName'])) ? $general_info['LastName'] : ''; ?></h1></div>
                    <div class="col-xs-12 col-sm-3 col-md-3"><img src="http://hrmsdemo.gravitasoft.com/Attachements/Player/PlayerGeneralInfodp/<?php echo!empty($general_info['Path']) ? $general_info['Path'] : 'noimg.png'; ?>" width="288" height="215" alt="Sports Minister"  class="img-responsive" /></div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h1></h1>
                        <div class="profile-text">
                            <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:17px;">

                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Father's Name</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['FatherName'])) ? $general_info['FatherName'] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">District</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($districts[$general_info['DistrictId']])) ? $districts[$general_info['DistrictId']] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Game</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($games[$general_info['GameId']])) ? $games[$general_info['GameId']] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Player Type</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($level[$general_info['TypeOfPlayerId']])) ? $level[$general_info['TypeOfPlayerId']] : '--'; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">SPAT Player</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($spat[$general_info['IsSPAT']])) ? $spat[$general_info['IsSPAT']] : '--'; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Date of Birth</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['DateOfBirth'])) ? date('d-m-Y', strtotime($general_info['DateOfBirth'])) : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Gender</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($gender[$general_info['Gender']])) ? $gender[$general_info['Gender']] : ''; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Mobile No</div><div class="col-xs-12 col-sm-3 col-md-3">:</div> </strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['MobileNo'])) ? $general_info['MobileNo'] : '--'; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Email ID</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top"><?php echo (!empty($general_info['Email'])) ? $general_info['Email'] : '--'; ?></td>
                                </tr>
								<tr>
                                    <td valign="top"><strong><div class="col-xs-12 col-sm-7 col-md-7">Aadhar Card</div><div class="col-xs-12 col-sm-3 col-md-3">:</div></strong></td>
                                    <td valign="top">1234567890</td>
                                </tr>

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
						<div class="headingTitle" onclick="showhideTitle('sap')">Sports Achievements as Player</div>
						<div class="headingTitle" onclick="showhideTitle('th')">Training History</div>
						<div class="headingTitle" onclick="showhideTitle('orw')">Other Research Work</div>
						<div class="headingTitle" onclick="showhideTitle('ahr')">Awards / Honours Received</div>
						<div class="headingTitle" onclick="showhideTitle('ft')">Foreign Tours</div>
						<div class="headingTitle" onclick="showhideTitle('at')">Achievements of Trainees</div>
					</div>
                </div>
            <?php endif; ?>
            <div>
                
                <?php if (!empty($familydetails)): ?>
				<div id="fd" class="hideTitle">
                    <h2 class="data-coach">Family Details</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Name</th>
                                <th>Relation</th>
                                <th>Age</th>
                                <th>Status</th>
                            </tr>

                            <?php foreach ($familydetails as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['Name']) ? $rows['Name'] : ''; ?></td>
                                    <td><?php echo!empty($relation[$rows['Relation']]) ? $relation[$rows['Relation']] : ''; ?></td>
                                    <td><?php echo!empty($rows['Age']) ? $rows['Age'] : ''; ?></td>
                                    <td><?php echo!empty($relativestatus[$rows['Status']]) ? $relativestatus[$rows['Status']] : ''; ?></td>
                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>

                <?php if (!empty($permanent_address)): ?>
				<div id="pa" class="hideTitle">
                    <h2 class="data-coach">Permanent Address</h2>
                    <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                        <tr>
                            <th>Address 1</th><td><?php echo!empty($permanent_address['Address1']) ? $permanent_address['Address1'] : '--'; ?></td>
                            <th>State</th><td><?php echo!empty($state[$permanent_address['StateId']]) ? $state[$permanent_address['StateId']] : '--'; ?></td>
                        </tr>
                        <tr>
                            <th>Address 2</th><td><?php echo!empty($permanent_address['Address2']) ? $permanent_address['Address2'] : '--'; ?></td>
                            <th>District</th><td><?php echo!empty($districts[$permanent_address['DistrictId']]) ? $districts[$permanent_address['DistrictId']] : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Tehsil</th><td><?php echo!empty($permanent_address['Tehsil']) ? $permanent_address['Tehsil'] : '--'; ?></td>
                            <th>City</th><td><?php echo!empty($permanent_address['CityName']) ? $permanent_address['CityName'] : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Police Station</th><td><?php echo!empty($permanent_address['PoliceStation']) ? $permanent_address['PoliceStation'] : '--'; ?></td>
                            <th>Contact</th><td><?php echo!empty($permanent_address['ContactNo']) ? $permanent_address['ContactNo'] : ''; ?></td>
                        </tr>
                        <tr>
                            <th colspan="2">Country</th><td colspan="2"><?php echo!empty($permanent_address['Country']) ? $permanent_address['Country'] : '--'; ?></td>
                        </tr>
                    </table>
				</div>
                <?php endif; ?>

                <?php if (!empty($correspondance_address)): ?>
				<div id="ca" class="hideTitle">
                    <h2 class="data-coach">Correspondance Address</h2>
                    <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                        <tr>
                            <th>Address 1</th><td><?php echo!empty($correspondance_address['Address1']) ? $correspondance_address['Address1'] : '--'; ?></td>
                            <th>State</th><td><?php echo!empty($state[$correspondance_address['StateId']]) ? $state[$correspondance_address['StateId']] : '--'; ?></td>
                        </tr>
                        <tr>
                            <th>Address 2</th><td><?php echo!empty($correspondance_address['Address2']) ? $correspondance_address['Address2'] : '--'; ?></td>
                            <th>District</th><td><?php echo!empty($districts[$correspondance_address['DistrictId']]) ? $districts[$correspondance_address['DistrictId']] : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Tehsil</th><td><?php echo!empty($correspondance_address['Tehsil']) ? $correspondance_address['Tehsil'] : '--'; ?></td>
                            <th>City</th><td><?php echo!empty($correspondance_address['CityName']) ? $correspondance_address['CityName'] : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Police Station</th><td><?php echo!empty($correspondance_address['PoliceStation']) ? $correspondance_address['PoliceStation'] : '--'; ?></td>
                            <th>Contact</th><td><?php echo!empty($correspondance_address['ContactNo']) ? $correspondance_address['ContactNo'] : ''; ?></td>
                        </tr>
                        <tr>
                            <th colspan="2">Country</th><td colspan="2"><?php echo!empty($correspondance_address['Country']) ? $correspondance_address['Country'] : '--'; ?></td>
                        </tr>
                    </table>
				</div>
                <?php endif; ?>




                <?php if (!empty($education)): ?>
				<div id="eq" class="hideTitle">
                    <h2 class="data-coach">Education Qualification</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Class</th>
                                <th>School/College</th>
                                <th>Stream</th>
                                <th>Board/University</th>
                                <th>Year of Passing</th>

                            </tr>

                            <?php foreach ($education as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['Class']) ? $rows['Class'] : ''; ?></td>
                                    <td><?php echo!empty($rows['School']) ? $rows['School'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Stream']) ? $rows['Stream'] : ''; ?></td>
                                    <td><?php echo!empty($rows['BoardUniversity']) ? $rows['BoardUniversity'] : ''; ?></td>
                                    <td><?php echo!empty($rows['YearofPassing']) ? $rows['YearofPassing'] : ''; ?></td>
                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>

                <?php if (!empty($sportsqualificaion)): ?>
				<div id="sq" class="hideTitle">
                    <h2 class="data-coach">Sports Qualification</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Name of Qualification</th>
                                <th>School/College</th>
                                <th>Stream</th>
                                <th>Board/University</th>
                                <th>Year of Passing</th>

                            </tr>

                            <?php foreach ($sportsqualificaion as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['Class']) ? $rows['Class'] : ''; ?></td>
                                    <td><?php echo!empty($rows['School']) ? $rows['School'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Stream']) ? $rows['Stream'] : ''; ?></td>
                                    <td><?php echo!empty($rows['BoardUniversity']) ? $rows['BoardUniversity'] : ''; ?></td>
                                    <td><?php echo!empty($rows['YearofPassing']) ? $rows['YearofPassing'] : ''; ?></td>
                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>



                <?php if (!empty($otherqualificaion)): ?>
				<div id="oq" class="hideTitle">
                    <h2 class="data-coach">Other Qualification</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Class</th>
                                <th>School/College</th>
                                <th>Stream</th>
                                <th>Board/University</th>
                                <th>Year of Passing</th>

                            </tr>

                            <?php foreach ($otherqualificaion as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['Class']) ? $rows['Class'] : ''; ?></td>
                                    <td><?php echo!empty($rows['School']) ? $rows['School'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Stream']) ? $rows['Stream'] : ''; ?></td>
                                    <td><?php echo!empty($rows['BoardUniversity']) ? $rows['BoardUniversity'] : ''; ?></td>
                                    <td><?php echo!empty($rows['YearofPassing']) ? $rows['YearofPassing'] : ''; ?></td>
                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>

                <?php if (!empty($achievements)): ?>
				<div id="sap" class="hideTitle">
                    <h2 class="data-coach">Sports Achievements as Player</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Championship</th>
                                <th>Venue</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Position</th>
                                <th>Medal</th>
                            </tr>

                            <?php foreach ($achievements as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['Championship']) ? $rows['Championship'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Venue']) ? $rows['Venue'] : ''; ?></td>
                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-Y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-Y', strtotime($rows['ToDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['Postion']) ? $rows['Postion'] : ''; ?></td>
                                    <td><?php echo!empty($medals[$rows['MedalId']]) ? $medals[$rows['MedalId']] : ''; ?></td>
                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>

                <?php if (!empty($traininghistory)): ?>
				<div id="th" class="hideTitle">
                    <h2 class="data-coach">Training History</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Course Name</th>
                                <th>Venue</th>
                                <th>From</th>
                                <th>To</th>

                            </tr>

                            <?php foreach ($traininghistory as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['CourseName']) ? $rows['CourseName'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Venue']) ? $rows['Venue'] : ''; ?></td>
                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-Y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-Y', strtotime($rows['ToDate'])) : ''; ?></td>

                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>
                <?php if (!empty($otherwork)): ?>
				<div id="orw" class="hideTitle">
                    <h2 class="data-coach">Other Research Work</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Articles</th>
                                <th>Books</th>
                                <th>News Papers</th>
                                <th>Magazines</th>

                            </tr>

                            <?php foreach ($otherwork as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['Articles']) ? $rows['Articles'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Books']) ? $rows['Books'] : ''; ?></td>
                                    <td><?php echo!empty($rows['NewsPapers']) ? $rows['NewsPapers'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Magazine']) ? $rows['Magazine'] : ''; ?></td>

                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>
                <?php if (!empty($awardshounors)): ?>
				<div id="ahr" class="hideTitle">
                    <h2 class="data-coach">Awards/Honours Received</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Awards/Honours </th>
                                <th>By Organization</th>
                                <th>On</th>
                                <th>Venue</th>

                            </tr>

                            <?php foreach ($awardshounors as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['NameOfAward']) ? $rows['NameOfAward'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Organization']) ? $rows['Organization'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Date']) ? date('d-m-Y', strtotime($rows['Date'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['Venue']) ? $rows['Venue'] : ''; ?></td>

                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>
                <?php if (!empty($trainee_achievement)): ?>
				<div id="at" class="hideTitle">
                    <h2 class="data-coach">Achievements of Trainees</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>Trainee</th>
                                <th>Level</th>
                                <th>Championship</th>
                                <th>Position</th>
                                <th>Year</th>
                                <th>Venue</th>

                                <th>From</th>
                                <th>To</th>

                            </tr>

                            <?php foreach ($trainee_achievement as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['NameOfTraninee']) ? $rows['NameOfTraninee'] : ''; ?></td>
                                    <td><?php echo!empty($level[$rows['LevelId']]) ? $level[$rows['LevelId']] : ''; ?></td>
                                    <td><?php echo!empty($rows['Championship']) ? $rows['Championship'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Positionrainee']) ? $rows['Positionrainee'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Year']) ? $rows['Year'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Venue']) ? $rows['Venue'] : ''; ?></td>

                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-Y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-Y', strtotime($rows['ToDate'])) : ''; ?></td>


                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>

                <?php if (!empty($foreigntours)): ?>
				<div id="ft" class="hideTitle">
                    <h2 class="data-coach">Foreign Tours</h2>
                    <div class="profile-text">
                        <table width="100%" border="0" class="table table-striped table-hover" cellspacing="0" cellpadding="2">
                            <tr>
                                <th>From</th>
                                <th>To</th>
                                <th>Country</th>
                                <th>Tournament</th>
                                <th>Achievements</th>
                            </tr>

                            <?php foreach ($foreigntours as $rows): ?>
                                <tr>
                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-Y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-Y', strtotime($rows['ToDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['Country']) ? $rows['Country'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Tournament']) ? $rows['Tournament'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Achievements']) ? $rows['Achievements'] : ''; ?></td>



                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
				</div>
                <?php endif; ?>

            </div>
        </div>
    </div>  
</div>
