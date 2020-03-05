<?php
 /*
 Template Name: About
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
                    <h1>About Us</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="index.html" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>About Us</span></li>

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
                        <img src="<?php the_field('about_main_img') ?>">
                    </div>
                </div>
                   
                <div class="col-md-12 col-sm-12">
                    <div class="about-main-content">
                        <p><?php the_field('about_main_para'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section id="middle-banner">
        <div class="parallax parallax--bg middle-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="middle-banner-inner">
                        <p><em><b><?php the_field('electro') ?></b></em><?php  the_field('address') ?></p>
                        <p><?php the_field('full') ?></p>
                        <h3><?php the_field('family') ?></h3>
<!--                        <a href="#" target="_blank" class="normal-btn">Join Our Team</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php  get_footer(); ?>