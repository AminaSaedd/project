<?php
include('db.php');


if (isset($_POST['deleiver'])) {
	
	$add = $_POST['add'];
	$location = $_POST['location'];
	$city = $_POST['city'];
	$number = $_POST['no'];

	$update_user = "INSERT INTO `orderdetail`(address,location,city,telphone) VALUES('$add','$location','$city','$number')";
		 
		 $user = mysqli_query($con, $update_user);
		 
		 if($user){
		 
		  echo "<script>alert('the delivery request has  been done successfully !!!'); 
window.location='index.php'</script>";
	
		 
		 
	}
	else{
		echo "not insert " ;
	}
}










?>