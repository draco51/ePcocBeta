<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>UCSC e-Procurement System</title>
<?php //include('session.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
<?php echo link_tag('assets/css/bootstrap-responsive.min.css'); ?>
<?php echo link_tag('assets/css/font-awesome.css'); ?>
<?php echo link_tag('assets/css/style.css'); ?>
<?php echo link_tag('assets/css/pages/dashboard.css'); ?>


<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a>
                    <a class="brand" href="<?php echo base_url().'dashboard/home' ?>"><img src=" <?php echo base_url() ?>assets/img/logo.png" height="40px" width="40px"> UCSC e-Procurement System</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="faq.html">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i><?php //echo "{$_SESSION['login_user']}" ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="login.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">

        <li class="active"><a href=<?php  echo base_url().'dashboard/home' ?>><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href=<?php  echo base_url().'history/view' ?>><i class="icon-list-alt"></i><span>Procurements History</span> </a> </li>
        <li><a href=<?php  echo base_url().'reports/view' ?>><i class="icon-bar-chart"></i><span>Reports</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>More</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Register Users</a></li>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
      