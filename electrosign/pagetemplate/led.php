 <?php
 /*Template Name:led*/
    get_header();
    ?>

<section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>LED Retrofits</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>LED Retrofits</span></li>

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
    
     <?php
 /*Template Name:installation*/
    get_footer();
    ?>
