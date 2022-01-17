<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Penjadwalan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url(); ?>assets/fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url(); ?>assets/js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
       WELCOME
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
                
        </li>
        
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo base_url('logout/index') ?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                
                
                <li class="sub-menu">
                    <li>
                    <a href="<?php echo base_url('home/index'); ?>">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('user/index'); ?>">
                        <i class="fa fa-users"></i>
                        <span>Data Perawat</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('jadwal/index'); ?>">
                        <i class="fa fa-list"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Jadwal
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form form-horizontal " id="signupForm" method="post" action="<?php echo base_url('jadwal/prosesedit') ?>" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="level" class="control-label col-lg-3">Nama</label>
                                        <div class="control-label col-lg-3">
                                            <select class="form-control custom-select-value" name="id_user">
                                            <?php foreach($a as $row): ?> 
                                                <option value="<?php echo $row['id_user'] ?>"><?php echo $row['nama'] ?></option>
                                            <?php endforeach; ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="col-lg-6">
                                            <input type="hidden" value="<?php echo $jadwal['id_jadwal'] ?>" name="id_jadwal">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="hari" class="control-label col-lg-3">Hari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="<?php echo $jadwal['hari'] ?>" id="hari" name="hari" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tanggal" class="control-label col-lg-3">Tanggal</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" value="<?php echo $jadwal ['tanggal'] ?>" id="tanggal" name="tanggal" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="jam" class="control-label col-lg-3">Jam</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" value="<?php echo $jadwal ['jam'] ?>" id="jam" name="jam" type="time">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>
 
</section>

<!--main content end-->
</section>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js"></script>
</body>
</html>
