<?php
session_start();
if(isset($_SESSION['username']))
{
    $name=$_SESSION['name'];
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                    <ul><li><a href='workertable.php'><i class='fa fa-table'></i>Worker Table</a> </li></ul>
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
             <h3><strong style="position:relative;bottom:15px">CUSTOMER DATA</strong></h3>
             <div style="position:relative;bottom:10px;">
        <div style="font-size: 17px;" class="row">
        <div class="col-sm-6"> <input type="checkbox" onclick="selectAll(this)">&nbsp&nbsp SELECT ALL</div>
           <div class="col-sm-3" style="font-size: 15px"><input type="date"  id="from_date"> FROM DATE</div>
         <div class="col-sm-3" style="font-size: 15px"> <input type="date" id="to_date">  TO DATE</div></div><br>


           <div class='row' style="font-size: 17px;" >

            <div class="col-sm-2">
             <input type='checkbox' id='name' name="all[]"> full_Name
            </div>

            <div class="col-sm-2"> 
             <input type='checkbox' id='father_Name' name="all[]"> father_Name
           </div>

           <div class="col-sm-2"> 
             <input type='checkbox' id='mother_Name' name="all[]"> mother_Name
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='dob' name="all[]"> dob
           </div>

            <div class="col-sm-2"> 
             <input type='checkbox' id='qualification' name="all[]"> qualification
           </div>

         <div class="col-sm-2"> 
             <input type='checkbox' id='spouse_Name' name="all[]"name="all[]"> spouse_Name
         </div>


     </div>
     <div class="row" style="font-size: 16px;">

         <div class="col-sm-2"> 
             <input type='checkbox' id='category' name="all[]"> category
          </div>
          
           <div class="col-sm-2" style="font-size: 15px;">    
             <input type='checkbox' id='permanent_Address' name="all[]"> permanentAddress
          </div>
        
         <div class="col-sm-2"> 
           <input type='checkbox' id='village' name="all[]"> village
          </div> 

         <div class="col-sm-2"> 
             <input type='checkbox' id='telsil' name="all[]"> telsil
            </div>
            
         <div class="col-sm-2">   
             <input type='checkbox' id='post' name="all[]"> post
          </div>
          
           <div class="col-sm-2">    
             <input type='checkbox' id='dist' name="all[]"> dist
         </div>

      </div> 
      

      <div class="row"  style="font-size: 17px;">

            <div class="col-sm-2">  
             <input type='checkbox' id='mobile' name="all[]"> mobile 
            </div> 

             <div class="col-sm-2">  
             <input type='checkbox' id='phone' name="all[]"> phone 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='email' name="all[]"> email 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='boys' name="all[]"> boys 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='girls' name="all[]"> girls 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='child_Edu1' name="all[]"> child_Edu1 
            </div>

           

      </div>
    
     <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='child_Edu2' name="all[]"> child_Edu2 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='child_Edu3' name="all[]"> child_Edu3 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='crop_Type' name="all[]"> crop_Type 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='soil_Test' name="all[]"> soil_Test 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='soil_Type' name="all[]"> soil_Type 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='soil_Depth' name="all[]"> soil_Depth 
            </div>

           

         </div> 

          
     <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='water_Level' name="all[]"> water_Level 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='tree_On_Med' name="all[]"> tree_On_Med 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='tree_In_Farm' name="all[]"> tree_In_Farm 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='light_Hour' name="all[]"> light_Hour 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='interest' name="all[]"> interest 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='waterkua' name="all[]"> waterkua 
            </div>

           

         </div> 

          
     <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='watertubewell' name="all[]"> watertubewell 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='waternhar' name="all[]"> waternhar 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='waterndi' name="all[]"> waterndi 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='watertalab' name="all[]"> watertalab 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='waterdrip' name="all[]"> waterdrip 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='wateranya' name="all[]"> wateranya 
            </div>

           

         </div> 

          
     <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='machine' name="all[]"> machine 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='pesticide' name="all[]"> pesticide 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='protected_Farming' name="all[]"> protectedFarming 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='storage' name="all[]"> storage 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='farm_House' name="all[]"> farm_House 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='godown' name="all[]"> godown 
            </div>

           

         </div> 

          <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='light_Type' name="all[]"> light_Type 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='labour_House' name="all[]"> labour_House 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='path' name="all[]"> path 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='near_By_Market' name="all[]"> near_By_Market 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='transport' name="all[]"> transport 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='khasra' name="all[]"> khasra 
            </div>

           

         </div> 

          <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='halka' name="all[]"> halka 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='small_Farm' name="all[]"> small_Farm 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='medium_Farm' name="all[]"> medium_Farm 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='large_Farm' name="all[]"> large_Farm 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='irrigated_Land' name="all[]"> irrigated_Land 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='non_Irrigated_Land' name="all[]"> nonIrrigatedLand 
            </div>

           

         </div> 

          <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='selling_Center' name="all[]"> selling_Center 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='cow' name="all[]"> cow 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='buffelo' name="all[]"> buffelo 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='goat' name="all[]"> goat 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='other' name="all[]"> other 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='cow_Breed' name="all[]"> cow_Breed 
            </div>

           

         </div> 

          <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='buffelo_Breed' name="all[]"> buffelo_Breed 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='dung_Land' name="all[]"> dung_Land 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='dung_Land_Size' name="all[]"> dungLandSize 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='shed' name="all[]"> shed 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='shed_Type' name="all[]"> shed_Type 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='shed_Size' name="all[]"> shed_Size 
            </div>

           

         </div> 
          <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='milk_Producer' name="all[]"> milkProducer 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='milk_Uses' name="all[]"> milk_Uses 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='near_By_Animal_Hospital' name="all[]"> AnimalHospital 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='animal_Insurance' name="all[]"> animal_Insurance 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='income_Source' name="all[]"> income_Source 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='annual_Income' name="all[]"> annual_Income 
            </div>

           

         </div> 
          <div class="row" style="font-size: 17px;">

             <div class="col-sm-2">  
             <input type='checkbox' id='bank_Name' name="all[]"> bank_Name 
            </div>

            <div class="col-sm-2">  
             <input type='checkbox' id='Adhar_No' name="all[]"> Adhar_No 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='place' name="all[]"> place 
            </div>

             <div class="col-sm-2">  
             <input type='checkbox' id='date' name="all[]"> date 
            </div>

         </div> 
          
         <br>
            
    <div style="margin-left: 450px">
    <button onclick="getData()" class="btn btn-danger">Show</button>
    <button onclick="getexcel()" class="btn btn-info">Export in Excel</button>
    </div>
            <script>
              function getexcel()
              {   
                var a = document.createElement('a');
                var data_type = 'data:application/vnd.ms-excel;charset=utf8';
                var table_div = document.getElementById('s1');
                var table_html = table_div.outerHTML.replace(/ /g, '%20');
                a.href = data_type + ', ' + table_html;
                a.download = 'customer data.xlsx';
                a.click();
                e.preventDefault();
              }
             function getData()
             {
               var name =document.getElementById('name').checked;
                var father_Name =document.getElementById('father_Name').checked;
                 var mother_Name =document.getElementById('mother_Name').checked;
                  var dob =document.getElementById('dob').checked;
                   var qualification =document.getElementById('qualification').checked;
                    var spouse_Name =document.getElementById('spouse_Name').checked;
                     var category =document.getElementById('category').checked;
                      var permanent_Address =document.getElementById('permanent_Address').checked;
                       var village =document.getElementById('village').checked;
                        var telsil =document.getElementById('telsil').checked;
                         var post =document.getElementById('post').checked;
                          var dist =document.getElementById('dist').checked; 
                           var mobile =document.getElementById('mobile').checked;
                            var phone =document.getElementById('phone').checked;
                             var email =document.getElementById('email').checked;
                              var boys =document.getElementById('boys').checked;
                               var girls =document.getElementById('girls').checked;
                                var child_Edu1 =document.getElementById('child_Edu1').checked;
                                 var child_Edu2 =document.getElementById('child_Edu2').checked;
                                  var child_Edu3 =document.getElementById('child_Edu3').checked;
                                   var crop_Type =document.getElementById('crop_Type').checked;
                                    var soil_Test =document.getElementById('soil_Test').checked;
                                     var soil_Type =document.getElementById('soil_Type').checked;
                                      var soil_Depth =document.getElementById('soil_Depth').checked;
                                       var water_Level =document.getElementById('water_Level').checked;
                                        var tree_On_Med =document.getElementById('tree_On_Med').checked;
                                         var tree_In_Farm =document.getElementById('tree_In_Farm').checked;
                                           var light_Hour =document.getElementById('light_Hour').checked;
                                            var interest =document.getElementById('interest').checked;
                                             var waterkua =document.getElementById('waterkua').checked;
                                              var watertubewell =document.getElementById('watertubewell').checked;
                                               var waternhar =document.getElementById('waternhar').checked;
                                                var waterndi =document.getElementById('waterndi').checked;
                                                 var watertalab =document.getElementById('watertalab').checked;
                                                  var waterdrip =document.getElementById('waterdrip').checked;
                                                    var wateranya =document.getElementById('wateranya').checked;
                                                     var machine =document.getElementById('machine').checked;
                                                      var pesticide =document.getElementById('pesticide').checked;
                                                      var protected_Farming =document.getElementById('protected_Farming').checked;
                                                       var storage =document.getElementById('storage').checked;
                                                      var farm_House =document.getElementById('farm_House').checked;
                                                        var godown =document.getElementById('godown').checked;
                                 var light_Type =document.getElementById('light_Type').checked;
                                   var labour_House =document.getElementById('labour_House').checked;    
                                      var path =document.getElementById('path').checked;
                                       var near_By_Market =document.getElementById('near_By_Market').checked;
                                        var transport =document.getElementById('transport').checked;
                                         var khasra =document.getElementById('khasra').checked;
                                          var halka =document.getElementById('halka').checked;
                                           var small_Farm =document.getElementById('small_Farm').checked;
                                            var medium_Farm =document.getElementById('medium_Farm').checked;
                                             var large_Farm =document.getElementById('large_Farm').checked;
                                              var irrigated_Land =document.getElementById('irrigated_Land').checked;
                                               var non_Irrigated_Land =document.getElementById('non_Irrigated_Land').checked;
                                                var selling_Center =document.getElementById('selling_Center').checked;
                                                 var cow =document.getElementById('cow').checked;
                                                  var buffelo =document.getElementById('buffelo').checked;
                                                   var goat =document.getElementById('goat').checked;
                                                    var other =document.getElementById('other').checked;
                                                     var cow_Breed =document.getElementById('cow_Breed').checked;
                                  var buffelo_Breed =document.getElementById('buffelo_Breed').checked;
                                   var dung_Land =document.getElementById('dung_Land').checked;
                                    var dung_Land_Size =document.getElementById('dung_Land_Size').checked;
                                     var shed =document.getElementById('shed').checked;
                                      var shed_Type =document.getElementById('shed_Type').checked;
                                       var shed_Size =document.getElementById('shed_Size').checked;
                                        var milk_Producer =document.getElementById('milk_Producer').checked;
                                         var milk_Uses =document.getElementById('milk_Uses').checked;
                                    var near_By_Animal_Hospital =document.getElementById('near_By_Animal_Hospital').checked;
                                           var animal_Insurance =document.getElementById('animal_Insurance').checked;
                                            var income_Source =document.getElementById('income_Source').checked;
                                             var annual_Income =document.getElementById('annual_Income').checked;
                                              var bank_Name =document.getElementById('bank_Name').checked;
                                               var Adhar_No =document.getElementById('Adhar_No').checked;
                                                var place =document.getElementById('place').checked;
                                                 var date =document.getElementById('date').checked;

                                       var from_date =document.getElementById('from_date').value;
                                       var to_date =document.getElementById('to_date').value;
                            var req = new XMLHttpRequest();
                              req.open("GET","ajax2.php?name="+name+"&father_Name="+father_Name+"&mother_Name="+mother_Name+"&dob="+dob+"&qualification="+qualification+"&spouse_Name="+spouse_Name+"&category="+category+"&permanent_Address="+permanent_Address+"&village="+village+"&telsil="+telsil+"&post="+post+"&dist="+dist+"&mobile="+mobile+"&phone="+phone+"&email="+email+"&boys="+boys+"&girls="+girls+"&child_Edu1="+child_Edu1+"&child_Edu2="+child_Edu2+"&child_Edu3="+child_Edu3+"&crop_Type="+crop_Type+"&soil_Test="+soil_Test+"&soil_Type="+soil_Type+"&soil_Depth="+soil_Depth+"&water_Level="+water_Level+"&tree_On_Med="+tree_On_Med+"&tree_In_Farm="+tree_In_Farm+"&light_Hour="+light_Hour+"&interest="+interest+"&waterkua="+waterkua+"&watertubewell="+watertubewell+"&waternhar="+waternhar+"&waterndi="+waterndi+"&watertalab="+watertalab+"&waterdrip="+waterdrip+"&wateranya="+wateranya+"&machine="+machine+"&pesticide="+pesticide+"&protected_Farming="+protected_Farming+"&storage="+storage+"&farm_House="+farm_House+"&godown="+godown+"&light_Type="+light_Type+"&labour_House="+labour_House+"&path="+path+"&near_By_Market="+near_By_Market+"&transport="+transport+"&khasra="+khasra+"&halka="+halka+"&small_Farm="+small_Farm+"&medium_Farm="+medium_Farm+"&large_Farm="+large_Farm+"&irrigated_Land="+irrigated_Land+"&non_Irrigated_Land="+non_Irrigated_Land+"&selling_Center="+selling_Center+"&cow="+cow+"&buffelo="+buffelo+"&goat="+goat+"&other="+other+"&cow_Breed="+cow_Breed+"&buffelo_Breed="+buffelo_Breed+"&dung_Land="+dung_Land+"&dung_Land_Size="+dung_Land_Size+"&shed="+shed+"&shed_Type="+shed_Type+"&shed_Size="+shed_Size+"&milk_Producer="+milk_Producer+"&milk_Uses="+milk_Uses+"&near_By_Animal_Hospital="+near_By_Animal_Hospital+"&animal_Insurance="+animal_Insurance+"&income_Source="+income_Source+"&annual_Income="+annual_Income+"&bank_Name="+bank_Name+"&Adhar_No="+Adhar_No+"&place="+place+"&date="+date+"&from_date="+from_date+"&to_date="+to_date,true);
                                req.send();

               req.onreadystatechange=function()
               {

                 if(req.readyState==4 && req.status==200)
                    {

                        
                     document.getElementById('s1').innerHTML=req.responseText;
                    }
                }
            
        }  
            
        function selectAll(source) {
            
          checkboxes = document.getElementsByName('all[]');
          for(var i in checkboxes)
           checkboxes[i].checked = source.checked;
           }

     </script>
 
          <div class="widget">
             <div class="widget-content">
               <div class="table-responsive">
                 <table id='s1' class="table">
               
                 </table>
              </div> 
            </div>
          </div>

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

