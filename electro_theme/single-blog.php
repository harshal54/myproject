<?php
 /*
 Template Name: single blog
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
                    <h1><?php the_field('blogname') ?></h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li><a href="blog.html" class="pathway">Blog</a><span class="divider"></span></li>
                            <li class="active"><span><?php the_field('blogname') ?></span></li>

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
                    <div class="single-blog-main-top">
                        
                        <img src="<?php the_field('blog_img') ?>">
                        
                        <div class="blog-heading" style="margin-top: 10px;">
                            <h3><?php the_field('head') ?>Ut enim ad minim veniam, quis nostrud exercitation ullamco</h3>
                        </div>
                        
                        <div class="single-blog-detail-bar">
                            <div class="blog-post-details clearfix">
                                <ul class="clearfix">
                                    <li><i class="fa fa-clock-o"></i> Jan 15, 2018</li>
                                    <li><i class="fa fa-user"></i> By: admin</li>
                                    <li><i class="fa fa-tag"></i> Uncategorized</li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i> No Comments </a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        
                        <p>Excepteur sint occaecat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    </div>
                    
                    <div class="single-blog-points">
                        <h4>Excepteur sint occaecat aute</h4>
                        <p>Sint occaecat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        
                        <p>Excepteur sint occaecat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. eu fugiat nulla pariatur. Excepteur sint occaecat.</p>

                    </div>
                    
                    <div class="social-shared" style="border: none;">

                        
                        <ul class="list-inline social_icon">
                           <li><span>Share :</span></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box3.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>

    <!--                                <div class="td-module-comments"><a href="#">10</a></div>-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box1.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box2.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box4.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box5.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box1.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box2.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>

    <!--                                <div class="td-module-comments"><a href="#">10</a></div>-->
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="popular-blogs row">
                            
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box3.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="popular-blogs row">
                            <div class="popular-blog-img col-md-4 col-sm-4">
                                <img src="img/box4.jpg">
                            </div>
                            
                            <div class="popular-blog-content col-md-8 col-sm-8">
                                <div class="popular-blog-details">
                                    <h3>
                                        <a href="#"> Aenean massa. Cum sociis que penatibus. </a>
                                    </h3>
                                </div>

                                <div class="popular-blog-info">
                                    <span class="td-post-author-name"><a href="#">Poul Walls</a> <span>-</span> </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2015-12-15T13:06:32+00:00">December 15, 2015</time></span>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>            
            </div>
        </div>
    </section>
    
   
    
    
<?php get_footer() ?>