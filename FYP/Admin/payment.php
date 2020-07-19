<?php

?>

     
   <table class="table table-bordered table-striped" style="margin-left: -6%">
  <tr>
    <td colspan="10" class="bg bg-primary text-center" style="color: white;">
    <h1> <i class="fa fa-database"></i> &nbsp;View All Payment Info Here</h1></td>
  </tr>
  
   

  <tr>
 <th>payment_id</th>
  <th>customer_id</th>
    <th>Amount</th>
   
    <th>Cus.Phone</th>
    <th>Reference</th>
    <th>payment Date</th>  
    
  </tr>
  <?php 
  include("db.php");
  
  $get_order = "select * from payment  order by payment_id desc";
  
  $run_order = mysqli_query($con, $get_order); 
  
  $i = 0;
  
  while ($row_order=mysqli_fetch_array($run_order)){
    
    $pay_id = $row_order['payment_id'];
    $cus_id = $row_order['customer_id'];
      $amount = $row_order['amount'];
      $c_phone = $row_order['phone'];
    $ref = $row_order['tixrac'];
    $pay_date = $row_order['payment_date'];
    
  
  
  ?>
  <tr>
    <td><?php echo  $pay_id;?></td>
    <td><?php echo $cus_id; ?></td>
    
     
    <td>
    <?php echo $amount;?><br>
   
    </td>
   
    <td><?php echo $c_phone;?></td>
    <td><?php echo $ref;?></td>
    
      <td><?php echo $pay_date;?></td>
    
  
  </tr>
  <?php } ?>
  
</table>


