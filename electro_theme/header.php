<!DOCTYPE html>
<html lang="en">
<head>
     <?php
$directory_template = get_template_directory_uri(); 
$directory_child = str_replace('custom_theme', '', $directory_template) . 'electro_theme';
//echo $directory_child;
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php bloginfo('name'); if(wp_title(' ', false)) { echo ' | '; } else { echo bloginfo('description'); } wp_title(' '); ?>
    </title>

    <!-- Bootstrap   Electro Signs  -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       <link rel="shortcut icon" href="<?php echo site_url();?>/wp-content/uploads/2019/03/logoe-es.png" />
    <!-- custom-css -->
    <link href="<?php echo $directory_child; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $directory_child; ?>/css/responsive.css" rel="stylesheet">
</head>

<body>
    <div class="topheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-7">
                        <ul class="list-inline toph_left">
                            <li><a href="tel:<?php the_field('number','option') ?>"><i class="fa fa-phone"></i> <?php the_field('number','option') ?></a></li>
                        </ul>
                    </div>

                    <div class="col-md-7 col-sm-8 col-xs-5">
                        <div class="top-bar-links clearfix pull-right">
                            <!--
                                    <ul class="top-bar-acc">
                                        <li class="top-bar-link"><i class="fa fa-phone"></i> <a href="#">561-427-0975</a></li>
                                        <li class="top-bar-link"> <a href="#">View Account</a></li>
                                    </ul>
        -->
                            <div class="social_media">
                                <ul class="list-inline ">
                                    <li><a href="<?php the_field('fb','option') ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php the_field('instagram_link','option') ?>"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="<?php the_field('linkedin' ,'option') ?>"><i class="fa fa-instagram"></i></a></li>
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
                <a href="<?php echo site_url(); ?>"><img src="<?php the_field('footer_img','option') ?>"></a>
            </div>
            <nav id='cssmenu' class="navigation">
                <div id="head-mobile"></div>
                <div class="button"></div>
               
<?php 

$defaults = array(
'theme_location'  => 'top',
'menu'            => '',
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
'items_wrap'      => '<ul id="%1$s" class="">%3$s</ul>',
'depth'           => 0,
'walker'          => new UL_Class_Walker(),
);

wp_nav_menu( $defaults );

?>


           
            </nav>
        </div>
    </header>
    