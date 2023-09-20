<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Payment getway form design in Hindi</title>
	<link rel="stylesheet" type="text/css" href="payment.css">
</head>
<body>
<header>
	<div class="container">
		
		<div class="right">
			<h3>PAYMENT</h3>
			<form method="post">
				<!-- Accepted Card <br>
				<img src="image/card1.png" width="100">
				<img src="image/card2.png" width="50">
				<br><br> -->

				Credit card number
			<input type="text" name="" placeholder="Enter card number">
				
				Exp month
				<input type="text" name="" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="" placeholder="CVV">
					</label>
				</div>
				<input type="submit" name="submit" value="Proceed to Checkout">
			</form>
			
		</div>
	</div>
</header>
</body>
</html>

<?php
	session_start();
	$username=$_SESSION['username'];
	// if($username=="NULL")
	// {
	// 	echo "please login.";
	// }
	
	// else
	// {
    include 'connect.php';
	if(isset($_GET['book_id']))
	{
		$book_id=$_GET['book_id'];
	}
	if(isset($_POST['submit']))
	{
		//echo "entry 1";
		$sql="select * from books where book_id='$book_id'";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			$row=mysqli_fetch_array($result);
			$book_name=$row['book_name'];
			$Ltype=$row['Ltype'];
			$Lname=$row['Lname'];

			$sql="insert into borrow (username, book_name, Ltype, Lname, status) values('$username', '$book_name', '$Ltype', '$Lname', 'pending')";
			$result=mysqli_query($conn,$sql);
			echo "<h2>Order conform</h2>";
			header("location:home.php");
			if(!$result)
			{
				die (mysqli_error($conn));
			}
		}

		else
		{
			die (mysqli_error($conn));
		}

	}
// }

	//else
	//echo "error";

?>