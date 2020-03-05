<?php
 /*
 Template Name: fabrication
 */

?>

<?php
$directory_template = get_template_directory_uri(); 
$directory_child = str_replace('custom_theme', '', $directory_template) . 'electro_theme';
//echo $directory_child;
?>
 <?php 
get_header(); ?>
 <section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1><?php the_field('fabric') ?></h1>
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
                        <img src="<?php the_field('fabric_img') ?>">
                    </div>
                </div>
                   
                <div class="col-md-12 col-sm-12">
                    <div class="about-main-content">
                        <h3><?php the_field('with') ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="fabrication-main">
        <div class="container">  
            <div class="row">
   
                    
            	<?php

// check if the repeater field has rows of data
if( have_rows('fabric_repeater') ):

 	// loop through the rows of data
    while ( have_rows('fabric_repeater') ) : the_row();
?> 
<div class="col-md-4 col-sm-6">
	       <figure class="snip1581"><img src="<?php the_sub_field('img_fabric'); ?>" >
       	<figcaption>
                        <h3 class="title2"><?php the_sub_field('img_caption'); ?></h3>
                      </figcaption><a href="#"></a>
                    </figure>
        
</div>
   <?php endwhile;

else :

    // no rows found

endif;

?>
                
               
          </div>  
        </div>
    </section>
    <?php get_footer(); ?>