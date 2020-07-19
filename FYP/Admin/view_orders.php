<?php

?>
<a href="index.php?delivery"  class="btn btn-success text-center text-white" style="margin-top: -10px">  View Completed Orders </a><br><br>
     
   <table class="table table-bordered table-striped" style="margin-left: -6%">
  <tr>
    <td colspan="10" class="bg bg-info text-center" style="color: white;">
    <h1> <i class="fa fa-database"></i> &nbsp;View All Orders Here</h1></td>
  </tr>
  
   

  <tr>
 <th>order_id</th>
    <th>customer_email</th>
   
    <th>books</th>
    <th>Invoice No</th>
    <th>Order Date</th>  
     
    <th>Status</th>  
 

    <th colspan="4">Action</th>
    
  </tr>
  <?php 
  include("db.php");
  
  $get_order = "select * from orders where status ='pending' order by order_id desc";
  
  $run_order = mysqli_query($con, $get_order); 
  
  $i = 0;
  
  while ($row_order=mysqli_fetch_array($run_order)){
    
    $order_id = $row_order['order_id'];
    $pro_id = $row_order['book_id'];
      $qty = $row_order['qauntity'];
      $pro_name = $row_order['books'];
    $c_id = $row_order['customer_id'];
    $invoice_no = $row_order['invoice'];
    $order_date = $row_order['order_date'];
    $qty = $row_order['qauntity'];
     $status = $row_order['status'];
    $i++;
    
    $get_c = "select * from customers where customer_id='$c_id'";
    $run_c = mysqli_query($con, $get_c); 
    
    $row_c=mysqli_fetch_array($run_c); 
    
    $c_email = $row_c['email'];
  
  ?>
  <tr>
    <td><?php echo  $order_id;?></td>
    <td><?php echo $c_email; ?></td>
    
     
    <td>
    <?php echo $pro_name;?><br>
   
    </td>
   
    <td><?php echo $invoice_no;?></td>
    <td><?php echo $order_date;?></td>
    
      <td><?php echo $status;?></td>
    <td colspan="1"><a href="confirm_delevery.php?delivery=<?php echo $order_id; ?>">Process Order</a></td>
  
  </tr>
  <?php } ?>
  
</table>


