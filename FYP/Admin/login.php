<?php 

session_start();
include 'db.php';


if (isset($_POST['submit'])) {
  
$userName = $_POST['userName'];
$Password = $_POST['Password'];

$sql = mysqli_query($con,"SELECT * FROM `admins` where userName='$userName' and PASSWORD='$Password'");



if(!empty($userName) || !empty($Password)){
$row = mysqli_num_rows($sql);
if ($row ==1) {
  
  $_SESSION['check_user'] = $userName;
  header('location: index.php');
}

else{

$invalid = "userName or Password is incorrect";

}
}

}








?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

  <body>

  <div class="container" style="margin-top: 6%;">
    <div style="height: 100px"></div>
      <div class="col-md-8 col-md-offset-2 panel bg-info" style="border:1px solid skyblue; ">
        <div class="text-center text-primary panel-heading ">
           <h1 class="text-white"><i class="fa fa-user"></i>Login</h1>
        </div>

        <?php 
     if (isset($invalid)) {
      
     
         ?>

         <div class="text-center text-danger panel-heading">
           <h3 class="alert alert-danger"><i class="fa fa-times"></i><?php echo$invalid; ?></h3>
        </div>
        <?php } ?>
          <div class="panel-body">
            <form class="form-horizontal" method="POST">
              <div class="form-group">
                <label class="col-md-2 control-label text-white">userName</label>
                 <div class="col-md-8">
                   <input type="text" name="userName" placeholder="userName" class="form-control">
                   <?php if (isset($_POST['submit'])) {
                     if (empty($userName)) {
                      $user_error ="Please userName is Required ";
                    ?>

                    <span class="text-center text-danger">
                      <i class="fa fa-times"></i>
                      <?php echo$user_error; ?>
                    </span>
                    <?php }} ?>
                   </div>
                   </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label text-white">Password</label>
                       <div class="col-md-8">
                   <input type="text" name="Password"  placeholder="Password"  class="form-control">
                    <?php if (isset($_POST['submit'])) {
                     if (empty($Password)) {
                      $user_error ="Please Password can not be  Empty ";
                    ?>

                    <span class="text-center text-danger">
                      <i class="fa fa-times"></i>
                      <?php echo$user_error; ?>
                    </span>
                    <?php }} ?>
                 </div>
                </div>
                <div class="form-group">
                 <div class="col-md-8 col-md-offset-2">
                   <button name="submit" class="btn btn-primary btn-lg text-center">Login</button>
                 </div>
                </div>
            </form>
          </div>
      </div>

  </div>



  <?php 

 ?>



</body>
</html>
