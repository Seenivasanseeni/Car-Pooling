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
		
	?>
</body>
<br />
<h3>You are Logged out Sucessfully</h3>
<b><i>Click Here to <a href="LoginPage.php">Login again</a></i></b>
</html>