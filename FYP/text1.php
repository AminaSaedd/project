<?php

include 'db.php'; 
  ?>

<!DOCTYPE html>
<html>
<head>
	<head>
  <title>Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="css/bootstrap.css" />    
    <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/style.css"/>
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
    float:left;
    margin:0;
}
}
  
  .panel{
    width: 100%;
    margin-left:-4%; 
    background-color: #ccc;
  }

      </style>
</head>
</head>
<body>
<div class="container">
<div class="row">
<?php 

$sql="select * from books";
 $result=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result))
 {
$pro_title = $row['title'];
      $pro_price = $row['price'];
      $pro_image = $row['image'];
 	?>

<div class="col-md-3">
 <div class='card card-inverse card-primary text-center'>
 <h4 class='card-text'>$<?php echo $pro_price ;?></h4>
<a href=''><img class='card-img-top' src='images/<?php echo $pro_image ;?>' alt='Card image cap'></a>
 <div class='card-block'>
<h4 class='card-title'><?php echo $pro_title ;?></h4>
<form method='post' action="">
    QTY <input type="text" name="qty" value="1" style="text-align:center;color:#666 !important;margin-bottom:80px;width: 40px">
  <input type="hidden" name="book_number" value="">
  <input type="hidden" name="price" value="">
  <input type="hidden" name="title" value="">
  <button class="btn btn-primary" type="submit" style="margin-bottom: -90px;margin-left: -30%;">Add To Cart</button>
  </form>
</div>
</div>
</div>
<?php } ?>
</div>
</body>
</html>