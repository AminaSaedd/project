<?php
if(isset($_GET['action']) && $_GET['action']=="add"){
    $id=intval($_GET['id']);
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']++;
    }else{
        $sql_p="SELECT * FROM products WHERE product_id={$id}";
        $query_p=mysqli_query($con, $sql_p);
        if(mysqli_num_rows($query_p)!=0){
            $row_p=mysqli_fetch_array($query_p);
            $_SESSION['cart'][$row_p['product_id']]=array("quantity" => 1, "price" => $row_p['product_price']);
        }else{
            $message="Product ID is invalid";
        }
    }
}
?>
<h1>Products</h1>
<?php
if(isset($message)){
    echo "<h2>$message</h2>";   
}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Items Price</th>
    </tr>
    <?php
    $query = mysqli_query($con,"SELECT * FROM products WHERE product_category= 'Chicken' ORDER BY product_name ASC");
    while($row=mysqli_fetch_assoc($query)){
    ?>
    <tr>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['product_description']; ?></td>
        <td><?php echo "$" . $row['product_price']; ?></td>
        <td><a href="index.php?page=product&action=add&id=<?php echo $row['product_id']; ?>">Add to Cart</a></td>
    </tr>
    <?php
    }
    ?>
</table>