<?php
/*Template Name:buy*/
get_header();
?>
<div class="page-title page-main-section banner">
  <div class="container padding-bottom-top-120 text-uppercase">
    <div class="main-title">
      <h1><?php the_field('head'); ?></h1>
    </div>
  </div>
</div>
<!--SLIDER --> 
<section id="agent-p-2" class="property-details  padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 clearfix">
        <div class="bottom40 heading_div pull-left">
            <h2 class="text-uppercase">All <span class="color_red">PROPERTIES</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
        </div>
        <div class="pull-right sorting_div">
            <span>Sorted by:</span>
            <div class=''>
                <form action="" method="GET">
            <select class=""  name="search_filter" onchange="this.form.submit();">
  <option value="price_low_to_high" <?php if((!empty($_GET['search_filter'])) && ($_GET['search_filter']=="price_low_to_high")){echo "selected";} ?> >Price (Low to High)</option>
                <option value="price_high_low" <?php if((!empty($_GET['search_filter'])) && ($_GET['search_filter']=="price_high_low")){echo "selected";} ?> >Price (High to Low)</option>
                <option value="latest_listing"   <?php if((!empty($_GET['search_filter'])) && ($_GET['search_filter']=="latest_listing")){echo "selected";} ?> >Latest Listing</option>
            </select>
        </form>
    </div>
        </div>
      </div>
	  <div class="clearfix"></div>
       <?php
       if(isset($_GET["search_filter"])){
       $sortby=$_GET["search_filter"];
      if($sortby=="price_low_to_high"){
       $wpb_all_query = new WP_Query(array(
            'post_type'      =>'post', 
            'post_status'    =>'publish', 
            'order'  => 'ASC',
            'meta_key' => 'price',
            'orderby' => 'meta_value_num',
            'posts_per_page' =>-1,
           'category_name' => 'buy',
            )); 
      }
      elseif($sortby=="price_high_low"){
     $wpb_all_query = new WP_Query(array(
            'post_type'      =>'post', 
            'post_status'    =>'publish', 
            'order'  => 'DESC',
            'meta_key' => 'price',
            'orderby' => 'meta_value_num',
            'posts_per_page' =>-1,
           'category_name' => 'buy',
            )); 
      }
      elseif($sortby=="latest_listing"){
            $wpb_all_query = new WP_Query(array(
            'post_type'      =>'post', 
            'post_status'    =>'publish', 
            'order'  => 'ASC',
            'orderby' => 'publish_date',
            'posts_per_page' =>-1,
           'category_name' => 'buy',
            )); 
      }
      }
      else{
       $wpb_all_query = new WP_Query(array(
            'post_type'      =>'post', 
            'post_status'    =>'publish', 
            'order'        => 'ASC',
            'posts_per_page' =>-1,
            'category_name' => 'buy',
            )); 
      }
           if ( $wpb_all_query->have_posts() ) {
            while ( $wpb_all_query->have_posts() ) { $wpb_all_query->the_post();?>
	  	<div class="col-md-4">
	      <div class="property">
                            <a href="<?php the_permalink(); ?>">
                                <div class="property-image">
                                    <img alt="" src="<?php the_field('property_image');
                                     ?>">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Leased - $ <?php the_field('price'); ?></div>
                                        <h3><?php the_title(); ?></h3>
                                        <figure><?php the_field('address'); ?></figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure><?php the_field('area'); ?><sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure><?php the_field('bedrooms'); ?></figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure><?php the_field('bathrooms'); ?></figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure><?php the_field('garages'); ?></figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
	                 </div>
                      <?php } }wp_reset_postdata();?>  
                    </div>
                  </div>
                </section>
<?php
get_footer();
?>