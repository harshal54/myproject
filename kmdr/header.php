<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="assets\img\logo.png" alt="Logo"></a></h1>
        </div>
    
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav navbar-right top-navbar">
                  <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images\users\user-35.jpg"></span>  <strong><?php echo $name;?></strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal" href='logout.php'><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>