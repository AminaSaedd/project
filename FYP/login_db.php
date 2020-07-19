<?php
include "db.php";

session_start();

#Login script is begin here
#If user given credential matches successfully with the data available in database then we will echo string login_success
#login_success string will go back to called Anonymous funtion $("#login").click() 
if(isset($_POST["address"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["address"]);
	$password = md5($_POST["password"]);
	$sql = "SELECT * FROM users WHERE UserName = '$email' AND Password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	//if user record is available in database then $count will be equal to 1
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["uid"] = $row["User_ID"];
		$_SESSION["name"] = $row["UserName"];
		
			//if user is login from page we will send login_success
			echo "login_success";
			exit();
		}
		else{
			echo "<span style='color:red;'>Please register before login..!</span>";
			exit();
		};
	
}

?>