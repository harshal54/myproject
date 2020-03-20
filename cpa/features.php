<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Post Scan Mail</title>
  	 <link rel="stylesheet" type="text/css" href="./css/main.css">
  	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
  	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	  <!-- <link rel="stylesheet" type="text/css" href="./css/style.css"> -->
<style type="text/css">
	  	.body{
  		font-family: monospace;
  	}
.image {
   background-color: #490D40;
   background: url(./images/bg.jpg) no-repeat center center;
   background-size: cover;
   height: 570px;
   margin-top: -20px;
   
   .heading {
      color: white;
      text-align: center;
      padding-top: 200px;
   }

   p {
      text-align: center;
      padding: 20px 60px;
      
       .btn {
         background-color: transparent;
         color: white;
         border: 1px solid white;
         padding: 10px;
         font-size: 1.2em;
             
          &:hover {
             color: #C57ED3;
             border-color: #C57ED3;
          }
      }
   }
}

.navbar {
  height: 80px;
  background-color: transparent;
  border: none;
  color: white;
  z-index: 100;
  transition: background-color 1s ease 0s;
}


.navbar-default {
  
   .navbar-brand {
     margin-top: 10px;
     color: white;
        
      &:hover {
         color: #C57ED3;
         border: 1px solid #C57ED3;
      } 
   }
   
  .navbar-nav {
    
    > li {      
      > a {
        color: white;
        margin: 10px 5px 5px 5px;
      }
      > a:hover, > a:active, > a:focus {
        color: #C57ED3;
        border: 1px solid #C57ED3;
      }
      > a:visited {
        color: #C57ED3;
        text-decoration: none;
      }
    } //end li
    > .active {

      > a, > a:hover, > a:focus {
        background-color: transparent;
        color: #C57ED3;
      }

    }

  } //end .navbar-nav

  //Collapsed styles
  .navbar-toggle {
    border-color: #C57ED3;

      &:hover, &:focus {
        background-color: #490D40;
      }



      .icon-bar {
        color: #C57ED3;
        background-color: #C57ED3;

      }
  }

  .navbar-collapse.collapse.in ul {
    background-color: #490D40;
  }
    
}
 //end 
.navbar-default



/* Solid class attached on scroll past first section */

.navbar.solid {
  background-color: #490D40;
  transition: background-color 1s ease 0s;
  box-shadow: 0 0 4px grey;

    .navbar-brand {
      color: #C57ED3;
      transition: color 1s ease 0s;
    }
    .navbar-nav {
       > li {
          > a {
            color: #C57ED3;
            transition: color 1s ease 0s;
          }
       } //end li
    } //end .navbar-nav
}
.banner-button{
color: 	#ffffff;
   margin-left: 22px;
    padding-top: 20px;
}
.banner-button .pricing{
margin-left: 32px;
    margin-top: 19px;
    font-size: 19px;
    float: left;
    padding: 6px;
    padding-top: -4px;
    font-family: monospace;
    background: transparent;
    border: 2px solid #86b9e5;
    border-radius: 6px;
    padding-right: 42px;
    padding-left: 30px;
    text-align: center;
}
input.pricing:hover {
    background-color: #f18e38;
    color: #fff;
}

element.style {
}
.cta-button:hover, .cta-button:visited {
    color: #fff;
}
a:visited {
    color: #0095fb;
}
.cta-button {
    background: #f29310;
    color: white;
    padding: 14px 49px;
    margin: 20px 0;
    font-size: 20px;
    font-family: 'Ubuntu',sans-serif;
    font-weight: 500;
    text-align: center;
    text-decoration: none;
    line-height: 1.5em;
    display: inline-block;
    border-radius: 5px;
    -webkit-font-smoothing: antialiased;
    cursor: pointer;
    -moz-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: all .4s ease;
    -moz-transition: all .4s ease;
    -webkit-transition: all .4s ease;
    -o-transition: all .4s ease;
}
.thrd{
	/*background: url(./images/section3-bg.jpg) #fbfdfd;*/
       margin-top: 29px;
}
.happy-customer{
background-color: #ebf3f6;
    padding-bottom: 80px;
    padding-top: 80px;
}
.happy-customer h2 {
    font-size: 38px;
    font-weight: 400;
    margin: -30px 0 10px 0;
    color: #4c4c4c;
}
.happy-customer h3 {
	 font-weight: 300;
    font-size: 29px;
    text-transform: capitalize;
    margin-top: inherit;

}
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
.footer-nav-1 ul li{
	
padding-bottom: 10px;
}
.footer-nav-1 ul li a{
	color: black;
}
.footer-nav-2 ul li {
	padding-bottom: 10px;
}
.footer-nav-2 ul li a{
	color: black;

}
.footer-nav-3 ul li {
	padding-bottom: 10px;
    }
.footer-nav-3 ul li i{
    position: absolute;
    left: 0px;
}
.footer-nav-3 ul li a{
	color: black;
}
.footer-nav-3 h4{
	font-weight: 600;
}
.copyright{
	font-size: smaller;
}
.copyright p a{
	color: black;
}
.list-inline>li i {
    height: 38px;
    width: 38px;
    background: #393939;
    font-size: 20px;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #fff;
    padding: 0;
}
.img .responsive {
  width: 100%;
  height: auto;
}
li.breadcrumb-item a:visited {
    color: #fff;
}
</style>
</head>

