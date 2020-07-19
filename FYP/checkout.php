
<?php
session_start();
include("functions/functions.php");

 ?>
<html >

  <section>
    <div class="container">
      <div class="row">
        


    <div class="col-sm-12 padding-right">
         
        <?php 
       if(!isset(($_SESSION['check_user']))){
        header("location: login.php"); }
        else {
        header("location: payment.php");
        } 
        
        
        
  
  
  ?>
         