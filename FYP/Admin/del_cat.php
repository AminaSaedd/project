<?php
include('db.php');

$cat_id=$_GET['cat'];
 $del2="DELETE FROM cetegories WHERE category_id='$cat_id'";
$qr2=mysqli_query($con,$del2);
  if ($qr2) {
 echo "<script>alert('category  is deleted !!!'); 
window.location='index.php?category'</script>";



}
else{
	echo "some error is accured";
}

?>