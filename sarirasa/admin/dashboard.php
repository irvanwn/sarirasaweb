<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>Sari Rasa | Dashboard</title>

        <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

        <!-- Main CSS -->
        <link href="css/styles3.css" rel="stylesheet" type="text/css" />

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>NP<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <?php include('includes/topheader.php'); ?>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#" class="redcolor">Sari Rasa</a>
                                        </li>
                                        <li>
                                            <a href="#" class="redcolor">Admin</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <a href="manage-posts.php">
                                <div class="row">
                                    <!-- Total Active Highlights -->
                                    <?php $query = mysqli_query($con, "SELECT * FROM highlight WHERE Active=1");
                                    $countActive = mysqli_num_rows($query);
                                    ?>
                                    <div class="col-md-6 col-sm-6"> <!-- Adjusted for 1.5x length -->
                                        <div class="card-box widget-box-one">
                                            <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow redcolor"
                                                    title="Active Highlights">Highlight Aktif</p>
                                                <p class="text-muted">Jumlah highlight yang saat ini aktif dan ditampilkan
                                                    di situs.</p>
                                                <h2>
                                                    <?php echo htmlentities($countActive); ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Total Inactive Highlights -->
                                    <?php $query = mysqli_query($con, "SELECT * FROM highlight WHERE Active=0");
                                    $countInactive = mysqli_num_rows($query);
                                    ?>
                                    <div class="col-md-6 col-sm-6"> <!-- Adjusted for 1.5x length -->
                                        <div class="card-box widget-box-one">
                                            <i class="mdi mdi-bell-off widget-one-icon"></i>
                                            <div class="wigdet-one-content">
                                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow redcolor"
                                                    title="Inactive Highlights">Highlight Tidak Aktif</p>
                                                <p class="text-muted">Jumlah highlight yang tidak aktif dan tidak
                                                    ditampilkan di situs.</p>
                                                <h2>
                                                    <?php echo htmlentities($countInactive); ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Most Recent Highlight -->
                                    <?php
                                    $query = mysqli_query($con, "SELECT title, description, highlightIMG FROM highlight WHERE Active=1 ORDER BY uploadDate DESC LIMIT 1");
                                    $recentHighlight = mysqli_fetch_array($query);
                                    $snippet = substr($recentHighlight['description'], 0, 50); // Get the first 50 characters
                                    ?>
                                    <div class="col-md-12">
                                        <div class="card-box widget-box-one">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-8">
                                                    <div class="wigdet-one-content">
                                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow redcolor"
                                                            title="Recent Highlight">Highlight Terbaru</p>
                                                        <h2>
                                                            <?php echo htmlentities($recentHighlight['title']); ?>
                                                        </h2>
                                                        <p class="text-muted">
                                                            <?php echo htmlentities($snippet); ?>...
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 text-right"> <!-- Align to the right -->
                                                    <div class="widget-one-thumbnail">
                                                        <img src="postimages/<?php echo htmlentities($recentHighlight['highlightIMG']); ?>"
                                                            style="height: 125px; width: 125px; object-fit: cover;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </a>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->
                <?php include('includes/footer.php'); ?>

            </div>
        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

    </html>
<?php } ?>