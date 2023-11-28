<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {
        $postinstagram = $_POST['postinstagram'];
        $postemail = $_POST['postemail'];
        $postnomor = $_POST['postnomor'];
        $postnomorrumah = $_POST['postnomorrumah'];
        // UPDATE `informasi` SET `instagram`='[value-1]',`email`='[value-2]',`telpon`='[value-3]',`telpon_rumah`='[value-4]' WHERE 1
        $log_user = $_SESSION['log_user'];
        $log_user_id = $_SESSION['log_user_id'] ;
        $activity = "User updated contact information";
        $query = mysqli_query($con, "insert into activity_log(user_id,user,activity) values('$log_user_id', '$log_user', '$activity')");
        $query = mysqli_query($con, "update informasi set instagram='$postinstagram',email='$postemail',telpon='$postnomor',telpon_rumah='$postnomorrumah' where 1 ");
        if ($query) {
            $msg = "Post updated ";
        } else {
            $error = "Something went wrong . Please try again.";
        }

    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Sari Rasa | Olah Highlight</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

        <!-- Main CSS -->
        <link href="css/styles4.css" rel="stylesheet" type="text/css" />

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>


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
                                    <h2 class="page-title" style="padding: 10px 0px;">Ubah Informasi</h2>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#" class="redcolor">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#" class="redcolor">Halaman</a>
                                        </li>
                                        <li class="active">
                                            Ubah Informasi Kontak
                                        </li>
                                    </ol>
                                    <div class="description" style="clear: both;">
                                        <p class="text-muted m-b-0">Mengubah Informasi Nomor telpon email sosial media dsb.</p>
                                    </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- start container -->
        <?php
            $query=mysqli_query($con,"select instagram,email,telpon,telpon_rumah from informasi");
            while ($row = mysqli_fetch_array($query)) {
                ?>

                    <form method="post" action="">
                        <div class="container">
                            <div class="box">
                                <input type="text" placeholder="instagram" class="name" name="postinstagram"
                                    value="<?php echo htmlentities($row['instagram']); ?>">
                            </div>
                            <div class="box">
                                <input type="text" placeholder="email" class="name" name="postemail"
                                    value="<?php echo htmlentities($row['email']); ?>">
                            </div>
                            <div class="box">
                                <input type="text" placeholder="nomor hp" class="name" name="postnomor"
                                    value="<?php echo htmlentities($row['telpon']); ?>">
                            </div>
                            <div class="box">
                                <input type="text" placeholder="nomor rumah" class="name" name="postnomorrumah"
                                    value="<?php echo htmlentities($row['telpon_rumah']); ?>">
                            </div>

                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update
                            </button>
                        </div>
                    </form>
                <?php 
                } 
            }
            ?>
            <!-- end container -->

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

        <!-- CounterUp  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Load page level scripts-->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


        <!-- Dashboard Init js -->
		<script src="assets/pages/jquery.blog-dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>