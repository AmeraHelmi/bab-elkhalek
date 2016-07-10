	<?php
/*
Template Name: About-us
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
$numbers        =get_field('numbers');
$icon           =get_field('icon');
$about_image1           =get_field('image1');
$about_image2           =get_field('image2');
$url            =get_post_meta(5,'who are image url',true);

	 ?>
		<div class="kode-home-banner kode-inner-banner">
			<div class="container">
				<h6>من نحن</h6>
				<ul class="breadcrumb">
					<li><a href="/resturant">الرئيسيه</a></li>
					<li><a href="#">من نحن</a></li>
				</ul>
			</div>
		</div>

		<div class="kf_content_wrap">
			<section>
				<div class="container">
					<div class="row">
						<!--ABOUT US WRAP START-->
						<div class="kode-about-us-wrap">
							<div class="col-md-6">
								<div class="kode-about-us-des">
									<!--HEADING 7 START-->
									<div class="kode-food-hdg-7">
										<h3 style="margin-left:250px">من نحن</h3>
									</div>
									<!--HEADING 7 END-->
                                <?php while ( have_posts() ) : the_post(); ?>
									<div class="text">
										<p><?php  the_content(); ?></p>
									</div>
								<?php endwhile;wp_reset_query();?>
								</div>
							</div>
							<div class="col-md-6">
								<figure>
									<img src="<?php echo $about_image1['url']; ?>" alt=""/>
									<img class="about-us2-thumb" src="<?php echo $about_image2['url']; ?>" alt=""/>
								</figure>
							</div>
						</div>
					</div>
					<!--ABOUT US WRAP END-->
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
