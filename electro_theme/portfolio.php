 
<?php
 /*
 Template Name: portfolio
 */

?>
 <?php 
get_header(); ?>
   <?php
$directory_template = get_template_directory_uri(); 
$directory_child = str_replace('custom_theme', '', $directory_template) . 'electro_theme';
//echo $directory_child;
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
                        <h2>Gallery</h2>
                        <div class="devider-line">
                            <img src="<?php the_field('port_divider') ?>" style="max-width: 300px;">
                        </div>
                    </div>
                </div>

                    <div class="row home-gallery">
					<?php
                       // check if the repeater field has rows of data
                if( have_rows('portfolio_repeater') ):
 	            // loop through the rows of data
                  while ( have_rows('portfolio_repeater') ) : the_row();
                     ?>

                  <div class="col-md-4 col-sm-6 home-gallery-box">
                        <a data-fancybox="gallery" data-srcset="<?php  the_sub_field('img_port') ?>" data-width="2048" data-height="1365"  href="<?php  the_sub_field('img_port') ?>">
                                    <figure class="snip1581"><img src="<?php  the_sub_field('img_port') ?>" alt="">  </figure>
                                 </a>
                                 
                                 </div> <?php
                                   endwhile;
                                  endif;
                                  ?> 
                    
                </div>
           </div>
       </div>
    </section>
 
<?php get_footer() ?>