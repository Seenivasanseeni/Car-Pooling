<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<b> Welcome 
	<?php
		echo "<i>$_COOKIE[UserName] </i></b><br />";
		#if user name is not set 
		if(!isset($_COOKIE["UserName"])){
			echo "You are not signed in ...<br />";
			echo "<a href='LoginPage.php'>Sign in </a>to Continue";
			die();
		}
		//if signed in
		echo "You are sucessfully signed in <br />";
		echo "You are in Ride Confirm  Page";
		$RideId=$_POST["RideId"];
		echo $RideId;
	?>

</body>
<form action="Payment.php" method="POST">
	<input type="text" name="RideId" value="<?php echo $RideId ?>" readonly="">
	<input type="number" name="Amount" value="123" readonly="">
	<input type="submit" name="submit" value="Pay and Continue">
</form>


<br />
<a href="HomePage.php">Home</a>

</html>