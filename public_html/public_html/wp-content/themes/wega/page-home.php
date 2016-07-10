<?php
/*
Template Name: Home Page
*/
 ?>
 <?php
$who_we_are     =get_field('who');
$answer         =get_field('answer');
$Do             =get_field('Do');
$title          =get_field('title');
$image          =get_field('image');
$title          =get_field('title');
$desc           =get_field('desc');
$price          =get_field('price');
$numbers        =get_field('numbers');
$icon           =get_field('icon');
$image_special           =get_field('image_special');
$url            =get_post_meta(5,'who are image url',true);


 ?>
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
<style>
.figure img {
    width: 100%;
    height: 100%;
}

.figure img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -ms-transition: all 1s ease; /* IE 9 */
    -o-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
}

.figure img:hover  {
    -webkit-transform:scale(7.5); /* Safari and Chrome */
    -moz-transform:scale(7.5); /* Firefox */
    -ms-transform:scale(7.5); /* IE 9 */
    -o-transform:scale(7.5); /* Opera */
     transform:scale(7.5);
}

</style>
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
		<!-- SIGNIN MODEL END -->

	<!--HEADER START-->
		<header>
					<div class="container">
						<!--LOGO START-->
						<div class="kode-logo">
					<a href="http://babelkhalk.com/"><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/logo.png" alt=""/></a>
							</div>
							<!--LOGO END-->
							<!--Navigation Wrap Start-->
							<div class="kode_navigation_outr_wrap">
									<!--Navigation Wrap Start-->
									<div class="kode_ui_element nav">
											<!--Navigation Wrap Start-->
											<?php
	 wp_nav_menu( array(
		'theme_location' => 'primary',
		'container_class'	=>'kode_menu'
							 ) );
	?>
											<!--Navigation Wrap End-->
											<!--DL Menu Start-->
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
															<li class="menu-item kode-parent-menu"><a href="http://babelkhalk.com/contact-us">آتصل بنا</a>
															</li>

													</ul>

											</div>
											<!--DL Menu END-->
									</div>
									<!--Navigation Wrap End-->
							</div>
							<!--Navigation Wrap End-->
					</div>
	</header>
	<!--HEADER END-->
	<!--HOME PAGE BANNER START-->
	<div class="kode-home-banner">
		<ul class="bxslider">
							<li>
									<img src="<?php bloginfo('stylesheet_directory')?>/extra-images/banner-2.jpg" alt=""/>
									<div class="kode_caption">
							<?php while ( have_posts() ) : the_post(); ?>
												<?php  the_content(); ?>
									<?php endwhile;wp_reset_query();?>
											<a class="kode_link_2" href="#">المزيد<i class="fa fa-long-arrow-right"></i></a>
									</div>
							</li>
							<li>
									<img src="<?php bloginfo('stylesheet_directory')?>/extra-images/banner-1.jpg" alt=""/>
									<div class="kode_caption">
							<?php while ( have_posts() ) : the_post(); ?>
												<?php  the_content(); ?>
									<?php endwhile;wp_reset_query();?>
											<a class="kode_link_2" href="#">المزيد<i class="fa fa-long-arrow-right"></i></a>
									</div>
							</li>
							<li>
									<img src="<?php bloginfo('stylesheet_directory')?>/extra-images/banner-12.jpg" alt=""/>
									<div class="kode_caption">
							<?php while ( have_posts() ) : the_post(); ?>
												<?php  the_content(); ?>
									<?php endwhile;wp_reset_query();?>
											<a class="kode_link_2" href="#">المزيد<i class="fa fa-long-arrow-right"></i></a>
									</div>
							</li>

					</ul>
	</div>
	<!--HOME PAGE BANNER END-->


	<div class="kf_content_wrap">
		<!--WE ARE SECTION START-->
		<section class="we-are-bg">
			<div class="container">
				<!--WE ARE WRAP START-->
				<div class="kode-we-are-wrap ">
					<div class="thumb">
						<figure>
							<img src="<?php bloginfo('stylesheet_directory')?>/<?php echo $url; ?>" alt=""/>
						</figure>
					</div>
					<div class="text">
						<div class="kode-food-hdg-5 mgn-adj">
							<h3><?php echo $who_we_are;?></h3>
						</div>
					<p><?php echo $answer;?></p>

						<div class="kode-food-hdg-5">
							<h3><?php echo $Do;?></h3>
						</div>
						<!--FOOD META START-->
			 <?php $loop=new wp_query(array('post_type'	=>'doing',
														'orderby'	=>'post_id',
														'order'	=>'asc')) ;?>
						<ul class="kode-food-meta">
								<?php while ($loop ->have_posts()):$loop->the_post();?>
							<li>
								<i class="<?php the_field('icon');?>"></i>
								<div class="kode-link-hd">
									<h5><?php  the_title(); ?></h5>
									<h5><a href="#"><?php  the_content(); ?></a></h5>
								</div>
							</li>
								 <?php endwhile;wp_reset_query();?>
						</ul>
						<!--FOOD META END-->
					</div>
				</div>
				<!--WE ARE WRAP END-->
			</div>
		</section>
		<!--WE ARE SECTION END-->
		<!--SPECIAL RECIPIES SECTION START-->
		<section class="kode-sp-recipies-bg">
				<!--HEADING 4 START-->
				<!--HEADING 4 START-->
				<div class="kode-food-hdg-4">
					<h3>اطباقنا <b>المميزه </b></h3>
				</div>
				<!--HEADING 4 END-->
				<div class="kode-sp-recipies">
					<div class="container">
					 <?php $loop=new wp_query(array('post_type'	=>'specialrecipie',
										'orderby'	=>'post_id',
										'order'	=>'desc')) ;
										$i=0;?>
					<?php while ($loop->have_posts()):$loop->the_post();
												$i++;
					?>
							<?php if($i == 2 || $i== 5){?>
						<div class="kode-recipies-des">
							<div class="text" style="height:251px !important;">
								<i class="icon-food-2"></i>
								<h4><?php  the_field('title'); ?></h4>
								<div class="rating">
									<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
								</div>
								<P><?php  the_field('desc'); ?></P>
								<span><sup>LE.</sup> <?php the_field('price'); ?></span>

							</div>
							<figure>
						
								<?php
									if(has_post_thumbnail()){
										set_post_thumbnail_size( 379, 301, true );
										the_post_thumbnail();
									}
									?>
									</figure>
						</div>
						<?php }else{ ?>
						<div class="kode-recipies-des">
							<figure>
								<?php
									if(has_post_thumbnail()){
										set_post_thumbnail_size( 379, 301, true );
										the_post_thumbnail();				    				}
									?>
							</figure>
							<div class="text" style="height: 251px;">
								<i class="icon-food-2"></i>
								<h4><?php  the_field('title'); ?></h4>
								<div class="rating">
									<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
								</div>
								<P><?php  the_field('desc'); ?></P>
								<span><sup>LE.</sup> <?php the_field('price'); ?></span>

							</div>
						</div>
						 <?php } endwhile;wp_reset_query();?>
					</div>
				</div>
		</section>
		<div class="counterup-bg">
				<?php $loop=new wp_query(array('post_type'	=>'nums',
					'orderby'	=>'post_id',
					'order'	=>'asc')) ;
					?>
			<ul class="kode-counter-up">
				 <?php while ($loop->have_posts()):$loop->the_post();
					?>
				<li>
					<span class="counter"><?php echo the_field('numbers'); ?></span>
					<p><?php the_title(); ?></p>
				</li>
				<?php  endwhile;wp_reset_query();?>
			</ul>
		</div>
		<!--COUNTER UP SECTION END-->
		<!--OUR BLOG SECTION START-->
		<section>
			<div class="container">
				<!--HEADING 4 START-->
				<div class="kode-food-hdg-4">
					<h3>اهم  <b>الاخبار</b></h3>
				</div>
				<!--HEADING 4 END-->
				<div class="row">
			<?php $loop=new wp_query(array('post_type'	=>'post',
					'orderby'	=>'post_id',
					'order'	=>'asc')) ;
					?>
		<?php while ($loop->have_posts()):$loop->the_post();?>
					<div class="col-md-6">
						<!--BLOG DES START-->
						<div class="kode-blog-des">
							<figure>
									<?php
									if(has_post_thumbnail()){
										the_post_thumbnail(array(202,215));
									}
									?>
								<figcaption>
								<span class="date"><b>04</b>April</span>
								</figcaption>
							</figure>
							<div class="text">
								<h4><a href="#"><?php the_title(); ?></a></h4>
								<p><?php the_content();?></p>

							</div>
						</div>

						<!--BLOG DES END-->
					</div>
					<?php  endwhile;wp_reset_query();?>
				</div>
			</div>
		</section>
		<!--OUR BLOG SECTION END-->
		<!--RESERVATION SECTION START-->
		<section class="kode-reservation-bg">
			<div class="container">
				<!--HEADING 4 START-->
				<div class="kode-food-hdg-4">
					<h3>عمل <b>حجز</b></h3>
				</div>
				<!--HEADING 4 END-->
				<div class="row">
					<form method="POST" action="">
						<?php echo do_shortcode( '[contact-form-7 id="77" title="Reservation form"]' ); ?>
					</form>
				</div>
			</div>
		</section>
		<!--RESERVATION SECTION END-->
		<!--TESTIMONIAL SECTION START-->
		<section>
			<div class="container">
				<!--HEADING 4 START-->
				<div class="kode-food-hdg-4">
					<h3>اراء  <b>العملاء</b></h3>
				</div>
				<!--HEADING 4 END-->
				<div class="row">
					<!--TESTIMONIAL SLIDER START-->
					<div class="kode-testimonial-slider">
						<div id="owlslider-testimonia" class="owl-carousel owl-theme">
							<div class="item">
								<!--TESTIMONIAL SLIDER START-->
								<div class="kode-testimonial-wrap">
									<div class="kode-testimonial-hd">
										<h4>Adham El Alfy</h4>
										<span>Happy Customer</span>
									</div>
									<div class="kode-testimonial-des">
										<figure><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/testimonial-1.jpg" alt=""/></figure>
										<div class="blockquote-2">
											<p><i class="fa fa-quote-left"></i>
												Delicious food and an amazing atmosphere and view. MUST TRY
									</p>
										</div>
									</div>
								</div>
								<!--TESTIMONIAL SLIDER END-->
							</div>

							<div class="item">
								<!--TESTIMONIAL SLIDER START-->
								<div class="kode-testimonial-wrap">
									<div class="kode-testimonial-hd">
										<h4>Dina Mo</h4>
										<span>Happy Customer</span>
									</div>
									<div class="kode-testimonial-des">
										<figure><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/testimonial-2.jpg" alt=""/></figure>
										<div class="blockquote-2">
											<p><i class="fa fa-quote-left"></i>
												Delicious food and an amazing atmosphere and view. MUST TRY
											</p>
										</div>
									</div>
								</div>
								<!--TESTIMONIAL SLIDER END-->
							</div>

							<div class="item">
								<!--TESTIMONIAL SLIDER START-->
								<div class="kode-testimonial-wrap">
									<div class="kode-testimonial-hd">
										<h4>Adham El Alfy</h4>
										<span>Happy Customer</span>
									</div>
									<div class="kode-testimonial-des">
										<figure><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/testimonial-1.jpg" alt=""/></figure>
										<div class="blockquote-2">
											<p><i class="fa fa-quote-left"></i>
												Delicious food and an amazing atmosphere and view. MUST TRY

																						</p>
										</div>
									</div>
								</div>
								<!--TESTIMONIAL SLIDER END-->
							</div>

							<div class="item">
								<!--TESTIMONIAL SLIDER START-->
								<div class="kode-testimonial-wrap">
									<div class="kode-testimonial-hd">
										<h4>Dina Mo</h4>
										<span>Happy Customer</span>
									</div>
									<div class="kode-testimonial-des">
										<figure><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/testimonial-2.jpg" alt=""/></figure>
										<div class="blockquote-2">
											<p><i class="fa fa-quote-left"></i>
												Delicious food and an amazing atmosphere and view. MUST TRY
											</p>
										</div>
									</div>
								</div>
								<!--TESTIMONIAL SLIDER END-->
							</div>

							<div class="item">
								<!--TESTIMONIAL SLIDER START-->
								<div class="kode-testimonial-wrap">
									<div class="kode-testimonial-hd">
										<h4>Dina Mo</h4>
										<span>Happy Customer</span>
									</div>
									<div class="kode-testimonial-des">
										<figure><img src="<?php bloginfo('stylesheet_directory')?>/extra-images/testimonial-2.jpg" alt=""/></figure>
										<div class="blockquote-2">
											<p><i class="fa fa-quote-left"></i>
												Delicious food and an amazing atmosphere and view. MUST TRY
											</p>
										</div>
									</div>
								</div>
								<!--TESTIMONIAL SLIDER END-->
							</div>

						</div>
					</div>
					<!--TESTIMONIAL SLIDER END-->
				</div>
			</div>
		</section>
		<!--TESTIMONIAL SECTION END-->
	</div>
<?php get_footer(); ?>
