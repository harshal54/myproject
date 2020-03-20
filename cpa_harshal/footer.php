<div class="subscribe">
              <form action="#" class="subscribe__form js-subscribe-form" novalidate="">
                <h4 class="subscribe__title">Newsletters</h4>
                <div class="subscribe__group form-group">
                  <label class="sr-only">Newsletters</label>
                  <input type="email" placeholder="Input your e-mail" name="email" required="" data-parsley-trigger="change" class="subscribe__field form-control js-subscribe-email">
                </div>
                <button type="submit" class="btn--action subscribe__submit js-subscribe-submit">SUBMIT</button>
              </form>
              <!-- end of block .subscribe__form-->
            </div>
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
  <div class="container pt-70 pb-40 ">
    <div class="row ">
      <div class="col-sm-6 col-md-6">
        <div class="widget dark">
             <h4 class="widget-title">About</h4>
			  <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
		  <p> <?php the_field('desc','option'); ?></p>
          
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title">Quick Links</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
           <?php
                 $defaults = array
                 (
                'theme_location'  => 'footer',
                'menu'            => 'footer menu',
                'menu_class'      => 'list angle-double-right list-border',
            );
                 wp_nav_menu( $defaults );
                ?>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title ">Connect Us</h4>
          <div class="small-title">
            <div class="line1 background-color-white"></div>
            <div class="line2 background-color-white"></div>
            <div class="clearfix"></div>
          </div>
		  <p><?php the_field('address','option'); ?></p>
          <ul class="list-inline mt-5">
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#."><?php the_field('phone','option'); ?></a> </li>
            <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#."><?php the_field('email','option'); ?></a> </li>
          </ul>
          <ul class="socials">
            <li><a href="<?php the_field('fb_link','option'); ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php the_field('twitter_link','option'); ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php the_field('pin_link','option'); ?>"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-black-333">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right"><?php the_field('copyright','option'); ?></p>
        </div>
        <div class="col-md-6 col-sm-7 text-right footer_m">
          <div class="widget no-border m-0">
            <ul class="list-inline sm-text-center mt-5 font-12">
              <li> <a href="#.">FAQ</a> </li>
              <li>|</li>
              <li> <a href="#.">Support</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer> 
