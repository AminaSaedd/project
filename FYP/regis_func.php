
<?php 
include 'db.php';
?>
<?php
session_start();
if (isset($_POST["fname"])) {
$f_name = $_POST["fname"];
  $l_name = $_POST["lname"];
  $phnumber = $_POST['phnumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['cinfirm_password'];
  $joindate= $_POST['joindate'];
  $cust_image = $_POST['cust_image'];
  $name = "/^[a-zA-Z ]+$/";
  $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
  $number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($phnumber)|| empty($email) || empty($password) || empty($confirm_password) ||
  empty($joindate) || empty($cust_image)){
    
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
      </div>
    ";
    exit();
  } else {
    if(!preg_match($name,$f_name)){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>this $f_name is not valid..!</b>
      </div>
    ";
    exit();
  }
  if(!preg_match($name,$l_name)){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>this $l_name is not valid..!</b>
      </div>
    ";
    exit();
  }
  if(!preg_match($emailValidation,$email)){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>this $email is not valid..!</b>
      </div>
    ";
    exit();
  }
  if(strlen($password) < 9 ){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Password is weak</b>
      </div>
    ";
    exit();
  }
  if(strlen($repassword) < 9 ){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Password is weak</b>
      </div>
    ";
    exit();
  }
  if($password != $repassword){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>password is not same</b>
      </div>
    ";
  }
  if(!preg_match($number,$mobile)){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Mobile number $mobile is not valid</b>
      </div>
    ";
    exit();
  }
  if(!(strlen($mobile) == 10)){
    echo "
      <div class='alert alert-warning'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Mobile number must be 10 digit</b>
      </div>
    ";
    exit();
  }
  //existing email address in our database
  $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
  $check_query = mysqli_query($con,$sql);
  $count_email = mysqli_num_rows($check_query);
  if($count_email > 0){
    echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Email Address is already available Try Another email address</b>
      </div>
    ";
    exit();
  } else {
    $password = md5($password);
    $sql = "INSERT INTO `customers` 
    (`user_id`, `FirstName`, `LastName`, `phone_number`, 
    `email`, `PASSWORD`, `Confirm`, `join_date`,'image') 
    VALUES (NULL, '$f_name', '$l_name', '$phnumber', 
    '$email', '$confirm_password', '$joindate', '$cust_image')";
    $run_query = mysqli_query($con,$sql);
    $_SESSION["uid"] = mysqli_insert_id($con);
    $_SESSION["name"] = $f_name;
    $ip_add = getenv("REMOTE_ADDR");
    $sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
    if(mysqli_query($con,$sql)){
      echo "register_success";
      exit();
    }
   
  }
  }
  
}


?>