 <?php
 /*Template Name:fabrication*/
    get_header();
    ?>
    <section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Fabrication</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>Fabrication</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-main">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="about-main-image">
                        <img src="<?php the_field('image'); ?>">
                    </div>
                </div>
                   
                <div class="col-md-12 col-sm-12">
                    <div class="about-main-content">
                        <h3><?php the_field('description'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="fabrication-main">
        <div class="container">  
            <div class="row">
              <?php
             if( have_rows('fabrication_slider') ):
              while ( have_rows('fabrication_slider') ) : the_row();
                ?> 
           <div class="col-md-3 col-sm-6">
         <figure class="snip1581"><img src="<?php the_sub_field('image'); ?>" >
                  <figcaption>
                        <h3 class="title2"><?php the_sub_field('title'); ?></h3>
                   </figcaption><a href="#"></a>
           </figure>
           </div>
           <?php endwhile;
            else :
            endif;
            ?>
        </div>
    </section>
     <?php
    get_footer();
    ?>