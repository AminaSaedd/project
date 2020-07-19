



<html>
<head>
<link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
	<title>Shipping Info </title>
</head>
<body>


<div class="container" style="margin-right:-8.5%; margin-top: -3%;">

	<div style="height: 100px;"  ></div>
	<a href="index.php" class="btn btn-danger text-center text-white" style="margin-left: 10%; margin-top: -5.5%">skip  for a delivery</a>
	 <div class="col-md-8 col-md-offset-2" style="border: 1px solid skyblue;">
	 	<div class="panel-heading text-center text-white" style="width: 743px;;margin-left: -2.5%;">
	 		<h1 >Shipping Info <i class="fa fa-truck""></i></h1>
	 	</div>
	 	 <div class="panel-body">
	 	 	<form class="form-horizontal" method="POST" action="ship.php">
	 	 		<div class="form-group">
	 	 			<label class="control-label col-md-2"> Address</label>
	 	 			  <div class="col-md-8">
	 	 			  	<input type="text" name="add" class="form-control" placeholder="enter your Address">
	 	 			  </div>
	 	 		</div>
	 	 		 <div class="form-group">
	 	 		 	<label class="control-label col-md-2" >Location</label>
	 	 		 	  <div class="col-md-8">
	 	 		 	  	<input type="text" name="location" class="form-control" placeholder="enter the location ">
	 	 		 	  </div>
	 	 		 </div>
	 	 		  <div class="form-group">
	 	 		 	<label class="control-label col-md-2" >City</label>
	 	 		 	  <div class="col-md-8">
	 	 		 	  	<input type="text" name="city" class="form-control" placeholder="enter the city ">
	 	 		 	  </div>
	 	 		 </div>
	 	 		  <div class="form-group">
	 	 		 	<label class="control-label col-md-2" >Phone Number</label>
	 	 		 	  <div class="col-md-8">
	 	 		 	  	<input type="text" name="no" class="form-control" placeholder="enter the phone number ">
	 	 		 	  </div>
	 	 		 </div>
	 	 		   <div class="form-group">
	 	 		   	  <button class="btn btn-primary btn-lg text-center"  name="deleiver">Submit the Delivery</button>
	 	 		   </div>
	 	 		    <div></div>
	 	 	</form>
	 	 </div>
	 </div>
</div>
<?php

include("foter.php");
?>
</body>
</html>
