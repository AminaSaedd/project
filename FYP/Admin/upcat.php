

<!DOCTYPE html>
<html>
<head>
  <title</title>
  <link rel="stylesheet" href="styles/bootstrap/metro-theme.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel ="stylesheet" href="css/responsive.css" />
      <link rel ="stylesheet" href="css/mycss.css"/>
      <style type="text/css">
        

body{
  background-color: skyblue;
}
form{


  margin-top: 20%;
}

      </style>
</head>
<body>

<?php 

include("db.php");

if(isset($_GET['up'])){

  $get_id = $_GET['up']; 
  
  $get_pro = "select * from cetegories where  category_id='$get_id'";
  
  $run_pro = mysqli_query($con, $get_pro); 
  
  $i = 0;
  
  $row_pro=mysqli_fetch_array($run_pro);
    $id = $row_pro['category_id']; 
    $name = $row_pro['name'];
  
    
    
    
    
}
?>
 <div class=" container" style="margin-top: 5%">
<div class="row">
    <div class="col-lg-3">
       
    </div>
     <div class="col-lg-6">
    <div id="ui">
 
    
    <form class="form-group" id="regis_form" method="POST"  enctype="multipart/form-data" class="bg-info">
     <div class="panel-heading">
   <label id="lblheader"  class="btn btn-primary" style="width: 80%;"><a href="#" class="text-white"><i class=" fa fa-pencil">Update Category</i></a></label></br>
   </div>
<div class="row" style="margin-top: 1%">
<div class="col-lg-6">
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="enter your Name" required="required"  value="<?php echo $name;?>">
    
</div>
<div class="col-lg-6">
<label></label>
</div>
 
</div>
<div class="row" style="margin-top: 2%">
<div class="col-lg-6">
</div>
<div class="col-lg-6">

</div>
</div>

<input type="submit" name="Update_cat" class="form-control btn btn-primary" value="Update User"  >
</form>
</div>
</div>
</div>
</div>


<?php 


  if(isset($_POST['Update_cat'])){
  
    $update_id = $id;
    
  $name = $_POST['name'];

  
     $update_product = "UPDATE `cetegories` SET `name`='$name'WHERE  category_id ='$id'";
     
     $run_product = mysqli_query($con, $update_product);
     
     if($run_product){
     
      echo "<script>alert('A Category  has been updated !!!'); 
window.location='index.php?category'</script>";
  
     
     
  }
}






?>



</body>
</html>