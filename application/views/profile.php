<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">My Profile</h4>
     </div>
     </div>
    <!-- End Breadcrumb-->
       <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">My Profile</div>
             <div class="card-body">
        <form method="post">
          <div class="form-group row">
          <label for="Xlarge-input" class="col-sm-3 col-form-label">Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?php echo $result[0]->name ?>" >
          </div>
        </div>
        <div class="form-group row">
          <label for="large-input" class="col-sm-3 col-form-label">email</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="email" id="email" value="<?php echo $result[0]->email ?>" placeholder="Enter Email">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="password" id="password" value="<?php echo $result[0]->password ?>"  placeholder="Enter Password">
          </div>
        </div>
        
        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Mobile</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $result[0]->mobile ?>"  placeholder="Enter Mobile">
          </div>
        </div>
        <div class="form-group row">
          <label for="small-input" class="col-sm-3 col-form-label">Address</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" name="address" id="address" value="<?php echo $result[0]->address ?>"  placeholder="Enter Address">
          </div>
        </div>
         <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
         </form>
        
             </div>
           </div>
         </div>
       </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   