<!DOCTYPE html>
<html>
<head>
	<title>Register New Account</title>
</head>
<body>
<?php 
	$UserName=$_POST["UserName"];
	$Password=$_POST["Password"];
	try{
		$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
		$sta=$conn->prepare("Select * from Users;");
		$sta->execute();
		while ($row = $sta->fetch()) {
			print($row["UserName"] . "\t" . $row["password"]);
		}
		echo "\nDone";
	}
	catch(Exception $e){
		print($e);
	}

?>
<form method="POST" action="Register.php">
	<p>UserName<input type="text" name="UserName"></p>
	<p>Password<input type="password" value=".................." name="Password"></p>
	<p><input type="Submit" name="Submit" value="Create"></p>
</form>

</body>
</html>
