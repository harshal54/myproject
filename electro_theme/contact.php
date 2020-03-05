<?php
 /*
 Template Name: contact
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
                    <h1><?php the_field('contact_head') ?></h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="index.html" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span><?php the_field('contact_head') ?></span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-main">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="sub-title">
                        <h3><?php the_field('intouch') ?></h3>
                    </div>
                    <p><?php the_field('duet') ?></p>
                    
                    <ul class="contact-details-list">
                        <li class="cdw-address"><i class="fa fa-map-marker"></i> <?php the_field('address') ?></li>
                        <li class="cdw-phone"><i class="fa fa-phone"></i><?php the_field('number','option') ?></li>
                        <li class="cdw-email"><a href="mailto:sales@electrosigndesign.com"><i class="fa fa-envelope"></i> <?php the_field('mail','option') ?></a></li>
                    </ul>
                     </div>
                     <div class="col-md-offset-1 col-md-6 col-sm-6">
                    <div class="sub-title">
                     <h3><?php the_field('detail') ?></h3>
                    </div>
                    <div class="contact-wrappper">
                        <div class="contact-form-main form-style">
                            <div class="cf-msg"></div> 
                            <div action="#" method="post" id="cf">
                            	 <div class="row">
                            	 	 <?php echo do_shortcode('[contact-form-7 id="318" title="Contact form 1"]');  ?>
                      
                            	 </div>
                            </div>
                           
                        </div>
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
                        <p><em><b>Electro Signs and Design, LLC.</b></em> 1680 99th Ln NE, Suite C, Blaine, MN 55449 (763) 785-7968</p>
                        <p>Full-service design, fabrication, and installation.</p>
                        <h3>Family Owned and Operated Since 1986.  Licensed, Bonded and Insured.</h3>
<!--                        <a href="#" target="_blank" class="normal-btn">Join Our Team</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>