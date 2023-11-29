<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if((strlen($_SESSION['login'])==0) or ($_SESSION['role'] == 0))
  { 
header('location:index.php');
}
else{
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
        <title>Sari Rasa | Activity Log</title>

        <link rel = "icon" href = "assets/favicon.ico" type = "image/x-icon"> 

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
        <style>
            .redcolor{
                color: #E00000 !important;
            }

            .hovercolor:hover, .hovercolor:focus, .hovercolor:active {
                color: #FF0000 !important; /*   Red color, you can use your theme's red color code */
            }

            .bgblack{
                background-color: rgb(65, 65, 65) !important;
            }

            .hovercolor{
                background-color: rgb(65, 65, 65) !important;
            }

            .hovercolor:hover{
                background-color: rgb(83, 83, 83) !important;
            }

            .hovercolor:active{
                background-color: rgb(255, 255, 255) !important;
            }
            #customers{
                width:80%; 
            }
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;  
                padding-bottom: 12px;
                text-align: left;
                background-color: #4A86E8;
                color: white;
            }
        </style>

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
                                    <h2 class="page-title" style="padding: 10px 0;">Activity Log</h2>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#" class="redcolor">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#" class="redcolor">Activity Log</a>
                                        </li>
                                    </ol>
                                    <div class="description" style="clear: both;">
                                        <p class="text-muted m-b-0">Perlihatkan aktivitas semua aktivitas user.</p>
                                    </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                         

                                    <div class="table-responsive">
                                    <div class="input-group mb-3">

</div>

<table class="table table-colored table-centered table-inverse m-0">
<thead>
<!-- <tr>
                                           
<th>Title</th>
<th>Action</th>
</tr>
</thead> -->
<tbody>

<?php
$query = mysqli_query($con, "select time, user_id, user, activity from activity_log order by time desc LIMIT 100");
$rowcount = mysqli_num_rows($query);

if ($rowcount == 0) {
    ?>
    <tr>
        <td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
    </tr>
    <?php
} else {
    ?>
    <table id="customers">
        <tr>
            <th>Time Date</th>
            <th>User ID</th>
            <th>User</th>
            <th>Activity</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query)) {
            $deskPendek = substr(htmlentities($row['description']), 0, 60);
            ?>
            <tr>
                <td>
                    <p><?php echo htmlentities($row['time']); ?></p>
                </td>
                <td>
                    <p><?php echo htmlentities($row['user_id']); ?></p>
                </td>
                <td>
                    <p><?php echo htmlentities($row['user']); ?></p>
                </td>
                <td>
                    <p><?php echo htmlentities($row['activity']); ?></p>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
?>





                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

       <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


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
<?php } ?>