<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation using PHP/MySQLi with DataTable and PDF Generator using TCPDF</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

	<style >

.pbutton{
	 background-color: teal;
  
    color: white;
    padding: 5px 14px;
    text-align: center;
  
    display: inline-block;
    font-size: 16px;
    margin:0 auto;
    font-weight: bold;
    margin-left: 5px;
}
.pbutton:hover{
	background-color: lightsteelblue;
	
}

.dbutton{
	 background-color: darkmagenta;
  
    color: white;
    padding: 5px 15px;
    text-align: center;
  
    display: inline-block; 
    font-size: 16px;
    font-weight: bold;
    margin:0 auto;
    margin-left: 5px;
}

.dbutton:hover{
	background-color: mediumorchid;
	LightSteelBlue
}

.cbutton{
	 background-color: crimson;
  
    color: white;
    padding: 5px 15px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    margin:0 auto;
    margin-left: 5px;
}
.cbutton:hover{
	background-color: indianred;
}


 tr{

	
	text-align: center;
	border: 1px solid white;

}

td {

	border: 1px solid white ;
	width: auto;


}

th{
	background-color: skyblue;
	border: 1px solid white;

}


</style>

</head>
<body>
<div class="container-fluid">
	<h1 class="page-header text-center">Delivery orders detial </h1>
	
		
			
				
			<?php
			include("db.php");
				$q_p = $con->query("SELECT COUNT(*) as total FROM `orders` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $con->query("SELECT COUNT(*) as total FROM `orders` WHERE `status` = 'delivery'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			

    <a   href = "index.php?view_orders"><span  <?php echo $f_p['total']?>></span> <input type = "button"  value = "Pendings" class = "pbutton" ></a>

		<a   >  <span  <?php echo $f_ci ['total']?>>
			
		</span> <input type = "button"  value = "Process to delivery" class = "dbutton" > </a>
		<a  href = "#"><input type = "button"  value = "completed orders" class = "cbutton" ></a>

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</div>

	<br />
		<br />
		
		<div class="table-responsive">
			
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<tr >
		<th>S.N</th>
		<th>c_Name</th>
		<th>Product (S)</th>
		<th>Invoice No</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include("db.php");
							$sql = "SELECT * FROM orders where status = 'delivery' ORDER by order_id Desc";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['order_id']."</td>
									<td>".$row['c_name']."</td>
									<td>".$row['item']."</td>
									<td>".$row['invoice_no']."</td>
									<td>
										<a href='#' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Piad</a>
										<a href='deliver_delete.php?delete_deliver=".$row['order_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			
</div>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
   $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});


</script>
<script>
$(document).ready(function() {
    
} );
</script>
<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script src=" https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src=" https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js
"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js
"></script>

<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src=" https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js "></script>

<!--
<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src=" https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src=" https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src=" https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script> -->
</body>
</html>