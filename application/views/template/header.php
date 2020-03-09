
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title?></title>
<!--   <link rel="icon" href="<?php echo base_url('assets/img/logo.png');?>" type="image/x-icon"> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
  <!-- Grafik -->
  <link rel="stylesheet" href="<?php echo base_url('assets/morris/morris.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
  <!--you can choose any other skin -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-blue.min.css');?>">
  <!-- My Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main-admin.css');?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url()?>assets/jquery/jquery-ui.js"></script>
  <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
  <!-- DataTables CSS -->
  <!-- <link href="<?php echo base_url()?>assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet"> -->

  <!-- DatePicker-->
  <link href="<?php echo base_url()?>assets/jquery/smoothness_jquery-ui.css" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <!-- <link href="<?php echo base_url()?>assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet"> -->

  <!-- SweetAlert 2-->
    <link href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css');?>" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/leaflet/leaflet.css" />
    <script src="<?php echo base_url()?>assets/leaflet/leaflet.js"></script> -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
    
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>MB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $title?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <!--  <img src="<?php echo base_url();?>assets/img/logo.png" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Admin</span>
            </a>
           
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->