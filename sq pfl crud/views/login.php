<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/bulona/demo/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 07:09:58 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Bulona - Bootstrap Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url(); ?>assets/css/app-style.css" rel="stylesheet"/>
  
</head>
<body>

<!-- start loader -->
<!--    <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div> -->
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
  <div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
     <div class="card-content p-2">
      <div class="text-center">
        <img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt="logo icon">
      </div>
      <div class="card-title text-uppercase text-center py-3">Sign In</div>
      <?php 
               if(!empty($this->session->flashdata('data')))
               { 
            ?>
            <div class="col-md-12">
             <div class="<?php echo $this->session->flashdata('data')['type']  ?>" style="width: 100%;display: block; margin: auto;text-align: center;"><?php echo $this->session->flashdata('data')['content']  ?> 
             </div>
            </div> 
      
          <?php } ?>
        <form id="reg" action="<?php echo base_url();?>Logincheck" method="post">
        <div class="form-group">
        <label for="exampleInputMobile" class="sr-only">Mobile</label>
         <div class="position-relative has-icon-right">
          <input type="text"  name="mobile" class="form-control input-shadow" placeholder="Enter Mobile">
          <div class="form-control-position">
            <i class="icon-user"></i>
           
          </div>
         </div>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword" class="sr-only">Password</label>
         <div class="position-relative has-icon-right">
          <input type="password"  name="password" class="form-control input-shadow" placeholder="Enter Password">
          <div class="form-control-position">
            <i class="icon-lock"></i>
               
          </div>
         </div>
        </div>
      <div class="form-row">
      </div>
       <button type="submit" class="btn btn-primary btn-block" name="signin">Sign In</button>
        <div class="text-center mt-3">Sign In With</div>
       </form>
       </div>
      </div>
     
       </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>
  <!--end color cwitcher-->
  
  </div><!--wrapper-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  
  <!-- sidebar-menu js -->
  <script src="<?php echo base_url(); ?>assets/js/sidebar-menu.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <!-- Custom scripts -->
  <script src="<?php echo base_url(); ?>assets/js/app-script.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
             $("#reg").validate({
              rules:{
                   mobile:{required:true},
                   password:{required:true},
              },
              messages:{
                mobile:{required:"mobile is required"},
                password:{required:"password is required"},
              }
             });

      });
 
</script> 

</body>

<!-- Mirrored from codervent.com/bulona/demo/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 07:09:58 GMT -->
</html>
