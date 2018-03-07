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
		echo "You are in Your  Home Page";
	?>

	<h5>Choose any of the below</h5>
	<a href="RidePost.php"><h5>1.Post a Ride</h5></a>
	<a href="RideSearch.php"><h5>2.Search a Ride</h5></a>
	<a href="ViewRides.php"><h5>3.View my Rides</h5></a>
	<a href="Logout.php"><h5>4.Logout</h5></a>
</body>

</html>