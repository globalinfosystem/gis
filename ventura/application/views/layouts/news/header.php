<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo isset($pageTitle) ? $pageTitle . ' | ' . CNF_APPNAME : CNF_APPNAME; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' . CNF_APPNAME : CNF_APPNAME; ?>">
        <meta name="author" content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' . CNF_APPNAME : CNF_APPNAME; ?>">
        <meta name="keyword" content="<?php echo isset($pageTitle) ? $pageTitle . ' | ' . CNF_APPNAME : CNF_APPNAME; ?>" />
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css' />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css' />
        <meta name="coveragespatial"  content="" />
        <meta name="coveragetemporal" content="" />
        <meta name="audience" content="Government Employees" />
        <meta name="coveragejurisdiction"  	  content="Haryana Government" />
        <meta name="datecreated" content="2016-11-01" />
        <meta name="datepublished" content="2016-11-01:25:00+05:30" />
        <meta name="datemodified"  content="2016-11-01" />
        <meta name="format"  content="html" />
        <meta name="language" content="eng" />
        <meta name="publisherorgname"     content="Ventura" />
        <meta name="publisherdeptname"     content="Ventura" />
        <meta name="publisheremail"     content="contact[at]chd[dot]gissoft[dot]net" />
        <meta name="publisheraddress" content="Ventura" />
        <meta name="publisherphone"    content="+91-0172-2564433" />
        <meta name="source"  content="Ventura" />
        <meta name="typeCategory" content="Contact Directory" />
        <meta name="identifier" content="text/html" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="creatoremail"  content="hareda[at]chd[dot]nic[dot]in" />
        <meta name="titleAlternate" content="Renewable Energy Department, Haryana & HAREDA" />
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/jquery.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/demo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/font.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/navbar-static-top.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/li-scroller.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/jquery.fancybox.css">
        <?php if (!empty($_SESSION['theme_name'])) { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/theme<?php echo!empty($_SESSION['theme_name']) && $_SESSION['theme_name'] != 'purple' ? '_' . $_SESSION['theme_name'] : ''; ?>.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/style<?php echo!empty($_SESSION['theme_name']) && $_SESSION['theme_name'] != 'purple' ? '_' . $_SESSION['theme_name'] : ''; ?>.css">
        <?php } else { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/theme<?php echo CNF_CURRENTTHEME; ?>.css">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/style<?php echo CNF_CURRENTTHEME; ?>.css">
        <?php } ?>

        <link href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/facebox/facebox.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/datatables/css/jquery.dataTables.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/datatables/css/dataTables.tableTools.css" />
        <!--[if lt IE 9]>
            <script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>assets/js/html5shiv.min.js"></script>
            <script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>assets/js/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/css/meanmenu.css" media="all" />
        <script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/jquery.meanmenu.js"></script> 
		<script>
			jQuery(document).ready(function () {
				jQuery('header nav').meanmenu();
			});
		</script>
    </head>
    <body> 
        <div id="cover"></div>
        <?php $this->load->view('layouts/'.CNF_THEME.'/responsiveHeaderMenu'); ?>
        <!--<div id="preloader">
            <div id="status">&nbsp;</div>
        </div>-->

        <!--<div class="blue-prt">	
            <div class="col-xs-6 col-sm-6 col-md-6 text-left"> </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-left"> 
               
        <!--  <div class="theme_area">
             <ul class="theme_nav">
                 <li class="purple"><a href="<?php echo base_url(); ?>page/theme/purple">&nbsp;&nbsp;</a></li>
                 <li class="blue"><a href="<?php echo base_url(); ?>page/theme/blue">&nbsp;&nbsp;</a></li>
                 <li class="brown"><a href="<?php echo base_url(); ?>page/theme/brown">&nbsp;&nbsp;</a></li>
                 <li class="red"><a href="<?php echo base_url(); ?>page/theme/red">&nbsp;&nbsp;</a></li>
                 <li class="voilet"><a href="<?php echo base_url(); ?>page/theme/voilet">&nbsp;&nbsp;</a></li>
             </ul>
         </div> 
    </div> 

</div>-->
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <div class="">
            <div class="blue-prt">	
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                    <?php $this->load->view('layouts/' . CNF_THEME . '/headertop', array('page' => $pageAlias)); ?>

                </div> 

            </div>
            <?php $this->load->view('layouts/' . CNF_THEME . '/topbar', array('page' => $pageAlias)); ?>
            <?php $this->load->view('layouts/' . CNF_THEME . '/ticker'); ?>
            <div class="clearfix"></div>
            <!--<section id="contentSection">
                <div class="row floatRight">
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
            </section> -->
            <div class="clearfix"></div>

