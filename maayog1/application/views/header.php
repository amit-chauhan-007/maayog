<!DOCTYPE HTML>
<html>
<head>
  <title>maaYog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="assets/js/jquery-1.11.0.min.js"></script>
  <!-- Custom Theme files -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--Google Fonts-->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href='//fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
  <!--google fonts-->
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
  <!--responsive-->
  <script src="assets/js/responsiveslides.min.js"></script>
  <style type="text/css">
    .nav > li > a{
      padding: 3px 15px !important;
    }
  </style>
  <script>
// You can also use "$(window).load(function() {"
$(function () {
  $("#slider2").responsiveSlides({
    auto: true,
    pager: true,
    speed: 300,
    namespace: "callbacks",
  });
});
</script>
</head>
<body>
  <!--header start here-->
  <!-- animated-css -->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- animated-css -->
<!-- NAVBAR
  ================================================== -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<div class="container-fluid">
  <div class="row">
    <div class="navbar navbar-default navbar-fixed-top">
      <header id="header-site">
        <!--Begin::Header right-->
        <ul class="nav navbar-right pull-right top-nav" style="margin-right: 16%;">
          <li class="dropdown dropdown-notification"> <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <i class="fa fa-bell-o"></i> <span class="badge badge-default"> 3 </span> </a>
            <ul class="dropdown-menu">
              <li class="external">
                <h3> <span class="bold">12 pending</span> notifications</h3>
                <a href="page_user_profile_1.html">view all</a> 
              </li>
              <li>
                <ul class="dropdown-menu-list">
                  <li> <a href="javascript:;"> <span class="time">just now</span> <span class="details"> <span class="label label-sm label-icon label-success"> <i class="fa fa-plus"></i> </span> New user registered. </span> </a> </li>
                  <li> <a href="javascript:;"> <span class="time">3 mins</span> <span class="details"> <span class="label label-sm label-icon label-danger"> <i class="fa fa-bolt"></i> </span> Server #12 overloaded. </span> </a> </li>
                  <li> <a href="javascript:;"> <span class="time">10 mins</span> <span class="details"> <span class="label label-sm label-icon label-warning"> <i class="fa fa-bell-o"></i> </span> Server #2 not responding. </span> </a> </li>
                  <li> <a href="javascript:;"> <span class="time">14 hrs</span> <span class="details"> <span class="label label-sm label-icon label-info"> <i class="fa fa-bullhorn"></i> </span> Application error. </span> </a> </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <img alt="" class="img-circle" src="https://static1.squarespace.com/static/55198f1ce4b00c2cab3e5e30/t/5526d500e4b009f3ec94b422/1428608282728/600x600%26text%3Dprofile+img.gif?format=300w" width="30"> 
              <span class="hidden-xs">abcd@purpledot.in</span> 
            </a>
            <ul class="dropdown-menu">
              <li><a href="profile.php"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
              <!-- <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li> -->
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
        <!--End::Header Right-->
        
      </header>
    </div>
  </div>
</div>

  <div class="header head-fixed">
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="logo wow slideInLeft" data-wow-delay="0.3s">
              <a class="navbar-brand" href="/"><img src="http://maaYog.com/demo/images/logo1.png" / style="margin-top: -16%;"></a>
            </div>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <nav class="cl-effect-11">
              <ul class="nav navbar-nav">
                <li><a href="<?php base_url(); ?>" data-hover="Home">Home</a></li>
                <li><a href="classes" data-hover="Classes">Classes</a></li>               
                <li><a href="about" data-hover="About">About us</a></li>
                <li><a href="live" data-hover="Live Yoga">Live Yoga</a></li>
                <li><a href="contact" data-hover="Contact">Contact us</a></li>      
                <li><a data-toggle="modal" data-target="#myModal01">Login</a></li>
              </ul>
            </nav>
          </div>
          <div class="clearfix"> </div>
        </nav>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
  </div>