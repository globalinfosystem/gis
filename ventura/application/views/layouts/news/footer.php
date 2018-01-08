<?php $menus = SiteHelpers::menus('otherlinks'); ?>
﻿<?php $footer = SiteHelpers::menus('footer'); ?>
<div class="clearfix"></div>
<div class="clearfix"></div>
<footer id="footer">
    <div class="footer_top">
	            <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

        

            <div class="col-lg-3 col-md-3 col-sm-3 footeraddress">
                <?php echo CNF_OFFICE_ADDRESS; ?>
            </div>
			            <div class="col-lg-9 col-md-9 col-sm-9 footermap">

                <div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.7519480025553!2d-79.43886078449887!3d43.757247579117966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b32778a3e6cc7%3A0xd0fd875e5d859472!2s25+Canyon+Ave+%23604%2C+North+York%2C+ON+M3H+4Y1%2C+Canada!5e0!3m2!1sen!2sin!4v1512021223724" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
		</div>
</div>




    </div>

    <div class="footer_bottom">
        <div class="row">
            <div class="col-md-10">
                <div class="footer_widget">
                    <!--<ul class="tag_nav">
                        <?php
                        if (!empty($footer)) {
                            $i = 1;
                            $j = 1;

                            foreach ($footer as $main) {
                                ?>
                                <li <?php if (!empty($main['childs'])) { ?>class="has-dropdown"<?php } ?>>
                                    <a  <?php if (!empty($main['childs'])) { ?>
                                            href="<?php echo!empty($main['module']) ? base_url() . $main['module'] : $main['url']; ?>"
                                        <?php } else { ?>
                                            href="<?php echo!empty($main['module']) ? base_url() . $main['module'] : $main['url']; ?>" 
                                        <?php } ?>
                                        <?php if (!empty($main['childs'])) { ?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" <?php } ?>>
                                        <?php echo $main['menu_name']; ?>
                                        <?php if (!empty($main['childs'])) { ?><span class="caret"></span><?php } ?>
                                    </a>
                                </li> 
                                <?php if ($i == 6) { ?>
                                    <?php if (count($menus) != $j) { ?>

                                    
                                    <?php } ?>
                                    <?php $i = 0; ?>
                                    <?php
                                }
                                $i++;
                                $j++;
                            }
                        }
                        ?>

                    </ul>-->
                </div>
            </div>
            <div class="col-md-2 visitorsfooter"><p style="font:bolder; margin-top:5px;"> Visitor:<?php echo SiteHelpers::getCounter(); ?> <?php //echo CNF_COPY_RIGHTS; ?></p></div>
           <!-- <div class="col-md-1"> <p class="developer"> <?php echo CNF_COMPANY; ?></p></div>-->
        
        </div>
        
    </div>
</footer>
</div>



<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/wow.min.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/slick.min.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/jquery.newsTicker.min.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/highlight.pack.js"></script> 
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/jquery.collapsible.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/facebox/facebox.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/datatables/js/datatable-search.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/datatables/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/assets/js/custom.js"></script>

<script type="text/javascript">
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

                        function faceboxPopupBox(id)
                        {
                            jQuery.facebox({ajax: id});
                        }

                        $(document).ready(function () {
                            var curSize;
                            $('#incfont').click(function () {
                                curSize = parseInt($('.container').css('font-size')) + 2;
                                if (curSize <= 24)
                                    $('.container').css('font-size', curSize);
                            });
                            $('#decfont').click(function () {
                                curSize = parseInt($('.container').css('font-size')) - 2;
                                if (curSize >= 8)
                                    $('.container').css('font-size', curSize);
                            });
                            $('#equalfont').click(function () {
                                $('.container').css('font-size', 14);
                            });
                        });

                        function validmail(email) {
                            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            return regex.test(email);
                        }
                        function base64_encode(data) {
                            var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
                            var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
                                    ac = 0,
                                    enc = '',
                                    tmp_arr = [];

                            if (!data) {
                                return data;
                            }

                            do { // pack three octets into four hexets
                                o1 = data.charCodeAt(i++);
                                o2 = data.charCodeAt(i++);
                                o3 = data.charCodeAt(i++);

                                bits = o1 << 16 | o2 << 8 | o3;

                                h1 = bits >> 18 & 0x3f;
                                h2 = bits >> 12 & 0x3f;
                                h3 = bits >> 6 & 0x3f;
                                h4 = bits & 0x3f;

                                // use hexets to index into b64, and append result to encoded string
                                tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
                            } while (i < data.length);

                            enc = tmp_arr.join('');

                            var r = data.length % 3;

                            return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);
                        }
                        function afterSearch() {
                            $("#result").html('');
                            $("#result").hide();
                            $("#search-box").css("background", "#FFF");
                        }
                        jQuery(document).ready(function () {

                            window.prettyPrint && prettyPrint();

                            $("#search-box").keyup(function () {
                                var searchval = $(this).val();
                                var count = searchval.length;
                                if (count > 2)
                                {
                                    $.ajax({
                                        type: "POST",
                                        url: "<?php echo base_url() ?>page/searchpage",
                                        // data: 'keyword=' + $(this).val()+','+,
                                        data: {<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>', keyword: base64_encode(base64_encode(searchval))},
                                        beforeSend: function () {
                                            $("#search-box").css("background", "#FFF url(<?php echo base_url(); ?>design/images/LoaderIcon.gif) no-repeat 165px");
                                        },
                                        success: function (data) {
                                            $("#result").html('');
                                            var returnedData = JSON.parse(data);
                                            var i = 1;
                                            if ($.trim(returnedData.error)) {
                                                $("#result").show();
                                                $("#result").html(returnedData.error);
                                                setTimeout(afterSearch, 5000);
                                            } else {
                                                if ($.trim(returnedData.success)) {
                                                    $("#result").show();
                                                    $.each(returnedData.success, function (index, element) {
                                                        if (element.alias != '') {
                                                            if (i == 1) {
                                                                $('#result').append('<a class="gray" href="<?php echo base_url() ?>' + element.alias + '">' + element.title + '</a><br/>');
                                                            }
                                                            if (i == 2) {
                                                                $('#result').append('<a class="black" href="<?php echo base_url() ?>' + element.alias + '">' + element.title + '</a><br/>');
                                                                i = 0;
                                                            }
                                                        }

                                                        i = i + 1;
                                                    });
                                                }
                                            }
                                            setTimeout(afterSearch, 30000);
                                        }
                                    });
                                } else
                                {
                                    $("#result").hide();
                                }
                            });
                        });
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>