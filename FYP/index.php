
<?php
session_start();
include_once('functions/functions.php');
include 'db.php'; 

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="css/bootstrap.css" />    
    <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
<style type="text/css">
  .card-img-top{
  
   width:100%;
  height:auto;
 }
 .card{
  width: 250px;
  margin-top: 15%;
 }
  
  @media screen and (max-width:768px) {
img {
    width:100%;
}
.container {
    max-width:100%;
    width: 100%;

}
.col-md-3{
    width:100%;
    
    margin:0;
}
}
  
  .panel{
    width: 100%;
    margin-left:-3%; 
    margin-top: 3%;

  }
.Category_link{
  text-decoration:none;

}
</style>
</head>
<body>

<?php
include 'header.php';

  ?>
 <div id="slider" class="carousel slide" data-ride="carousel" style="margin-left: 8%;width: 70%">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide_4.jpg"  width="1100" height="400">
    </div>
    <div class="carousel-item" >
      <img src="images/slide_3.jpg"  width="1100" height="400">
      
    </div>
      <div class="carousel-item">
      <img src="images/log2.jpg" width="1100" height="400">
      
    </div>
     <div class="carousel-item" >
      <img src="images/slide_6.jpg"  width="1100" height="400">
      
    </div>
     <div class="carousel-item" >
      <img src="images/slide_5.jpg"  width="1100" height="400">
      
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container">
<a href="Reference.php">  <img src="images/shop.jpg" style="margin-left: 87%; margin-top: -38%;"  width="263px" height="415px;"></a>
</div>
<div class="container">
<div class="panel panel-success">
  <div class="panel-heading" style="margin-left: 3%;"><h4 style="color:#fff;background-color:#007bff"><b>Top Sellers</b></h4></div>
  <div class="panel-body">
  
  <?php 
  $sql="SELECT * FROM books LIMIT  12 ";
        $query=mysqli_query($con, $sql);
          ?>
        
       
<div class="row">
   <?php         while($row=mysqli_fetch_array($query)) {?> 
   <div class="col-md-3" style="margin-top:12px;"> 
<form method="post" action="cart.php?action=add&id=<?php echo  $row['book_id']; ?>">
           <div class="card card-inverse card-primary text-center">
<h4 class="card-text">$ <?php echo $row["price"]?></h4>
<img class="card-img-top" src="images/<?php echo $row["image"]?>" alt="Card image cap">
 <div class="card-block">
   <h4 class="card-title"> <?php echo $row["title"]?></h4>
  
  <input type="text" name="qty" value="1" style="text-align:center;color:#666 !important;margin-bottom:80px;width: 40px">
    <input type="hidden" name="book_number" value="<?php echo $row["book_id"]?>">
  <input type="hidden" name="price" value="<?php echo $row["price"]?>">
  <input type="hidden" name="title" value="<?php echo $row["title"]?>">
  <input type ="hidden" name="qty" value ="1" >
  <button class="btn btn-primary" name="add" type="submit" style="margin-bottom: -90px;margin-left: -30%;">Add To Cart</button>
  </form>
 
</div>
 </div>
        


</div>
  <?php      } ?>

</div>
</div>
</div>
</div>

<?php
include 'foter.php';
  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script></script>

</body>
</html>
