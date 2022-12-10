<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ule - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link href="<?= base_url(); ?>assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/assets/images/favicon.png">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/list-menu.css" rel="stylesheet">
    <script src="<?= base_url(); ?>assets/js/modernizr-3.6.0.min.js"></script>
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><a href="index.html"><b><img src="<?= base_url(); ?>assets/images/logo.png" alt=""> </b><span class="brand-title"><img src="<?= base_url(); ?>assets/images/logo-text.png" alt=""></span></a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="javascript:void(0)"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>


                        </li>
                        <li><a href="#"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                        </li>
                        <li><a href="#"><i class="icon-power"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            </li>
            </ul>
        </div>
    </div>
    </div>
    <!-- #/ header -->
    <!-- sidebar -->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li><a href=" <?php echo base_url() . 'Dashboard/index' ?>"><i class="mdi mdi-home"></i> <span class="nav-text">Dashboard</span></a>
                </li>
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i> <span class="nav-text">Booking Master</span></a>
                    <ul aria-expanded="false">
                        <!-- <li><a href="chart-flot.html">Jam</a>
                        </li> -->
                        <li><a href="<?php echo base_url() . 'Booking/index' ?>">Pemesan</a>
                        </li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i> <span class="nav-text">Sewa Master</span></a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo base_url() . 'Sewa/index' ?>">Penyewa</a>
                        </li>
                        <li><a href="<?php echo base_url() . 'Stok/index' ?>">Stok</a>
                        </li>
                        <li><a href="chart-morris.html">Pengembalian</a>
                        </li>
                    </ul>
                </li>
                <li><a href=" <?php echo base_url() . 'Artikel/index' ?>"><i class="mdi mdi-widgets"></i> <span class="nav-text">Artikel</span></a>
                </li>
            </ul>
        </div>
        <!-- #/ nk nav scroll -->
    </div>
    <!-- #/ sidebar -->