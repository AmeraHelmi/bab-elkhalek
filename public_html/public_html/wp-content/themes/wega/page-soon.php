<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
		<?php
/*
Template Name: Soon	
*/ 
    ?>
    <div class="kode_wrapper">
		<div class="coming-soon-wrap">
			<div class="topbar-coming-soon">
            	<div class="logo">
            		<a href="http://localhost/resturant/"><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/logo-main.png" alt=""/></a>
            	</div>
            	<div class="coming-soon-social">
            		<h2>Stay Tuned</h2>
            		<ul class="social-style-3">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
            	</div>
            </div>
            <div class="container">
            	<div class="coming-soon-dec">
            		<?php while ( have_posts() ) : the_post(); ?> 
                          <?php  the_content(); ?>
                    <?php endwhile;wp_reset_query();?> 
					<ul class="countdown">
						<li>
							<span class="days">45</span>
							<p class="days_ref">days</p>
						</li>
						<li>
							<span class="hours">26</span>
							<p class="hours_ref">hours</p>
						</li>
						<li>
							<span class="minutes">37</span>
							<p class="minutes_ref">minutes</p>
						</li>
						<li>
							<span class="seconds last">56</span>
							<p class="seconds_ref">seconds</p>
						</li>
					</ul>
					<!--COUNTDOWN END-->
<!-- 					<form method="POST">
						<div class="reservation-input">
						<?php echo do_shortcode( '[contact-form-7 id="112" title="subscripe"]' ); ?>
						</div>
					</form> -->
            	</div>
            </div>
		</div>

		<div class="kode-copyright">
			<div class="container">
				<div class="pull-left">
					<p>Copyrights © 2015 - <a href="#"><b>KODEFOREST</b></a> </p>
				</div>
				<div class="kofe-footer-logo">
					<a href="index.html"><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/footer-logo.png" alt=""/></a>
				</div>
				<div class="pull-right">
					<p>All Rights Reserved</p>
				</div>
			</div>
		</div>
		<!-- START GO UP -->
        <div class="go-up">
            <a href="#" ><i class="fa fa-chevron-up"></i></a>    
        </div>
        <!--END GO UP-->
		
    </div>
    </body>
    </html>
