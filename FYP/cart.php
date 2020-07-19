<?php session_start(); ?>
<?php include("functions/functions.php");

    include("db.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<!--/head-->
<head>
  <meta charset="utf-8">
   <!-- <link rel="stylesheet" href="styles/bootstrap/metro-theme.css">-->
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include("header.php"); ?>

    <section id="cart_items">
    <div class="bg-primary" style="margin-top: 1%">
    <span style="margin-left: 35%"><i class="text-white fa fa-shopping-cart text-center" style="font-size:25px">Shopping Cart</i></span>
    </div>
           <?php
           $add = new addcart();
           $add->cart(); ?>
      <form action="" method="post" enctype="multipart/form-data">
      
        <div class="table-responsive">
   <table class="table table-bordered">
          
          <tr align="center">
            <th>Remove</th>
            <th> book_id </th>
            <th >Books</th>
              <th >Quantity</th>
              <th >Price </th>
              <th >Total price </th>

          </tr>
          
    <?php  
    $total = 0;
    
  
    
  if(!empty($_SESSION["cart"]))
  {
    $total = 0;
    $n=1;
    foreach($_SESSION["cart"] as $keys => $values)
    {
      ?>
            <tr>
              <td> <a " href = "cart.php?action=delete&id=<?php echo $n; ?>">  <input type="button" value=" Remove" style=" background-color:brown; color: white; font-size: 12px ; font-weight: bold; padding: 5px; margin-top: 1px; margin-left: 5px; display: inline-block;"> </a></td>



           <td><?php echo $values["book_id"]; ?> </td>

            <td><?php echo $values["book_name"]; ?> <br>

            </td>

            <td>  <a href="cart.php?action=de&id=<?php echo $values["book_id"]; ?>">    <span class="glyphicon glyphicon-minus-sign"></span> </a> </a>
              <input type = "text" name="qty" value="<?php echo $values["book_quantity"]; ?>" class="form-controle" size="1" > 
<a href="cart.php?action=up&id=<?php echo $values["book_id"]; ?>">   <span class="glyphicon glyphicon-plus-sign"></span></a> </a>
             </td>

            <td>$<?php echo $values["book_price"]; ?></td>
 
            <td>$ <?php echo number_format($values["book_quantity"] * $values["book_price"], 2); 



            if( $values["book_quantity"] < 1){

              $values["book_quantity"] +=1;

            }


            ?>
              

            </td>

            

            </tr>
           

            <?php  

      $total = $total + ($values["book_quantity"] * $values["book_price"]);
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

    

     <td colspan="2"> <input type="submit" class="btn btn-warning " name="empty_cart" value=" clear cart"/></td>

            <!--<td colspan=""> <a href='update_cart.php?update=$pro_id'><button>update Cart</button></a> </td> -->

    <td ><a class = "btn btn-primary" href = "index.php" > <i class=" fa  fa-arrow-left">continueshopping</i></td>

    <td>
      <?php 


            echo" <a href='checkout.php' > checkout </a> ";


?> </td>

<td colspan="2"></td>

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

<div class="container">
<div style="height: 100px; margin-top: -7%"></div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img  src="images/shop.jpg" alt="" class="img-rounded img-responsive" width="400" height="120px;" / style="margin-left: -10%;">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h3>to complete your orders please pay a bill below numbers<br><i class="fa fa-arrow-down"></i></h3>
                        <hr>
                        <h4>
                           Pay Bill  Merchants</h4>
                        <small><cite title="Hargeisa, SLN">Mobile: 00252-63-3866644 <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="#">Zaad: 406598</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i><a href="#">Edahab: 509081</a></p>
                        <!-- Split button -->
                        <div class="btn-group">
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include ("foter.php");
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
