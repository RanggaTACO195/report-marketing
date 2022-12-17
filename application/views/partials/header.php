<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>KALgen INNOLAB</title>
    <!-- favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/kalgen.gif" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/fontawesome/fa.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/fonts/googleFontRoboto.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap/dist/css/mdb.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/mdb/css/addons-pro/steppers.min.css" />
    <!-- WYSIWYG -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap/dist/css/wysiwyg.css" />
        <!-- Your custom styles (optional) -->
     <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/site.css" />
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/lib/jquery/dist/jquery.min.js"></script>
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    .home-menu .btn-menu {
	background-color: 
	transparent; border: 0px;
}

.box-shadow-menu{
	box-shadow: 1px 5px 5px 3px #888888;
	width: 230px; min-width: 180px;
}

.menu-over {
	background-color: #000 !important;
	transition: 1.5s;
}

.label-over {
	background-color: lightblue !important;
	transition: 1.5s;	
}
    
</style>
<body class="fixed-sn kalbe-skin">
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url() ?>assets/images/kalgen_LOGO_BG.png" width="200">
            <p class="text-center pt-4" style="font-size : 15px; font-weight : 500;">Loading...</p>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div id="wrapper">


                    <!-- End of Sidebar -->
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">
                            <header>
                                <!-- Topbar -->
                                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
                                       <img src="<?= base_url() ?>assets/images/kalgen_LOGO.png" alt="" style="width:100px;float: right;"/> 
                                    <!-- Sidebar Toggle (Topbar) -->

                                    <button id="sidebarToggleTop" class=" d-md-none rounded-circle border-0 mr-3">
                                        <i class="fa fa-bars"></i>
                                    </button>
                             
                                    <!-- Sidebar Toggler (Sidebar) -->
                                  

                                    <!-- Topbar Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                             
                               
                                        <ul class="nav navbar-nav nav-flex-icons ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user" style="color : #98cd2d;"></i> <span class="clearfix d-none d-sm-inline-block pl-2">Hi,<?php echo $this->session->userdata('name') ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>"><i class="fas fa-sign-out-alt pr-2"></i>Log Out</a>
                                    </div>
                                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="~/Login/Index"><i class="fas fa-lock" style="color : #98cd2d;"></i><span class="clearfix d-none d-sm-inline-block pl-2">Log In</span></a>
                </li> -->
                                        </ul>

                                    </ul>

                                </nav>
                                <!-- End of Topbar -->
                            </header>
                            <!-- Begin Page Content -->


  

