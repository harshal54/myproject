    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="about-footer customfooter_contacts">
                        <div class="footer-logo">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php the_field('image','option');  ?>">
                            </a>
                        </div>
                        
                        <p><?php the_field('description','option');  ?></p>
                        
                        
                    </div>
                    
                </div>

                <div class="col-sm-3 col-md-3">
                    <h4><?php the_field('quick_link','option'); ?></h4>
                    <div class="useful-links">          
                         <?php   wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'useful-links' ) );?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="contact-footer">
                     <form class="example"  action="<?php echo site_url(); ?>">
                          <input type="text" name="s" value="<?php get_search_query(); ?>" placeholder="Search..">
                          <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <h4><?php the_field('contact_us','option'); ?></h4>
                        <div class="about-footer newslatter">
                            
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <span><?php the_field('address','option'); ?> </span></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(763) 785-7968"><?php the_field('phone','option'); ?></a></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto: sales@electrosigndesign.com"><?php the_field('email','option'); ?></a></p>
                            
                            <ul class="list-inline social_icon">
                                <li><a href="<?php the_field('fb_link','option'); ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php the_field('instagram_link','option'); ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php the_field('linked_url','option'); ?>"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="">
        <div class="container">
            <div class="row copy_right_row">
                <div class="col-md-12">
                    <ul class="list-inline text-center copy_right_uline">
                        <li>
                            <p><?php the_field('copyright','option'); ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    
    <!-- custom.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    
    
    <!-- universal-parallax js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/universal-parallax.min.js"></script>
    
    <!-- video-popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js"></script>
    
    <script>
    new universalParallax().init({
			speed: 4
		});
    </script>
</body>
</html>
