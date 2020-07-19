
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<?php

session_start();
 ?>







  <?php 
       if(!isset(($_SESSION['check_user']))){
        header("location: login.php"); }
        
        
        
  
  
  ?>
         
<h3><a href="index.php">Go to the Home</a></h3>
     
   <table class="table table-bordered table-striped" style="width:50%; height: 50px ;margin-left: 10%;margin-top: 2%;" >
  <tr>
    <td colspan="10" class="bg bg-success text-center" style="color: white;">
    <h1> <i class="fa fa-database"></i> &nbsp;Your Orders Status</h1></td>
  </tr>
  
   

  <tr>
    <th>customer_email</th>
     
    <th>Status</th>  
    <th>OrderDate</th>  



  
    
  </tr>
  <?php 
  include("db.php");
  
  $get_order = "select status,order_date  from orders order by order_id desc  ";
  
  $run_order = mysqli_query($con, $get_order); 
  
  $i = 0;
  
  while ($row_order=mysqli_fetch_array($run_order)){
    


    //$c_id = $row_order['customer_id'];

    
     $status = $row_order['status'];
       $ordate = $row_order['order_date'];
    $i++;
    $user = $_SESSION['check_user'];
        
     $get_c = "select * from customers where email='$user'";
   // $get_c = "select * from customers where customer_id='$c_id'";
    $run_c = mysqli_query($con, $get_c); 
    
    $row_c=mysqli_fetch_array($run_c); 
    
    $c_email = $row_c['email'];
   //$c_id = $row_c['customer_id'];
   
  ?>
  <tr>
    <td><?php echo $c_email; ?></td>
    
      <td><?php echo $status;?></td>
     <td><?php echo $ordate;?></td>
  </tr>
  <?php } ?>
  
</table>


