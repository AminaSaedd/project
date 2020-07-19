
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
 if(isset($_GET['overview'])) {
    include ("overview.php");
   }
 if(isset($_GET['missioin'])) {
    include ("missioin.php");
   }

 if(isset($_GET['operate'])) {
    include ("operate.php");
   }

?>

<?php include("foter.php")?>
</body>
</html>