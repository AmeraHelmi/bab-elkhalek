<?php
/*
Template Name: Menu
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
$price_breakfast         =get_field('price_breakfast');
$category                =get_field('category');

$starters_price          =get_field('starters_price');
$starters_category       =get_field('starters_category');

$soups_salads__price     =get_field('soups_salads__price');
$soups_salads__cat       =get_field('soups_salads__cat');

$drinks_desserts_price   =get_field('drinks_desserts_price');
$drinks_desserts_cat     =get_field('drinks_desserts_cat');

$numbers          =get_field('numbers');
$icon          =get_field('icon');
$url            =get_post_meta(5,'who are image url',true);

?>
<div class="kode-home-banner kode-inner-banner">
<div class="container">
<h6>قائمة الطعام</h6>
<ul class="breadcrumb">
<li><a href="/resturant">الرئيسيه</a></li>
<li><a href="#">قائمة الطعام</a></li>
</ul>
</div>
</div>

<div class="kf_content_wrap">
<section>
<div class="container">
<div class="kode-our-menu-tab-wrap">
<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-navigation" role="tablist">
<li role="presentation" class="active"><a href="#breakfast" aria-controls="breakfast" role="tab" data-toggle="tab">الافطار</a></li>
<li role="presentation"><a href="#starters" aria-controls="starters" role="tab" data-toggle="tab">الغداء</a></li>
<li role="presentation"><a href="#soups" aria-controls="soups" role="tab" data-toggle="tab">شوربات & سلطات </a></li>
<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">مشروبات & حلويات</a></li>
</ul>
<!-- Nav tabs -->
<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="breakfast">
<div class="row">
<?php $loop=new wp_query(array('post_type'	=>'Breakfast',
       'orderby'	=>'post_id',
       'order'	=>'asc')) ;?>
                            <?php while ($loop ->have_posts()):$loop->the_post();?>
<div class="col-md-4 col-sm-6">
<div class="kode-menu-tab-contant">

<figure>
   	 <?php
   	 if(has_post_thumbnail()){
set_post_thumbnail_size( 360, 252, true );
   	 the_post_thumbnail();
}
   	    ?> <figcaption>
<a class="search-btn-2" href="#"><i class="fa fa-search"></i></a>
</figcaption>
</figure>
<!-- TABS CONTANT DES START -->
<div class="menu-tab-des">
<div class="text">
<h4><a href="#"><?php  the_title(); ?></a></h4>
               <?php  the_content(); ?>
<span><sup>LE.</sup>
<?php the_field('price_breakfast'); ?></span>
</div>
<div class="kode-like-link">
<a href="#"><i class="fa fa-heart-o"></i>69</a>
</div>
<div class="tabs-menu-meta">
<a href="#"><span>التصنيف:</span> <?php the_field('category');?></a>
<div class="rating">
<span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>

</div>
</div>
<!-- TABS CONTANT DES END-->
</div>
</div>
 <?php endwhile;wp_reset_query();?>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="starters">
<div class="row">
<!-- TABS CONTANT START -->
<?php $loop=new wp_query(array('post_type'	=>'Starters',
       'orderby'	=>'post_id',
       'order'	=>'asc')) ;?>
                            <?php while ($loop ->have_posts()):$loop->the_post();?>
<div class="col-md-4 col-sm-6">
<div class="kode-menu-tab-contant">
<figure>
   	 <?php
   	 if(has_post_thumbnail()){
set_post_thumbnail_size( 360, 252, true );
   	 the_post_thumbnail();
   	 }
   	    ?>
<figcaption>
<a class="search-btn-2" href="#"><i class="fa fa-search"></i></a>
</figcaption>
</figure>
<!-- TABS CONTANT DES START -->
<div class="menu-tab-des">
<div class="text">
<h4><a href="#"><?php  the_title(); ?></a></h4>
<?php  the_content(); ?>
<span><sup>LE.</sup><?php the_field('starters_price'); ?></span>
</div>
<div class="kode-like-link">
<a href="#"><i class="fa fa-heart-o"></i>69</a>
</div>
<div class="tabs-menu-meta">
<a href="#"><span>التصنيف:</span> <?php the_field('starters_category');?></a>
<div class="rating">
<span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>
</div>
</div>
<!-- TABS CONTANT DES END-->
</div>
</div>
<?php endwhile;wp_reset_query();?>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="soups">
<div class="row">
<!-- TABS CONTANT START -->
<?php $loop=new wp_query(array('post_type'	=>'Soups & Salads',
       'orderby'	=>'post_id',
       'order'	=>'asc')) ;?>
                            <?php while ($loop ->have_posts()):$loop->the_post();?>
<div class="col-md-4 col-sm-6">
<div class="kode-menu-tab-contant">
<figure>
   	 <?php
   	 if(has_post_thumbnail()){
set_post_thumbnail_size( 360, 252, true );
   	 the_post_thumbnail();	    	 }
   	    ?> <figcaption>
<a class="search-btn-2" href="#"><i class="fa fa-search"></i></a>
</figcaption>
</figure>
<!-- TABS CONTANT DES START -->
<div class="menu-tab-des">
<div class="text">
<h4><a href="#"><?php  the_title(); ?></a></h4>
<?php  the_content(); ?>
<span><sup>LE.</sup><?php the_field('soups_salads__price'); ?></span>
</div>
<div class="kode-like-link">
<a href="#"><i class="fa fa-heart-o"></i>69</a>
</div>
<div class="tabs-menu-meta">
<a href="#"><span>التصنيف:</span> <?php the_field('soups_salads__cat'); ?></a>
<div class="rating">
<span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>
</div>
</div>
<!-- TABS CONTANT DES END-->
</div>
</div>
   	<?php endwhile;wp_reset_query();?>
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="drinks">
<div class="row">
<!-- TABS CONTANT START -->
<?php $loop=new wp_query(array('post_type'	=>'Drinks & Desserts',
       'orderby'	=>'post_id',
       'order'	=>'asc')) ;?>
                            <?php while ($loop ->have_posts()):$loop->the_post();?>
<div class="col-md-4 col-sm-6">
<div class="kode-menu-tab-contant">
<figure>
   	 <?php
   	 if(has_post_thumbnail()){
set_post_thumbnail_size( 360, 252, true );
   	 the_post_thumbnail();
}
   	    ?>	 <figcaption>
<a class="search-btn-2" href="#"><i class="fa fa-search"></i></a>
</figcaption>
</figure>
<!-- TABS CONTANT DES START -->
<div class="menu-tab-des">
<div class="text">
<h4><a href="#"><?php  the_title(); ?></a></h4>
                                                              <?php  the_content(); ?>
<span><sup>LE.</sup><?php the_field('drinks_desserts_price'); ?></span>
</div>
<div class="kode-like-link">
<a href="#"><i class="fa fa-heart-o"></i><?php the_field('drinks_desserts_price'); ?></a>
</div>
<div class="tabs-menu-meta">
<a href="#"><span>التصنيف:</span> <?php the_field('drinks_desserts_cat'); ?></a>
<div class="rating">
<span>☆</span><span>☆</span><span>☆</span><span>☆</span>
</div>
</div>
</div>
<!-- TABS CONTANT DES END-->
</div>
</div>
<?php endwhile;wp_reset_query();?>
</div>
</div>
</div>
<!-- Tab panes End -->
</div>
</div>
</section>
</div>
<?php get_footer(); ?>
