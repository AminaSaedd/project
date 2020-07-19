
<?php 
session_start();

if(!isset($_SESSION['check_user'])){
  
  echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm  bg-dark navbar-dark">
  
  <div class="container">
   <button class="navbar-toggler navbar-toggler-right " data-target="#mynav" data-toggle="collapse">
     <span class="navbar-toggler-icon"></span>
   </button> 
   <a href="adminindex.php" class="navbar-brand mr-3">HemaBooks</a>
   <div class="collapse navbar-collapse" id="mynav">
    <ul class="navbar-nav">
         <li class="nav-item px-2"><a href="adminindex.php" class="nav-link active" >Dashbord</a></li> 
        <li class="nav-item px-2"><a href="adminindex.php?category" class="nav-link">Category</a></li> 
         <li class="nav-item px-2"><a href="adminindex.php?books" class="nav-link">Books</a></li> 
        <li class="nav-item px-2"><a href="adminindex.php?users" class="nav-link">Users</a></li>    
    </ul> 
   <ul class="navbar-nav">
    <li class="nav-item">
     <a href="LogOut.php" class="nav-link"><i class="fa fa-user-times">LogOut</i></a> 
    </li>
    <li class="nav-item">
     <a href="adminindex.php?payment" class="nav-link"><i class="">Payment Info</i></a> 
    </li>
   </ul> 
   </div>
  </div>
</nav>
<header class="bg-primary py-2 text-white" id="main_header">
  <div class="container">
   <div class="row">
     
    <div class="col-md-6">
     <h1 class=""><i class="fa fa-gear">Dashboard</i></h1> 
    </div> 
   </div> 
  </div>
</header>
<section class="py-4 mb-4 bg-faded" id="sections">
 <div class="container">
  <div class="row">
  <div class="col-md-3">
  <a href="addbook.php" class="btn btn-primary btn-block " data-toggle="modal" data-target="#addbookmodel">
    <i class="fa fa-plus"></i>
    Add Books
  </a> 
    </div>
   <div class="col-md-3">
  <a href="addcat.php" class="btn btn-success btn-block " data-toggle="modal" data-target="#addcategorymodel">
    <i class="fa fa-plus"></i>
    Add Category
  </a> 
    </div> 
    <div class="col-md-3">
  <a href="addbook.php" class="btn btn-warning btn-block " data-toggle="modal" data-target="#addusermodel">
    <i class="fa fa-plus"></i>
    Add Admin
  </a> 
    </div>
     <div class="col-md-3">
  <a href="sales.php" class="btn btn-danger btn-block " data-toggle="modal" data-target="#addusermodel">
 

     Reports
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
   if(isset($_GET['view_orders'])) {
    include ("view_orders.php");
   }
 if(isset($_GET['users'])) {
    include ("users.php");
   }
    if(isset($_GET['books'])) {
    include ("books.php");
   }
   if(isset($_GET['delivery'])) {
    include ("delivery.php");
   }
    if(isset($_GET['submit'])) {
    include ("Report_code.php");
   }
   if(isset($_GET['category'])) {
    include ("category.php");
   }
   if(isset($_GET['update_user'])) {
    include ("update_user.php");
   }
   if(isset($_GET['payment'])) {
    include ("payment.php");
   }

$sql="SELECT COUNT(*) books FROM `books`";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  $sql1="SELECT COUNT(*) categories From `cetegories` ";
  $result1=mysqli_query($con,$sql1);
  $row1=mysqli_fetch_array($result1);

 $sql2="SELECT COUNT(*) admins From `admins` ";
  $result2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_array($result2);
 $sql3="SELECT COUNT(*) orders From `orders` ";
  $result3=mysqli_query($con,$sql3);
  $row3=mysqli_fetch_array($result3);


   ?> 
   </div> 
   <div class="col-md-3">
    <div class="card card-primary mb-3  text-center text-white" style="background-color: #007bff;"> 
    <div class="card-block">
      <h3>Books</h3>
      <h1 class="display-4"><i class=" fa fa-pencil"><?php echo $row['books']; ?></i></h1>
      <a href="adminindex.php?books" class="btn btn-outine-secondary text-white">View</a>
    </div>
   </div>
   <div class="card card-success mb-3  text-center text-white" style="background-color: #28a745;"> 
    <div class="card-block">
      <h3>Category</h3>
      <h1 class="display-4"><i class=" fa fa-pencil"><?php echo $row1['categories']; ?></i></h1>
      <a href="adminindex.php?category" class="btn btn-outine-secondary text-white">View</a>
    </div>
   </div>
   <div class="card card-warning mb-3  text-center text-white" style="background-color: #ffc107;"> 
    <div class="card-block">
      <h3>Admin(S)</h3>
      <h1 class="display-4"><i class=" fa fa-pencil"><?php echo $row2['admins']; ?></i></h1>
      <a href="adminindex.php?users" class="btn btn-outine-secondary text-white">View</a>

    </div>
   </div>
      <div class="card card-info mb-3 bg-info  text-center text-white"> 
    <div class="card-block">
      <h3>Orders</h3>
      <h1 class="display-4"><i class=" fa fa-first-order"><?php echo $row3['orders']; ?></i></h1>
      <a href="adminindex.php?view_orders" class="btn btn-outine-secondary text-white">View </a>
      
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
<!--modal books-->
<div class="modal fade" id="addbookmodel">
 <div class="modal-dialog modal-lg">
 <div class="modal-content">
  <div class="modal-header bg-primary text-white ">
   <h5 class="modal-title">Add Books</h5> 
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
  </div> 
  <div class="modal-body">
   <form method="POST" action="addbook.php"  enctype="multipart/form-data">
    <div class="form-group">
      <label class="form-control-label" for="name">Book_Name</label>
      <input type="text" name="name" class="form-control"> 
     </div>
     <div class="form-group">
      <label class="form-control-label" for="title">title</label>
      <input type="text" name="title" class="form-control"> 
     </div>
      <div class="form-group">
      <label class="form-control-label" for="Category">category</label>
      <input type="text" name="category" class="form-control">
       <label class="form-control-label" for="title">price</label>
      <input type="text" name="price" class="form-control"> 
     </div>
     <div class="form-control">
     <label class="form-control-label" for="file">upload image</label>  
     <input type="file" name="book_image" id="file" class="form-control">
     <small class="form-text">MAX 3MB</small>  
     </div>
   <div class="form-control">
     <label class="form-control-label" for="editor1">Description</label>  
     
    <textarea class="form-control" name="editor1"></textarea>
     </div>  
   
  </div>
  <div class="modal-footer">
   <button class="btn btn-secondary" data-dismiss="modal">close</button> 
   <button class="btn btn-primary" name="savebook">Add Book</button>
   </form> 
  </div>
 </div>
   
 </div> 

</div>
<!--modal category-->
<div class="modal fade" id="addcategorymodel">
 <div class="modal-dialog modal-lg">
 <div class="modal-content">
  <div class="modal-header bg-success text-white ">
   <h5 class="modal-title">Add Category</h5> 
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
  </div> 
  <div class="modal-body">
<form action="addbook.php" method="post">
 <div class="form-group">
  <label class="form-control" for="Category_Name">Category_Name</label>
  <input type="text" name="Category_Name" class="form-control"> 
 </div> 

  </div>
  <div class="modal-footer">
   <button class="btn btn-secondary" data-dismiss="modal">close</button> 
   <button class="btn btn-success" name="add_cat">Add Category</button>
   </form>
  </div>
 </div>
   
 </div> 

</div>
<!-- Add User-->
<div class="modal fade" id="addusermodel">
 <div class="modal-dialog modal-lg">
 <div class="modal-content">
  <div class="modal-header bg-warning text-white ">
   <h5 class="modal-title">Add User</h5> 
  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
  </div> 
  <div class="modal-body">
   <form action="addbook.php" enctype="multipart/form-data" method="post">
  </div>
   <div class="form-group">
   <label class="form-control" for="adminname">AdminName</label> 
   <input type="text" name="adminname" class="form-control">
  </div>
  <div class="form-group">
   <label class="form-control" for="email">Email</label> 
   <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
   <label class="form-control" for="name">Password</label> 
   <input type="password" name="password" class="form-control">
  </div> 
  <div class="modal-footer">
   <button class="btn btn-secondary" data-dismiss="modal">close</button> 
   <button class="btn btn-warning" name="add_user">Add User</button>
     </form> 
  </div>
 </div>
   
 </div> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>
  
 CKEDITOR.replace('editor1') ;
</script>
</body>
</html>
