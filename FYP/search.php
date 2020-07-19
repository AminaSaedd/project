<?php 

include("db.php");
include("functions/functions.php");
include("header.php");



?>

<div class="container">
<div class="panel panel-success">
  <div class="panel-heading" style="margin-left: 3%; margin-top: 10%;"><h4 style="color:#fff;background-color:#007bff"><b>Top Sellers</b></h4></div>
  <div class="panel-body">
  
  <?php 
 if(isset($_GET['search'])){
	
	$search_query = $_GET['srch-term'];
	
	$get_pro = "select * from books where keywords like '%$search_query%'";

	$run_pro = mysqli_query($con, $get_pro); 
       ?>
<div class="row">
   <?php  while($row_pro=mysqli_fetch_array($run_pro)){

   	$pro_id = $row_pro['book_id'];
		$pro_cat = $row_pro['category_id'];
		$pro_title = $row_pro['title'];
		$pro_price = $row_pro['price'];
		$pro_image = $row_pro['image'];
	?> 
   <div class="col-md-3" style="margin-top:12px;"> 
<form method="post" action="cart.php?action=add&id=<?php echo  $row_pro['book_id']; ?>">
  <div class="card card-inverse card-primary text-center">
<h4 class="card-text">$ <?php echo $row_pro["price"]?></h4>
<img class="card-img-top" src="images/<?php echo $row_pro["image"]?>" alt="Card image cap">
 <div class="card-block">
   <h4 class="card-title"> <?php echo $row_pro["title"]?></h4>
  
  <input type="text" name="qty" value="1" style="text-align:center;color:#666 !important;margin-bottom:80px;width: 40px">
    <input type="hidden" name="book_number" value="<?php echo $row_pro["book_id"]?>">
  <input type="hidden" name="price" value="<?php echo $row_pro["price"]?>">
  <input type="hidden" name="title" value="<?php echo $row_pro["title"]?>">
  <input type ="hidden" name="qty" value ="1" >
  <button class="btn btn-primary" name="add" type="submit" style="margin-bottom: -90px;margin-left: -30%;">Add To Cart</button>

  </form>
 
 
</div>
 </div>
        


</div>
  <?php      


  }
  ?>

</div>
</div>
</div>
</div>

<?php

}





?>
<?php
require_once("foter.php");


?>