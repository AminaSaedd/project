<?php

include('db.php');

if(isset($_POST['savebook'])){
//insert book to the db
move_uploaded_file($_FILES["book_image"]["tmp_name"],"images/" . $_FILES["book_image"]["name"]);
$img=$_FILES["book_image"]["name"];
$book_name=$_POST['name'];
$book_cat=$_POST['cat'];
$price=$_POST['price'];
$title=$_POST['title'];
$book_desc=$_POST['editor1'];
$insert="INSERT INTO `books`(`category_id`,`book_name`, `price`, `title`,`image`, `description`) VALUES ('$book_cat', '$book_name', '$price','$title', '$img', '$book_desc')";
$query=mysqli_query($con,$insert);
if ($query) {
echo "<script>alert('Successfully book is Added!!!'); 
window.location='index.php?books'</script>";
}

else{
	echo "not inserted";
}
}


if(isset($_POST['add_user'])){
//insert  new admin to the db
$name=$_POST['adminname'];
$email=$_POST['email'];
$pass=$_POST['password'];

$insert="INSERT INTO `admins`( `UserName`, `PASSWORD`, `Admin_Name`) VALUES ( '$name', '$email','$pass')";
$query=mysqli_query($con,$insert);
if ($query) {
echo "<script>alert('Successfully admin is Added in the db!!!'); 
window.location='index.php?users'</script>";
}

else{
	echo "not inserted";
}
}


if(isset($_POST['add_cat'])){
//insert  new Category to the db
$name=$_POST['Category_Name'];
$insert="INSERT INTO `cetegories`( `name`) VALUES('$name')";
$query=mysqli_query($con,$insert);
if ($query) {
echo "<script>alert('Successfully category is Added in the db!!!'); 
window.location='index.php?category'</script>";

}
}

?>