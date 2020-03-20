<?php get_header(); ?>

<div class="breadcump">
  <div class="container ">
    <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <div class="container">
	  
        <li class="ht-breadcrumbs__item"><a href="<?php echo site_url(); ?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Home</span></a></li>
        <li class="ht-breadcrumbs__item"><a href="<?php the_permalink(); ?>" class="ht-breadcrumbs__link"><span class="ht-breadcrumbs__title">Property</span></a></li>
        <li class="ht-breadcrumbs__item"><span class="ht-breadcrumbs__page">Single Property </span></li>
      </div><!-- .container -->
    </ul>
  </div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="single-property">
<div class="container">
<div class="row">
<div class="col-md-8">
<h1 class="property__title" style="text-transform: uppercase;"><?php the_title(); ?><span class="property__city"><i class="fa  fa-map-marker"></i> <?php the_field('address'); ?></span></h1>
</div>
<div class="col-md-4">
<button type="button" class="btn--default"><i class="fa fa-star"></i>Add to favorites</button>
<ul class="rating">
                                       <li><a href="#"><span class="fa fa-star"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star"></span></a></li>
                                       <li><a href="#"><span class="fa fa-star-o"></span></a></li>
                                       <li>(1 M)</li>
                                    </ul>
</div>
<div class="col-md-12">
				<div id="property-sliders" class="owl-carousel">
				      	<div class="item">
						 	<div class="property">
					            <a href="<?php the_field('property_image'); ?>">
					                <div class="property-image" >
					                    <img alt="" style="height: 600px;" src="<?php the_field('property_image'); ?>">
					                </div>
					            </a>
				        	</div>
				    	</div>
				</div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 clearfix">
<ul class="features">
                                        <li><span class="fa  fa-arrows-h"></span><div><span>Area</span> <?php the_field('area'); ?></div></li>
                                        <li><span class="fa fa-moon-o"></span><div><span>Bedrooms</span> <?php the_field('bedrooms'); ?></div></li>
										<li><span class="fa  fa-street-view"></span><div><span>Bathrooms</span> <?php the_field('bathrooms'); ?></div></li>
										<li><span class="fa  fa-bed"></span><div><span>Beds</span> <?php the_field('bedrooms'); ?></div></li>
										<li><span class="fa  fa-car"></span><div><span>Garages</span> <?php the_field('garages'); ?></div></li>

                                    </ul>
					</div>
<div class="col-md-8 col-sm-8">									
<div class="description">
                    <h2>Description</h2>
                    <p><?php the_field('content'); ?></p>
                </div>
				<div class="clearfix"></div>
</div>
  <?php endwhile; ?>
<?php endif; ?>
<div class="col-md-3 col-sm-4 ">
<div class="agentAvatar summaryItem pull-right">
                                     <div class="clearfix"></div>
                                    <img class="avatar agentAvatarImg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYANwOzKHLjEd5oK5_Qm5b-SDNhCTjvGW94ob44wyjRqaJjvbR" alt="avatar">
                                    <div class="agentName">Jane Smith</div>
                                    <a data-toggle="modal" href="#contactAgent" class="btn btn-lg btn-round btn-green contactBtn isThemeBtn">Contact Agent</a>
                                </div>
</div>
</div>
</div>
</div>
<section id="agent-p-2" class="property-details  padding" style="background: #f7f7f7;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 bottom40">
        <h2 class="text-uppercase">RELATED <span class="color_red">PROPERTIES</span></h2>
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
            'posts_per_page' =>-1,
            )); 
           if ( $wpb_all_query->have_posts() ) {
            while ( $wpb_all_query->have_posts() ) { $wpb_all_query->the_post();?>
          <div class="item">
		  <div class="property">
                            <a href="<?php the_permalink(); ?>">
                                <div class="property-image">
                                    <img alt="" src="<?php the_field('property_image'); ?>">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Leased - $ <?php the_field('price'); ?></div>
                                        <h3><?php the_title(); ?></h3>
                                        <figure><?php the_field('address'); ?></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure><?php the_field('area'); ?><sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure><?php the_field('bedrooms'); ?></figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure><?php the_field('bathrooms'); ?></figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure><?php the_field('garages'); ?></figure>
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
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/bootsnav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallaxie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
