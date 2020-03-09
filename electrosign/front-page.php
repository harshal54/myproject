<?php
/* Template Name:home*/
get_header();
?>
  <section id="home" style="padding: 0 !important">
        <div class="container-fluid" id="slider">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                       
                        <div class="overlay"></div>

                       
                        <div class="carousel-inner">
                            <?php 
                            $count = 1; 
                        if( have_rows('slider_repeater') ):
                       
                         while ( have_rows('slider_repeater') ) : the_row()     
                                 ?>
                            <div class="item slides <?php if ($count==1) {
                                echo "active";
                            } ?>">
                                <div class="overlay"></div>
                                <div class="slide-1" style="background: url('<?php  the_sub_field('image'); ?>')"></div>
                                <div class="hero">
                                    <hgroup>
                                        <h3><?php  the_sub_field('head'); ?></h3>
                                        <h1><span><?php  the_sub_field('slider'); ?></span> 
                                            <?php  the_sub_field('caption'); ?></h1>
                                       
                                    <p><?php  the_sub_field('caption_line'); ?></p>
                                        <a class="normal-btn" href="<?php echo site_url(); ?>" target="_self"><span>
                                            <?php the_sub_field('read') ?></span></a>
                                    </hgroup>
                                </div>
                            </div>
                       <?php
                      $count++;
                      endwhile;
                       endif;
                         ?> 
                        </div>

                        <nav id="nav-arrows" class="nav-arrows hidden-xs visible-sm visible-md visible-lg">
                            <a class="sl-prev hidden-xs" href="#bs-carousel" data-slide="prev">
                                <i class="fa fa-angle-left fa-2x"></i>
                            </a>

                            <a class="sl-next" href="#bs-carousel" data-slide="next">
                                <i class="fa fa-angle-right fa-2x"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="upper-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                   
                    <div class="welcome-main-inner">
                        <h2><?php the_field('welcome_title'); ?></h2>
                        <h1><?php the_field('welcome_head'); ?></h1>
                        <p><?php the_field('welcome_description'); ?></p>
                        
                        <div class="welcome-comment">
                            <h5><?php the_field('theteam'); ?></h5>
                            <h4><?php the_field('jk'); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="upper-box-inner-image">
                        <img src="<?php the_field('img_1'); ?>">
                        <h3><a href="#">Gift certificates</a></h3>
                    </div>

                    <div class="upper-box-inner-image">
                        <img src="<?php the_field('img_2'); ?>">
                        <h3><a href="#">Locations &amp; hours</a></h3>
                    </div>

                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="upper-box-inner-image">
                        <img src="<?php the_field('img_3'); ?>">
                        <h3><a href="#">Gift certificates</a></h3>
                    </div>

                    <div class="upper-box-inner-image">
                        <img src="<?php the_field('img_4'); ?>">
                        <h3><a href="#">Locations &amp; hours</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    
    <section id="services-main">
        <div class="parallax parallax--bg services-bg"></div>
        <div class="container">
                <div class="section-title">
                    <h2 style="color: #fff;">Services</h2>
                    <div class="devider-line">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/devider1.png" style="max-width: 300px;">
                    </div>
                    <h4 style="color: #fff;">Our goal, is that when you think of someone you can trust, you think of Electro.</h4>
                </div>   
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <figure class="snip1581"><img src="<?php the_field('serviceimg1'); ?>" alt="profile-sample2">
                      <figcaption>
<!--                        <h3 class="title1">Best</h3>-->
                        <h3 class="title2"><?php the_field('maintenance'); ?></h3>
    <!--                    <h3 class="title3">Collection</h3>-->
                      </figcaption><a href="#"></a>
                    </figure>
                </div>
                
                <div class="col-md-3 col-sm-3">
                    <figure class="snip1581"><img src="<?php the_field('serviceimg2'); ?>" alt="profile-sample2">
                      <figcaption>
<!--                        <h3 class="title1">Best</h3>-->
                        <h3 class="title2"><?php the_field('install'); ?></h3>
    <!--                    <h3 class="title3">Collection</h3>-->
                      </figcaption><a href="#"></a>
                    </figure>
                </div>
                
                <div class="col-md-3 col-sm-3">
                    <figure class="snip1581"><img src="<?php the_field('serviceimg3'); ?>" alt="profile-sample2">
                      <figcaption>
<!--                        <h3 class="title1">Best</h3>-->
                        <h3 class="title2"><?php the_field('fabrication'); ?></h3>
    <!--                    <h3 class="title3">Collection</h3>-->
                      </figcaption><a href="#"></a>
                    </figure>
                </div>
                
                <div class="col-md-3 col-sm-3">
                    <figure class="snip1581"><img src="<?php the_field('serviceimg4'); ?>" alt="profile-sample2">
                      <figcaption>
<!--                        <h3 class="title1">Best</h3>-->
                        <h3 class="title2"><?php the_field('led'); ?></h3>
    <!--                    <h3 class="title3">Collection</h3>-->
                      </figcaption><a href="#"></a>
                    </figure>
                </div>
            </div>    
                  

        </div>
    </section>
    
    
    <section id="call-you-main">
<!--        <div class="parallax parallax--bg call-you-bg"></div>-->
        <div class="col-md-offset-2 col-sm-12 col-md-8">
            <div class="video-main-inner">
                <div class="video-main-inner-heading">
                    <h2><?php the_field('our') ?></h2>
                    <h4><?php the_field('we') ?></h4>
                </div>

                <div class="middle-video">
                    <a class="middle-video__play" href="<?php the_field('videolink') ?>"><i class="fa fa-play"></i></a>
                </div>

                <div class="middle-video__overlay" style="left: -100%;">
                    <div class="middle-video__modal">
                        <a class="middle-video__close" href="#">Close</a>

                        <div class="fluid-width-video-wrapper" style="padding-top: 50%;"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="news-main">
        <div class="container">
            <div class="row">

                <div class="section-title">
                   <h2>Blogs</h2>
                   <div class="devider-line">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/devider1.png" style="max-width: 300px;">
                    </div>
                </div>
                      <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    );
                    $the_query = new WP_Query( $args ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                     <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>   
                <div class="col-md-4 cols-m-4">
                    <div class="news-main-box">
                        <div class="news-box-image">
                            <img src="<?php the_post_thumbnail_url('full') ?>">
                        </div>
                        <div class="news-box-content">
                            <h3><a href="#"><?php the_title(); ?></a></h3>
                            <span class="date"><?php echo get_the_date(); ?></span>
                            <p><?php echo get_the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php else : ?>
                  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                  <?php endif; ?>    
            </div>
        </div>
    </section>
    <?php
    get_footer();
    ?>