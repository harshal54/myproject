<?php
/*Template Name:contact*/
get_header();
?>
<div class="page-title page-main-section banner">
  <div class="container padding-bottom-top-120 text-uppercase">
    <div class="main-title">
      <h1><?php the_field('contact'); ?></h1>     
    </div>
  </div>
</div>


<section class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="bottom20">
                    <h2 class="text-uppercase"><?php the_field('touch'); ?></span></h2>
                    <div class="line_1"></div>
                    <div class="line_2"></div>
                    <div class="line_3"></div>
                </div>
               <!--  <form class="contact_form_vs row"> -->
                    <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]') ?>
            <!--     </form> -->
            </div>
            <div class="col-md-4">
                <div class="cont_info">
                    <h3><?php the_field('cf'); ?></h3>
                    <p><?php the_field('desc'); ?></p>
                    <ul class="cont_detail">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('address'); ?></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>  <?php the_field('phone'); ?></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php the_field('email'); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="<?php the_field('map'); ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>