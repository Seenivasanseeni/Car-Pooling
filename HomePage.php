<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$UserName=$_POST["UserName"];
	$Password=$_POST["Password"];
	$conn=new PDO("mysql:host=localhost;dbname=CarPool","guestPooler","qwerty1234");
	$sta=$conn->prepare("Select * from Users where username like \"$UserName\"");
	$sta->execute();
	if($row=$sta->fetch()){
		$pass_o=$row["password"];
		if(strcmp($Password,$pass_o)==0)
			echo "Welcome $UserName";
		else{
			echo "Password incorrect<br />";
			print("Click here to <a href=\"LoginPage.html\">Login</a> Again.. <br />");
		}
	}
	else{
		echo "Account doesnt exist <br />";
		print("Click here to <a href=\"LoginPage.html\">Login</a> Again.. <br />");
		die();
	}

?>
</body>
</html>