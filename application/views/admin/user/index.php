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
                
            </ul> 
                        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Table Perawat
    </div>
    <br></br>
    <?php if($this->session->flashdata('flash')): ?>
    <div class="alert alert-success alert-success-style1 alert-success-stylenone">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">&times;</span> </button>
    
    <p class="message-alert-none"><strong>Data</strong> berhasil <?php echo $this->session->flashdata('flash'); ?></p>
            </div>
        <?php endif; ?>
    <div class="page-title">
        <ol class="breadcrumb text-right">
        <a href="<?php echo base_url('user/tambah') ?>"><button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah</button></a>
        </ol>
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Akun</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <?php $i=1; ?>
            <?php foreach($user as $row):?>
            <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["jenis_kelamin"]; ?></td>
            <td><?php echo $row["tanggal_lahir"]; ?></td>
            <td><?php echo $row["tempat_lahir"]; ?></td>
            <td><?php echo $row["alamat"]; ?></td>
            <td>
                <a href="<?php echo base_url('akun/index') ?>/<?php echo $row['id_user'] ?>"><button class="btn btn-warning">Lihat</button></a>
            </td>
        <td>
            <a href="<?php echo base_url('user/edit') ?>/<?php echo $row['id_user']; ?>"><button class="btn btn-primary">Edit</button></a>
            <a href="<?php echo base_url('user/hapus'); ?>/<?php echo $row['id_user']; ?>"><button class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus?')">Hapus</button></a>
                                                    
         </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  
  <!-- / footer -->
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
