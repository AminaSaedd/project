
<!DOCTYPE html>
<html lang="en">
<head>
 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="css/bootstrap.css" />    
    <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
      <script src="js/boostrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm   navbar-dark" id="first_header">
  
  <div class="container">
   <button class="navbar-toggler navbar-toggler-right " data-target="#mynav" data-toggle="collapse">
     <span class="navbar-toggler-icon"></span>
   </button> 
   <div class="collapse navbar-collapse" id="mynav">
    <ul class="navbar-nav " id="call">
         <li class="nav-item px-2" style="margin-left: -150px;"><a href="adminindex.php" class="nav-link active"><i class="fa fa-phone"></i><span>customer care</span> <span>+252634337090</span></a></li> 
        <li class="nav-item px-2"><a href="Category.php" class="nav-link active"><i class="fa fa-phone"></i><span>customer care</span> <span>+252634337090</span></a></li> 
        <li class="nav-item px-2"><a href="users.php" class="nav-link active" ;><i class="fa fa-eye"></i>Order Status</a></li>  
<li class="nav-item px-2"><a href="Contact.php" class="nav-link active"> <i class="fa fa-envelope-o "></i>Contact Us</a></li> 
<li class="nav-item">
     <a href="login.php" class="nav-link active" style="margin-left: 360%"><i class="fa fa-sign-in">LogIn</i></a> 
    </li>
      <li class="nav-item">
     <a href="register.php" class="nav-link active" style="margin-left: 430% ;width: 150%;"> <i class="fa fa-user-circle"></i>Join Us</a> 
    </li> 
    
          
   </ul> 
    
   </div>
  </div>
</nav>
</div>
</div>
  <nav class="navbar navbar-expand-sm bg-default navbar-default"  id="search_logo_cart">

  <a class="navbar-brand" href="index.php"><img src="test.png" height="80px;" class="responsive" id="logo"></a>
  
  <div class="col-md-3">
  <form class="navbar-form form-group" role="search" id="serach_form">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search by Keyword/Title/Auther" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit" id="serach_button"><i class="fa  fa-search"></i></button>
      </div>
  
    </div>
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-3 mb-4">
   
   <div id="navbar-cart" class="navbar-collapse collapse float-right" >
            <ul class="nav navbar-nav">
              <li>
               <a href="cart.php"><i class="fa fa-shopping-cart text-white" ></i> 
               <p style=" color:white;">
                <?php $items = new addcart();  $items->total_items();?></p>

                </a>
              </li>
            </ul>
          </div>
          </div>
          <div id="popover_content_wrapper" style="display: none">
        <span id="cart_details"></span>
        <div align="right">
          <a href="#" class="btn btn-primary" id="check_out_cart">
          <span class="glyphicon glyphicon-shopping-cart"></span> Check out
          </a>
          <a href="#" class="btn btn-default" id="clear_cart">
          <span class="glyphicon glyphicon-trash"></span> Clear
          </a>
        </div>
      </div>

  </form>
</nav>


<div id="top-menu-wrap" >
    <div class="container">
    <nav id="navbar" class="navbar-expand-md navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  <span class="">Menu</span>                            
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="my-nav navbar-nav mx-auto">
   
  <li class="nav-item"><a href="index.php" ><i class="fa fa-home"></i>Home</a></li>
  <li class="nav-item"><a href="Category.php?id=6" >Islamic </a></li>
  <li class="nav-item"><a href="Category.php?id=2" >KinderGarten KG</a></li>
<li class="nav-item"><a href="" >Primary </a></li>
<li class="nav-item"><a href="#">Local publications</a></li>
 <li class="nav-item"><a href="#">Secondary</a></li>
<li class="nav-item"><a href="#">General Reading-English</a></li>
<li class="nav-item"><a href="#">General Reading-arabic</a></li>
</ul>                       
</div>                                
</div>           
</nav>   
</div>




  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</body>
</html>
