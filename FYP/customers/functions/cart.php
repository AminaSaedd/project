<?php session_start(); ?>
<?php include("functions/functions.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<!--/head-->

<body>
<?php include("header.php"); ?>

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>
           <?php
           $add = new addcart();
           $add->cart(); ?>
      <form action="" method="post" enctype="multipart/form-data">
      
        <div class="table-responsive">
   <table class="table table-bordered">
          
          <tr align="center">
            <th>Remove</th>
            <th> pro_id </th>
            <th >Products</th>
              <th >Quantity</th>
              <th >Price </th>
              <th >Total price </th>

          </tr>
          
    <?php 
    $total = 0;
    
  
    
  if(!empty($_SESSION["cart"]))
  {
    $total = 0;
    foreach($_SESSION["cart"] as $keys => $values)
    {
      ?>
            <tr>
              <td> <a " href = "cart.php?action=delete&id=<?php echo $values["product_id"]; ?>">  <input type="button" value=" Delete" style=" background-color:brown; color: white; font-size: 12px ; font-weight: bold; padding: 5px; margin-top: 1px; margin-left: 5px; display: inline-block;"> </a></td>



           <td><?php echo $values["product_id"]; ?> </td>

            <td><?php echo $values["item_name"]; ?> <br>

              <?php echo $values["item_image"]; ?> 
            </td>

            <td>  <a href="cart.php?action=de&id=<?php echo $values["product_id"]; ?>">    <span class="glyphicon glyphicon-minus-sign"></span> </a> </a>
              <input type = "text" name="qty" value="<?php echo $values["item_quantity"]; ?>" class="form-controle" size="1" > 
<a href="cart.php?action=up&id=<?php echo $values["product_id"]; ?>">   <span class="glyphicon glyphicon-plus-sign"></span></a> </a>
             </td>

            <td>$ <?php echo $values["product_price"]; ?></td>
 
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); 



            if( $values["item_quantity"] < 1){

              $values["item_quantity"] +=1;

            }


            ?>
              

            </td>

            <

            </tr>
           

            <?php  

      $total = $total + ($values["item_quantity"] * $values["product_price"]);
    }
    ?>
        <tr>
        <td colspan="5" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
       
        </tr>
        <?php
  }
  ?>  
    <tr align="center">

    

      <td colspan="2"><input type="submit" class="btn btn-warning " name="empty_cart" value=" empty cart"/></td>

            <!--<td colspan=""> <a href='update_cart.php?update=$pro_id'><button>update Cart</button></a> </td> -->

    <td ><a class = "btn btn-success" href = "index.php" > continueshopping</td>

    <td>
      <?php 

         if(!isset($_SESSION['customer_email'])){
          
          
       echo" <a href='' data-toggle='modal' data-target='#checkout_modal' class = 'btn btn-danger'> checkout</a>";
        
        }

        else{

            echo" <a class = 'btn btn-danger' href = 'checkout.php' > checkout </a> ";

        }
 

?> </td>

    </tr>
          
        </table> 
    </div>
      
      </form>
       

         <?php 

    
   


 $add->updatecart();
  
  ?>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
    <br>
    <br>

   <?php include("footer.php");?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php include("customer_login.php"); ?>