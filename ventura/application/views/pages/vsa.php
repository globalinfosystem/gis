<section id="contentSection">
    <div class="single_post_content_services" style="min-height:auto;">
        <h2><span>Ventura - A group of venture capitalist</span></h2>
        <div class="col-lg-12 col-md-12 col-sm-12">
			<?php if(isset($_SESSION['user']['registration_id'])){ ?>
			<div class="col-md-6">
				<a href="<?php echo base_url(); ?>account"><button class="button" style="width:100%; min-height:300px;"><h1>Account</h1></button></a>
			</div>
			<div class="col-md-6">
				<a href="<?php echo base_url(); ?>login/logout"><button class="button" style="width:100%; min-height:300px;"><h1>Logout</h1></button></a>
			
			</div>
			<?php }else{ ?>
			<div class="col-md-6">
				<a href="<?php echo base_url(); ?>register"><button class="button" style="width:100%; min-height:300px;"><h1>Registration</h1>
					</button></a>
			</div>
			<div class="col-md-6">
				<a href="<?php echo base_url(); ?>login"><button class="button" style="width:100%; min-height:300px;"><h1>Login</h1>
</button></a>
			</div>
			<?php } ?>
        </div>
    </div>


<div class="single_post_content_services" style="min-height:auto;">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<!--<section class="jk-slider">
			<div id="carousel-example" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active"> <a href="#"><img class="item_1" src="uploads/images/slide1.jpg" /></a> </div>
					<div class="item"> <a href="#"><img class="item_1" src="uploads/images/slide2.jpg" /></a> </div>
				</div>
			</div>
		</section>-->
	</div>
</div>
</section>	
