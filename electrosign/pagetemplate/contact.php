 <?php
 /* Template Name:contact*/
    get_header();
    ?>
    <section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>Contact Us</span></li>

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
                        <h3><?php the_field('touch'); ?></h3>
                    </div>
                    <p><?php the_field('description'); ?></p>
                    <ul class="contact-details-list">
                        <li class="cdw-address"><i class="fa fa-map-marker"></i><?php the_field('address'); ?></li>
                        <li class="cdw-phone"><i class="fa fa-phone"></i><?php the_field('phone'); ?></li>
                        <li class="cdw-email"><a href="mailto:sales@electrosigndesign.com"><i class="fa fa-envelope"></i><?php the_field('email'); ?></a></li>
                    </ul>
                                        
                </div>
                
                <div class="col-md-offset-1 col-md-6 col-sm-6">
                    <div class="sub-title">
                        <h3>Contact Details</h3>
                    </div>
                    <div class="contact-wrappper">
                        <div class="contact-form-main form-style">
                            <div class="cf-msg"></div>
                            <form action="#" method="post" id="cf">
                                <div class="row">
                                     <?php echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]'); ?> 
                                </div>
                            </form>
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
                        <?php the_field('info'); ?>
<!--                        <a href="#" target="_blank" class="normal-btn">Join Our Team</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php
    get_footer();
    ?>