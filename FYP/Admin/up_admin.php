<?php 
include ("db.php");

	if(isset($_POST['upuser'])){
	
		//getting the text data from the fields
		 $sql="SELECT * FROM admins ";
		   $query=mysqli_query($con, $sql);
		   $row_user=mysqli_fetch_array($query);
		
		$admin_id = $row_user['Admin_id'];
		$update_id = $admin_id;

	$name = $_POST['name'];
	$email = $_POST['name'];
	$update_user = "UPDATE `admins` SET UserName ='$name',Admin_Name='$email'  where Admin_id ='$update_id'";
		 
		 $user = mysqli_query($con, $update_user);
		 
		 if($user){
		 
		  echo "<script>alert('user has been updated !!!'); 
window.location='index.php?users'</script>";
	
		 
		 
	}
	else{
		echo "not updated " ;
	}

}






?>
