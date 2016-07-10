<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('title');?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory')?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory')?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory')?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory')?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory')?>/favicon/manifest.json">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/typography.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/shortcodes.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/widget.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/datepicker.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/jquery.timepicker.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/jquery.bxslider.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/selectric.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/css/color.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/css/responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/css/component.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/style.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory')?>/svg/style.css" rel="stylesheet">
<!-- js -->
	<script src="<?php bloginfo('template_directory')?>/js/js/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/bootstrap-datepicker.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/jquery.timepicker.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/jquery.bxslider.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/jquery.prettyPhoto.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/moment.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/fullcalendar.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/jquery.downCount.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/waypoints-min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/isotope.pkgd.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/jquery.selectric.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/dl-menu/modernizr.custom.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/dl-menu/jquery.dlmenu.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/js/custom.js"></script>
</head>
<body>
 <div class="kode_wrapper">
	    <!-- register Modal -->
	    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
	        <div class="modal-dialog">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <div class="modal-content">
	            	<!--SIGNIN AS USER START-->
	                <div class="user-box">
	                	<h2>Sign up as a User</h2>
	                    <!--FORM FIELD START-->
	                    <div class="form">
	                        <div class="input-container">
	                            <input type="text" placeholder="Name">
	                            <i class="fa fa-user"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="text" placeholder="E-mail">
	                            <i class="fa fa-envelope-o"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="password" placeholder="Password">
	                            <i class="fa fa-unlock"></i>
	                        </div>
	                        <div class="input-container">
	                            <label>
	                                <span class="radio">
	                                    <input type="checkbox" name="foo" value="1" checked>
	                                    <span class="radio-value" aria-hidden="true"></span>
	                                </span>
	                                <span>Remember me</span>
	                            </label>
	                        </div>
	                        <div class="input-container">
	                            <button class="btn-style">Sign Up</button>
	                        </div>
	                    </div>
	                    <!--FORM FIELD END-->
	                    <!--OPTION START-->
	                    <div class="option">
	                        <h5>Or Using</h5>
	                    </div>
	                    <!--OPTION END-->
	                    <!--OPTION START-->
	                    <div class="social-login">
	                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
	                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
	                    </div>
	                    <!--OPTION END-->
	                </div>
	                <!--SIGNIN AS USER END-->
	                <div class="user-box-footer">
	                    Already have an account? <a href="#">Sign In</a>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	        </div>
	    </div>
	    <!-- register Modal end-->

	    <!-- SIGNIN MODEL START -->
	    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
	        <div class="modal-dialog">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <div class="modal-content">
	                <div class="user-box">
	                    <h2>Sign In</h2>
	                    <!--FORM FIELD START-->
	                    <div class="form">
	                        <div class="input-container">
	                            <input type="text" placeholder="E-mail">
	                            <i class="fa fa-envelope-o"></i>
	                        </div>
	                        <div class="input-container">
	                            <input type="password" placeholder="Password">
	                            <i class="fa fa-unlock"></i>
	                        </div>
	                        <div class="input-container">
	                            <label>
	                                <span class="radio">
	                                    <input type="checkbox" name="foo" value="1" checked>
	                                    <span class="radio-value" aria-hidden="true"></span>
	                                </span>
	                                <span>Remember me</span>
	                            </label>
	                        </div>
	                        <div class="input-container">
	                            <button class="btn-style">Sign In</button>
	                        </div>
	                    </div>
	                    <!--FORM FIELD END-->
	                    <!--OPTION START-->
	                    <div class="option">
	                        <h5>Or Using</h5>
	                    </div>
	                    <!--OPTION END-->
	                    <!--OPTION START-->
	                    <div class="social-login">
	                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
	                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
	                    </div>
	                    <!--OPTION END-->

	                </div>
	                <div class="user-box-footer">
	                    <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	        </div>
	    </div>

    	<header class="header-3">

            <!--TOP BAR END-->
            <div class="container">
                <!--Navigation Wrap Start-->
                <div class="kode_navigation3_wrap">
                	<!--Navigation Wrap Start-->
       <?php
     wp_nav_menu( array(
      'theme_location' => 'second',
      'container_class'	=>'navigation3 pull-left'
      				   ) );
    ?>

                    <!--Navigation Wrap End-->
                    <!--LOGO START-->
	            	<div class="kode-logo3">
	                	<a href="http://babelkhalk.com/"><img style="height: 150px; width: 150px; margin-top: 30px;" src="<?php bloginfo('stylesheet_directory')?>/extra-images/logo.png" alt=""/></a>
	              
  </div>
	                <!--LOGO END-->
                    <!--Navigation Wrap Start-->
       <?php
     wp_nav_menu( array(
      'theme_location' => 'second-2',
      'container_class'	=>'navigation3 pull-right'
      				   ) );
    ?>
<div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                                <li class="active"><a href="http://babelkhalk.com/">الرئيسيه</a>
                                </li>
                                <li><a href="http://babelkhalk.com/about">من نحن</a></li>
                                <li class="menu-item kode-parent-menu"><a href="http://babelkhalk.com/menu">قائمة الطعام</a>
                                </li>
                                <li class="menu-item kode-parent-menu"><a href="http://babelkhalk.com/gallery">الصور</a>
                                </li>
                                <li class="menu-item kode-parent-menu"><a href="http://babelkhalk.com/reservation">الحجز</a>
                                </li>
                                <li class="menu-item kode-parent-menu"><a href="http://babelkhalk.com/contact-us">آتصل بنا</a>
                                </li>

                            </ul>
                    </div>
                </div>
                <!--Navigation Wrap End-->


            </div>
		</header>
