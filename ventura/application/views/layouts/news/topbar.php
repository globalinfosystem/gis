<header id="header">
	<div class="header_bottom_top">	
			<div class="col-xs-12 col-sm-12 col-md-12">		
					<div class="row">
						<div class="col-md-12"></div>
						<div class="col-md-2">
							<div class="logotxt">
								<a href="<?php echo base_url(); ?>" > <img class="img-responsive" alt="" src="<?php echo base_url(); ?>design/images/ventura_logo.jpg" border="0"></a>
							</div>
						</div> 
					</div>
           </div>
		   
	</div>		
</header>

	<?php if(isset($_SESSION['user']['registration_id'])){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12">		
					<div class="row">				
						<div class="title-bar green-bar"><?php if (!empty($_SESSION['user']['registration_username'])) { ?> <?php echo $_SESSION['user']['registration_username']; ?><?php } ?>'s <span id="heading_text">Account</span>
							<?php if($this->router->fetch_class() == 'account' && $this->router->fetch_method() == 'index') { ?>
							<?php } else { ?>
							<nav class="navbar navbar-default" role="navigation" style="width: 300px;float: right;background: none;padding: 0px;line-height: 28px;color: #fff !important;">
							  <div class="container-fluid">
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								   <ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
									  <a href="<?php echo base_url(); ?>account" class="dropdown-toggle" data-toggle="dropdown">
									  <?php if(!empty($_SESSION['user']['registration_pic'])){ ?>
											<img src="<?php echo base_url();?>uploads/registration_pics/<?php echo !empty($_SESSION['user']['registration_pic']) ? $_SESSION['user']['registration_pic'] : '-';?>" width="30px" height="30px" style="border-radius:15px;" />
										<?php } ?>
								<b class="caret"></b></a>
									  <ul class="dropdown-menu">
										<li><a href="<?php echo base_url(); ?>account" >Dashboard</a></li>
										<li><a href="<?php echo base_url(); ?>account/details">My Account</a></li>
										<li><a href="<?php echo base_url(); ?>account/username">Update Username</a></li>
										<li><a href="<?php echo base_url(); ?>account/changepassword">Change Password</a></li>
										<li><a href="<?php echo base_url(); ?>account/addbankaccount">Add My Account Details</a></li>
										<li class="divider"></li>
										<li><a href="<?php echo base_url(); ?>account/associate">I want to register as an associate</a></li>
										<li><a href="<?php echo base_url(); ?>account">Make Payment</a></li>
										<li><a href="<?php echo base_url(); ?>account/feedback">Feedback / Suggentions</a></li>
										<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
									  </ul>
									</li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>