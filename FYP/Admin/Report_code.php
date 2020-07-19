<?php 

include_once("db.php");





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="window.print();" onclick="window.clos();" >



<table width="100%" border="1" cellpadding="5" cellspacing="0">
<a href="index.php">Back to The DashBord</a>
			<tr>
				<td colspan="2" align="center" style="font-size:18px"><b>Invoice</b>
				<h1>Hema Books</h1>
</td>
			</tr>
			<tr>
				<td colspan="2">
				<table width="100%" cellpadding="5">
					<tr>
						<td width="65%">
							To,<br />
							<b>RECEIVER (BILL TO)</b><br />
	
						
						</td>
						<td width="35%">
							Reverse Charge<br />
							Invoice No. : <?php   ?><br />
							Invoice Date : <?php  echo $Date = date('d/m/y');  ?><br />
						</td>
					</tr>
				</table>
				<br />
				<table width="100%" border="1" cellpadding="3" cellspacing="0">
					<tr>
						<th rowspan="2">Transaction No.</th>
						<th rowspan="2">Order_date</th>
						<th rowspan="2">Book(S)</th>
						<th rowspan="2">Status</th>
						<th rowspan="2">customer_ID.</th>
						<th colspan="1">Price</th>
						<th colspan="1">Invoice</th>
						<th rowspan="2">Total</th>
					</tr>
					<tr>
					
<?php


if (isset($_POST['submit'])) {
	

$ss = $_POST['ID'];


$sql = mysqli_query($con,"SELECT * FROM `orders` WHERE order_id='$ss'");
while ($row = mysqli_fetch_array($sql)) {

	
$id = $row['order_id'];
$order_date = $row['order_date'];

$books = $row['books'];
$status = $row['status'];

$customer_id = $row['customer_id'];
$price = $row['price'];
$invoice = $row['invoice'];



?>

					</tr>
		
				<tr>
					<td><?php  echo$row['0']; ?></td>
					<td><?php echo$row['1']; ?></td>
					<td><?php echo$row['2']; ?></td>
					<td aling="right"><?php echo$row['3']; ?></td>
					<td align="right"><?php echo$row['4']; ?></td>
					<td><?php echo$row['5']; ?></td>
					<td align="right"><?php echo$row['6']; ?></td>
					<td align="right"><?php echo$row['5']; ?></td>
				</tr>
			
		
			<?php }} ?>
	
	
						</table>
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<p align="right">----------------------------------------<br />Receiver Signature</p>
						<br />
						<br />
						<br />
					</td>
				</tr>
</table>

</body>
</html>