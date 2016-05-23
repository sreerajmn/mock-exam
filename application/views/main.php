<!DOCTYPE html>
<html><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Online examination - mockxam.com</title>
        <meta name="Description" content="Online examination!">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/media-home.css');?>">
        <link href="<?php echo asset_url('css/footer-main.css');?>" type="text/css" rel="stylesheet">
        <link href="<?php echo asset_url('css/serch-engine.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset_url('css/cs.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset_url('css/emtcss3.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset_url('css/flt-book.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo asset_url('css/header-footer-home.css');?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/new-res-menu.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/smart-forms.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/yellow.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url('css/slippry.css');?>">
        

        <script src="<?php echo asset_url('js/atrk.js');?>" async="" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo asset_url('js/internationaldiv.js');?>"></script>
        <script type="text/javascript" src="<?php echo asset_url('js/loginemt.js');?>"></script>
        <script type="text/javascript" src="<?php echo asset_url('js/validationemt2.js');?>"></script>
        <script type="text/javascript" src="<?php echo asset_url('js/jquery-1.js');?>"></script>
        <script type="text/javascript" src="<?php echo asset_url('js/jquery-ui-1.js');?>"></script>
        <script src="<?php echo asset_url('js/slippry.js');?>"></script>
        <script>
            $(function () {
                $(".one").click(function () {
                    $("#rnd").hide();
                });

                $(".rnd").click(function () {
                    $("#rnd").show();
                });

            });

        </script>
        <script type="text/javascript" language="javascript">

            $(function () {
                $("#ddate").datepicker({minDate: -0,
                    numberOfMonths: 3,
                    onClose: function (selectedDate) {
                        $("#rdate").datepicker("option", "minDate", selectedDate);
                    }
                });
                $("#rdate").datepicker({
                    defaultDate: "+1w",
                    numberOfMonths: 3,
                    onClose: function (selectedDate) {
                        $("#ddate").datepicker("option", selectedDate);
                    }
                });



                $("#res-click").click(function () {
                    $("#flip-flop").slideToggle("slow");
                });

            });

        </script>

        <script type="text/javascript">
            $(function () {
                $(".navigation ul li").hover(function () {
                    $(this).addClass("hover");
                }, function () {
                    $(this).removeClass("hover");
                });

                $(".navigation ul li").click(function () {
                    $(".navigation ul li").removeClass("selected");
                    $(this).addClass("selected");
                });
            });
        </script>
        <script>
            $(function () {
                $(".one").click(function () {
                    $(".totop").hide();
                });



            });

        </script>
        <script type="text/javascript">//<![CDATA[
            $(window).load(function () {
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > 100) {
                        jQuery('.totop').stop().animate({top: '0px'});
                    } else {
                        jQuery('.totop').stop().animate({top: '-300px'});
                    }
                });
            });//]]> 
        </script>

        <script>
            $(function () {
                $(".special-menu").click(function () {
                    $(".black_backgr").show();
                    $(".res_nav_n").fadeIn();
                });
                $(".cbn2").click(function () {
                    $(".black_backgr").hide();
                    $(".res_nav_n").hide();
                });
            });
        </script>
        <style>
            .txt_342{font-size:16px;}
            .line55 {
                width: 960px;}
            </style>
            <script src="<?php echo asset_url('js/telemetry.js')?>"></script>
            <script src="<?php echo asset_url('js/menu_handler.js')?>"></script>
        </head>
        <body>
            <div class="ind_main lt_fl">
            <div class="ind_main_con">
                <div class="main_hder lt_fl">
                    <div class="hd_logo lt_fl" itemscope="" itemtype="//schema.org/Attorney">
                        <a itemprop="url" href="#" title="Mockxam.com">
                            <img itemprop="logo" src="<?php echo asset_url('images/emt-new-logo.png')?>" alt="Save more on Air Tickets with Mockxam.com">
                        </a>
                    </div>
                    <div class="special-menu">
                        <div id="res-click" class="menu_bar_re1"><img src="<?php echo asset_url('images/respo-menu-bar-new.png')?>" alt=" Menu Bar"> </div>
                        <div class="clr"></div>
                    </div> 
                    <div class="hd_rh rht_fl">
                        <div class="fb lt_fl">
                            <ul>
                                <li class="top-pin rht_fl"><a href="https://www.pinterest.com/mockxam/"> Mockxam on pinterest </a></li>
                                <li class="top-tw rht_fl"><a href="https://twitter.com/Mockxam"> Mockxam on Twitter </a></li>
                                <li class="top-goo rht_fl"> <a href="https://plus.google.com/+mockxam" rel="publisher"> Mockxam On Google Plus </a></li>
                                <li class="top-u rht_fl"> <a href="https://www.youtube.com/channel/UC_4A-EKQFbA4UQ9lBcAe7_A"> Mockxam On YouTube </a></li>
                                <li class="top-fb rht_fl"> <a href="https://www.facebook.com/mockxamfans"> Mockxam on FaceBook </a> </li>
                            </ul>
                        </div>
                        <div class="top_button lt_fl">
                            <ul>
                                <li class="rht_fl" style="margin-top:-5px">
                                    <a href="#" target="_blank">
                                        <img src="<?php echo asset_url('images/print-cancel-demo.png')?>" alt="Print and Cancel Booking"> 
                                    </a>
                                </li>
                                <li class="rht_fl"><a href="#">Contact Us </a></li>
                                <li class="rht_fl" style="position:relative;">
                                    <a href="#"> 
                                        <img style="position:absolute; top: -36px; left: -4px;" src="<?php echo asset_url('images/we-r-hiring.gif')?>" alt="We are Hiring" border="0">
                                    </a>
                                    <a href="#">Career </a>|
                                </li><!---->
                                <li class="rht_fl"><a href="#" rel="nofollow">Agent Login </a>|</li>
                                <li class="rht_fl"><a href="#">Visa </a>|</li>
                                <li class="rht_fl"><a href="#">About us </a>|</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="but_area lt_fl bor_rad">
                    <li><a href="#" class="left_menu">Flight</a></li>
                    <li><a href="#">Hotel </a></li>
                    <li><a href="#">Bus</a></li>
                    <li><a href="#">Holiday Packages</a></li>
                    <li style="position:relative;"> <img style="position:absolute; top: -15px; left: 37px;" src="<?php echo asset_url('images/new-blink.gif')?>" alt="new" border="0">


                        <a href="#">Cruise Packages</a></li>
                    <li><a href="#">Join as Corporate</a></li>
                    <li><a href="#">Join as Franchise</a></li>
                    <li class="drop rht_fl" style="background-image: none !important; float:right !important;"> <a class="men_rgh" href="#">Customer Support</a>
                        <div class="dropdownContain">
                            <div class="dropOut">
                                <div class="triangle"></div>
                                <ul>
                                    <li class="area_none"><a href="#">My Booking</a></li>
                                    <li class="area_none"><a href="#">Print/Cancel Booking</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="black_backgr" style="display:none;"> </div>
            <div class="res_nav_n" style="display:none;">
                <div class="res_top_n">

                    <div class="res_p_lft">
                        <ul>
                            <li> <a class="f_res1" href="#"> Flight</a> </li>
                            <li> <a class="h_res" href="#"> Hotel</a> </li>
                            <li> <a class="b_res" href="#"> Bus</a> </li>
                            <li> <a class="hp_res" href="#"> Holidays</a> </li>
                            <li> <a class="cr_res" href="#"> Cruise</a> </li>
                            <li> <a class="co_res" href="#"> Corporate</a> </li>
                            <li> <a class="fr_res" href="#"> Franchise</a> </li>
                        </ul>
                    </div>
                    <div class="res_p_lft2"> </div>
                    <div class="res_p_rht">
                        <ul>
                            <li> <a class="ab_res" href="#"> About us</a> </li>
                            <li> <a class="ca_res" href="#"> Career</a> </li>

                            <li> <a class="vi_res" href="#"> Visa</a> </li>
                            <li> <a class="con_res" href="#"> Contact us</a> </li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="clr"></div>

                    <div class="cbn2">Close</div>
                </div>
                <div class="clr"></div>
            </div>

            <div id="container" style="width:960px;">
            
                
                
               <?php $this->load->view($page); ?>
              
            </div>
        </div>
        <div class="fot_res" style="display:none;">
            Copyright@Mockxam.com All rights Reserved
        </div>
        <div class="footer_m">
            <div class="foot_st"> </div>
            <div class="foot_cont">
                <div class="foot_midd">

                    <div class="tablet1a">
                        <div class="foot_m_a foot_marg  ">
                            <div class="ft_head">EMT Links</div>
                            <div class="ft_menu">

                                <ul>
                                    <li><a href="https://www.mockxam.com/">Book Flights</a></li>
                                    <li><a href="https://www.mockxam.com/hotels.html">Search Hotels</a></li>
                                    <li><a href="https://www.mockxam.com/low-cost-airlines.html">Low Cost Airlines</a></li>
                                    <li><a href="https://www.mockxam.com/deals/first-business-class-flights.html">Business Class</a></li>
                                    <li><a href="https://www.mockxam.com/domestic-flights.html">Domestic Flights</a></li>
                                    <li><a href="https://www.mockxam.com/international-flights.html">International Flights</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="foot_m_a foot_marg">
                            <div class="ft_head">EMT Info</div>
                            <div class="ft_menu">
                                <ul>
                                    <li><a href="https://www.mockxam.com/privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="https://www.mockxam.com/terms.html">Terms &amp; Conditions</a></li>
                                    <li><a href="https://www.mockxam.com/user-agreement.html">User Agreement</a></li>
                                    <li><a href="https://www.mockxam.com/problem-in-online-booking.html">Booking Issues</a></li>
                                    <li><a href="https://www.mockxam.com/faq.html" rel="">FAQ</a></li>
                                    <li><a href="https://www.mockxam.com/mobile-app.html">Mobile App</a></li>
                                    <li><a href="https://www.mockxam.com/achievements/index.html">Achievements</a></li>
                                    <li><a href="https://www.mockxam.com/press-releases.html">Press Releases</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="foot_m_a foot_marg">
                            <div class="ft_head">Site Directory</div>
                            <div class="ft_menu">
                                <ul>
                                    <li><a href="https://www.mockxam.com/directory/flights.html">Flight</a></li>
                                    <li><a href="https://blog.mockxam.com/">Blog</a></li>
                                    <li><a href="https://www.mockxam.com/directory/packages.html">Packages</a></li>
                                    <li><a href="https://www.mockxam.com/directory/airlines.html">Airlines</a></li>
                                    <li><a href="https://www.mockxam.com/directory/domestic-flight-schedule.html">Flight Schedule</a></li>
                                    <li><a href="https://www.mockxam.com/sitemap.html">Sitemap</a></li>
                                    <li><a href="https://www.mockxam.com/travel-updates.html">Travel Updates</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clr32"></div>
                    </div>

                    <div class="tablet1a">
                        <div class="foot_m_a foot_marg">
                            <div class="ft_head">Popular Airlines</div>
                            <div class="ft_menu">
                                <ul>
                                    <li><a href="https://www.mockxam.com/airlines/air-india-ai.html">Air India</a></li>
                                    <li><a href="https://www.mockxam.com/airlines/jet-airways-9w.html">Jet Airways</a></li>
                                    <li><a href="https://www.mockxam.com/airlines/jetkonnect-s2.html">JetKonnect</a></li>
                                    <li><a href="https://www.mockxam.com/airlines/goair-g8.html">Go Air</a></li>
                                    <li><a href="https://www.mockxam.com/airlines/indigo-airlines-6e.html">Indigo</a></li>
                                    <li><a href="https://www.mockxam.com/airlines/spicejet-sg.html">Spicejet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="foot_m_a foot_marg">
                            <div class="ft_head">Holiday Packages</div>
                            <div class="ft_menu">
                                <ul><li><a href="http://www.mockxam.com/holidays/special-packages.html">Special Packages</a></li>
                                    <li><a href="http://www.mockxam.com/holidays/seasonal-packages.html">Seasonal Packages</a></li>
                                    <li><div class="ft_head">Cruise Packages</div></li>
                                    <li><a href="https://www.mockxam.com/cruise/all-cruise.html">All Cruise Lines</a></li>
                                    <li><a href="https://www.mockxam.com/cruise/specialty-cruise-lines.html">Specialty Cuise</a></li>
                                    <li><a href="https://www.mockxam.com/cruise/river-cruise-lines.html">River Cruise Lines</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="foot_m_a">
                            <div class="ft_head">Payment Mode</div>
                            <div class="paym_mod_ft">
                                <table border="0" width="130">
                                    <tbody><tr>
                                            <td height="38" width="63"><img src="<?php echo asset_url('images/foot_maste_card.gif')?>" alt="Master Card"></td>
                                            <td width="57"><img src="<?php echo asset_url('images/visa_foote.gif')?>" alt="Visa"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo asset_url('images/american-expr_foot.gif')?>" alt="American Express"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody></table>
                            </div>
                            <div class="incre_india_l"> <img src="<?php echo asset_url('images/incred_india_foot.gif')?>" alt="Increrable India"> </div>
                        </div>
                        <div class="clr32"></div>
                    </div>

                    <div class="clr"></div>
                </div>
            </div>
            <div class="last_foot">
                <div class="last_foot_m">
                    <div class="copy_rig_foot">© 2015 Mockxam.com All Rights Reserved</div>
                    <div class="assoica_foot"><img src="<?php echo asset_url('images/assoicated_with_emt.gif')?>" alt="Assoicated with"></div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
        <!--<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>--> 
        <script type="text/javascript">
            document.getElementById('int').style.display = "none";
            document.getElementById('int2').style.display = "none";
            BodyLoad();
            makeOneWay();
        </script> 
        <script>
            $(function () {
                var demo1 = $("#demo1").slippry({
                    transition: 'fade',
                    useCSS: true,
                    speed: 1000,
                    pause: 5000,
                    auto: true,
                    preload: 'visible'
                });

            });
        </script>
        <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
    </body>
</html>