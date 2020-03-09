<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Blog Name</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li><a href="<?php echo get_permalink( get_page_by_title( 'blog' ) ) ?>" class="pathway">Blog</a><span class="divider"></span></li>
                            <li class="active"><span>Blog Name</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="single-blog-main">
        <div class="container">
            <div class="row">
            	<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
?>
                <div class="col-md-8 col-sm-12">
                    <div class="single-blog-main-top">
                        
                        <img src="<?php the_post_thumbnail_url('full'); ?>">
                        
                        <div class="blog-heading" style="margin-top: 10px;">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="single-blog-detail-bar">
                            <div class="blog-post-details clearfix">
                                <ul class="clearfix">
                                    <li><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></li>
                                    <li><i class="fa fa-user"></i> By: <?php the_author(); ?></li>
                                         <?php
                                            $category_detail=get_the_category($post->ID);
                                            foreach($category_detail as $cd){?>
                                    <li><i class="fa fa-tag"></i> <?php echo $cd->cat_name; ?></li>
                                         <?php }
                                             ?>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><?php echo get_comments_number($post->ID); ?> Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                    <div class="social-shared" style="border: none;">
                        <ul class="list-inline social_icon">
                           <li><span>Share :</span></li>
                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
    				</div>
                    <div class="single-blog-admin">
                        <div class="single-blog-admin-box">
                            <div class="single-blog-admin-content">
                                <h4><span>Author:</span><?php the_author(); ?></h4>
                                <p>Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-md-4 col-sm-12">
                    <div class="about-author">
                        <div class="sub-title">
                            <h3>Popular Blogs</h3>
                        </div>
                        <?php
                  $the_query = new WP_Query(array('post_type'=>'post',  'posts_per_page'=>9 )); ?>
           <?php if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="popular-blogs row">
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="<?php the_post_thumbnail_url('full'); ?>">
                            </div>
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                                    </h3>
                                </div>
                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#"><?php the_author(); ?></a> 
                                     </span>
                                    <span class="td-post-date">
                                    	<?php echo get_the_date(); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                           <?php endwhile;
                             endif;  ?> 
                    </div>             
                </div> 
                  <?php	endwhile; // End of the loop.
			?>         
            </div>
        </div>
    </section>
<?php
get_footer();
