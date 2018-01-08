<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>My Dashbaord</span></h2>
        <div class="row">
				<?php if ($this->session->flashdata('error')) { ?>
					<div class="alert alert-danger">
						<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
					</div>
				<?php } ?>
				
				<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success">
						<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php } ?>
<style type="text/css">
.box{ margin:30px; }
.box > .icon { text-align: center; position: relative; }
.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #63B76C; vertical-align: middle; }
.box > .icon:hover > .image { background: #333; }
.box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
.box > .icon:hover > .image > i { color: white !important; }
.box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
.box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 16px; color: #222; font-weight: 500; }
.box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
.box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
.box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
</style>

        <!-- Boxes de Acoes -->
    	 <div class="col-xs-12 col-sm-6 col-lg-4 mainbox">
			<div class="box"  style="background-color:#f3b863;">							
				<div class="icon">
					<div class="info">
						<a href="<?php echo base_url();?>account/details"><h3 class="title">My Account</h3>
						<p></p>
						<div class="more">
						</div>
						</a>
					</div>
				</div>
			</div> 
		</div>
			
        <div class="col-xs-12 col-sm-6 col-lg-4 mainbox">
			<div class="box"  style="background-color:#f9cb98;">							
				<div class="icon">
					<div class="info">
						<a href="<?php echo base_url();?>account/addbankaccount"><h3 class="title">Add My Account Details</h3>
						<p></p>
						<div class="more">
						</div>
						</a>
					</div>
				</div>
			</div> 
		</div>
			
         <div class="col-xs-12 col-sm-6 col-lg-4 mainbox">
			<div class="box"  style="background-color:#b5ffb5;">							
				<div class="icon">
					<div class="info">
						<a href="<?php echo base_url();?>account/associate"><h3 class="title">I want to register as an associate</h3>
						<p></p>
						<div class="more">
						</div>
						</a>
					</div>
				</div>
			</div> 
		</div>
	    
		 <div class="col-xs-12 col-sm-6 col-lg-4 mainbox">
			<div class="box"  style="background-color:#dbb384;">							
				<div class="icon">
					<div class="info">
						<a href="<?php echo base_url();?>account/makepayment"><h3 class="title">Make Payment</h3>
						<p></p>
						<div class="more">
						</div>
						</a>
					</div>
				</div>
			</div> 
		</div>
		
		 <div class="col-xs-12 col-sm-6 col-lg-4 mainbox">
			<div class="box"  style="background-color:#b5ffb5;">							
				<div class="icon">
					<div class="info">
						<a href="<?php echo base_url();?>account/feedback"><h3 class="title">Feedback / Suggentions</h3>
						<p></p>
						<div class="more">
						</div>
						</a>
					</div>
				</div>
			</div> 
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-4 mainbox">
			<div class="box"  style="background-color:#f3b863;">							
				<div class="icon">
					<div class="info">
						<a href="<?php echo base_url();?>login/logout"><h3 class="title">Logout</h3>
						<p></p>
						<div class="more">
						</div>
						</a>
					</div>
				</div>
			</div> 
		</div>
		<!-- /Boxes de Acoes -->
			
		</div>
	</div>
</section>
 

<?php $this->load->view('layouts/'.CNF_THEME.'/footer'); ?>   