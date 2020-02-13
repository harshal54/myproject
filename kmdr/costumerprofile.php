<?php
session_start();
if(isset($_SESSION['username']))
{
    $name=$_SESSION['name'];
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard | Coco - Responsive Bootstrap Admin Template</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="assets\libs\jqueryui\ui-lightness\jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
        <link href="assets\libs\bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link href="assets\libs\font-awesome\css\font-awesome.min.css" rel="stylesheet">
        <link href="assets\libs\fontello\css\fontello.css" rel="stylesheet">
        <link href="assets\libs\animate-css\animate.min.css" rel="stylesheet">
        <link href="assets\libs\nifty-modal\css\component.css" rel="stylesheet">
        <link href="assets\libs\magnific-popup\magnific-popup.css" rel="stylesheet"> 
        <link href="assets\libs\ios7-switch\ios7-switch.css" rel="stylesheet"> 
        <link href="assets\libs\pace\pace.css" rel="stylesheet">
        <link href="assets\libs\sortable\sortable-theme-bootstrap.css" rel="stylesheet">
        <link href="assets\libs\bootstrap-datepicker\css\datepicker.css" rel="stylesheet">
        <link href="assets\libs\jquery-icheck\skins\all.css" rel="stylesheet">
        <!-- Code Highlighter for Demo -->
        <link href="assets\libs\prettify\github.css" rel="stylesheet">
        
                <!-- Extra CSS Libraries Start -->
                <link href="assets\libs\rickshaw\rickshaw.min.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\morrischart\morris.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\jquery-jvectormap\css\jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\jquery-clock\clock.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\bootstrap-calendar\css\bic_calendar.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\sortable\sortable-theme-bootstrap.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\jquery-weather\simpleweather.css" rel="stylesheet" type="text/css">
                <link href="assets\libs\bootstrap-xeditable\css\bootstrap-editable.css" rel="stylesheet" type="text/css">
                <link href="assets\css\style.css" rel="stylesheet" type="text/css">
                <!-- Extra CSS Libraries End -->
        <link href="assets\css\style-responsive.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="assets\img\favicon.ico">
        <link rel="apple-touch-icon" href="assets\img\apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="assets\img\apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets\img\apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets\img\apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets\img\apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets\img\apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets\img\apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets\img\apple-touch-icon-152x152.png">
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
            <!-- Modal Task Progress -->    
    <div class="md-modal md-3d-flip-vertical" id="task-progress">
        <div class="md-content">
            <h3><strong>Task Progress</strong> Information</h3>
            <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                  </div>
                </div>
                <p>POSTING SOME STUFF</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                  </div>
                </div>
                <p>BACKUP DATA FROM SERVER</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                  </div>
                </div>
                <p>RE-DESIGNING WEB APPLICATION</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                  </div>
                </div>
                <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
                </p>
            </div>
        </div>
    </div>
        
    <!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want to logout from this awesome system?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                </p>
            </div>
        </div>
    </div>        <!-- Modal End -->    
    <!-- Begin page -->
    <div id="wrapper">
        
<!-- Top Bar Start -->
<?php include_once 'header.php';?>
<!-- Top Bar End -->
            <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               
    
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="#" class="rounded-image profile-image"><img src="images\users\user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b><?php echo $name; ?></b></div>
                        <div class="profile-buttons">
                          <a href="logout.php" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider">
                <div class="clearfix"></div>
                <!--- Divider -->
                 <div id="sidebar-menu">
                   <ul><li><a href='admindashbord.php'><i class='icon-home-3'></i>Dashbord</a> </li></ul>
                   <ul><li><a href='costumer_table.php' ><i class='fa fa-table'></i>Customer Details</a></li></ul>
                    <ul><li><a href='workertable.php'><i class='fa fa-table'></i>Employee Details</a> </li></ul>
                     <ul><li><a href='CustomerDetailbyWorker.php'><i class='fa fa-table'></i>CustomerDetailbyEmployee</a> </li></ul>
                   <div class="clearfix"></div>
           
          <br><br><br>
        </div>
            <div class="clearfix"></div>
            <div class="portlets">
              
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
         
            </div>
        </div>
        <!-- Left Sidebar End -->           <!-- Right Sidebar Start -->
    <div class="right side-menu">
        <ul class="nav nav-tabs nav-justified" id="right-tabs">
          <li class="active"><a href="#" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
          <li><a href="#" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
          <li><a href="#" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="tab-content">
            <div class="tab-pane active" id="feed">
                <div class="tab-inner slimscroller">
                    <div class="search-right">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="right-toolbar">
                        <a href="#" class="pull-right">Settings <i class="icon-cog"></i></a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="panel-group" id="collapse">
                      <div class="panel panel-default">
                        <div class="panel-heading bg-orange-1">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
                              <i class="icon-bell-2"></i> Notifications
                              <span class="label bg-darkblue-1 pull-right">4</span>
                            </a>
                          </h4>
                        </div>
                        <div id="rnotifications" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <ul class="list-unstyled" id="notification-list">
                                <li><a href="#"><span class="icon-wrapper"><i class="icon-video"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                <li><a href="#"><span class="icon-wrapper"><i class="icon-users-1"></i></span> 3 Users signed up <span class="muted">16 minutes ago</span></a></li>
                                <li><a href="#"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                <li><a href="#"><span class="icon-wrapper"><i class="icon-hourglass-1"></i></span> Deadline for 1 project <span class="muted">12 minutes ago</span></a></li>
                            </ul>
                            <a class="btn btn-block btn-sm btn-warning">See all notifications</a>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading bg-green-3">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#remails">
                              <i class="icon-mail"></i> E-mails
                              <span class="label bg-darkblue-1 pull-right">3</span>
                            </a>
                          </h4>
                        </div>
                        <div id="remails" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <ul class="list-unstyled" id="inbox-list">
                                <li><a href="#"><span class="sender"><i class="icon-star text-yellow-2"></i> Kim Wilde</span> <span class="datetime">6 mins ago</span>
                                    <span class="title">You keep me hangin on</span>
                                    <span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
                                </a></li>
                                <li><a href="#"><span class="sender">Tyler Durden</span> <span class="datetime">13 hours ago</span>
                                    <span class="title">Buy some soap from market before</span>
                                    <span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
                                </a></li>
                                <li><a href="#"><span class="sender">John Bonomo</span> <span class="datetime">Yesterday</span>
                                    <span class="title">Late delivery</span>
                                    <span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
                                </a></li>
                            </ul>
                            <a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading bg-blue-1">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
                              <i class="icon-signal-2"></i> Updates
                              <span class="label bg-darkblue-1 pull-right">5</span>
                            </a>
                          </h4>
                        </div>
                        <div id="rupdates" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <ul class="list-unstyled" id="updates-list">
                                <li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i class="icon-comment-1"></i></span> <b>David Guetta</b> came online <abbr title="15 seconds ago">just now</abbr>.</a></li>
                                <li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i class="icon-user-3"></i></span> <b>Katy Perry</b> updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a></li>
                                <li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i class="icon-twitter-2"></i></span> <b>4 tweets posted</b> with cronjob <abbr title="22 mins ago">22 mins ago</abbr>.</a></li>
                                <li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i class="icon-water"></i></span> <b>Adele</b> set fire to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a></li>
                                <li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i class="icon-heart-broken"></i></span> <b>Taylor Swift</b> learned that you are trouble <abbr title="3 hours ago">3 days ago</abbr>.</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="connect">
                <div class="tab-inner slimscroller">
                    <div class="search-right">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>  
                    <div class="panel-group" id="collapse">
                      <div class="panel panel-default" id="chat-panel">
                        <div class="panel-heading bg-darkblue-2">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="#chat-coll">
                              <i class="icon-briefcase-1"></i> Colleagues
                              <span class="label bg-darkblue-1 pull-right">14</span>
                            </a>
                          </h4>
                        </div>
                        <div id="chat-coll" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <ul class="list-unstyled" id="chat-list">
                                <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images\users\chat\1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images\users\chat\2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images\users\chat\3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg">Where is my mind</span></a></li>
                                <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images\users\chat\4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images\users\chat\5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images\users\chat\6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default" id="chat-panel">
                        <div class="panel-heading bg-darkblue-2">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              <i class="icon-heart-3"></i> Friends
                              <span class="label bg-darkblue-1 pull-right">3</span>
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <ul class="list-unstyled" id="chat-list">
                                <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images\users\chat\1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images\users\chat\2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images\users\chat\3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg" title="Eminem - The Monster ft. Rihanna"><i class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a></li>
                                <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images\users\chat\4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images\users\chat\5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images\users\chat\6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="settings">
                <div class="tab-inner slimscroller">
                    <div class="col-sm-12">
                        <h3>Preferences</h3>
                        <div class="row">
                            <div class="col-xs-8">
                                Live data updates
                            </div>
                            <div class="col-xs-4">
                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                Live feeds
                            </div>
                            <div class="col-xs-4">
                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                Sync data to cloud
                            </div>
                            <div class="col-xs-4">
                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                Keep activity record
                            </div>
                            <div class="col-xs-4">
                                <input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked="">
                            </div>
                        </div>
                        <h4>Other Settings</h4>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="checkboxw"><input type="checkbox" checked=""> Autosave settings</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="checkboxw"><input type="checkbox"> Always online</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Sidebar End -->      
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
          <!--  __________table start_____________ -->
          <div class="widget-header transparent">
             <h3><strong style="position:relative;left:380px">CUSTOMER PROFILE</strong></h3>
            
            </div>
         
    <div class="widget" >
     
            <div class="widget-content">
          <div class="table-responsive" >
           
            
                <?php
                require_once '../db/dbconfig.php';
               require_once '../db/dbOperation.php';
                $obj= new Admin($db_con);
                $id=$_REQUEST['id'];
               $data= $obj->costumerProfile($id);
                ?>
              
                        
                        
                            <div class="widget-header transparent">
                                
                                
                            </div>
                            <div>
                            <div class="widget-content padding">                            
                                <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>full_Name</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['full_Name'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >father_Name</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['father_Name'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >mother_Name</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['mother_Name'];?>" readonly> 
                                      </div>
                                </div>
                         </div>
                      <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>Dob</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['dob'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >qualification</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['qualification'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >spouse_Name</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['spouse_Name'];?>" readonly> 
                                      </div>
                                </div>
                     </div>
                    <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>spouse_Dob</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['spouse_Dob'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >category</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['category'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >permanent_Address</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['permanent_Address'];?>" readonly> 
                                      </div>
                                </div>
                     </div>
                    <div class="widget-content padding" > 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>village</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['village'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >telsil</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['telsil'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >post</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['post'];?>" readonly> 
                                      </div>
                                </div>
                     </div>
                      <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>dist</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['dist'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >state</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['state'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >mobile</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['mobile'];?>" readonly> 
                                      </div>
                                </div>
                     </div>
                     <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>phone</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['phone'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >email</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['email'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >boys</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['boys'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                     <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>girls</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['girls'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >child_Edu1</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['child_Edu1'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >child_Edu2</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['child_Edu2'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                      <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>child_Edu3</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['child_Edu3'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >crop_Type</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['crop_Type'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >soil_Test</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['soil_Test'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
              
                        <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>soil_Type</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['soil_Type'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >soil_Depth</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['soil_Depth'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >water_Level</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['water_Level'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
              
                        <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>tree_On_Med</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['tree_On_Med'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >tree_In_Farm</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['tree_In_Farm'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >light_Type</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['light_Type'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
              
                       <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>light_Hour</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['light_Hour'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >interest</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['interest'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >waterkua</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['waterkua'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>watertubewell</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['watertubewell'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >waternhar</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['waternhar'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >waterndi</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['waterndi'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
              
                          <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>watertalab</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['watertalab'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >waterdrip</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['waterdrip'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >wateranya</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['wateranya'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>machine</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['machine'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >pesticide</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['pesticide'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >protected_Farming</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['protected_Farming'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>storage</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['storage'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >farm_House</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['farm_House'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >godown</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['godown'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>labour_House</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['labour_House'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >path</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['path'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >near_By_Market</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['near_By_Market'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>transport</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['transport'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >khasra</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['khasra'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >halka</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['halka'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>small_Farm</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['small_Farm'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >medium_Farm</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['medium_Farm'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >large_Farm</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['large_Farm'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>irrigated_Land</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['irrigated_Land'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >non_Irrigated_Land</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['non_Irrigated_Land'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >selling_Center</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['selling_Center'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>cow</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['cow'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >buffelo</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['buffelo'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >goat</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['goat'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                         <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>other</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['other'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >cow_Breed</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['cow_Breed'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >buffelo_Breed</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['buffelo_Breed'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                      <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>dung_Land</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['dung_Land'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >dung_Land_Size</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['dung_Land_Size'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >shed</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['shed'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                          <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>shed_Type</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['shed_Type'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >shed_Size</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['shed_Size'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >milk_Producer</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['milk_Producer'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                          <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>milk_Uses</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['milk_Uses'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >near_By_Animal_Hospital</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['near_By_Animal_Hospital'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >animal_Insurance</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['animal_Insurance'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                          <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>income_Source</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['income_Source'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >annual_Income</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['annual_Income'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >bank_Name</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['bank_Name'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                          <div class="widget-content padding"> 
                                  <div  class='row'>
                                    <div class="col-sm-4">
                                        <label>Adhar_No</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['Adhar_No'];?>" readonly>                       
                                      </div>
                                      <div class="col-sm-4">
                                        <label >place</label>
                                           <input type="text" class="form-control" placeholder="<?php echo $data['place'];?>" readonly> 
                                      </div>
                                      <div class="col-sm-4">
                                        <label >date</label>
                                          <input type="text" class="form-control" placeholder="<?php echo $data['date'];?>" readonly> 
                                      </div>
                                </div>
                      </div>
                      

               </div></div></div></div>
            <!-- Table end -->
           
                            <!-- Footer Start -->
                   <?php include_once 'footer.php'; ?>
            <!-- Footer End -->         
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <div id="contextMenu" class="dropdown clearfix">
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
                <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
            </ul>
        </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets\libs\jquery\jquery-1.11.1.min.js"></script>
    <script src="assets\libs\bootstrap\js\bootstrap.min.js"></script>
    <script src="assets\libs\jqueryui\jquery-ui-1.10.4.custom.min.js"></script>
    <script src="assets\libs\jquery-ui-touch\jquery.ui.touch-punch.min.js"></script>
    <script src="assets\libs\jquery-detectmobile\detect.js"></script>
    <script src="assets\libs\jquery-animate-numbers\jquery.animateNumbers.js"></script>
    <script src="assets\libs\ios7-switch\ios7.switch.js"></script>
    <script src="assets\libs\fastclick\fastclick.js"></script>
    <script src="assets\libs\jquery-blockui\jquery.blockUI.js"></script>
    <script src="assets\libs\bootstrap-bootbox\bootbox.min.js"></script>
    <script src="assets\libs\jquery-slimscroll\jquery.slimscroll.js"></script>
    <script src="assets\libs\jquery-sparkline\jquery-sparkline.js"></script>
    <script src="assets\libs\nifty-modal\js\classie.js"></script>
    <script src="assets\libs\nifty-modal\js\modalEffects.js"></script>
    <script src="assets\libs\sortable\sortable.min.js"></script>
    <script src="assets\libs\bootstrap-fileinput\bootstrap.file-input.js"></script>
    <script src="assets\libs\bootstrap-select\bootstrap-select.min.js"></script>
    <script src="assets\libs\bootstrap-select2\select2.min.js"></script>
    <script src="assets\libs\magnific-popup\jquery.magnific-popup.min.js"></script> 
    <script src="assets\libs\pace\pace.min.js"></script>
    <script src="assets\libs\bootstrap-datepicker\js\bootstrap-datepicker.js"></script>
    <script src="assets\libs\jquery-icheck\icheck.min.js"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="assets\libs\prettify\prettify.js"></script>

    <script src="assets\js\init.js"></script>
    <!-- Page Specific JS Libraries -->
    <script src="assets\libs\d3\d3.v3.js"></script>
    <script src="assets\libs\rickshaw\rickshaw.min.js"></script>
    <script src="assets\libs\raphael\raphael-min.js"></script>
    <script src="assets\libs\morrischart\morris.min.js"></script>
    <script src="assets\libs\jquery-knob\jquery.knob.js"></script>
    <script src="assets\libs\jquery-jvectormap\js\jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets\libs\jquery-jvectormap\js\jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets\libs\jquery-clock\clock.js"></script>
    <script src="assets\libs\jquery-easypiechart\jquery.easypiechart.min.js"></script>
    <script src="assets\libs\jquery-weather\jquery.simpleWeather-2.6.min.js"></script>
    <script src="assets\libs\bootstrap-xeditable\js\bootstrap-editable.min.js"></script>
    <script src="assets\libs\bootstrap-calendar\js\bic_calendar.min.js"></script>
    <script src="assets\js\apps\calculator.js"></script>
    <script src="assets\js\apps\todo.js"></script>
    <script src="assets\js\apps\notes.js"></script>
    <script src="assets\js\pages\index.js"></script>
    </body>
</html>



<?php
}
else 
{
 echo "<script>alert('you are logged out');window.location='../index.php';</script>";
}

?>