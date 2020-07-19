
<?php 
session_start();

if(!isset($_SESSION['check_user'])){
  
  echo "<script>window.open('login.php?not registered=You are not an  Registered customer!','ll.php')</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>customer_account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="bg-primary py-2 text-white" id="main_header">
  <div class="container">
   <div class="row">
     
    <div class="col-md-6">

    </div> 
   </div> 

  </div>
   <h1 class="" class=""><i class="fa fa-back"><a href="../index.php" class="text-white"> back to the home </a></i></h1> 
</header>
<section class="py-4 mb-4 bg-faded" id="sections">
 <div class="container">
  <div class="row">
 
    <div class="col-md-3">
  <a href="my_account.php?delete_account" class="btn btn-warning btn-block " data-toggle="modal" data-target="#addusermodel">
    <i class="fa fa-trash"></i>
Delete Account
  </a> 
    </div>
     <div class="col-md-3">
     
  <a href="my_account.php?logout" class="btn btn-danger btn-block " data-toggle="modal" data-target="#reportmodel">
 
LogOut
  </a> 
    </div>

  </div> 
 </div>  
</section>




<section id=" books">
 <div class="container">
  <div class="row">
   <div class="col-md-9">
   <?php
   if(isset($_GET['my_orders'])) {
    include ("my_orders.php");
   }
   if(isset($_GET['edit_account'])) {
    include ("edit_account.php");
   }
    if(isset($_GET['logout'])) {
    include ("logout.php");
   }
     if(isset($_GET['change_pass'])) {
    include ("change_pass.php");
   }
       if(isset($_GET['delete_account'])) {
    include ("delete_account.php");
   }
   ?> 
   </div> 
   <div class="col-md-3">
    <div class="card card-primary mb-3  text-center text-white" style="background-color: #007bff;"> 
    <div class="card-block">
      <h3><?php 
      include ('db.php');
				$user = $_SESSION['check_user'];
				
				$get_img = "select * from customers where email='$user'";
				
				$run_img = mysqli_query($con, $get_img); 
				
				$row_img = mysqli_fetch_array($run_img); 
				
				$c_image = $row_img['image'];
				
				$c_name = $row_img['FirstName'];
				
				echo "<p style='text-align:center;'><img src='customer_images/$c_image' width='150' height='180' style='margin-top:5%;'/></p>";
				
				?></h3>
      <h1 class="display-4"></h1>
      <a href="index.php?books" class="btn btn-outine-secondary text-white">Profile </a>
    </div>
   </div>
   <div class="card card-danger mb-3  text-center text-white" style="background-color: #28a745;"> 
    <div class="card-block">
      <h3>My Orders</h3>
      <h1 class="display-4"><i class=" fa fa-first-order"></i></h1>
      <a href="my_account.php?my_orders" class="btn btn-outine-secondary text-white">View</a>
    </div>
   </div>
   <div class="card card-danger mb-3  text-center text-white" style="background-color: #ffc107;"> 
    <div class="card-block">
      <h3>Edit Account</h3>
      <h1 class="display-4"><i class=" fa fa-pencil">2</i></h1>
      <a href="my_account.php?edit_account" class="btn btn-outine-secondary text-white">View</a>

    </div>
   </div>
      <div class="card card-info mb-3 bg-info  text-center text-white"> 
    <div class="card-block">
      <h3>change password</h3>
      <h1 class="display-4"><i class=" fa fa-first-order">2</i></h1>
      <a href="my_account.php?change_pass" class="btn btn-outine-secondary text-white">View </a>
      
    </div>
   </div>
  </div> 

 </div> 
</section>



<div class="text-center text-white bg-primary mt-5 p-5" id="mainfooter">
 <div class="container">
  <div class="row">
   <div class=" col">
    <p class="navbar-brand" >CopyRight &copy HemaBooks</p> 
   </div> 
  </div> 
 </div> 
</div>


</body>
</html>
