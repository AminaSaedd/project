
<?php 
include("db.php");
	

if(isset($_GET['delivery'])){

$id=$_GET['delivery'];



$update_product = "update orders set status = 'complete' Where order_id = $id " ;

		 $run_product = mysqli_query($con, $update_product);
		 
		 if($run_product){
		 
		 echo "<script>alert('book has been process you will get As Soon !')</script>";

header("location:index.php?delivery");
}

 


}
?>
