<?php
include_once('functions/functions.php');

include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact US</title>
  <link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
</head>
<body>

<?php


if (isset($_POST["register"])) {
 $fn = $_POST['fname'];
$phn = $_POST['phnumber'];
$email = $_POST['email'];
$sms = $_POST['sms'];

$sql="INSERT INTO `feed_back`(`Name`, `email`, `phone`, `message`) VALUES('$fn',  '$phn', '$email', '$sms')";
if(!mysqli_query($con, $sql)){ 
  echo "not inserted";
}
else{
  

}
}


mysqli_close($con);




?>
 <div class=" container" style="margin-top: 5%">
<div class="row">
    <div class="col-lg-3">
       
    </div>
     <div class="col-lg-6">
    <div id="ui">
 
    
    <form class="form-group" id="regis_form" method="POST" action="contact.php" enctype="multipart/form-data" class="bg-info">
     <div class="panel-heading">
   <label id="lblheader" >Contacts us</label></br>
   </div>
<div class="row" style="margin-top: 1%">
<div class="col-lg-6">
<label>Name</label>
<input type="text" name="fname" class="form-control" placeholder="enter your Name" required="required">
    
</div>
<div class="col-lg-6">
<label>Email</label>
<input type="text" name="email" class="form-control" placeholder="eneter your Email" required="required">
</div>
 
</div>
<div class="row" style="margin-top: 2%">
<div class="col-lg-6">
<label>PhoneNumber</label>
<input type="text" name="phnumber" class="form-control" placeholder="enter your number" required="required">
    
</div>
<div class="col-lg-6">
<label style="margin-left:40% ">Message</label>
<input type="text" name="sms" class="form-control" placeholder="Leave a Message" style="height:125px" required="required">

</div>
</div>

<input type="submit" name="register" class="form-control btn btn-info" value="Send" role="submit" id="regis_cost" >
</form>
</div>
</div>
</div>
</div>

<?php include('foter.php');?>
</body>
</html>