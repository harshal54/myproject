 <?php
 /*Template Name:blog*/
    get_header();
    ?>
    <section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1>Blog</h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="blog-main">
        <div class="container">
            <div class="row">
                 <?php
               $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $args = array('posts_per_page' => 4, 'paged' => $paged ,'order' =>'ASC' );
                query_posts($args); 

            $the_query = new WP_Query( $args ); ?>
           <?php if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-6 col-sm-6">
                    <div class="blog-main-section" style="margin-bottom: 30px;">
                        <div class="col-md-12 col-sm-6" style="padding: 0;">
                            <div class="blog-main-image">
                                <img src="<?php the_post_thumbnail_url('full') ?>">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 blog-main-sections-inner">
                            <div class="">
                                <div class="blog-main-inner">
                                    <div class="thb-post-top">
                                        <aside class="post-meta style1">
                                            <?php
                                            $category_detail=get_the_category($post->ID);
                                            foreach($category_detail as $cd){?>
                                           <a href="#" class="cat-editorial" aria-label="Editorial"><?php echo $cd->cat_name; ?></a>
                                           <?php }
                                             ?>
                                        </aside>
                                        <aside class="post-date"><?php echo get_the_date(); ?></aside>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo get_the_content(); ?></p>
                                    <aside class="post-author">
		                                <em>by</em> <a href="#" title="Author" rel="author"><?php the_author(); ?></a>
                                    </aside>
                                    <div class="post-content small">
										<div class="post-style2-links">
                                            <a href="#" title="Title" class="post-link comment-link"><i class="fa fa-comment"></i><?php echo get_comments_number($post->ID); ?> Comments</a> 
                                            <span class="share-link"><i class="fa fa-share"></i> 0 Shares</span>
                                        </div>				
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>
                  <?php endwhile;wp_reset_postdata(); endif; ?>  
            </div>
             <?php 
 function pagination_bar() {
    global $wp_query;
     $total_pages = $wp_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
?>
<div class="row">
 <div class="pagee">
    <?php pagination_bar(); ?>        
    </div>
</div>
      </div>
    </section>
     <?php
    get_footer();
    ?>
    
   