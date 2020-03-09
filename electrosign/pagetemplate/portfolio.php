<?php
/*Template Name:portfolio*/
get_header();
?>
<section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Portfolio</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>Portfolio</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="news-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2><?php the_field('head'); ?></h2>
                        <div class="devider-line">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/devider1.png" style="max-width: 300px;">
                        </div>
                    </div>
                    <div class="row home-gallery">
                          <?php
             if( have_rows('porfolio_slider') ):
              while ( have_rows('porfolio_slider') ) : the_row();
                ?> 
                        <div class="col-md-3 col-sm-6 home-gallery-box">
                            <a data-fancybox="gallery" data-srcset="<?php the_sub_field('image') ?>" data-width="2048" data-height="1365" data-caption="Lorem" href="<?php the_sub_field('image') ?>">
                                <img src="<?php the_sub_field('image') ?>" alt="">
                            </a>
                        </div>
                          <?php endwhile;
            else :
            endif;
            ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
   
    
    <?php
    get_footer();
    ?>