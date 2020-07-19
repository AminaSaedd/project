 <?php
include 'db.php';
?>
<?php
$fname = "";
$lname = "";
$errors = array();


//if register button is clickeds
if (isset($_POST['register'])) {
$fname=mysql_real_escape_string($_POST('fname'));
$lname=mysql_real_escape_string($_POST['lname']);
$phone_number=mysql_real_escape_string($_POST['phnumber']);
$email=mysql_real_escape_string($_POST['email']);
$password=mysql_real_escape_string($_POST['password']);
$confirm_password=mysql_real_escape_string($_POST['confirm_password']);
$joindate=mysql_real_escape_string($_POST['joindate']);
//$customer_profile=mysql_real_escape_string($_POST('image'));
if (empty($fname)) {
 array_push($errors, 'your first_name is required');
}
if (empty($lname)) {
 array_push($errors, 'your last_name is required');
}
if (empty($phone_number)) {
 array_push($errors, 'your phone_number is required');
}
if (empty($email)) {
 array_push($errors, 'your email is required');
}
if (empty($password)) {
 array_push($errors, 'your password is required');
}
if ($password!= $confirm_password) {
 array_push($errors, 'your password is not match');

}
if (count($errors == 0)) {
$pas=md5($password);//encrypt the password before storing the database
$sql=" INSERT INTO customers (FirstName,LastName,phone_number,email,PASSWORD,Confirm,join_date) VALUES('$fname', '$lname', '$phone_number', '$email', '$password', '$confirm_password', '$joindate')";
if(!mysqli_query($con, $sql)){ 
  echo "not inserted";
}
else{
  echo "one row  is inserteds";
}
}

}


?>