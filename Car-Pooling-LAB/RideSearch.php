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
		echo "You are in Ride Search Page";
	?>
<br />
<a href="HomePage.php">Home</a>

<form action="RideSearchStatus.php" method="POST">
	<p>Source<input type="text" name="source" required=""></p>
	<p>Destination<input type="text" name="destination" required=""></p>
	<p><input type="submit" name="submit"></p>
</form>

</body>

</html>