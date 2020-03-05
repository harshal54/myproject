<?php
 /*
 Template Name: maintanence
 */

?>

<?php
$directory_template = get_template_directory_uri(); 
$directory_child = str_replace('custom_theme', '', $directory_template) . 'electro_theme';
//echo $directory_child;
?>
 <?php 
get_header(); ?>
 <section id="banner">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-md-12">
                    <h1><?php the_field('maintenence') ?></h1>
                    <div class="t3-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>" class="pathway">Home</a><span class="divider"></span></li>
                            <li class="active"><span>Maintenance &amp; Repair</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about-main">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                    <div class="about-main-image">
                        <img src="<?php the_field('main_img'); ?>">
                    </div>
                </div>
                   
                <div class="col-md-12 col-sm-12">
                    <div class="about-main-content">
                        <h3><?php the_field('main_content') ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>