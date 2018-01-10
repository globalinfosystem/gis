
    <div class="title-bar blue-bar">Player's Details</div>
    <div class="profile-bg aw-profile pad15 clearfix">
        <div class="like-box"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <?php if (!empty($profiler_image)) { ?>
                <img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $profiler_image; ?>" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } else { ?>
                <img src="<?php echo base_url() ?>uploads/profilerImage/no-user.png" width="187" height="197" alt="<?php echo!empty($profiler_name) ? $profiler_name : ''; ?>"  class="img-responsive" />
            <?php } ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <h1><?php echo!empty($profiler_name) ? $profiler_name : ''; ?></h1>
            <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                    <tr>
                        <td><strong>Father’s Name:</strong></td>
                        <td><?php echo!empty($profiler_father_name) ? $profiler_father_name : ''; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Date of Birth:</strong></td>
                        <td><?php echo!empty($profiler_d_o_b) ? date('d M Y', strtotime($profiler_d_o_b)) : ''; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nationality: </strong></td>
                        <td><?php echo!empty($profiler_nationality) ? $profiler_nationality : '--'; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Height:</strong></td>
                        <td><?php echo!empty($profiler_height) ? $profiler_height : '--'; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Occupation:</strong></td>
                        <td><?php echo!empty($profiler_occupation) ? $profiler_occupation : '--'; ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <div class="all-profile">
        <h2>Biography</h2>
        <p><?php echo!empty($profiler_bio) ? $profiler_bio : '--'; ?></p>
        <h2>Career</h2>
        <p><?php echo!empty($profiler_career) ? $profiler_career : '--'; ?></p>
    </div>
        <?php if (!empty($achivement_data)) {  ?>
        <h2>Achievements</h2>
      <div class="tabbing">
      <div class="responsive-tabs">
      <?php if(!empty($achivement_medals)){
      foreach($achivement_medals as $medals)
      {

      ?>
      <h2><?php echo $medals['medal_name'];?></h2>
      <div>
      <div class="top-space">
      <table class=" table table-striped table-bordered table-responsive ">
      <thead>
      <tr>
      <th align="center" style="text-align:center !important;">Championship</th>
      <th align="center" style="text-align:center !important;">GameType</th>
      <th align="center" style="text-align:center !important;">Place</th>
      <th align="center" style="text-align:center !important;">Year</th>

      </tr>
      </thead>
      <tbody>
      <?php $get_achievemnt_data=$this->Achievementsmodel->get_achievements_by_medal_and_player_id($medals['medal_id'],$profiler_id);

      if(!empty($get_achievemnt_data))
      {
      foreach($get_achievemnt_data as $data)
      {

      ?>
      <tr>
      <td align="center"><?php $categories=SiteHelpers::getCategories();
      echo !empty($categories[$data['categories_id']])?$categories[$data['categories_id']]:'';
      ?></td>
      <td align="center"><?php echo !empty($data['game_type'])?$data['game_type']:'';?></td>
      <td align="center"><?php echo !empty($data['place'])?$data['place']:''; ?></td>
      <td align="center"><?php echo !empty($data['achievement_year'])?date('Y',strtotime($data['achievement_year'])):''; ?></td>
      </tr>
      <?php
      }
      }
      ?>
      </tbody>
      </table>
      </div>
      </div>
      <?php
      }
      }
      ?>

      </div>
      </div>
      <?php
    }
    ?>
    <!--<div class="tabbing">
        <div class="responsive-tabs">
            <h2>Olympic Games</h2>
            <div>
                <div class="top-space">
                    <table class=" table table-striped table-bordered table-responsive ">
                        <thead>
                            <tr>
                                <th align="center" style="text-align:center !important;">Medals</th>
                                <th align="center" style="text-align:center !important;">Year & Place</th>
                                <th align="center" style="text-align:center !important;">Game Type</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="gold-medal" align="center">Gold</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>

                            </tr>
                            <tr>
                                <td class="silver-medal" align="center">Silver</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>
                            </tr>
                            <tr>
                                <td class="bronze-medal" align="center">Bronze</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <h2>Commonwealth Games</h2>
            <div>
                <div class="top-space">
                    <table class=" table table-striped table-bordered table-responsive ">
                        <thead>
                            <tr>
                                <th align="center" style="text-align:center !important;">Medals</th>
                                <th align="center" style="text-align:center !important;">Year & Place</th>
                                <th align="center" style="text-align:center !important;">Game Type</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="gold-medal" align="center">Gold</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>

                            </tr>
                            <tr>
                                <td class="silver-medal" align="center">Silver</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>
                            </tr>
                            <tr>
                                <td class="bronze-medal" align="center">Bronze</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                </ol>
            </div>
            <h2>Asian Games</h2>
            <div>
                <div class="top-space">
                    <table class=" table table-striped table-bordered table-responsive ">
                        <thead>
                            <tr>
                                <th align="center" style="text-align:center !important;">Medals</th>
                                <th align="center" style="text-align:center !important;">Year & Place</th>
                                <th align="center" style="text-align:center !important;">Game Type</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="gold-medal" align="center">Gold</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>

                            </tr>
                            <tr>
                                <td class="silver-medal" align="center">Silver</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>
                            </tr>
                            <tr>
                                <td class="bronze-medal" align="center">Bronze</td>
                                <td align="center">2010 Guangzhou</td>
                                <td align="center">Middleweight</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>-->
