<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                                    alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="images/layout_img/sicartha.png"
                                    alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>admin</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <ul class="list-unstyled components">
                        <li><a href="dashboard.html"><i class="fa fa-dashboard yellow_color"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-diamond purple_color"></i> <span>Data Karyawan</span></a>
                            <ul class="collapse list-unstyled" id="element">
                                <li><a href="pribadi.html">> <span>Pribadi</span></a></li>
                                <li><a href="karyawan.html">> <span>Karyawan</span></a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Riwayat
                                    Golongan</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a href="jabatanbydate.html">> <span>Track Record Jabatan By Date</span></a>
                                </li>
                                <li>
                                    <a href="mutasikerja.html">> <span>Data Mutasi Kerja</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-object-group blue2_color"></i> <span>Riwayat Jabatan</span></a>
                            <ul class="collapse list-unstyled" id="apps">
                                <li><a href="jabatanbyname.html">> <span>Track Ricord Jabatan By Name</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#apps1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                                    class="fa fa-object-group blue2_color"></i> <span>Data Pelamar</span></a>
                            <ul class="collapse list-unstyled" id="apps1">
                                <li><a href="pelamar.html">> <span>DATA</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                    class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img-responsive" />PT CANDI ARTHA</a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="images/layout_img/sicartha.png" alt="#" /><span
                                                    class="name_user">Admin</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i
                                                        class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>TRACK RECORD JABATAN BY NAME</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer -->
                <!-- <div class="container-fluid">
                    <div class="footer">
                        <!-- <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                            Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p> -->
            </div>
        </div> -->
    </div>
    <!-- end dashboard inner -->
    </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="js/Chart.min.js"></script>
    <script src="js/Chart.bundle.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="js/chart_custom_style1.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>