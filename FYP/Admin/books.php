
   <table class="table table-bordered table-striped">
  <tr>
    <td colspan="6" class="bg bg-primary text-center" style="color: white;">
    <h1> <i class="fa fa-database"></i> &nbsp;Book Detail </h1></td>
  </tr>
  
   



  
  <tr>

    <th>Book_ID</th>
    <th>Book_Name</th>    
    <th>Category_Id</th>
    <th>Image</th>
    <th>Price</th>
    <th>Action</th>
    
  </tr>
  <?php 
  include('db.php');

  $sql="SELECT * FROM books ";
        $query=mysqli_query($con, $sql);
          ?>

   <?php
   while($row=mysqli_fetch_array($query)) {?> 
  <tr>
    <td><?php echo $row["book_id"]?></td>
     <td><?php echo $row["book_name"]?></td>
     <td><?php echo $row["category_id"]?></td>
     <td><img  src="images/<?php echo $row["image"]?> " width="60" height="50px"></td>
        <td><?php echo $row["price"]?></td>
        <td colspan="2">
        <a href="Update.php?up_book=<?php echo $row['book_id']; ?>" class="btn btn-primary"><i class="fa fa-pencil">Update</i> </a>
        <a href="crud.php?bok_id=<?php echo $row['book_id']; ?>" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
  
        </td>
 
  </tr>
<?php } ?>
        <!-- Modal -->

</table>

  
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>
  
 CKEDITOR.replace('editor1') ;
</script>



</body>
</html>
