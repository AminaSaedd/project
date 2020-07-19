<?php


include_once('functions/functions.php');

 include('header.php');?>







<!DOCTYPE html>
<html>
<head>
  <title>register</title>
  <link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
</head>
<body>


 <div class=" container" style="margin-top: 5%">
<div class="row">
    <div class="col-lg-3">
       
    </div>
     <div class="col-lg-6">
    <div id="ui">
 
    
    <form class="form-horizontal" id="regis_form" method="POST" enctype="multipart/form-data" style="margin-top:-5%;margin-left:-35%; ">
     <div class="panel-heading">
   <label id="lblheader">Customer Registration</label></br>
   </div>

   <?php

if ( isset($_POST['register'])) {


   ?>
     
   
   <div class="text-center text-danger panel-heading">
      <h1 class="alert alert-danger">
<?php  include 'db.php'; ?>

<?php
//session_start();
if (isset($_POST["register"])) {


$fn = $_POST['fname'];
$ln = $_POST['fname'];
$phn = $_POST['phnumber'];
$email = $_POST['email'];
$pas = $_POST['password'];
$confpas = $_POST['confirm_password'];
$joindate = $_POST['joindate'];
// file name, type, size, temporary name
 $file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_tmp_name = $_FILES['image']['tmp_name'];
$file_size = $_FILES['image']['size'];
 
    // target directory
    $target_dir = "images/";
//encypt password to md5

  $pas = md5($pas);
  $confpas = md5($confpas);

if (empty($fn) || empty($ln) || empty($email) || empty($phn) || empty($pas)  || empty($confpas) || empty($joindate) || empty($file_name)    ) {

    echo "please fill the blanks ";

}




else{

 $sql = mysqli_query($con,"INSERT INTO customers (FirstName,LastName,phone_number,email,PASSWORD,Confirm,join_date,image) VALUES('$fn', '$ln', '$phn', '$email', '$pas', '$confpas', '$joindate','.$target_dir.$file_name.')");
if ($sql) {
  echo "successfully Registered";

}

else
{
  echo "oops ! some thing is wrong ";
}

}


}
?>
      </h1>
   </div>
   <?php }?>


<div class="row" style="margin-top: 1%">
<div class="col-lg-6">
<label>FirstName</label>
<input type="text" name="fname" class="form-control" placeholder="enter your FirstName">
    
</div>
<div class="col-lg-6">
<label>LastName</label>
<input type="text" name="lname" class="form-control" placeholder="eneter your LastName">
</div>
 
</div>
<div class="row" style="margin-top: 2%">
<div class="col-lg-6">
<label>PhoneNumber</label>
<input type="text" name="phnumber" class="form-control" placeholder="enter your number">
    
</div>
<div class="col-lg-6">
<label style="margin-left:40% ">Email</label>
<input type="text" name="email" class="form-control" placeholder="eneter your email address">
</div>
</div>
<div class="row" style="margin-top: 4%">
<div class="col-lg-6">
<label>Password</label>
<input type="Password" name="password" class="form-control" placeholder="enter your Password">
    
</div>
<div class="col-lg-6">
<label>Confirm Password</label>
<input type="Password" name="confirm_password" class="form-control" placeholder="Retype again Password">
</div>
 
</div>
<div class="row" style="margin-top: 5%">
<div class="col-lg-6">
<label>Join Date</label>
<input type="date" name="joindate" class="form-control" placeholder="JoinDate">

</div>
 <div class="col-lg-6">
 <label>Upload Your image</label>
 <input type="file" name="image" id="file" class="form-control">
 </div>
</div>

<input type="submit" name="register" class="form-control btn btn-info" value="Register" role="submit" id="regis_cost" >
    </form>
    </div>
        
    </div> 
</div>
</div>
<?php include('foter.php');?>
</body>
</html>