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
		echo "You are in View Rides Page";
	?>	

	<table border="">
	<tr>
		<th>RideID</th>
		<th>Source</th>
		<th>Destination</th>
		<th>Accompanier</th>
		<th>Rider</th>
		<th>Status</th>
	</tr>
	<?php
		$UserName=$_COOKIE["UserName"];
		#this code is for displaying the table
		#make a CONNECTION TO A DATABASE
		$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
		$query="Select * from Rides where AccompanierUserName='$UserName' or RiderUserName= '$UserName'";
		$sta=$conn->prepare($query);
		$sta->execute();
		#echo $query;
		while ($row=$sta->fetch()) {
			echo "<tr>";
				echo "<td>".$row['RideId']."</td>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['destination']."</td>";
				echo "<td>".$row['AccompanierUserName']."</td>";
				echo "<td>".$row['RiderUserName']."</td>";
				echo "<td>".$row['Status']."</td>";
				
			echo "</tr>";

		}
	?>
	
	</table>
<br />
<a href="HomePage.php">Home</a>

</body>

</html>