<style type="text/css">
.dot{
  height: 10px;
  width: 10px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
}
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>mycontroller" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>

      <div class="info">
        <a href="#" class="d-block text-white" style="text-transform: uppercase;">Welcome, <?php echo $this->session->userdata('name'); ?></a>
        <?php if(isset($this->session->userdata['name'])){ ?>
          <span class="dot"></span><span class="text-white"> online</span>
        <?php }?>
      </div>
    </div>
    <a class="text-white" href="<?php echo base_url('Users/logout'); ?>">LOGOUT</a>
    <!-- SidebarSearch Form -->
  <!--   <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


  <li class="nav-item">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Student
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?= base_url()?>add-student" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Student</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url(); ?>show-student" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Show Student</p>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Course
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php base_url(); ?>add-courses" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Courses</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php base_url(); ?>show-courses" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Show Courses</p>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item ">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Fees
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php base_url(); ?>add-fees" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Add Fees</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php base_url(); ?>show-fees" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Show Fees</p>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item ">
    <a href="<?php echo base_url('') ?>googlemap" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>

      <p>
        Google Map
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
  </li>
  <li class="nav-item ">
    <a href="<?php echo base_url('') ?>calendar" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Calendar
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
  </li>
  <li class="nav-item ">
    <a href="<?php echo base_url('') ?>products" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Products
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
  </li>
  <?php $name=$this->session->userdata('name'); ?>
  <li class="nav-item ">
    <a href="<?php echo base_url(''); ?>" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Personal Chat
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <?php $user=$this->db->get('admin')->result_array();
      foreach ($user as $row){
        if($name != $row['name']){?>
          <li class="nav-item">
            <a href="<?php echo base_url('') ?>Chat_controller/<?php echo base64_encode($row['id']);?>" class="nav-link active">
              <p style="text-transform:uppercase;"><?php echo $row['name']; ?></p>
              <i class="far fa-circle" style="color:green"></i>
            </a>
          </li>
        <?php } } ?>
      </ul>
    </li>
    <li class="nav-item ">
      <a href="<?php echo base_url('') ?>Signature" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Signature
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
    <li class="nav-item ">
      <a href=" https://web.whatsapp.com/send?phone=+918349797166" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Whatsapp
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
   
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
