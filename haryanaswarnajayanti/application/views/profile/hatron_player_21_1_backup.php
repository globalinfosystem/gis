<div class="ministers-blk">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
            <div class="title-bar orange-bar">Player Profile</div>
            <div class="profile-bg mini-profile pad15 clearfix">
     
                <div class="col-xs-12 col-sm-3 col-md-3"><img src="http://hrmsdemo.gravitasoft.com/Attachements/Player/PlayerGeneralInfodp/<?php echo!empty($general_info['Path']) ? $general_info['Path'] : 'noimg.png'; ?>" width="288" height="215" alt="Sports Minister"  class="img-responsive" /></div>
                <div class="col-xs-12 col-sm-9 col-md-9">

                    <h1>Profile of <?php echo (!empty($general_info['Title'])) ? $titles[$general_info['Title']] : ''; ?> <?php echo (!empty($general_info['FirstName'])) ? $general_info['FirstName'] : ''; ?> <?php echo (!empty($general_info['MiddleName'])) ? $general_info['MiddleName'] : ''; ?> <?php echo (!empty($general_info['LastName'])) ? $general_info['LastName'] : ''; ?></h1>
                    <div class="profile-text">
                        <table width="100%" border="0" cellspacing="0" cellpadding="2">
                     
                            <tr>
                                <td valign="top"><strong>Father's Name:</strong></td>
                                <td valign="top"><?php echo (!empty($general_info['FatherName'])) ? $general_info['FatherName'] : ''; ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>District:</strong></td>
                                <td valign="top"><?php echo (!empty($districts[$general_info['DistrictId']])) ? $districts[$general_info['DistrictId']] : ''; ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Game:</strong></td>
                                <td valign="top"><?php echo (!empty($games[$general_info['GameId']])) ? $games[$general_info['GameId']] : ''; ?></td>
                            </tr>
                             <tr>
                                <td valign="top"><strong>Player Type:</strong></td>
                                <td valign="top"><?php echo (!empty($level[$general_info['TypeOfPlayerId']])) ? $level[$general_info['TypeOfPlayerId']] : '--'; ?></td>
                            </tr>
                             <tr>
                                <td valign="top"><strong>SPAT Player:</strong></td>
                                <td valign="top"><?php echo (!empty($spat[$general_info['IsSPAT']])) ? $spat[$general_info['IsSPAT']] : '--'; ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Date of Birth:</strong></td>
                                <td valign="top"><?php echo (!empty($general_info['DateOfBirth'])) ? date('d-m-Y', strtotime($general_info['DateOfBirth'])) : ''; ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Gender:</strong></td>
                                <td valign="top"><?php echo (!empty($gender[$general_info['Gender']])) ? $gender[$general_info['Gender']] : ''; ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Mobile No: </strong></td>
                                <td valign="top"><?php echo (!empty($general_info['MobileNo'])) ? $general_info['MobileNo'] : '--'; ?></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Email ID:</strong></td>
                                <td valign="top"><?php echo (!empty($general_info['Email'])) ? $general_info['Email'] : '--'; ?></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div>

                <?php if (!empty($familydetails)): ?>
                    <h2>
                        Family Details</h2>
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

                <?php endif; ?>

                <?php if (!empty($permanent_address)): ?>
                    <h2>
                        Permanent Address</h2>
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

                <?php endif; ?>

                <?php if (!empty($correspondance_address)): ?>
                    <h2>
                        Correspondance Address</h2>
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

                <?php endif; ?>




                <?php if (!empty($education)): ?>
                    <h2>Education Qualification</h2>
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
                <?php endif; ?>

                <?php if (!empty($sportsqualificaion)): ?>
                    <h2>Sports Qualification</h2>
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
                <?php endif; ?>



                <?php if (!empty($otherqualificaion)): ?>
                    <h2>Other Qualification</h2>
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
                <?php endif; ?>

                <?php if (!empty($achievements)): ?>
                    <h2>Sports Achievements as Player</h2>
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
                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-y', strtotime($rows['ToDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['Postion']) ? $rows['Postion'] : ''; ?></td>
                                    <td><?php echo!empty($medals[$rows['MedalId']]) ? $medals[$rows['MedalId']] : ''; ?></td>
                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($traininghistory)): ?>
                    <h2>Training History</h2>
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
                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-y', strtotime($rows['ToDate'])) : ''; ?></td>

                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
                <?php endif; ?>
                <?php if (!empty($otherwork)): ?>
                    <h2>Other Research Work</h2>
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
                <?php endif; ?>
                <?php if (!empty($awardshounors)): ?>
                    <h2>Awards/Honours Received</h2>
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
                                    <td><?php echo!empty($rows['Date']) ? date('d-m-y', strtotime($rows['Date'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['Venue']) ? $rows['Venue'] : ''; ?></td>

                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
                <?php endif; ?>
                <?php if (!empty($trainee_achievement)): ?>
                    <h2>Achievements of Trainees: International/National /State</h2>
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

                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-y', strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-y', strtotime($rows['ToDate'])) : ''; ?></td>


                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
                <?php endif; ?>
                    
                      <?php if (!empty($foreigntours)):  ?>
                    <h2>Foreign Tours</h2>
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
                                    <td><?php echo!empty($rows['FromDate']) ? date('d-m-y',strtotime($rows['FromDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['ToDate']) ? date('d-m-y',strtotime($rows['ToDate'])) : ''; ?></td>
                                    <td><?php echo!empty($rows['Country']) ? $rows['Country'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Tournament']) ? $rows['Tournament'] : ''; ?></td>
                                    <td><?php echo!empty($rows['Achievements']) ? $rows['Achievements'] : ''; ?></td>
                              


                                </tr>                          
                            <?php endforeach; ?>

                        </table>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>  
</div>
