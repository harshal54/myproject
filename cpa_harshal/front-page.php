<?php
/*Template Name:home*/
get_header();
?>
<section class="rev_slider_wrapper">
  <div id="rev_slider_3" class="rev_slider"  data-version="5.0">
  
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade">
          <?php
if( have_rows('home_slider') ):
    while ( have_rows('home_slider') ) : the_row();?>
        <img src="<?php the_sub_field('image'); ?>"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
         <div class="tp-caption  tp-resizeme" 
            data-x="['left','left','left','left']" data-hoffset="['-60','20','0','0']"
            data-y="top" data-voffset="300" 
            data-transform_idle="o:1;"         
            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
            data-fontsize="['24', '24', '22', '18']" 
            data-whitespace="['nowrap', 'nowrap', 'nowrap', 'normal']" 
            data-splitin="none" 
            data-splitout="none"
            data-responsive_offset="on"
            data-start="700">
            
            <div class="slide-content left-slide">
                <div class="title"><?php the_sub_field('title'); ?></div>
                <div class="big-title"><?php the_sub_field('big_title'); ?></div>
                <p><?php the_sub_field('para'); ?> </p>
                <div class="btns-box">
                   
                    <a href="#" class="btn_fill"><?php the_sub_field('contact'); ?></a>
                </div>
            </div> 
        </div><?php  endwhile;else :endif;
?>
      </li>
     
    </ul>
  </div>
</section>
<!--SLIDER --> 
<section id="agent-p-2" class="property-details  padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">PROPERTIES OF THE  <span class="color_red">WEEK</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
        <p class="margin-t-20">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
        </p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div id="property-2-slider" class="owl-carousel">
            <?php
       $wpb_all_query = new WP_Query(array(
            'post_type'      =>'post', 
            'post_status'    =>'publish', 
            'order'        => 'ASC',
             'meta_key' => 'price',
              'orderby' => 'meta_value_num',
            'posts_per_page' =>5,
            'category_name' => 'buy',
            )); 
           if ( $wpb_all_query->have_posts() ) {
            while ( $wpb_all_query->have_posts() ) { $wpb_all_query->the_post();?>
          <div class="item">
		  <div class="property">
                            <a href="<?php the_permalink(); ?>">
                                <div class="property-image">
                                    <img alt="" src="<?php the_field("property_image"); ?>">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Leased - $ <?php the_field("price"); ?></div>
                                        <h3><?php the_title(); ?></h3>
                                        <figure><?php the_field("address"); ?></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure><?php the_field("area"); ?><sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure><?php the_field("bedrooms"); ?></figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure><?php the_field("bathrooms"); ?></figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure><?php the_field("garages"); ?></figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
          </div>
           <?php } }wp_reset_postdata();?> 
        </div>
      </div>
    </div>
  </div>
</section>


<section id="about-sev" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="row">
          <div class="col-md-12 bottom20">
            <h2 class="text-uppercase"><?php the_field('head'); ?></span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div>
        <div class="about-sev-tag">
          <h4><?php the_field('title'); ?></h4>
          <p><?php the_field('desc'); ?></p>
        </div>
      </div>
      <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="about-sev-img">
         <img src="<?php the_field('image'); ?>">
        </div>
      </div>

    </div>

  </div>
</section>


<section class="parallaxie" style="background:url(<?php the_field('bg'); ?>);">
  <div class="container-fluid">
    <div class="row">
       
      <div class="col-md-6 col-sm-4"> </div>
      <div class="col-md-6 col-sm-8 right_box">
        <div class="right_box_inner padding clearfix">
             <?php
if( have_rows('home_slider2') ):
    while ( have_rows('home_slider2') ) : the_row();?>
          <div class="col-md-6 col-sm-6 white_content top20 bottom30">
            <i <?php the_sub_field('icon') ?>></i>
            <h3 class="bottom10 top20">  <?php the_sub_field('head') ?></h3>
            <p>  <?php the_sub_field('para') ?></p>
          </div>
           <?php  endwhile;else :endif; ?>
        </div>
      </div>
      
    </div>
  </div>
</section>


<section id="about-sev" class="padding ">
<div class="container">
<div class="row">
          <div class="col-md-12 bottom20">
            <h2 class="text-uppercase">Clients <span class="color_red"> Reviews</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tcb-simple-carousel">
                    <div id="myCarousel" class="carousel slide">
                       
                        <div class="carousel-inner">
                              
                            <div class="item active">
                                 <?php
            if( have_rows('home_slider3') ):
                while ( have_rows('home_slider3') ) : the_row();?>
                                <blockquote>
                                  <p> <?php the_sub_field('desc'); ?></p>
                                  <small><?php the_sub_field('wish'); ?><cite title="Source Title"><?php the_sub_field('artist'); ?></cite></small>
                                </blockquote>
                                <?php  endwhile;else :endif; ?>
                            </div>
                             
                        </div> 

                       <div class="carousel-controls">
                          <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="fa fa-angle-double-left"></span></a>
                          <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="fa fa-angle-double-right"></span></a>
                      </div>  

                    </div>

                </div>
            </div>
        </div>
</div>
</section>
<?php
get_footer();
?>
<!--===== REQUIRED JS =====--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootsnav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallaxie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<!--Revolution Slider-->
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/jquery.themepunch.revolution.min.js"></script>   
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/revolution.extension.layeranimation.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/revolution.extension.navigation.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/revolution.extension.parallax.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/revolution.extension.slideanims.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/themepunch/revolution.extension.video.min.js"></script>

<!--Custom Js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
<script id="rendered-js">
$(function(){
  var $searchlink = $('#searchtoggl i');
  var $searchbar  = $('#searchbar');
  
  $('.srch a').on('click', function(e){
    e.preventDefault();
    
    if($(this).attr('id') == 'searchtoggl') {
      if(!$searchbar.is(":visible")) { 
        // if invisible we switch the icon to appear collapsable
        $searchlink.removeClass('fa-search').addClass('fa-search-minus');
      } else {
        // if visible we switch the icon to appear as a toggle
        $searchlink.removeClass('fa-search-minus').addClass('fa-search');
      }
      
      $searchbar.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });
  
  $('#searchform').submit(function(e){
    e.preventDefault(); // stop form submission
  });
});
    </script>
