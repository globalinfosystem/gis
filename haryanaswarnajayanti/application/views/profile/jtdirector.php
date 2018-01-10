
<div class="title-bar red-bar"> Join Director's Profile</div>
<div class="profile-bg sr-profile pad15 clearfix">
  <div class="like-box"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></div>
  <div class="col-xs-12 col-sm-3 col-md-3"><img src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $profiler_image; ?>" width="187" height="197" alt="Sports Minister"  class="img-responsive" /></div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <h1><?php echo!empty($profiler_name) ? $profiler_name : ''; ?>,<?php echo!empty($profiler_occupation) ? $profiler_occupation : '--'; ?></h1>
    <div>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td><strong>Father’s Name</strong></td>
          <td><?php echo!empty($profiler_father_name) ? $profiler_father_name : ''; ?></td>
        </tr>
        <tr>
          <td><strong>Designation</strong></td>
          <td><?php echo!empty($profiler_occupation) ? $profiler_occupation : '--'; ?></td>
        </tr>
        <tr>
          <td><strong>Date of Birth</strong></td>
          <td><?php echo!empty($profiler_d_o_b) ? date('d M Y', strtotime($profiler_d_o_b)) : ''; ?></td>
        </tr>
        <tr>
          <td><strong>Education</strong></td>
          <td><?php echo!empty($profiler_education) ? $profiler_education : '--'; ?></td>
        </tr>
        <tr>
          <td><strong>Residence</strong></td>
          <td><?php echo!empty($profiler_address) ? $profiler_address : '--'; ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="officer-profile">
  <h2>Coming Soon !</h2>
</div>
