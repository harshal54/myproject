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

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
?>
 <section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Blog Name</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="index.html" class="pathway">Home</a><span class="divider"></span></li>
                            <li><a href="blog.html" class="pathway">Blog</a><span class="divider"></span></li>
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
                <div class="col-md-8 col-sm-12">
                    <div class="single-blog-main-top" >
                        
                        <img src="<?php the_post_thumbnail_url('full') ?>">
                        
                        <div class="blog-heading" style="margin-top: 10px;">
                            <h3><?php the_title();?></h3>
                        </div>
                        
                        <div class="single-blog-detail-bar">
                            <div class="blog-post-details clearfix">
                                <ul class="clearfix">
                                    <li><i class="fa fa-clock-o"></i><?php echo get_the_date(); ?></li>
                                    <li><i class="fa fa-user"></i> By: <?php echo $author = get_the_author(); ?></li>
                                    <li><i class="fa fa-tag"></i>Lorem Category</li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> <?php echo get_comments_number($post->ID); ?> </a></li>
                                </ul>
                            </div>
                        </div>
                                <div class="single-blog-points"> <?php

                                                  $content = get_the_content();
                                              $trimmed_content = wp_trim_words( $content, 30, NULL );
                                                   echo $trimmed_content;
                                                        ?></div>
                    </div>
                    
                  
                    
                    <div class="social-shared" style="border: none;">

                        
                        <ul class="list-inline social_icon">
                           <li><span>Share :</span></li>

                            <li>  <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li>
                            	<a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                          
                              <i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            
                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">

                            	<i class="fa fa-linkedin"></i></a></li>
                        </ul>
    				</div>
                    
                    <div class="single-blog-admin">
                        <div class="single-blog-admin-box">
                            <div class="single-blog-admin-image">
                                <img src="https://www.dikom.no/wp-content/uploads/2014/01/member-02.jpg">
                            </div>

                            <div class="single-blog-admin-content">
                                <h4><span>Author:</span>Admin</h4>
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
      $args = array(
	'post_type' => 'post',
	'posts_per_page' => 9
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="popular-blogs row">
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="<?php the_post_thumbnail_url('full') ?>">
                            </div>
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> <?php the_title();?> </a>
                                    </h3>
                                </div>
                                <div class="popular-blog-info">
                                    <span class="td-post-author-name">
                                    	<a href="#"><?php echo $author = get_the_author(); ?></a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00"><?php echo get_the_date(); ?></time></span>
    <!--                                <div class="td-module-comments"><a href="#">10</a></div>-->
                                </div>
                            </div>
                        </div><!--row(blog)-->
                          <?php endwhile;
                             endif;  ?>   
            </div><!--about author-->
        </div><!--author(col) div-->
    </div>
        </div>
    </section>

<?php	endwhile; // End of the loop.
			?>

		
<?php
get_footer();?>