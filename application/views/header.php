<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link href= " <?= base_url('assets/'); ?>/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link href= " <?= base_url('assets/'); ?>/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Bootstrap CSS
		============================================ -->
    <link href= " <?= base_url('assets/'); ?>/css/font-awesome.min.css" rel="stylesheet" >
    <!-- owl.carousel CSS
		============================================ -->

    <link href= " <?= base_url('assets/'); ?>/css/owl.carousel.css" rel="stylesheet" >
    <link href= " <?= base_url('assets/'); ?>/css/owl.theme.css" rel="stylesheet" >
    <link href= " <?= base_url('assets/'); ?>/css/owl.transitions.css" rel="stylesheet" >
    
    <!-- animate CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/animate.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/normalize.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/meanmenu.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/main.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <link href= " <?= base_url('assets/'); ?>/css/morrisjs/morris.css" rel="stylesheet" >
    <!-- mCustomScrollbar CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/scrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/metisMenu/metisMenu.min.css" rel="stylesheet" >
        <link href= " <?= base_url('assets/'); ?>/css/metisMenu/metisMenu-vertical.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/calendar/fullcalendar.min.css" rel="stylesheet" >
        <link href= " <?= base_url('assets/'); ?>/css/calendar/fullcalendar.print.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
        <link href= " <?= base_url('assets/'); ?>/css/editor/select2.css" rel="stylesheet" >
        <link href= " <?= base_url('assets/'); ?>/css/editor/datetimepicker.css" rel="stylesheet" >
        <link href= " <?= base_url('assets/'); ?>/css/editor/bootstrap-editable.css" rel="stylesheet" >
        <link href= " <?= base_url('assets/'); ?>/css/editor/x-editor-style.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/data-table/bootstrap-table.css"> -->
    <link href= " <?= base_url('assets/'); ?>/css/data-table/bootstrap-table.css" rel="stylesheet" >
    
    <!-- <link rel="stylesheet" href="css/data-table/bootstrap-editable.css"> -->
    <link href= " <?= base_url('assets/'); ?>/css/data-table/bootstrap-editable.css" rel="stylesheet" >
    <!-- style CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href= " <?= base_url('assets/'); ?>/style2.css" rel="stylesheet" >
    <!-- responsive CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link href= " <?= base_url('assets/'); ?>/css/responsive.css" rel="stylesheet" >
    <!-- modernizr JS
		============================================ -->
        <script src="<?= base_url('assets/'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="<?= base_url('assets/'); ?>/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>  -->
    <script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> 



      <!-- <link rel="stylesheet" href="<?php echo base_url('assets/');?>bootstrap/css/bootstrap.min.css"> -->
      <script src="<?php echo base_url('assets/');?>bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url('assets/');?>bootstrap/jquery-1.7.1.min.js"></script>
</head>

<?php
if (empty($this->session->userdata('is_login'))) {
    redirect('auth');
}
?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


          <!-- Start sidebar -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo"/><h1>Email Gateaway</h1></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="index.html">
								   <i class="fa big-icon fa-home icon-wrap"></i>
								   <span class="mini-click-non">Dashboard</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Tambah Peminjam Buku" href="<?= base_url('PeminjamCRUD'); ?>"><i class="fa fa-bolt sub-icon-mg" aria-hidden="true">
                                </i> <span class="mini-sub-pro">Tambah Peminjam</span></a></li>
                               
                                <li><a title="Data Peminjam" href="<?= base_url('data_peminjam'); ?>">
                                <i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Peminjam</span></a></li>

                                <li><a title="Data Peminjam" href="<?= base_url('Admin'); ?>">
                                <i class="fa fa-female sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Admin</span></a></li>
                               
                                <li><a title="Analytics" href="analytics.html"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true">
                                </i> <span class="mini-sub-pro">Analytics</span></a></li>
                              
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="fa big-icon fa-envelope icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">

                                <li><a title="Email Manual" href="<?= base_url('Email_manual'); ?>"><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> 
                                <span class="mini-sub-pro">Email manual</span></a></li>

                                <li><a title="Email Otomatis" href="<?= base_url('Email_id'); ?>"><i class="fa fa-paper-plane sub-icon-mg" aria-hidden="true"></i>
                                 <span class="mini-sub-pro">Email Otomatis</span></a></li>
                                 
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
      <!-- End side bar -->




    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                       
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                      
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">Admin</span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    
                                                        <!-- <li><a href="<?= base_url('logout'); ?><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                        </li> -->
                                                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('Auth/logout'); ?>">
                                                                                                                  <i class="bi bi-box-arrow-right"></i>
                                                                                                                      <span>Sign Out</span>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                            
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                   
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                   
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                            <label class="onoffswitch-label" for="example">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Disable Chat</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                            <label class="onoffswitch-label" for="example3">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Enable history</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                            <label class="onoffswitch-label" for="example4">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show charts</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                            <label class="onoffswitch-label" for="example7">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Update everyday</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                            <label class="onoffswitch-label" for="example2">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Global search</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                            <label class="onoffswitch-label" for="example6">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Offline users</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                            <label class="onoffswitch-label" for="example5">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="product-list.html">Product List</a></li>
                                                <li><a href="product-edit.html">Product Edit</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">Email Otomatis</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Email Otomatis</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>