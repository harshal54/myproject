    <?php
$directory_template = get_template_directory_uri(); 
$directory_child = str_replace('custom_theme', '', $directory_template) . 'electro_theme';
//echo $directory_child;
?>
 <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="about-footer customfooter_contacts">
                        <div class="footer-logo">
                            <a href="<?php echo site_url(); ?>">
                               <img src="<?php the_field('footer_img','option') ?>">
                            </a>
                        </div>
                        
                        <p style="margin: 0px auto;
                          text-align: center;"><?php the_field('whatever','option') ?></p>
                        
                        
                    </div>
                    
                </div>

                <div class="col-sm-3 col-md-3">
                    <h4><?php the_field('links','option') ?></h4>
                    <div class="useful-links">
                      <?php   wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'my_css_class' ) );?>
                       </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="contact-footer">
                        <h4><?php the_field('contact','option') ?></h4>
                        <div class="about-footer newslatter"  >
                            
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <span><?php the_field('addres','option') ?></span></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(763) 785-7968">
                            <?php the_field('number','option') ?></a></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto: sales@electrosigndesign.com"><?php the_field('mail','option') ?></a></p>
                            
                            <ul class="list-inline social_icon">
                                <li><a href="<?php the_field('fb','option') ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php the_field('instagram_link','option') ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php the_field('linkedin' ,'option') ?>"><i class="fa fa-linkedin"></i></a></li>
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
                            <p><?php the_field('copyright', 'option'); ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    
    <!-- custom.js -->
    <script src="<?php echo $directory_child; ?>/js/custom.js"></script>
    
    
    <!-- universal-parallax js -->
    <script src="<?php echo $directory_child; ?>/js/universal-parallax.min.js"></script>
    
    <!-- video-popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js"></script>
    
    <script>
    new universalParallax().init({
			speed: 4
		});
    </script>