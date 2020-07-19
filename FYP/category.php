<?php  include("functions/functions.php");?>
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
    margin-left:-2%; 
    margin-top: 3%;

  }
.Category_link{
  text-decoration:none;

}
</style>
<?php  include("header.php")?>

<div class="container">
<div class="panel panel-success">
<hr>
  <div class="panel-heading text-center" style="margin-left: 3%;"><h4 style="color:#fff;background-color:#007bff;" ><b>
</b>
<?php

//geeting cotogory name 

if (isset($_GET['id'])) {

  $ID = $_GET['id'];  
  
$check = mysqli_query($con,"SELECT * FROM `cetegories` WHERE category_id='$ID'");
$checkRow = mysqli_fetch_array($check);

  echo$checkRow['1'];

  

}


?>

</h4></div>
  <div class="panel-body">
<?php 
include("db.php");
$id=$_GET['id'];
  $sql="SELECT * FROM books Where category_id = '$id'  ";
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
  <button class="btn btn-primary" name="add" type="submit" style="margin-bottom: -90px;margin-left: -30%; margin-top: 10%;">Add To Cart</button>
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
include('foter.php')?>
