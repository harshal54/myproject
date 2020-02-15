
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Seller Profile</h4>
     </div>
     </div>
    <!-- End Breadcrumb-->
    <?php 
               if(!empty($this->session->flashdata('data')))
               { 
            ?>
            <div class="col-md-12">
             <div class="<?php echo $this->session->flashdata('data')['type']  ?>" style="width: 90%;display: block; margin: auto;text-align: center;"><?php echo $this->session->flashdata('data')['content']  ?> 
             </div>
            </div> 
      
          <?php } ?>
       <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Seller Profile</div>
             <div class="card-body">
        <form method="post" class="register" enctype="multipart/form-data" action="<?php echo base_url();?>Seller/sellerdata">
          <div class="form-group row">
          <label for="Xlarge-input" class="col-sm-3 col-form-label">Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" >
          </div>
        </div>
        <div class="form-group row">
          <label for="Xlarge-input" class="col-sm-3 col-form-label">Business Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="bname" name="bname" placeholder="Enter business Name" >
          </div>
        </div>
        <div class="form-group row">
          <label for="large-input" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="email" placeholder="Enter Email">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="password"  placeholder="Enter Password">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Mobile</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="mobile" onkeypress="event" maxlength="10"    minlength="10" placeholder="Enter Mobile">
          </div>
        </div>
        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Whatsapp</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" onkeypress="event" maxlength="10"    minlength="10" name="whatsapp"  placeholder="Enter Whatsapp number">
          </div>
        </div>
        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Address</label>
          <div class="col-sm-9">
          <input type="text" class="form-control"  name="address" placeholder="Enter Address">
          </div>
        </div>
         <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Image</label>
          <div class="col-sm-9">
          <input type="file" class="form-control" name="image">
          </div>
        </div>
         <input type="submit" class="btn btn-primary" name="submit" value="Submit">         </form>
             </div>
           </div>
         </div>
       </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
<!-- jquery validation liberary-->
<!-- <script src="assets/js/jquery.validate.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript">
    $('.register').validate({ // initialize the plugin
           rules: {
               name: {required: true, },
               bname: {required: true, },
               email: {required: true, },
               password: {required: true, },
               mobile: {required: true, },
               whatsapp: {required: true, },
               address: {required: true, },
               image: {required: true, },
           },
           messages: {
               name: {   required: "Please enter name", },
               bname: {   required: "Please enter business name", },
               email: {   required: "Please enter email", },
               password: {   required: "Please enter password", },
               mobile: {   required: "Please enter name", },
               whatsapp: {   required: "Please enter name", },
               address: {   required: "Please enter address", },
               image: {   required: "Please enter image", },
               
           },
           submitHandler: function (form) { 
                form.submit(); 
           }
       });
</script> <!-- login form validation end here-->