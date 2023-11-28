<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['username'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT id,username,email,password,role FROM admin WHERE (username='$uname' || email='$uname')");
$num=mysqli_fetch_array($sql);
$log_user = $num['username'];
$log_user_id = $num['id'];
$activity = 'User logged in';
if($num>0)
{
$hashpassword=$num['password']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {
    $query = mysqli_query($con, "insert into activity_log(user_id,user,activity) values('$log_user_id', '$log_user', '$activity')");
$_SESSION['login']=$_POST['username'];
$_SESSION['log_user_id'] = $log_user_id;
$_SESSION['role'] = $num['role'];
$_SESSION['log_user'] = $log_user;
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  } else {
// echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LOGIN | Admin Panel</title>

        <link rel = "icon" href = "assets/favicon.ico" type = "image/x-icon"> 

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        
        <!-- Google Fonts -->
        <link ref="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

        <!-- other css -->
        <link rel="stylesheet" type="text/css" href="css/styles.css"> 

    </head>

    <body>

        <div class="cont container-fluid"> 
            <form class="loginform mx-auto my-auto p-4" method="post">
                <picture>
                    <img src="assets/NamaLogo.png" class="img-fluid px-5 pt-4 pb-3" alt="logo rumah sari rasa">
                </picture>

                <h3 class="text-center pt-1 pb-4 logintitle">Login Panel Admin</h3>

                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label m-0">Username</label>
                    <input class="form-control" type="text" required="" name="username" placeholder="Username atau email" autocomplete="off">
                </div>

                <div class="mb-3 mt-2">
                    <label for="exampleInputPassword1" class="form-label m-0">Password</label>
                    <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                </div>

                <div class="mb-3 form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember</label>
                </div>

                <button class="mt-3 btn w-md btn-bordered btn-primary waves-effect waves-light" type="submit" name="login">Login</button>

                <div class="mx-auto mt-4 mb-4 border-bottom border-dark-subtle border-1"> </div>
                <P class="text-center bottomtext">
                    © 2023 All Rights Reserved.<br>
                    Jika ada kendala, hubungi admin.
                </P>
            </form>

            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>