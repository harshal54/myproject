<?php
/*Template Name:services*/
get_header();
?>
<section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Services</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>Services</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
      <section class="sa-main">
        <div class="container-fluid">
              <?php
                $the_query = new WP_Query(array('post_type'=>'post',  'posts_per_page'=>4 )); ?>
           <?php if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
     <div class="row">
       <?php if($the_query->current_post % 2 == 0){ ?>
                <div class="col-md-6 col-sm-6" style="padding: 0;">
                    <div class="sa-main-image">
                        <img src="<?php the_post_thumbnail_url('full') ?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 sa-main-sections-inner">
                    <div class="sa-main-inner">
                        <h3><?php  the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="dark-btn"><span>Read More</span></a>
                </div>
    </div>
<?php }else{ ?>
                <div class="col-md-push-6 col-sm-push-6 col-md-6 col-sm-6" style="padding: 0;">
                    <div class="sa-main-image">
                        <img src="<?php the_post_thumbnail_url('full') ?>">
                    </div>
                </div>
                <div class="col-md-pull-6 col-sm-pull-6 col-md-6 col-sm-6 sa-main-sections-inner">
                    <div class="sa-main-inner">
                        <h3><?php  the_title(); ?></h3>
                       <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="dark-btn"><span>Read More</span></a>
                    </div>
                </div>
<?php } ?>
</div>
 <?php endwhile;wp_reset_postdata(); endif; ?> 
  </div>
 <?php  get_footer(); ?>