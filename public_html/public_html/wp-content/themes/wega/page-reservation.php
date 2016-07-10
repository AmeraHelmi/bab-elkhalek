	<?php
/*
Template Name: Reservation
*/
	get_header(); ?>
	 <?php
$who_we_are     =get_field('who');
$answer         =get_field('answer');
$Do             =get_field('Do');
$title          =get_field('title');
$image          =get_field('image');
$title          =get_field('title');
$desc           =get_field('desc');
$price          =get_field('price');
$numbers          =get_field('numbers');
$icon          =get_field('icon');
$url            =get_post_meta(5,'who are image url',true);

	 ?>
		<div class="kode-home-banner kode-inner-banner">
			<div class="container">
				<h6>الحجز</h6>
				<ul class="breadcrumb">
					<li><a href="/resturant">الرئيسيه</a></li>
					<li><a href="#">الحجز</a></li>
				</ul>
			</div>
		</div>

		<div class="kf_content_wrap">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<!--PRICE TAG START-->
							<div class="kode-price-tag">
								<figure>
									<img src="<?php bloginfo('stylesheet_directory')?>/extra-images/menu-pricetag.jpg" alt=""/>
									<figcaption>
										<div class="kode-food-hdg-2">
											<h3>المشروبات<span>تحتوي</span></h3>
										</div>
										<ul class="picetag-meta">
											<li><a href="#">عصائر فريش</a></li>
											<li><a href="#">مشروبات ساخنه</a></li>
											<li><a href="#">قهوه</a></li>
											<li><a href="#">هوت شكوكليت</a></li>
											<li><a href="#">شاي</a></li>
											<li><a href="#">مشروبات مميزه</a></li>
										</ul>
										<a href="#">اكتشف المزيد</a>
									</figcaption>
								</figure>
							</div>
							<!--PRICE TAG END-->
						</div>
						<div class="col-md-4 col-sm-6">
							<!--PRICE TAG START-->
							<div class="kode-price-tag">
								<figure>
									<img src="<?php bloginfo('stylesheet_directory')?>/extra-images/menu-pricetag2.jpg" alt=""/>
									<figcaption>
										<div class="kode-food-hdg-2">
											<h3>الغداء<span>تحتوي</span></h3>
										</div>
										<ul class="picetag-meta">
											<li><a href="#">مشويات</a></li>
											<li><a href="#">سلطات</a></li>
											<li><a href="#">سندوتشات</a></li>
											<li><a href="#">مكرونات</a></li>
											<li><a href="#">ارز</a></li>
											<li><a href="#">مخبوزات</a></li>
											<li><a href="#">شوربه</a></li>
										</ul>
										<a href="#"> اكتشف المزيد</a>
									</figcaption>
								</figure>
							</div>
							<!--PRICE TAG END-->
						</div>
						<div class="col-md-4 hidden-sm">
							<!--PRICE TAG START-->
							<div class="kode-price-tag">
								<figure>
									<img src="<?php bloginfo('stylesheet_directory')?>/extra-images/menu-pricetag3.jpg" alt=""/>
									<figcaption>
										<div class="kode-food-hdg-2">
											<h3>العشاء<span>يحتوي</span></h3>
										</div>
										<ul class="picetag-meta">
											<li><a href="#">كنافه</a></li>
											<li><a href="#">ارز باللبن</a></li>
											<li><a href="#">مشويات</a></li>
											<li><a href="#">عصائر</a></li>
											<li><a href="#">شوربه</a></li>
											<li><a href="#">سلطه</a></li>
										</ul>
										<a href="#">اكتشف المزيد</a>
									</figcaption>
								</figure>
							</div>
							<!--PRICE TAG END-->
						</div>
					</div>
				</div>
			</section>


			<section class="kode-reservation-bg">
				<div class="container">
					<!--HEADING 4 START-->
					<div class="kode-food-hdg-4">
						<h3>عمل <b>حجز</b></h3>
					</div>
					<!--HEADING 4 END-->
					<div class="row">
						<form>

							<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>

						</form>
					</div>
				</div>
			</section>

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
		</div>
<?php get_footer(); ?>
