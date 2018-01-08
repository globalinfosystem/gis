<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo isset($pageTitle) ? $pageTitle . ' | ' . CNF_APPNAME : CNF_APPNAME; ?> </title>
        <meta name="keywords" content="<?php echo CNF_METAKEY ?>">
        <meta name="description" content=""<?php echo CNF_METADESC ?>"/>
        <link rel="shortcut icon" href=""<?php echo base_url() . 'favicon.ico' ?>" type="image/x-icon">	
        <link href="<?php echo base_url();?>design/themes/<?php echo CNF_THEME; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>design/themes/<?php echo CNF_THEME; ?>/css/navbar-static-top.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>design/themes/<?php echo CNF_THEME; ?>/css/animate.css'; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>design/themes/<?php echo CNF_THEME; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>design/css/icons.min.css" rel="stylesheet" type="text/css" />	
        <link href="<?php echo base_url() ?>design/js/plugins/bootstrap.summernote/summernote.css" rel="stylesheet" type="text/css" />	
        <link href="<?php echo base_url() ?>design/js/plugins/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />	
        <link href="<?php echo base_url() ?>design/js/plugins/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />	
        <link href="<?php echo base_url() ?>design/js/plugins/select2/select2.css" rel="stylesheet" type="text/css" />	
        <link href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/css/<?php echo CNF_THEME; ?>.css" rel="stylesheet" type="text/css" />	
        <link href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/css/fonts.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/css/demo.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/css/responsive-tabs.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>design/js/plugins/facebox/facebox.css" rel="stylesheet" type="text/css" />	  
		<link href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/datatables/css/table-responsive.css" rel="stylesheet" />
  <!---Datatables----->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/datatables/css/jquery.dataTables.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/datatables/css/dataTables.tableTools.css" />
        <!---Ends here-------->

        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/facebox/facebox.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/parsley.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/jquery.jCombo.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/bootstrap.summernote/summernote.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/<?php echo CNF_THEME; ?>.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/highlight.pack.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/jquery.collapsible.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/datatables/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/datatables/js/datatable-search.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/datatables/js/dataTables.tableTools.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>design/js/photo-gallery.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>design/js/jquery.validate.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>design/js/meanmenu.css" media="all" />
        <script src="<?php echo base_url() ?>design/js/jquery.meanmenu.js"></script> 
		<script src="<?php echo base_url() ?>design/themes/<?php echo CNF_THEME; ?>/js/jQuery.print.js"></script> 
        <script>
            jQuery(document).ready(function () {
                jQuery('header nav').meanmenu();
            });
        </script>

        <script type="text/javascript" src="<?php echo base_url() ?>design/js/plugins/mediaelementplayer/build/mediaelement-and-player.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>design/js/plugins/mediaelementplayer/build/mediaelementplayer.min.css" />
        <script>
            $('audio,video').mediaelementplayer();
        </script>
        <!--Ends here-->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script type="text/javascript">
            function popups(id)
            {
                jQuery.facebox({ajax: id});
            }
            $(document).ready(function () {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
                $.fn.slideFadeToggle = function (speed, easing, callback) {
                    return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
                };
                $('.collapsible').collapsible({
                    defaultOpen: 'section1',
                    cookieName: 'nav',
                    speed: 'slow',
                    animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
                        elem.next().slideFadeToggle(opts.speed);
                    },
                    animateClose: function (elem, opts) { //replace the standard slideDown with custom function
                        elem.next().slideFadeToggle(opts.speed);
                    },
                    loadOpen: function (elem) { //replace the standard open state with custom function
                        elem.next().show();
                    },
                    loadClose: function (elem, opts) { //replace the close state with custom function
                        elem.next().hide();
                    }
                });
                $('.page_collapsible').collapsible({
                    defaultOpen: 'body_section1',
                    cookieName: 'body2',
                    speed: 'slow',
                    animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
                        elem.next().slideFadeToggle(opts.speed);
                    },
                    animateClose: function (elem, opts) { //replace the standard slideDown with custom function
                        elem.next().slideFadeToggle(opts.speed);
                    },
                    loadOpen: function (elem) { //replace the standard open state with custom function
                        elem.next().show();
                    },
                    loadClose: function (elem, opts) { //replace the close state with custom function
                        elem.next().hide();
                    }

                });
                //assign open/close all to functions
                function openAll() {
                    $('.page_collapsible').collapsible('openAll');
                }
                function closeAll() {
                    $('.page_collapsible').collapsible('closeAll');
                }

                //listen for close/open all
                $('#closeAll').click(function (event) {
                    event.preventDefault();
                    closeAll();
                });
                $('#openAll').click(function (event) {
                    event.preventDefault();
                    openAll();
                });

            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                var curSize;
                $('#incfont').click(function () {
                    curSize = parseInt($('.main-content').css('font-size')) + 2;
                    if (curSize <= 21)
                        $('.main-content').css('font-size', curSize);
                });
                $('#decfont').click(function () {
                    curSize = parseInt($('.main-content').css('font-size')) - 2;
                    if (curSize >= 11)
                        $('.main-content').css('font-size', curSize);
                });
                $('#equal').click(function () {
                    $('.main-content').css('font-size', 17);
                });
            });

        </script>
        <script>
            function validmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

             $(document).ready(function () {
                $('#suggestionpost').click(function () {
                    $('#suggestionsuccessfull').text('');
                    $('#suggestionpost').html('Submitting..');
                    var email = $('#email').val();
                    var suggetion = $('#Suggestion').val();
                    if (email == '')
                    {
                        $('#emailerror').removeClass('hide');
                        $('#emailerror').text('Please enter your email');
                    }
                    if (suggetion == '')
                    {
                        $('#suggestionerror').removeClass('hide');
                        $('#suggestionerror').text('Please enter suggestion');
                    }
                    if (suggetion != '')
                    {
                        $('#suggestionerror').addClass('hide');
                        $('#suggestionerror').text('');
                    }
                    if (email != '')
                    {
                        var validity = validmail(email);
                        if (validity == true)
                        {
                            $('#emailerror').addClass('hide');
                            $('#emailerror').text('');
                        }
                        else
                        {
                            $('#emailerror').removeClass('hide');
                            $('#emailerror').text('Please enter valid email address');
                            exit();
                        }
                    }
                     $('#suggestionpost').prop('disabled', true);
                    if ((suggetion != '') && (email != ''))
                    {
					$.post("<?php echo base_url(); ?>mail/publicsuggestion",{email:$('#email').val(),suggestion:$('#Suggestion').val(),<?php echo $this->security->get_csrf_token_name(); ?>:'<?php echo $this->security->get_csrf_hash();?>'},
						
						  function(data) {
							 if(data==1)
							 {
								 alert('Your Suggestion send successfully');
								 $('#suggestionpost').html('SUBMIT');
								 $('#suggestionemail').val('');
								 $('#Suggestionview').val('');
							 }
							 else
							 {
								 alert('Error in sending Your Suggestion');
								  $('#suggestionpost').html('SUBMIT');
							 }
						  }
								
					   );
                    }

                });
            });



            function call_page_loader(values)
            {

                if (values == 1)
                {
                    $('#cover').css('display','block');
                }
                else if (values == 2)
                {
                    $('#cover').css('display','none');
                }

            }
        </script>
        <style type="text/css">
            #cover {
                background: url("<?php echo base_url() . 'design/images/loader.GIF';?>") no-repeat scroll center center #000;
                height: 100%;
                opacity: 0.7;
                position: absolute;
                width: 100%;
                z-index: 9999;
                display:none;
            }
         #result
         {
			position:absolute;
			width:90%;
            text-align:left;
            margin-left:12px;
			padding:1px;
			display:none;
			margin-top:-1px;
			border-top:0px;
			overflow-y:scroll;
			border:1px #CCC solid;
			background-color: white;
            z-index:99999999999;
            max-height:120px;
		}
        </style>
    </head>

    <body >

<section id="contentSection">
                    <div class="col-xs-12 col-sm-12 col-md-12  top-space" id="center">
                        <?php echo $content; ?>
						<?php if (!empty($pageId)) { ?>
							<?php $this->load->view('layouts/' . CNF_THEME . '/page/file', array('pageId' => $pageId)); ?><br>
							<?php $this->load->view('layouts/' . CNF_THEME . '/page/image', array('pageId' => $pageId)); ?><br>
							<?php $this->load->view('layouts/' . CNF_THEME . '/page/text', array('pageId' => $pageId)); ?><br>
							<?php $this->load->view('layouts/' . CNF_THEME . '/page/pdf', array('pageId' => $pageId)); ?>
						<?php } ?>
                    </div>
                </section>
    </body> 
</html>