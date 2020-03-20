<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Welcome </title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/color/color-1.css" id="color" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- HEADER -->
<header id="main_header" class="header_sev">
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="social-icons text-right">
            <ul class="socials">
              <li><a href="<?php the_field('fb_link','option') ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php the_field('twitter_link','option') ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php the_field('pin_link','option') ?>"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i></button>
            <a class="navbar-brand sticky_logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-3.png" class="logo" alt=""></a>
          </div> <!-- End Header Navigation --> 
          <div class="collapse navbar-collapse" id="navbar-menu">
             <?php
                 $defaults = array
                 (
                'theme_location'  => 'header',
                'menu'            => 'header menu',
                'menu_class'      => 'nav navbar-nav navbar-right',
            );
                 wp_nav_menu( $defaults );
                ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
   <div id="searchbar" class="clearfix">
   <div class="container">
    <form id="searchform" method="get" action="searchpage.php">
      <button type="submit" id="searchsubmit" class="fa fa-search "></button>
      <input type="search" name="s" id="s" placeholder="Search..." autocomplete="off">
    </form>
   </div>
  </div>
<!-- HEADER  -->  
