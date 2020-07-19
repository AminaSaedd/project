<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
	<title></title>
</head>
<body>
<div class="container">
	<div style="height: 100px"></div>
	 <table class="table table-bordered table-striped">
	<tr>
		<td colspan="5" class="bg bg-success text-center" style="color: white;">
		<h1> <i class="fa fa-database"></i> &nbsp;Database </h1></td>
	</tr>
	
	 


	
	<tr>

		<th>Book_ID</th>
		<th>Book_Name</th>		
		<th>Category_Id</th>
		<th>Image</th>
		<th>Price</th>
		<th>Quantity</th>
		
	</tr>
	<?php 
	include('db.php');

  $sql="SELECT * FROM books ";
        $query=mysqli_query($con, $sql);
          ?>
        

   <?php
   while($row=mysqli_fetch_array($query)) {?> 
  <tr>
  	<td><?php echo $row["book_id"]?></td>
  	 <td><?php echo $row["book_name"]?></td>
  	 <td><?php echo $row["category_id"]?></td>
  	 <td><img  src="images/<?php echo $row["image"]?> " width="60" height="50px"></td>
  	   	<td><?php echo $row["price"]?></td>
  </tr>
<?php }?>
</table>
</div>

</body>
</html>