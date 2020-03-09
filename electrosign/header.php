<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro Signs</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- custom-css -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <?php wp_head();  ?>
</head >
<body <?php body_class(); ?>>

    <div class="topheader">

            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-7">
                        <ul class="list-inline toph_left">
                            <li><a href="#"><i class="fa fa-phone"></i><?php the_field('phone','option'); ?></a></li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-8 col-xs-5">
                        <div class="top-bar-links clearfix pull-right">
                            <div class="social_media">
                                <ul class="list-inline ">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                       
                </div>
            </div>
        </div>
    <header class="navigation" id="sticky-nav">
        <div class="container">
            <div class="top-logo">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logoe-es.png"></a>
            </div>
            <nav id='cssmenu' class="navigation">
                <div id="head-mobile"></div>
                <div class="button"></div>
                <?php
                 $defaults = array
                 (
                'theme_location'  => 'header',
                'menu'            => 'header menu',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
            );
                 wp_nav_menu( $defaults );
                ?>
                </ul>
            </nav>
        </div>
    </header>
  