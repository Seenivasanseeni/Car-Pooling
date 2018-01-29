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
		echo "You are in Post Results Page<br />";
		#get source and destination Results
		$UserName=$_COOKIE['UserName'];
		$source=$_POST['source'];
		$destination=$_POST['destination'];
		
		try{
			$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
			echo "Connected<br />";
			$query="Insert into Rides(source,destination,RiderUserName,Status) Values('$source','$destination','$UserName','R');";
			$sta=$conn->prepare($query);
			$sta->execute();
			echo "<br />Sucessfully Posted";	
		}
		catch(Exception $e){
			echo "<br /> Error Happened. Try again Later...";
			die();
		}

	?>

</body>
<br />
<a href="HomePage.php">Home</a>

</html>