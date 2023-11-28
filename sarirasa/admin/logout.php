<?php
session_start();
include("includes/config.php");
$log_user = $_SESSION['log_user'];
$log_user_id = $_SESSION['log_user_id'] ;
$activity = "User logged out";
$query = mysqli_query($con, "insert into activity_log(user_id,user,activity) values('$log_user_id', '$log_user', '$activity')");
$_SESSION['login']=="";
$_SESSION['log_user_id']=="";
$_SESSION['log_user']=="";
session_unset();
session_destroy();

?>
<script language="javascript">
document.location="index.php";
</script>
