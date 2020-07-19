



<?php

include ('db.php');

//delete a user
$id = $_GET['a_id'];
   $del="DELETE FROM admins WHERE Admin_id='$id'";
 $qr=mysqli_query($con,$del);
 if ($qr) {
 echo "<script>alert('admin user is deleted !!!'); 
window.location='index.php?users'</script>";


}

 // delete book as an admin
 $id = $_GET['bok_id'];
   $del="DELETE FROM books WHERE book_id='$id'";
 $qr=mysqli_query($con,$del);
 echo "<script>alert('book deleted !!!'); 
window.location='index.php?books'</script>";




//update a book
include 'db.php';
if(isset($_POST['upbook'])){
$id = $_GET['bok_id'];
 $book_name = $_POST['name'];
 $category_id= $_POST['category_id'];
 $image= $_POST['image'];
 $price= $_POST['price'];
$update="UPDATE books where  SET book_name=' $book_name',category_id=' $category_id',image=' $image',price'$price'  WHERE book_id='$id'";
if ($update) {
echo "<script>alert(' book is Successfully updated!!!'); window.location='books.php'</script>";
}
else{
	echo "not updated";
}
}
?>
