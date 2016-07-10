<?php
/*
Template Name: Contact us
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
$email1_us          =get_field('email1_us');
$call_us          =get_field('call_us');
$our_locatioon          =get_field('our_location');
$reservation          =get_field('reservation');
$url            =get_post_meta(5,'who are image url',true);

 ?>
  <div class="kode-home-banner kode-inner-banner">
    <div class="container">
      <h6>اتصل بنا</h6>
      <ul class="breadcrumb">
        <li><a href="/resturant">الرئيسيه</a></li>
        <li><a href="#">اتصل بنا</a></li>
      </ul>
    </div>
  </div>

  <div class="kf_content_wrap">
    <section>
      <div class="container">
        <div class="row">
          <!--CONTACT DES START-->
          <div class="col-md-3 col-sm-6">
            <div class="kode-contact address">
              <span class="icon-icon-109580"></span>
              <h4>العنوان</h4>
              <address><?php echo $our_locatioon; ?></address>
            </div>
          </div>
          <!--CONTACT DES END-->
          <!--CONTACT DES START-->
          <div class="col-md-3 col-sm-6">
            <div class="kode-contact address">
              <span class="icon-interface"></span>
              <h4>البريد الاليكتروني</h4>
              <ul>
                                <li><?php echo $email1_us; ?></li>
              </ul>
            </div>
          </div>
          <!--CONTACT DES END-->
          <!--CONTACT DES START-->
          <div class="col-md-3 col-sm-6">
            <div class="kode-contact address">
              <span class="icon-technology"></span>
              <h4>للاتصال بنا</h4>
              <ul>
                                <li><?php echo $call_us; ?></li>
              </ul>
            </div>
          </div>
          <!--CONTACT DES END-->
          <!--CONTACT DES START-->
          <div class="col-md-3 col-sm-6">
            <div class="kode-contact">
              <span class="icon-hotel"></span>
              <h4>للحجز</h4>
              <ul>
                                <li><?php echo $reservation; ?></li>
              </ul>
            </div>
          </div>
          <!--CONTACT DES END-->
        </div>
      </div>
    </section>
  <!--CONTACT MAP START-->
    <div class="kode-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3453.41633552502!2d31.4323086!3d30.0535984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x75ef45ae2e8f4b9b!2sTwin+Plaza!5e0!3m2!1sar!2seg!4v1466022367015" width="600" height="545" frameborder="0" style="border:0" allowfullscreen></iframe>				<!--CONTACT MAP FROM START-->
      <div class="kode-contact">
        <h4>CONTACT US</h4>
        <form method="POST">
	<?php echo do_shortcode( '[contact-form-7 id="754" title="contact us"]' ); ?>
        </form>
      </div>
      <!--CONTACT MAP FROM END-->
    </div>
    <!--CONTACT MAP END-->
  </div>
<?php get_footer(); ?>
