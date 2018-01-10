<?php $meta_data=SiteHelpers::get_meta_data('jtdirectorprofile',$jt_director_id);
 ?>
<div class="title-bar red-bar">Director's Profile</div>
<div class="profile-bg sr-profile pad15 clearfix">
<?php if(!empty($jt_director_fb_link)): ?>
  <div class="like-box"><a href="<?php echo $jt_director_fb_link;?>"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></a></div>
 <?php endif;?> 
  <div class="col-xs-12 col-sm-3 col-md-3"><img <?php if(!empty($jt_director_image)){?>src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $jt_director_image; ?>"<?php }else{ ?>src="<?php echo base_url(); ?>uploads/profilerImage/^FA4B677277FD6D95B0007D76C14AABF4BF1D1FE2E46DEE0EC4^pimgpsh_fullsize_distr.jpg"<?php } ?> width="187" height="197" alt="Sports Minister"  class="img-responsive" /></div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <h1><?php echo!empty($jt_director_name) ? $jt_director_name : ''; ?></h1>
    <div>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <?php if(!empty($jt_director_service)): ?>
        <tr>
          <td><strong>Service</strong></td>
          <td><?php echo $jt_director_service; ?></td>
        </tr>
		<?php endif; ?>
        <?php if(!empty($jt_director_batch)): ?>
        <tr>
          <td><strong>Batch</strong></td>
          <td><?php echo $jt_director_batch; ?></td>
        </tr>
		<?php endif; ?>
		<?php if(!empty($jt_director_fathername)): ?>
        <tr>
          <td><strong>Father's Name</strong></td>
          <td><?php echo $jt_director_fathername;?></td>
        </tr>
        <?php endif; ?>
      <?php if(!empty($jt_director_dob)):?>
        <tr>
          <td><strong>Date of Birth</strong></td>
          <td><?php echo date('d-M-Y',strtotime($jt_director_dob)); ?></td>
        </tr>
        <?php endif; ?>
        
      <?php if(!empty($jt_director_residence)):?>
        <tr>
          <td><strong>Residence</strong></td>
          <td><?php echo $jt_director_residence; ?></td>
        </tr>
        <?php endif; ?>
             </table>
    </div>
  </div>
</div>
<div class="officer-profile">
<?php if(!empty($meta_data))
	{
?>
<?php if(!empty($jt_director_education))
		{
		?>	
<h2>ACADEMIC QUALIFICATION</h2>
<p><?php echo $jt_director_education; ?></p>
	<?php } ?>
    
<?php if(!empty($meta_data['jt_director_biography']))
		{
		?>	
<h2>Biography</h2>
<p><?php echo $meta_data['jt_director_biography'] ?></p>
	<?php } ?>
<?php if(!empty($meta_data['jt_director_books']))
		{
		?>	
<h2>AUTHORED Books</h2>
<p><?php echo $meta_data['jt_director_books'] ?></p>
	<?php } ?>
<?php if(!empty($meta_data['jt_director_experience']))
		{
		?>	
<h2>Work Experience</h2>
<p><?php echo $meta_data['jt_director_experience'] ?></p>
	<?php } ?>

<?php		
	}
	?>
</div>