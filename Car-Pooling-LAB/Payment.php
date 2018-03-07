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
		echo "You are in  Payment  Page";
		$UserName=$_COOKIE["UserName"];
		$RideId=$_POST["RideId"];
		$Amount=$_POST["Amount"];
		$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
		$query1="Update Rides set Status='A',AccompanierUserName='$UserName' where RideID='$RideId'";
		$sta=$conn->prepare($query1);
		$sta->execute();

		$query2="Insert into Payments(RideID,Amount) values($RideId,$Amount)";
		$sta=$conn->prepare($query2);
		$sta->execute();
		echo "<br />Payment Done Sucessfully";
		echo "<br /> Your Ride Info will be displayed in the  View Rides Page";

	?>

</body>


<br />
<a href="HomePage.php">Home</a>

</html>