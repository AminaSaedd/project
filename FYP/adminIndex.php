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
   <a href="#" class="navbar-brand mr-3">Blogen</a>
   <div class="collapse navbar-collapse" id="mynav">
    <ul class="navbar-nav">
         <li class="nav-item px-2"><a href="adminindex.php" class="nav-link active" >Dashbord</a></li> 
        <li class="nav-item px-2"><a href="Category.php" class="nav-link">Category</a></li> 
         <li class="nav-item px-2"><a href="books.php" class="nav-link">Books</a></li> 
        <li class="nav-item px-2"><a href="users.php" class="nav-link">Users</a></li>    
    </ul> 
   <ul class="navbar-nav">
    <li class="item-nav dropdown mr-3">
     <div class="dropdown-menu">
      <a href="profile.php"><i class="fa fa-user-circle">Profile</i></a> <br>
       
     </div>
    </li> 
    <li class="nav-item">
     <a href="login.html" class="nav-link"><i class="fa fa-user-times">LogOut</i></a> 
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
  <a href="#" class="btn btn-primary btn-block " data-toggle="modal" data-target="#addbookmodel">
    <i class="fa fa-plus"></i>
    Add Books
  </a> 
    </div>
   <div class="col-md-3">
  <a href="#" class="btn btn-success btn-block " data-toggle="modal" data-target="#addcategorymodel">
    <i class="fa fa-plus"></i>
    Add Category
  </a> 
    </div> 
    <div class="col-md-3">
  <a href="#" class="btn btn-warning btn-block " data-toggle="modal" data-target="#addusermodel">
    <i class="fa fa-plus"></i>
    Add Users
  </a> 
    </div>
  </div> 
 </div>  
</section>




<section id=" books">
 <div class="container">
  <div class="row">
   <div class="col-md-9">
    <div class="card">
      <div class="card-header">
      <h3 class="text-center ">Hema Online Portal</h3>
     </div>
    </div> 
   </div> 
   <div class="col-md-3">
    <div class="card card-primary mb-3  text-center text-white" style="background-color: #007bff;"> 
    <div class="card-block">
      <h3>Books</h3>
      <h1 class="display-4"><i class=" fa fa-pencil">6</i></h1>
      <a href="books.php" class="btn btn-outine-secondary text-white">View</a>
    </div>
   </div>
   <div class="card card-success mb-3  text-center text-white" style="background-color: #28a745;"> 
    <div class="card-block">
      <h3>Category</h3>
      <h1 class="display-4"><i class=" fa fa-pencil">4</i></h1>
      <a href="books.html" class="btn btn-outine-secondary text-white">View</a>
    </div>
   </div>
   <div class="card card-warning mb-3  text-center text-white" style="background-color: #ffc107;"> 
    <div class="card-block">
      <h3>Users</h3>
      <h1 class="display-4"><i class=" fa fa-pencil">2</i></h1>
      <a href="users.php" class="btn btn-outine-secondary text-white">View</a>
    </div>
   </div>
  </div> 

 </div> 
</section>

<div class="text-center text-white bg-dark mt-5 p-5" id="mainfooter">
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
   <form>
     <div class="form-group">
      <label class="form-control-label" for="title">title</label>
      <input type="text" name="" class="form-control"> 
     </div>
      <div class="form-group">
      <label class="form-control-label" for="Category">category</label>
      <select class="form-control">
        <option>TextBooks</option>
        <option>Islamic books</option> 
        <option>Secondary</option> 
        <option>Primary</option>   
        <option>Kindergarten (KG)</option>
      </select>
     </div>
     <div class="form-control">
     <label class="form-control-label" for="file">upload image</label>  
     <input type="file" name="" id="file" class="form-control">
     <small class="form-text">MAX 3MB</small>  
     </div>
   <div class="form-control">
     <label class="form-control-label" for="file">Description</label>  
     
    <textarea class="form-control" name="editor1"></textarea>
     </div>  
   </form> 
  </div>
  <div class="modal-footer">
   <button class="btn btn-secondary" data-dismiss="modal">close</button> 
   <button class="btn btn-primary">Add Book</button>
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
<form>
 <div class="form-group">
  <label class="form-control" for="title">Title</label>
  <input type="title" name="" class="form-control"> 
 </div> 
</form>
  </div>
  <div class="modal-footer">
   <button class="btn btn-secondary" data-dismiss="modal">close</button> 
   <button class="btn btn-success">Add Category</button>
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
   <form>
  <div class="form-group">
   <label class="form-control" for="name">Name</label> 
   <input type="name" name="name" class="form-control">
  </div>
  <div class="form-group">
   <label class="form-control" for="email">Email</label> 
   <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
   <label class="form-control" for="name">Password</label> 
   <input type="password" name="password" class="form-control">
  </div>
 <div class="form-group">
   <label class="form-control" for="name">Confirm Password</label> 
   <input type="password" name="cpwd" class="form-control">
  </div> 
   </form> 
  </div>
  <div class="modal-footer">
   <button class="btn btn-secondary" data-dismiss="modal">close</button> 
   <button class="btn btn-warning">Add User</button>
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
