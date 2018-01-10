<?php $meta_data=SiteHelpers::get_meta_data('acsprofile',$acs_id);
 ?>
<div class="title-bar red-bar">ACS & YA Profile</div>
<div class="profile-bg sr-profile pad15 clearfix">
<?php if(!empty($acs_fb_link)): ?>
  <div class="like-box"><a href="<?php echo $acs_fb_link;?>"><img src="<?php echo base_url() ?>administrator/themes/mango/images/like-no.png" class="img-responsive" /></a></div>
 <?php endif;?> 
  <div class="col-xs-12 col-sm-3 col-md-3"><img <?php if(!empty($acs_image)){?>src="<?php echo base_url(); ?>uploads/profilerImage/<?php echo $acs_image; ?>"<?php }else{ ?>src="<?php echo base_url(); ?>uploads/profilerImage/^FA4B677277FD6D95B0007D76C14AABF4BF1D1FE2E46DEE0EC4^pimgpsh_fullsize_distr.jpg"<?php } ?> width="187" height="197" alt="Sports Minister"  class="img-responsive" /></div>
  <div class="col-xs-12 col-sm-9 col-md-9">
    <h1><?php echo!empty($acs_name) ? $acs_name : ''; ?></h1>
    <div>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <?php if(!empty($acs_service)): ?>
        <tr>
          <td><strong>Service</strong></td>
          <td><?php echo $acs_service; ?></td>
        </tr>
		<?php endif; ?>
        <?php if(!empty($acs_batch)): ?>
        <tr>
          <td><strong>Batch</strong></td>
          <td><?php echo $acs_batch; ?></td>
        </tr>
		<?php endif; ?>
		<?php if(!empty($acs__office_address)): ?>
        <tr>
          <td><strong>Office Address</strong></td>
          <td><?php echo $acs__office_address;?></td>
        </tr>
        <?php endif; ?>
 		<?php if(!empty($acs_residence)):?>
        <tr>
          <td><strong>Residence</strong></td>
          <td><?php echo $acs_residence; ?></td>
        </tr>
        <?php endif; ?>
        <?php if(!empty($acs_email)):?>
		<tr>
          <td><strong>E-mail</strong></td>
          <td><?php echo $acs_email; ?></td>
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
<?php if(!empty($meta_data['acs_qualification']))
		{
		?>	
<h2>ACADEMIC QUALIFICATION</h2>
<p><?php echo $meta_data['acs_qualification'] ?></p>
	<?php } ?>
    
<?php if(!empty($meta_data['acs_biography']))
		{
		?>	
<h2>Biography</h2>
<p><?php echo $meta_data['acs_biography'] ?></p>
	<?php } ?>
<?php if(!empty($meta_data['acs_books']))
		{
		?>	
<h2>AUTHORED Books</h2>
<p><?php echo $meta_data['acs_books'] ?></p>
	<?php } ?>
<?php if(!empty($meta_data['acs_experience']))
		{
		?>	
<h2>Work Experience</h2>
<p><?php echo $meta_data['acs_experience'] ?></p>
	<?php } ?>

<?php		
	}
	?>
</div>