<?php

session_start();
include("functions/functions.php");
include ("header.php");
//creating local variables 

   $add = new addcart();

          $add->cart(); ?>
<?php 

if(isset($_POST['comp'])){

$num = $_POST['no'];
$tix = $_POST['tix'];


 include("db.php");

    $item = '';
    
    foreach($_SESSION["cart"] as $keys => $values)
    {

            $values["book_name"]; 
        
             $values["book_quantity"] ;


                //$product = '('.$values['item_quantity'].') '.$values['item_name'];
                //$item = $product.', '.$item;

               $title  = array( '('.$values["book_quantity"].') '.$values["book_name"]);

//$title  = array( '('.$row['qty'].') '.$row['items']);
        

          $k = implode(',',$title);

           $item =  $k.', '.$item;
           
       } 
      
      // this is about the customer
     $user = $_SESSION['check_user'];
        
      $get_c = "select * from customers where email='$user'";
        
      $run_c = mysqli_query($con, $get_c); 
        
      $row_c = mysqli_fetch_array($run_c); 
        
      $c_id = $row_c['customer_id'];
      $c_email = $row_c['email'];

     
      $invoice = mt_rand();

      $date = date('m/d/Y');

      
$total=$add->total_price();
    
        
     // inserting the order into table
        $insert_order = "INSERT INTO orders( order_date, books,status, customer_id, price,invoice, customer_email) values ('$date','$item' , 'pending','$c_id','$total','$invoice','$c_email')";
        $run_order = mysqli_query($con, $insert_order); 
        
        //removing the products from cart

        unset($_SESSION["cart"]);

      //
      if($run_order){
      	 $insert_payment = "INSERT INTO payment ( customer_id, amount, phone, tixrac, payment_date) values ('$c_id' ,'$total','$num','$tix','$date')";
        $run_pay = mysqli_query($con, $insert_payment); 
     
       if($run_pay){
       	 echo "<script>alert('order has been sented successfully, Thanks!')</script>";
      
      echo "<script>window.open('shipping.php','_self')</script>";
      
       }
      }
      else{
        echo"";
      }


}
?>
<html>
<head>
<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
	<title>Payment </title>
</head>
<body>


<div class="container" style="margin-right:-8.5%; margin-top: -3%;">
	<div style="height: 100px;"  ></div>
	 <div class="col-md-8 col-md-offset-2" style="border: 1px solid skyblue;">
	 	<div class="panel-heading text-center text-white" style="width: 743px;;margin-left: -2.5%;">
	 		<h1 ><i class="fa fa-paypal"></i>Complete the Payment</h1>
	 	</div>
	 	 <div class="panel-body">
	 	 	<form class="form-horizontal" method="POST">
	 	 		<div class="form-group">
	 	 			<label class="control-label col-md-2">Phone</label>
	 	 			  <div class="col-md-8">
	 	 			  	<input type="text" name="no" class="form-control" placeholder="enter your phone">
	 	 			  </div>
	 	 		</div>
	 	 		 <div class="form-group">
	 	 		 	<label class="control-label col-md-2" >Reference</label>
	 	 		 	  <div class="col-md-8">
	 	 		 	  	<input type="text" name="tix" class="form-control" placeholder="enter the Reference number ">
	 	 		 	  </div>
	 	 		 </div>
	 	 		   <div class="form-group">
	 	 		   	  <button class="btn btn-primary btn-lg text-center"  name="comp">Save</button>
	 	 		   </div>
	 	 		    <div></div>
	 	 	</form>
	 	 </div>
	 </div>
</div>
<?php

include("foter.php");
?>
</body>
</html>
