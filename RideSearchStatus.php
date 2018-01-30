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
		echo "You are in Ride Search Status Page";
	?>	

	<table border="">
	<tr>
		<th>RideID</th>
		<th>Source</th>
		<th>Destination</th>
		<th>Select</th>
	</tr>
	<?php
		#this code is for displaying the table
		$source=$_POST["source"];
		$destination=$_POST["destination"];
		echo "$source";
		echo $destination;
		#make a CONNECTION TO A DATABASE
		$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
		$query="Select * from Rides where source = '$source' and destination='$destination' and Status='R'";
		$sta=$conn->prepare($query);
		$sta->execute();
		#echo $query;
		while ($row=$sta->fetch()) {
			echo "<tr>";
				echo "<td>".$row['RideId']."</td>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['destination']."</td>";
				echo "<td>"."<input type='radio' name='ID' value='".$row['RideId']."'>"."</td>";
			echo "</tr>";

		}
	?>
	
	</table>
<br />
<a href="HomePage.php">Home</a>

</body>

</html>