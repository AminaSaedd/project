<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<select name="cat">
<?php 	

include'db.php';



$ss = mysqli_query($con,"SELECT * FROM `cetegories`");
while ($rr = mysqli_fetch_array($ss)) {



 ?>
	<option  value="<?php 	echo$rr['1']; ?>"><?php 	echo$rr['1']; ?></option>
	<?php 	} ?>
</select>
</body>
</html>