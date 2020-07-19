
<!DOCTYPE>

<?php 

include("db.php");

if(isset($_GET['up_book'])){

	$get_id = $_GET['up_book']; 
	
	$get_pro = "select * from books where book_id='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
		$pro_id = $row_pro['book_id'];
		$pro_title = $row_pro['title'];
		$pro_image = $row_pro['image'];
		$pro_price = $row_pro['price'];
		$pro_desc = $row_pro['description']; 
		$pro_keywords = $row_pro['keywords']; 
		$pro_cat = $row_pro['category_id'];
		
		
		
		
}
?>
<html>
	<head>
		<title>Update Books</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="#808070">


	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#C0C0C0" style="margin-top: 7%">
			
			<tr align="center">
				<td colspan="7"><h2>Edit & Update Book</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Title:</b></td>
				<td><input type="text" name="title" size="60" value="<?php echo $pro_title;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>book Category:</b></td>
				<td>
				<select name="product_cat" >
					<option><?php echo $pro_cat; ?></option>
					<?php 
		$get_cats = "select * from categories";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['category_id']; 
		$cat_title = $row_cats['name'];
	
		echo "<option value='$category_id'>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
		
			<tr>
				<td align="right"><b>book Image:</b></td>
				<td><input type="file" name="image" /><img src="images/<?php echo $pro_image; ?>" width="60" height="60"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="price" value="<?php echo $pro_price;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="description" cols="20" rows="10"><?php echo $pro_desc;?></textarea></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="keywords" size="50" value="<?php echo $pro_keywords;?>"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_book" value="Update book"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 


	if(isset($_POST['update_book'])){
	
		//getting the text data from the fields
		
		$update_id = $pro_id;
		
	$product_title = $_POST['title'];
	//$product_cat= $_POST['category_id'];
	
		$product_price = $_POST['price'];
		$product_desc = $_POST['description'];
		$product_keywords = $_POST['keywords'];
	
		//getting the image from the field
		$product_image = $_FILES['image']['name'];
		$product_image_tmp = $_FILES['image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"images/$product_image");
	
		 $update_product = "update books set title='$product_title',price='$product_price',description='$product_desc',image='$product_image', keywords='$product_keywords' where book_id='$update_id'";
		 
		 $run_product = mysqli_query($con, $update_product);
		 
		 if($run_product){
		 
		  echo "<script>alert('book has been updated !!!'); 
window.location='index.php?books'</script>";
	
		 
		 
	}

}






?>