<body style=" line-height: 1.5;  font-family: inherit;">
	<header>
		<nav class="navbar navbar-default" style="background-color:#2f7ae2;">
			 <div class="container">
      <div class="row">
        <div class="col-md-12">

		<div class="navbar-header" style="margin-top: -20px; ">
		         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#"><img src="./images/main-logo.png" style="margin-top: 25px;margin-left: 111px;" class="responsive"></a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav navbar-right" style="padding-top: 18px; margin-right: 67px;">
		            <li><a href="#">FEATURES</a></li>
		            <li><a href="#">HOWS IT WORK</a></li>
		            <li><a href="#">LOCATION</a></li>
		            <li><a href="#">FAQ</a></li>
		            <li><a href="#">CONTACT US</a></li>
		            <li><a href="#">LOGIN</a></li>
		            <li><a href="#">SIGN UP</a></li>
		          </ul>
		        </div> 
		        </div>
		        </div>
	        </nav>
	   </header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="./images/features/banner-img.jpg" class="img-responsive">
			</div>
		</div>
	</div>
</section>




<footer  style="padding: 25px 0;text-align: left;color: #000;background-color: #ebf3f6;position: relative;     font-family: inherit;">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-12">
				<section class="footer-nav-1">
					<h3 style="font-size: 20px;font-family: inherit;">Navigation</h3>
					<ul style="text-transform: uppercase; margin-top: 48px;    font-family: inherit;">
						<li><a href="#">Home</a></li>
						<li><a href="#">features</a></li>
						<li><a href="#">pricing</a></li>
						<li><a href="#">how it works</a></li>
                       
					</ul>

				</section>
			</div>
			<div class="col-md-2 col-xs-12">
				<section class="footer-nav-2" style="margin-top: 41px;">
					<ul style="text-transform: uppercase;margin-top: 84px;font-family: inherit;">
						<li><a href="#">faq</a></li>
						<li><a href="#">blog</a></li>
						<li><a href="#">about us</a></li>
						<li><a href="#">contact us</a></li>
                       
					</ul>
					
				</section>
			</div>


			<div class="col-md-2 col-xs-12">
				<section class="footer-nav-1" >
					<h3 style="font-size: 20px;font-family: inherit;">Services</h3>
					<ul style="text-transform: uppercase; margin-top: 48px;     font-family: inherit;">
						<li><a href="#">mail forwarding</a></li>
						<li><a href="#">mail scanning</a></li>
						<li><a href="#">virtual mailbox</a></li>
						<li><a href="#">virtual mailroom</a></li>
                       
					</ul>

				</section>
			</div>
			<div class="col-md-3 col-xs-12">
				<section class="footer-nav-2" style="margin-top: 41px;">
					<ul style="text-transform: uppercase;margin-top: 69px;    font-family: inherit;">
						<li><a href="#">change usa mailing address</a></li>
						<li><a href="#">virtual address for small business</a></li>
						<li><a href="#">virtual shipping address</a></li>
						<li><a href="#">virtual po box</a></li>
                       
					</ul>
					
				</section>
			</div>

			<div class="col-md-3 col-xs-12">
				<section class="footer-nav-3">
					<h3 style="font-size: 20px;font-family: inherit;">How Do You Reach Us</h3>
					 <ul style="margin-top: 48px;     font-family: inherit;">
					 	<li>
						<i class="fa fa-map-marker" area-hidden="true"> </i>
                       <h4>PostScan Mail</h4>
                       <p>700 N Valley St Suite B </p>
                       <p>Anaheim,CA 92801</p>
                       </li>
                       <li>
                       	<i class="fa fa-phone" area-hidden="true"></i>
                       	<h4> Call Us Today</h4>
                       	<p>1(800)624-5866</p>
                       </li>
                       <li>
                       	<i class="fa fa-envelope" area-hidden="true"></i>
                       	<h4>Email us</h4>
                       	<p>info@postscanmail.com</p>

                       </li>
					 </ul>

				</section>

			</div>
		</div>
<hr style="border-top: 1px solid #ccc!important;">
	
	<div class="row">
		<div class="col-md-6 copyright">
			<p>&copy;2019 PostScanMail. All rights reserved</p><br>
		     <p><a href="#">Privacy Policy</a>|<a href="#">Tearm of use</a>|<a href="#">Terms & Conditions</a></p>
		</div>

		<div class="col-md-6">
	<ul class="list-inline social-icon" style="    float: right;"> 
<li><a href="https://www.facebook.com/PostScanMail"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="https://twitter.com/postscanmail"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="https://www.youtube.com/postscanmail"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
<li><a href="https://plus.google.com/+Postscanmail"><i class="fa fa-google-plus" aria-hidden="true"></i> </a></li>
<li><a href="#" style="display:none;"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
</ul>
		</div>

	</div>
	</div>
	</footer>

</body>
</html>
<!--===== REQUIRED JS =====--> 
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootsnav.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/parallaxie.js"></script>
<script src="js/bootstrap-select.js"></script>
<scr