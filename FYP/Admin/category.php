

     
     
   <table class="table table-bordered table-striped">
  <tr>
    <td colspan="5" class="bg bg-success text-center" style="color: white;">
    <h1> <i class="fa fa-database"></i> &nbsp;Availbe Categories</h1></td>
  </tr>
  
   

  <tr>

    <th>Category _ID</th>
    <th>Category_Name</th>    
    <th colspan="2">Action</th>
    
  </tr>
  <?php 
  include('db.php');

  $sql="SELECT * FROM cetegories ";
        $query=mysqli_query($con, $sql);
          ?>
        

   <?php
   while($row=mysqli_fetch_array($query)) {?> 
  <tr>
    <td><?php echo $row["category_id"]?></td>
     <td><?php echo $row["name"]?></td>
    
      
    
     
     <td>

<a href="upcat.php?up=<?php echo $row['category_id']; ?>" class="btn btn-success"><i class="fa fa-pencil">Update</i> </a>


    </form> 
      </div>
    
  </div>
</div>     </td>

     <td >
     <a href ="del_cat.php?cat=<?php echo $row['category_id']; ?>" class='btn btn-danger btn-sm' data-toggle='mode' > <span> Delete</span> <i class="fa fa-trash"></i> </a> 
       </i>
     </td>
 
  </tr>
<?php }?>


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
