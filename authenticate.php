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
		$pass_o=$row
		["password"];
		if(strcmp($Password,$pass_o)==0){
			///sucessful authentication
			setcookie('UserName',$UserName,time()+86400*1);
			echo "Authentication sucessful....<br />";
			echo '<script type="text/javascript"> window.setTimeout(function(){
				window.location = "HomePage.php";
				},1000);

			 </script>';
			 echo "<br /> You will  be redirected to Your Home page in few seconds....";

			//implement other parts of the Interface below
		}
		else{
			echo "Password incorrect<br />";
			print("Click here to <a href=\"LoginPage.php\">Login</a> Again.. <br />");
			die();
		}
	}
	else{
		echo "Account doesnt exist <br />";
		print("Click here to <a href=\"LoginPage.php\">Login</a> Again.. <br />");
		die();
	}
?>
</body>
</html>