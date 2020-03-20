<?php
/*Template Name:tenancy_application*/
get_header();
?>
<div class="page-title page-main-section banner">
  <div class="container padding-bottom-top-120 text-uppercase">
    <div class="main-title">
      <h1>Tenancy Application</h1>     
    </div>
  </div>
</div>
<section class="tanency_application">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="tanency_form" action="#">
                  <?php echo do_shortcode('[contact-form-7 id="35" title="tanency_application"]') ?>  
                </form>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>