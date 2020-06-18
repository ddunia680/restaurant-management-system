<!DOCTYPE html>
<html>
<head>
	<title>order</title>
	<style type="text/css">
		body {
			background-image: url("img/bg2.jpg");
		}
	</style>
</head>
<body>
	<div style="
	border: solid;
    height: 300%;
    border-radius: 10px;
    /*background-image:'img/bg2.jpg';
	">
	<div style="
	width: 15%;
	background-color: lightblue;
	height: 70%;
	border-radius: 10px;
	margin-left: 0.5%;
	">
	<h3 style="padding: 7%; font-family: Cooper Std Black;" align="center">Dunia's Restaurant</h3>
	<table border="0">
		<thead></thead>
		<tbody>
			<tr><td><img style="border-radius: 100px; margin-left: 40px;" src="img/new_logo.png"></td></tr>
			<tr><td><img src=""></td></tr>

			<tr><td><button name="reg" style="background-color: darkblue; color: white; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="Order.php">Register an Order</a></button></td></tr>

			<tr><td><button name="view" style="background-color: lightblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="viewOrders.php">View Orders</a> </button></td></tr>

			<tr><td><button name="chief" style="background-color: lightblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="chiefSide.php">Chief Side</a></button></td></tr>

			<tr><td><button name="createU" style="background-color: lightblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="CreateUser.html">Create User</a></button></td></tr>
		</tbody>
	</table>
		
	</div>
	<div style="
	background-color: darkblue;
	color: white;a
	border: solid;
	margin-top: -500px;
	margin-left: 16%;
	border-radius: 10px;
	margin-bottom: 5%;
	">
	<h1 style="">Get Customer's Order</h1>
<fieldset style="border-radius: 10px; background-color: lightblue; color: darkblue; margin-bottom: 1%;">
	<table cellpadding="10" cellspacing="10" border="0">
		<form method="POST" action="Order.php">
			<thead></thead>
			<tbody>
				<tr>
					<td>User:</td>
					<td><select name="user" required="" style="height: 30px; border-radius: 5px;">
						<option value="">===select user===</option>
						
						<?php
				// step 2: CONNECTING TO THE FORM TO THE DATABASE(MYSQL SERVER) localHost=127.0.0.0.1
$con=@mysqli_connect("localhost","root","") or die(@mysqli_error()); 
//step 3: Select the database to use
$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));
//step 4: write the sql statement
$stat="select * from users";
//step 5: Execute the sql statement
$result=@mysqli_query($con,$stat) or die(@mysqli_error($con));
//step 6: always remeber to close the connection
@mysqli_close($con);

        while ($row=@mysqli_fetch_array($result)) {
        	?>
        	<option value="<?php echo $row[0];?>"><?php echo $row[0]."-->".$row[1]; ?></option>
					
					<?php
            }

		    ?>
		    </select></td>
				</tr>
				<tr><td>Food:</td><td><input type="text" name="food" style="height: 30px; border-radius: 5px;"></td>
					<td>Quantity:</td><td><input type="number" name="quant" style="height: 30px; border-radius: 5px;"></td>
				</tr>
				<tr>
					<td>Added Specifications:</td><td><input type="text" name="specy" style="height: 30px; border-radius: 5px;"></td>
				</tr>
				<tr>
					<td>Amount Payed:</td><td><input type="number" name="amount" style="height: 30px; border-radius: 5px;"></td>
				</tr>
				<tr>
					<td></td><td><button name="btn2" style="background-color: darkblue; color: white; height: 40px; width: 150px; border-radius: 10px;">Order</button></td>
				</tr>
			</tbody>
		</form>
	</table>
</fieldset>
</div>
</div>
</body>
</html>


<?php
if (isset($_POST['btn2'])) {
	$use=$_POST['user'];
	$foo=$_POST['food'];
	$quan=$_POST['quant'];
	$specif=$_POST['specy'];
	$amoun=$_POST['amount'];



$con=@mysqli_connect("localhost","root","") or die(@mysqli_error());

$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));

$stat="insert into orders values(0,'$foo',$quan,'$specif',$amoun,$use)";

$result=@mysqli_query($con, $stat) or die(@mysqli_error($con));

@mysqli_close($con);
	?>
	<script type="text/javascript">
		alert("Order sent to the Chief!")
	</script>
	
	<?php
}
?>