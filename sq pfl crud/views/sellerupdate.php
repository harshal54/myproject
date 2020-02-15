<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
         <div class="col-sm-9">
        <h4 class="page-title">Seller update</h4>
     </div>
   </div>
    <!-- End Breadcrumb-->
       <div class="row">
         <div class="col-lg-12">
           <div class="card">
             <div class="card-header text-uppercase">Seller update</div>
              <div class="card-body">
        <?php
        $i=1;
        foreach($seller as $row)
        {
        ?>
        <form method="post" class="register" enctype="multipart/form-data" action="<?php echo base_url();?>Seller/updateseller?id=<?php echo $row->seller_id; ?>">
           <?php 
               if(!empty($this->session->flashdata('data')))
               { 
            ?>
            <div class="col-md-12">
             <div class="<?php echo $this->session->flashdata('data')['type']  ?>" style="width: 90%;display: block; margin: auto;text-align: center;"><?php echo $this->session->flashdata('data')['content']  ?> 
             </div>
            </div> 
      
          <?php } ?>
          <div class="form-group row">
          <label for="Xlarge-input" class="col-sm-3 col-form-label">Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control"  name="name" value="<?php echo $row->seller_name; ?>" >
          </div>
        </div>

        <div class="form-group row">
          <label for="Xlarge-input" class="col-sm-3 col-form-label">Business Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control"  name="bname"  value="<?php echo $row->bus_name ?>" > 
          </div>
        </div>

        <div class="form-group row">
          <label for="large-input" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>" >
          </div>
        </div>
        
        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="password"  value="<?php echo $row->password; ?>" >
          </div>
        </div>
        
        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Mobile</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="mobile" onkeypress="event" maxlength="10"    minlength="10"  value="<?php echo $row->mobile;?>" >
          </div>
        </div>

        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Whatsapp</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" onkeypress="event" maxlength="10"    minlength="10" name="whatsapp"   value="<?php echo $row->whatsapp; ?>" >
          </div>
        </div>

        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Address</label>
          <div class="col-sm-9">
          <input type="text" class="form-control"  name="address"  value="<?php echo $row->address; ?>" >
          </div>
        </div>

         <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Image</label>
          <div class="col-sm-9">
          <input type="file" class="form-control" name="image" >
           <img src="<?php echo base_url();?>uploads/<?php echo $row->image;?>" style="width: 50px;height: 50px">
           <input type="hidden" name="hiddenimage" class="form-control" value="<?php echo $row->image;?>">
          </div>
        </div>
         <input type="submit" class="btn btn-primary" name="submit" value="update">     
             </form>
            <?php } ?>
             </div>
           </div>
         </div>
       </div><!--End Row-->
 
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->

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
              
           },
           messages: {
               name: {   required: "Please enter name", },
               bname: {   required: "Please enter business name", },
               email: {   required: "Please enter email", },
               password: {   required: "Please enter password", },
               mobile: {   required: "Please enter name", },
               whatsapp: {   required: "Please enter name", },
               address: {   required: "Please enter address", },
              
               
           },
           submitHandler: function (form) { 
                form.submit(); 
           }
       });
</script>