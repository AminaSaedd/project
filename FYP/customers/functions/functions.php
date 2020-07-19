<?php 


// After uploading to online server, change this connection accordingly
// $con = mysqli_connect("localhost","root","","test_project");

// if (mysqli_connect_errno())
//   {
//   echo "The Connection was not established: " . mysqli_connect_error();
//   }
 // getting the user IP address
  function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

/*
$ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
 */

 // getting the total added items


  class addcart{
  	 function cart(){

if(isset($_POST["add"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{



			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["title"],
			'product_price' => $_POST["price"],
			'item_quantity' => $_POST["qty"]
			
			);
			
			 
        array_unshift($_SESSION['cart'],$item_array); 

			echo '<script>window.location="index.php"</script>';
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="index.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'product_id' => $_GET["id"],
		'item_name' => $_POST["title"],
		'product_price' => $_POST["price"],
		'item_quantity' => $_POST["qty"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}

/* if(isset($_GET["up"]))
{


foreach($_SESSION['cart'] as $keys => $values)
{
    if($_GET['proid'] == $values['product_id']) {
    	$_SESSION['cart'][$values['product_id']]['item_quantity'] += 1;
        
}


    
} 
} */

if(isset($_GET["action"]))
{
	if($_GET["action"] == "up")

	{
			$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(in_array($_GET["id"], $item_array_id))
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"]){
            //$item_quanty = $_POST["quan"];
			$_SESSION["cart"][$keys] ['item_quantity'] +=1;
			//$_SESSION['cart'][$_GET["id"]][$keys]['item_quantity'] = 2;
       // $_SESSION['cart'][$_GET["id"]]['item_quantity'] = 2;
				
				echo '<script>window.location="cart.php"</script>';
			}
			
		}
	}


}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "de")

	{
			$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(in_array($_GET["id"], $item_array_id))
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"] && $values["item_quantity"] > 1){
            //$item_quanty = $_POST["quan"];
			$_SESSION["cart"][$keys] ['item_quantity'] -=1; 

			echo '<script>window.location="cart.php"</script>';
			 }
			//$_SESSION['cart'][$_GET["id"]][$keys]['item_quantity'] = 2;
       // $_SESSION['cart'][$_GET["id"]]['item_quantity'] = 2;
				
			
		}
	}


}




if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"])


			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}



}

	
	

}
 function updatecart(){
    
    
    
    if(isset($_POST['empty_cart'])){
        foreach($_SESSION["cart"] as $keys => $values)
    {
        unset($_SESSION["cart"][$keys]);
    echo "<script>window.open('cart.php','_self')</script>";
    
    }
    }
  }
  
   function total_items(){
 
	

		$total = 0;
	
	if(isset($_SESSION['cart']) && is_array($_SESSION['cart']))
	{ //change this line
     $totalquantity = 0;

      $totalquantity= count($_SESSION['cart']);
	}

     else{
     $totalquantity = 0;
     }

     echo $totalquantity ;

        
		

//echo  $gtotal;
	
}

  
// Getting the total price of the items in the cart 
	
	function total_price(){

		

		$total = 0;
	
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			

            $values["product_id"]; 

            $values["item_name"]; 

            	 $values["item_image"]; 

             $values["item_quantity"] ;

            $values["product_price"]; 

        $values["item_quantity"] ;

         $values["product_price"]; 

           
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
}
		}	 
else{
    $total=0;
    
}

		

echo "$", $total;

return $total;
	}
	

  }


  
  function getCats(){
	
	global $con; 
	
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
	echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
	
	
	}


}

//getting the brands

function getBrands(){
	
	global $con; 
	
	$get_brands = "select * from brands";
	
	$run_brands = mysqli_query($con, $get_brands);
	
	while ($row_brands=mysqli_fetch_array($run_brands)){
	
		$brand_id = $row_brands['brand_id']; 
		$brand_title = $row_brands['brand_title'];
	
	echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
	
	
	}
}
//creating the shopping cart

