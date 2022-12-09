<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Pengelolaan Administrasi Keuangan Kelompok Pengelola Air dan Sanitasi Berbasis Masyrakat merupakan sistem informasi yang dibuat sebagai wujud kecintaan dan semangat kami untuk ikut berkontribusi dalam memajukan negeri ini melalui teknologi khususnya dalam bidang teknologi informasi. E-SPAMS merupakan sistem informasi yang ditujukan kepada KP-SPAMS dalam mengelola tagihan pelanggan, kas masuk, kas keluar, pengadaan aset, csr, dan pelaporan khususnya pelaporan keuangan.">
    <meta name="keywords" content="KPSPAMS,PAMSIMAS,pamsimas,kpspams,tagihan,accounting,software,accounting software,desa,membangun desa,pencatatan tagihan,tagihan air, software kpspams,spams,e-spams">
    <meta content="Asrul Cahyadi Putra - Divoc Global Technology" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/logo-icon.png">
    <!-- third party css -->
    <link href="<?= base_url() ?>/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- dropify -->
    <link href="<?= base_url() ?>/assets/libs/dropify/dropify.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <!-- <link href="<?= site_url() ?>/assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Plugins css -->
    <link href="<?= base_url() ?>/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url() ?>/assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/libs/switchery/switchery.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url() ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url() ?>/assets/css/app.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Custom box css -->
    <link href="<?= base_url() ?>/assets/libs/custombox/custombox.min.css" rel="stylesheet">

    <!-- sweetalerts 2 -->
    <link href="<?= base_url() ?>/assets/libs/sweetalert2/sweetalert2.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    <style>
        .error {
            color: #d00000;
            font-style: italic;
            font-size: 12px;
        }
    </style>

    <?= $this->renderSection('custom-style') ?>
</head>

<body>

    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?= base_url('assets/images/user-default.png') ?>" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Asrul Cahyadi Putra <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>Profil</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="<?= site_url('logout') ?>" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?= base_url('dashboard') ?>" class="logo logo-dark text-center">
                    <span class="logo-lg">
                        <h2 class="text-primary">MySIAP</h2>
                    </span>
                    <span class="logo-sm">
                        <h2 class="text-primary">MyS</h2>
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                <li>
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>

                <li>
                    <h4 class="page-title-main">PT SIAP 2022</h4>
                </li>

            </ul>

        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="<?= base_url('assets/images/user-default.png') ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                    <div class="dropdown">
                        <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown" aria-expanded="false"> <?= session()->get('fullname') ?></a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user mr-1"></i>
                                <span>Profil</span>
                            </a>
                            <!-- item-->
                            <a href="<?= site_url('logout') ?>" class="dropdown-item notify-item">
                                <i class="fe-log-out mr-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">
                        <span class="badge badge-primary"><?= session()->get('user_type') ?></span>
                    </p>

                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">


                        <!-- level 0 -->
                        <li>
                            <a href="<?= site_url('/') ?>">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- /.level 0 -->


                        <!-- level 1 -->
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-database"></i>
                                <span>Data Master </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= site_url('master-departments') ?>">Departemen</a></li>
                                <li><a href="<?= site_url('master-positions') ?>">Posisi</a></li>
                                <li><a href="<?= site_url('master-employees') ?>">Karyawan</a></li>
                            </ul>
                        </li>
                        <!-- /.level 1 -->

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <?= $this->renderSection('content') ?>
                <!-- container-fluid -->
            </div>
            <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <?=  date('Y') ?> &copy; SIAP V.1.0 by Asrul Cahyadi Putra For <a href="">AIS Telkom University</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">Tentang Kami</a>
                                <a href="javascript:void(0);">Bantuan</a>
                                <a href="javascript:void(0);">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Vendor js -->
    <script src="<?= base_url() ?>/assets/js/vendor.min.js"></script>

    <!-- knob plugin -->
    <script src="<?= base_url() ?>/assets/libs/jquery-knob/jquery.knob.min.js"></script>


    <script src="<?= base_url() ?>/assets/libs/morris-js/morris.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/raphael/raphael.min.js"></script>
    <!-- Dashboard init js-->

    <!-- third party js -->
    <script src="<?= base_url() ?>/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables/dataTables.select.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/pdfmake/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Plugins Js -->
    <script src="<?= base_url() ?>/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/switchery/switchery.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/multiselect/jquery.multi-select.js"></script>
    <script src="<?= base_url() ?>/assets/libs/jquery-quicksearch/jquery.quicksearch.min.js"></script>

    <script src="<?= base_url() ?>/assets/libs/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/moment/moment.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- dropify js -->
    <script src="<?= base_url() ?>/assets/libs/dropify/dropify.min.js"></script>

    <!-- form-upload init -->
    <script src="<?= base_url() ?>/assets/js/pages/form-fileupload.init.js"></script>

    <!-- Datatables init -->
    <script src="<?= base_url() ?>/assets/js/pages/datatables.init.js"></script>
    <!-- Init js-->
    <script src="<?= base_url() ?>/assets/js/pages/form-advanced.init.js"></script>

    <!-- Responsive Table js -->
    <!-- <script src="<?= site_url() ?>/assets/libs/rwd-table/rwd-table.min.js"></script>
    <script src="<?= site_url() ?>/assets/js/pages/responsive-table.init.js"></script> -->

    <!-- App js -->
    <script src="<?= base_url() ?>/assets/js/app.min.js"></script>
    <!-- custome js -->
    <script src="<?= base_url() ?>/assets/js/currency.js"></script>
    <!-- Modal-Effect -->
    <script src="<?= base_url() ?>/assets/libs/custombox/custombox.min.js"></script>
    <!-- append script -->

    <script src="<?= base_url() ?>/assets/custom/validate/jquery.validate.min.js"></script>

    <script src="<?= base_url() ?>/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script>
        const resetFormTambah = () => {
            $('#form-tambah').validate().resetForm();
            $('#form-tambah').trigger("reset");
        }
    </script>

    <?= $this->renderSection('custom-js') ?>
</body>

</html>