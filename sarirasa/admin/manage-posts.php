<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if($_GET['action']='del')
{
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"update highlight set Active=0 where id='$postid'");
if($query)
{
$msg="Post deleted ";
}
else{
$error="Something went wrong . Please try again.";    
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
        <link href="css/styles3.css" rel="stylesheet" type="text/css" />

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
                                    <h2 class="page-title">Olah Highlight</h2>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#" class="redcolor">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#" class="redcolor">Highlight</a>
                                        </li>
                                        <li class="active">
                                            Olah Highlight
                                        </li>
                                    </ol>
                                    <div class="description" style="clear: both;">
                                        <p class="text-muted m-b-0">Kelola highlight dengan menambah, mengedit, dan menghapus highlight</p>
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

<div class="form-group" style="width: 100%;">
    <input type="text" class="form-control" placeholder="Search" style="width: 100%;">
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
$query=mysqli_query($con,"select highlight.id as postid, highlight.highlightIMG, highlight.title as title, highlight.description from highlight where highlight.Active=1");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
<tr>
<?php 
} else {
    while ($row = mysqli_fetch_array($query)) {
        $deskPendek = substr(htmlentities($row['description']), 0, 20);
?>
    <tr>
        <td>
            <div class="row">
                <div class="col-xs-12">
                    <strong><?php echo htmlentities($row['title']); ?></strong>
                </div>
                <div class="col-xs-12">
                    <p class="text-muted" style="margin-top: 5px;"><?php echo $deskPendek; ?>...</p>
                </div>
            </div>
        </td>
        <td>
            <a href="edit-post.php?pid=<?php echo htmlentities($row['postid']); ?>">
                <i class="fa fa-pencil" style="color: #29b6f6; font-size: 25px;"></i>
            </a>
            &nbsp;
            <a href="manage-posts.php?pid=<?php echo htmlentities($row['postid']); ?>&action=del" onclick="return confirm('Do you really want to delete?')">
                <i class="fa fa-trash-o" style="color: #f05050;font-size: 25px;"></i>
            </a>
        </td>
        <td style="text-align: right;">
            <img src="postimages/<?php echo htmlentities($row['highlightIMG']); ?>" width="125" height="125" style="object-fit: cover;"/>
        </td>
    </tr>
<?php 
    } 
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