<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
      <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Seller List</h4>
     </div>
  </div>
    <!-- End Breadcrumb-->
    <?php 
    if(!empty($this->session->flashdata('data'))) {  ?>
    <div class="col-md-12">
    <div class="<?php echo $this->session->flashdata('data')['type']  ?>" style="width: 90%;display: block; margin: auto;text-align: center;"><?php echo $this->session->flashdata('data')['content']  ?>
    </div>
  </div> 
        <?php } ?>
       <div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Seller List</div>
             <div class="card-body">
               <table class="table table-hover table-responsive">
                <tr>
                <th>SNo.</th>
                <th>Name</th>
                <th>Business Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile</th>
                <th>Whatsapp</th>
                <th>Address</th>
                <th>Image</th>
                <th colspan="2">Action</th>
                </tr>
                <?php
                $i=1;
                foreach($seller as $row)
                { 
                ?>
                <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row->seller_name;?></td>
                <td><?php echo $row->bus_name;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->password;?></td>
                <td><?php echo $row->mobile;?></td>
                <td><?php echo $row->whatsapp;?></td>
                <td><?php echo $row->address;?></td>
                <td><img src='<?php echo base_url();?>uploads/<?php echo $row->image;?>' height="50" width="50"></td>
                <td><a href="<?php echo base_url();?>Seller/editseller?id=<?php echo $row->seller_id; ?>"><button class="fa fa-edit btn btn-primary"></button></a>
                <a href="<?php echo base_url();?>Seller/deleteseller?id=<?php echo $row->seller_id; ?>"><button class="fa fa-trash btn btn-danger"></button></a></td>
                </tr>
                <?php
                $i++;
                }
                ?>
               </table>
             </div>
           </div>
         </div>
       </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