class products
{

function getlatestPro(){
	


	global $con; 

$query = "SELECT * from products order by RAND()  LIMIT 0,10 ";

	$result = mysqli_query($con, $query); 
	if(mysqli_num_rows($result) > 0)
	{
		while($row_pro=mysqli_fetch_array($result)){
		$pro_id	= $row_pro['product_id'];
		
		 $pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		
			?>


            <form method="post" action="cart.php?action=add&id=<?php echo  $pro_id; ?>">

      <?php      echo "
      
				<div id='single_product'>
				 
					<h3>$pro_title</h3>
					
					<a href='details.php?pro_id=$pro_id' > <img src='admin/product_images/$pro_image' width='180' height='180' /> </a>

					
					
					<p><b> Price: $ $pro_price </b></p>
					
					
		
		";

		?>



            <input type="hidden" name="hidden_name" value="<?php echo $pro_title; ?>">

            <input type="hidden" name="hidden_image" value="<?php echo "<img src='admin/product_images/$pro_image' width='150' height='200' />" ; ?>">

            <input type="hidden" name="hidden_price" value="<?php echo $pro_price ; ?>">
           <input type="hidden" name = "quantity" value = "1">
            <button type="submit" name="add" class="btn btn-info cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
            
            </form>

            </div>
            <?php
		
}
}
	

}

function getallPro(){
	

if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){

	global $con; 

$query = "SELECT * from products order by RAND() ";

	$result = mysqli_query($con, $query); 
	if(mysqli_num_rows($result) > 0)
	{
		while($row_pro=mysqli_fetch_array($result)){
		$pro_id	= $row_pro['product_id'];
		
		 $pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		
			?>


            <form method="post" action="cart.php?action=add&id=<?php echo  $pro_id; ?>">

      <?php      echo "
      
				<div id='multi_product'>
				
					<h3>$pro_title</h3>
					
					<a href='details.php?pro_id=$pro_id' > <img src='admin/product_images/$pro_image' width='180' height='180' /> </a>

					
					
					<p><b> Price: $ $pro_price </b></p>
					
					
		
		";

		?>



            <input type="hidden" name="hidden_name" value="<?php echo $pro_title; ?>">

            <input type="hidden" name="hidden_image" value="<?php echo "<img src='admin/product_images/$pro_image' width='150' height='200' />" ; ?>">

            <input type="hidden" name="hidden_price" value="<?php echo $pro_price ; ?>">
           <input type="hidden" name = "quantity" value = "1">
            <button type="submit" name="add" class="btn btn-info cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
            
            </form>

            </div>
            <?php
		}
	}
}
}
	

}


function getCatPro(){

	if(isset($_GET['cat'])){
		
		$cat_id = $_GET['cat'];

	global $con; 
	
	$get_cat_pro = "select * from products where product_cat='$cat_id'";

	$run_cat_pro = mysqli_query($con, $get_cat_pro); 
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	
	if($count_cats==0){
	
	echo "<h2 style='padding:20px;'>No products where found in this category!</h2>";
	
	}
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
	
		$pro_id = $row_cat_pro['product_id'];
		$pro_cat = $row_cat_pro['product_cat'];
		$pro_brand = $row_cat_pro['product_brand'];
		$pro_title = $row_cat_pro['product_title'];
		$pro_price = $row_cat_pro['product_price'];
		$pro_image = $row_cat_pro['product_image'];
	
	?>
		<form method="post" action="cart.php?action=add&id=<?php echo  $pro_id; ?>">

      <?php      echo "
				<div id='multi_product'>
				
					<h3>$pro_title</h3>
					
					<a href='details.php?pro_id=$pro_id' > <img src='admin/product_images/$pro_image' width='180' height='180' /> </a>
					
					<p><b> Price: $ $pro_price </b></p>
					
					
					
				
		";

		?>
			<input type="hidden" name="hidden_name" value="<?php echo $pro_title; ?>">

            <input type="hidden" name="hidden_image" value="<?php echo "<img src='admin/product_images/$pro_image' width='180' height='180' />" ; ?>">

            <input type="hidden" name="hidden_price" value="<?php echo $pro_price ; ?>">
            <input type="hidden" name="quantity"  value="1" >
         <button type="submit" name="add" class="btn btn-info cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
            
            </form>

            </div>
            <?php
		}
	}

}


function getBrandPro(){

	if(isset($_GET['brand'])){
		
		$brand_id = $_GET['brand'];

	global $con; 
	
	$get_brand_pro = "select * from products where product_brand='$brand_id'";

	$run_brand_pro = mysqli_query($con, $get_brand_pro); 
	
	$count_brands = mysqli_num_rows($run_brand_pro);
	
	if($count_brands==0){
	
	echo "<h2 style='padding:20px;'>No products where found associated with this brand!!</h2>";
	
	}
	
	while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
	
		$pro_id = $row_brand_pro['product_id'];
		$pro_cat = $row_brand_pro['product_cat'];
		$pro_brand = $row_brand_pro['product_brand'];
		$pro_title = $row_brand_pro['product_title'];
		$pro_price = $row_brand_pro['product_price'];
		$pro_image = $row_brand_pro['product_image'];
		?>
	
		<form method="post" action="cart.php?action=add&id=<?php echo  $pro_id; ?>">

      <?php      echo "
				<div id='multi_product'>
				
					<h3>$pro_title</h3>
					
				<a href='details.php?pro_id=$pro_id'	<img src='admin/product_images/$pro_image' width='180' height='180' /> </a>
					
					<p><b> Price: $ $pro_price </b></p>
					
					 
					
				
		";

		?>
			<input type="hidden" name="hidden_name" value="<?php echo $pro_title; ?>">

            <input type="hidden" name="hidden_image" value="<?php echo "<img src='admin/product_images/$pro_image' width='180' height='180' />" ; ?>">

            <input type="hidden" name="hidden_price" value="<?php echo $pro_price ; ?>">
            <input type="hidden" name="quantity"  value="1" >
           <button type="submit" name="add" class="btn btn-info cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
            
            </form>

            </div>
            <?php
		}
	}

}








}

?>